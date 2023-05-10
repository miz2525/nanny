<?php

namespace App\Http\Traits;

use App\Models\CarGetQuote;
use App\Models\CarGetQuoteManual;
use App\Models\CarPlan;
use App\Models\CarPlanDocument;
use App\Models\CarPlanPrice;
use App\Models\Country;
use App\Models\Plan;
use App\Models\Quotepayment;
use App\Models\QuotePaymentClientDetail;
use App\Models\QuotePaymentClientDetailDoc;
use App\Models\Client as ApplicationClient;
use App\Models\QuotesPaymentBreakdown;
use Carbon\Carbon;
use Carbon\Traits\Date;
use CommonHelper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use stdClass;
use App\Http\Traits\CustomerProfileTrait;

trait NannyTrait
{

    protected $api_url = 'https://valuationwebapi.azurewebsites.net/api/v1';
    protected $token = 'AZ45FG890OYHNK3EDAWF';

    /**
     * Car Api Tables
     */
    protected $car_model_years_db = 'car_api_1_model_years';
    protected $car_make_db = 'car_api_2_makes';
    protected $car_model_db = 'car_api_3_models';
    protected $car_trim_db = 'car_api_4_trims';
    protected $car_manual_search_db = 'car_api_5_manual_search';
    protected $car_manual_valuate_db = 'car_api_6_manual_valuate';


    public function check_time($from_date)
    {
        $diff = CommonHelper::dateDifferanceTwoDates($from_date, date('Y-m-d H:i:s'));
        if ($diff['days'] > 9) return false;
        return true;
    }

    public function check_time_elapsed($data, $table, $where, $type)
    {
        $result = $data;
        if (collect($data)->count() > 0) {
            $first = collect($data)->first();
            $check_time = $this->check_time($first->created_at);
            if (!$check_time) {
                ($type == 'truncate') ? $this->truncate_table($table) : $this->delete_records($table, $where);
                $result = array();
            }
        }
        return $result;
    }

    public function get_records($table, $where)
    {
        $result = ($where) ? DB::select("SELECT * FROM `" . $table . "` WHERE " . $where) : DB::select("SELECT * FROM `" . $table . "`");
        return collect($result);
    }

    public function truncate_table($table)
    {
        DB::select("TRUNCATE `" . $table . "`");
    }

    public function delete_records($table, $where)
    {
        DB::select("DELETE FROM `" . $table . "` WHERE " . $where);
    }

    public function insert_record($table, $data)
    {
        DB::table($table)->insert($data);
    }

    public function setting_result_object($data, $custom_message = null)
    {
        $res = new stdClass();
        $res->status = '200';
        $res->message = ($custom_message) ? $custom_message : 'Information has been retrieved successfully.';
        $res->data = $data;

        return json_encode($res);
    }

    public function basic_maping($data, $param_id)
    {
        return collect($data)->map(function ($x) use ($param_id) {
            $a = new stdClass();
            $a->id = (int)$x->$param_id;
            $a->text = $x->text;
            return $a;
        })->toArray();
    }

    public function get_car_model_years()
    {
        // check if already exists
        $check = $this->get_records($this->car_model_years_db, null);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_model_years_db, null, 'truncate');

        $res = null;
        if (collect($check)->count() > 0) {
            $check = $this->basic_maping($check, 'model_year_id');
            return $this->setting_result_object($check);
        } else {
            // fetching new data
            $url = $this->api_url . '/model_year?token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->truncate_table($this->car_model_years_db);

            // adding new data
            $model_years_records = json_decode($res);
            if (collect($model_years_records->data)->count() > 0) {
                foreach ($model_years_records->data as $key => $ROW) {
                    $ROWD['model_year_id'] = $ROW->id;
                    $ROWD['text'] = $ROW->text;
                    $ROWD['created_at'] = date('Y-m-d H:i:s');

                    $this->insert_record($this->car_model_years_db, $ROWD);
                }
            }
        }

        return $res;
    }

    public function get_car_make($model_year_id)
    {
        // check if already exists
        $where = " model_year_id = " . $model_year_id;
        $check = $this->get_records($this->car_make_db, $where);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_make_db, $where, 'delete');

        $res = null;
        if (collect($check)->count() > 0) {
            $check = $this->basic_maping($check, 'make_id');
            return $this->setting_result_object($check);
        } else {
            // fetching new data
            $url = $this->api_url . '/make?modelYearId=' . $model_year_id . '&token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->delete_records($this->car_make_db, $where);

            // adding new data
            $model_years_records = json_decode($res);
            if (collect($model_years_records->data)->count() > 0) {
                foreach ($model_years_records->data as $key => $ROW) {
                    $ROWD['model_year_id'] = $model_year_id;
                    $ROWD['make_id'] = $ROW->id;
                    $ROWD['text'] = $ROW->text;
                    $ROWD['created_at'] = date('Y-m-d H:i:s');

                    $this->insert_record($this->car_make_db, $ROWD);
                }
            }
        }

        return $res;
    }

    public function get_car_model($model_year_id, $make_id)
    {
        // check if already exists
        $where = " model_year_id = " . $model_year_id . " AND make_id = " . $make_id;
        $check = $this->get_records($this->car_model_db, $where);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_model_db, $where, 'delete');

        $res = null;
        if (collect($check)->count() > 0) {
            $check = $this->basic_maping($check, 'model_id');
            return $this->setting_result_object($check);
        } else {
            // fetching new data
            $url = $this->api_url . '/model?modelYearId=' . $model_year_id . '&makeId=' . $make_id . '&token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->delete_records($this->car_model_db, $where);

            // adding new data
            $model_years_records = json_decode($res);
            if (collect($model_years_records->data)->count() > 0) {
                foreach ($model_years_records->data as $key => $ROW) {
                    $ROWD['model_year_id'] = $model_year_id;
                    $ROWD['make_id'] = $make_id;
                    $ROWD['model_id'] = $ROW->id;
                    $ROWD['text'] = $ROW->text;
                    $ROWD['created_at'] = date('Y-m-d H:i:s');

                    $this->insert_record($this->car_model_db, $ROWD);
                }
            }
        }

        return $res;
    }

    public function get_car_trim($model_year_id, $make_id, $model_id)
    {
        // check if already exists
        $where = " model_year_id = " . $model_year_id . " AND make_id = " . $make_id . " AND model_id = " . $model_id;
        $check = $this->get_records($this->car_trim_db, $where);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_trim_db, $where, 'delete');

        $res = null;
        if (collect($check)->count() > 0) {
            $check = $this->basic_maping($check, 'trim_id');
            return $this->setting_result_object($check);
        } else {
            // fetching new data
            $url = $this->api_url . '/trim?modelYearId=' . $model_year_id . '&makeId=' . $make_id . '&modelId=' . $model_id . '&token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->delete_records($this->car_trim_db, $where);

            // adding new data
            $model_years_records = json_decode($res);
            if (collect($model_years_records->data)->count() > 0) {
                foreach ($model_years_records->data as $key => $ROW) {
                    $ROWD['model_year_id'] = $model_year_id;
                    $ROWD['make_id'] = $make_id;
                    $ROWD['model_id'] = $model_id;
                    $ROWD['trim_id'] = $ROW->id;
                    $ROWD['text'] = $ROW->text;
                    $ROWD['created_at'] = date('Y-m-d H:i:s');

                    $this->insert_record($this->car_trim_db, $ROWD);
                }
            }
        }

        return $res;
    }

    public function get_car_manual_search($model_year_id, $make_id, $model_id, $trim_id)
    {
        // check if already exists
        $where = " model_year_id = " . $model_year_id . " AND make_id = " . $make_id . " AND model_id = " . $model_id . " AND trim_id = " . $trim_id;
        $check = $this->get_records($this->car_manual_search_db, $where);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_manual_search_db, $where, 'delete');

        $res = null;
        if (collect($check)->count() > 0) {
            $r = array();
            foreach ($check as $key => $row) {
                $r[] = json_decode($row->text);
            }
            $check = $r;
            return $this->setting_result_object($check, '"Manual search executed successfully.');
        } else {
            // fetching new data
            $url = $this->api_url . '/manual_search?modelYearId=' . $model_year_id . '&makeId=' . $make_id . '&modelId=' . $model_id . '&trimId=' . $trim_id . '&token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->delete_records($this->car_manual_search_db, $where);

            // adding new data
            $model_years_records = json_decode($res);
            if (collect($model_years_records->data)->count() > 0) {
                foreach ($model_years_records->data as $key => $ROW) {
                    $ROWD['model_year_id'] = $model_year_id;
                    $ROWD['make_id'] = $make_id;
                    $ROWD['model_id'] = $model_id;
                    $ROWD['trim_id'] = $trim_id;
                    $ROWD['id_rand'] = $ROW->idRand;
                    $ROWD['text'] = json_encode($ROW);
                    $ROWD['created_at'] = date('Y-m-d H:i:s');

                    $this->insert_record($this->car_manual_search_db, $ROWD);
                }
            }
        }

        return $res;
    }

    public function get_car_valuation($idRand)
    {
        // check if already exists
        $where = " id_rand = '" . $idRand . "'";
        $check = $this->get_records($this->car_manual_valuate_db, $where);

        // check if time elapsed
        $check = $this->check_time_elapsed($check, $this->car_manual_valuate_db, $where, 'delete');

        $res = null;
        if (collect($check)->count() > 0) {
            $check = collect($check)->first();
            $check = json_decode($check->text);

            return $this->setting_result_object($check, 'Valuation computed successfully."');
        } else {
            // fetching new data
            $url = $this->api_url . '/manual_valuate?idRand=' . $idRand . '&valuationType=b2c&token=' . $this->token;
            $res = CommonHelper::curl_get($url);

            // removing previous data
            $this->delete_records($this->car_manual_valuate_db, $where);

            // adding new data
            $ROW = json_decode($res);

            $ROWD['id_rand'] = $idRand;
            $ROWD['valuation_type'] = 'b2c';
            $ROWD['text'] = json_encode($ROW->data);
            $ROWD['created_at'] = date('Y-m-d H:i:s');
            $this->insert_record($this->car_manual_valuate_db, $ROWD);
        }

        return $res;
    }

    public function store_car_application_detail($request, $car_price_id, $car_quote_unique_id, $company, $is_api = 0)
    {
        // dd($request->all());
        $quote = CarGetQuote::where('unique_id', $car_quote_unique_id)->first();
        $type = $request->type;
        //update client id in car get quotes
        // $client = ApplicationClient::where(array('phone'=>$request->phone_number, 'company_id'=>$company->id))->first();
        // // dd($client);
        // if(!$client){
        //     $clientData['company_id'] = $request->first_name;
        //     $clientData['name'] = $request->first_name;
        //     $clientData['email'] = $request->email;
        //     $clientData['phone'] = $request->phone_number;
        //     $clientData['flag'] = 'b2c';
        //     $clientData['created_by'] = 0;
        //     $clientData['created_at'] = date('Y-m-d H:i:s');
        //     $clientData['updated_at'] = date('Y-m-d H:i:s');
        //     $client = new ApplicationClient($clientData);
        //     $client->save();
        // }

        $clientData['name'] = $request->first_name;
        $clientData['email'] = $request->email;
        $clientData['phone'] = $request->phone_number;
        $client = $this->saveUpdateClientCompanyWise($clientData, $company, 'b2c');
        // dd($client);
        $client_id = $client->id;

        // $other_info['previous_policy'] = $request->other_info['previous_policy'];
        // $other_info['current_policy_expired'] = $request->other_info['current_policy_expired'];

        // Updating Quote Client ID
        // $quote->update([
        //     // 'client_id' => $client_id,
        //     'client_start_date' => date('Y-m-d', strtotime($request->client_start_date)),
        //     'other_info' => json_encode($other_info)
        // ]);



        $type = ($quote->cover_type == 'third_pary') ? null : $type;
        $type = ($is_api && $quote->cover_type == 'comprehensive') ? $request->type : $type;
        // dd($request);

        $carPlanPrice = CarPlanPrice::find($car_price_id);
        if ($carPlanPrice) {
            $plan = CarPlan::find($carPlanPrice->car_plan_id);
        } else {
            $agency_type = ($request->type == 'non-agency') ? 'non_agency' : 'agency';
            $planManualPrice = CarGetQuoteManual::where(['car_get_quote_id' => $quote->id, 'agency_type' => $agency_type])->first();
            $plan = CarPlan::find($planManualPrice->plan_id);
            $paymentData['is_manual'] = 1;
            $paymentData['car_get_quote_manual_id'] = $planManualPrice->id;
        }

        //storing basic payment
        $result = CommonHelper::calculate_car_plan_price($quote, $plan, $type);
        // dd($result);
        $amount = $result->total_cost;
        // Other info
        $other_info = array();
        if ($quote->other_info != '') {
            $other_info = (array)json_decode($quote->other_info);
        }

        $other_info['date_of_birth'] = $request->other_info['year'] . '-' . $request->other_info['month'] . '-' . $request->other_info['day'];
        $other_info['traffic_number'] = $request->traffic_number;
        $other_info['license_number'] = $request->license_number;
        $other_info['license_issue_date'] = $request->license_issue_date;
        $other_info['license_expiry_date'] = $request->license_expiry_date;
        // dd(json_decode($request->uqudo_response_liscense));

        $other_info['uqudo_response_liscense']  =  (isset($request->uqudo_response_liscense) && $request->uqudo_response_liscense)?  $this->uqodu_liscense_data(json_decode($request->uqudo_response_liscense))   : "";
       
        $other_info['uqudo_response_vehicle']  =  (isset($request->uqudo_response_vehicle) && $request->uqudo_response_vehicle)?  $this->uqodu_vehicle_data(json_decode($request->uqudo_response_vehicle)) : "";

       
        $paymentData['quote_status'] = 'init';
        $paymentData['type'] = 'car';
        $paymentData['company_id'] = $quote->company_id;
        $paymentData['quote_id'] = $quote->id;
        $paymentData['plan_id'] = $car_price_id;
        $paymentData['client_id'] = $client_id;
        $paymentData['car_plan_price_range_id'] = $request->car_plan_price_range_id;


        $paymentData['client_start_date'] = date('Y-m-d', strtotime($request->client_start_date));
        $paymentData['amount'] = $amount;
        $paymentData['status'] = 'Pending';

        if (isset($request->car_driver_nationality_id)) {
            $nationality_name = Country::find($request->car_driver_nationality_id);
        }

        $paymentData['driver_nationality_id'] = (isset($request->car_driver_nationality_id)) ? $request->car_driver_nationality_id : null;
        $paymentData['driver_nationality_name'] = (isset($nationality_name)) ? $nationality_name->name : '';

        $paymentData['application_status'] = 'new';
        $paymentData['is_api'] = $is_api;
        $paymentData['other_info'] = json_encode($other_info);
        $paymentData['updated_at'] = date('Y-m-d H:i:s');
       
        $payment = Quotepayment::where(['type' => 'car', 'quote_id' => $quote->id, 'client_id' => $client_id])->first();

        $paymentData['unique_id'] = $this->generatePaymentBarcodeNumber();
        $paymentData['created_at'] = date('Y-m-d H:i:s');
        $payment = new Quotepayment($paymentData);
        $payment->save();

        // if($payment){
        //     $payment->update($paymentData);
        // }else{
        //     $paymentData['unique_id'] = $this->generatePaymentBarcodeNumber();
        //     $paymentData['created_at'] = date('Y-m-d H:i:s');
        //     $payment = new Quotepayment($paymentData);
        //     $payment->save();
        // }


        // Delete All payment breakdown
        QuotesPaymentBreakdown::where('quotes_payment_id', $payment->id)->delete();

        $array = array('actual_cost', 'basmah', 'vat', 'total_cost');



        if ($payment->type == 'car') {
            $array = array('actual_cost', 'vat', 'total_cost');
        }

        foreach ($array as $key => $value) {
            $QPBD['quotes_payment_id'] = $payment->id;
            $QPBD['type'] = $value;
            $QPBD['amount'] = $request->$value;

            $QPB = new QuotesPaymentBreakdown($QPBD);
            $QPB->save();
        }

        // storing payment client detail
        $paymentClientData['quote_payment_id'] = $payment->id;
        $paymentClientData['quote_id'] = $quote->id;
        $additional_information = new stdClass();
        $additional_information->first_name = $request->first_name;
        $additional_information->family_name = $request->family_name;
        $additional_information->phone_number = $request->phone_number;
        $additional_information->email = $request->email;
        $additional_information->car_company_type = $request->car_company_type;
        $additional_information->company_name = $request->company_name;
        $paymentClientData['additional_information'] = json_encode($additional_information);
        $paymentClientData['updated_at'] = date('Y-m-d H:i:s');

        $paymentClient = QuotePaymentClientDetail::where('quote_payment_id', $payment->id)->first();
        if ($paymentClient) {
            $paymentClient->update($paymentClientData);
        } else {
            $paymentClientData['created_at'] = date('Y-m-d H:i:s');
            $paymentClient = new QuotePaymentClientDetail($paymentClientData);
            $paymentClient->save();
        }

        if ($is_api == 0) {
            if (collect($request->plan_documents)->count() > 0) {
                QuotePaymentClientDetailDoc::where('quotes_payment_client_detail_id', $paymentClient->id)->delete();

                foreach ($request->plan_documents as $required_document_id => $file) {
                    $documentType = CarPlanDocument::where('id', $required_document_id)->first();
                    $fullname = $file->getClientOriginalName();
                    $filename = pathinfo($fullname, PATHINFO_FILENAME);
                    $extension = pathinfo($fullname, PATHINFO_EXTENSION);
                    $filename = $filename . '-' . time() . '.' . $extension;
                    $full_path = $file->storeAs('public', $filename);

                    $reqDocument['payment_id'] = $payment->id;
                    $reqDocument['quotes_payment_client_detail_id'] = $paymentClient->id;
                    $reqDocument['required_document_type'] = 'car';
                    $reqDocument['required_document_id'] = $required_document_id;
                    $reqDocument['document_name'] = $documentType->name;
                    $reqDocument['type'] = 'self';
                    $reqDocument['name'] = $file->getClientOriginalName();
                    $reqDocument['file_name'] = $filename;
                    $reqDocument['file_path'] = 'public/';
                    $reqDocument['full_path'] = $full_path;
                    $reqDocument['file_extension'] = $file->getClientOriginalExtension();
                    $reqDocument['mime_type'] = $file->getMimeType();
                    $reqDocument['file_size'] = $file->getSize();
                    $reqDocument['created_at'] = Carbon::now();
                    $reqDocument['updated_at'] = Carbon::now();

                    $doc = new QuotePaymentClientDetailDoc($reqDocument);
                    $doc->save();
                }
            }
        } else {
            if (collect($request->plan_documents)->count() > 0) {
                foreach ($request->plan_documents as $file) {

                    $documentType = CarPlanDocument::where('slug', $file['type'])->first();
//                    $imgObj = $this->base64ToImage($file['file'], $file['type'], isset($file['extension']) ? $file['extension'] : 'pdf');
                    $imgObj = $this->base64ToImage($file['file'], $file['type']);
                    // dd($imgObj);

                    $reqDocument['payment_id'] = $payment->id;
                    $reqDocument['quotes_payment_client_detail_id'] = $paymentClient->id;
                    $reqDocument['required_document_type'] = 'car';
                    $reqDocument['required_document_id'] = $documentType->id;
                    $reqDocument['document_name'] = $documentType->name;
                    $reqDocument['type'] = 'self';
                    $reqDocument['name'] = $imgObj['imageName'];
                    $reqDocument['file_name'] =  $imgObj['imageName'];
                    $reqDocument['file_path'] = 'public/';
                    $reqDocument['full_path'] =  $imgObj['fullPath'];
                    $reqDocument['file_extension'] =  $imgObj['extension'];
                    $reqDocument['mime_type'] = $imgObj['mime'];
                    $reqDocument['file_size'] = $imgObj['size'];
                    $reqDocument['created_at'] = Carbon::now();
                    $reqDocument['updated_at'] = Carbon::now();

                    $doc = new QuotePaymentClientDetailDoc($reqDocument);
                    $doc->save();
                }
            }
        }
        if (isset($request->trade_license)) {
            $file = $request->trade_license;
            $fullname = $file->getClientOriginalName();
            $filename = pathinfo($fullname, PATHINFO_FILENAME);
            $extension = pathinfo($fullname, PATHINFO_EXTENSION);
            $filename = $filename . '-' . time() . '.' . $extension;
            $full_path = $file->storeAs('public', $filename);

            $reqDocument['payment_id'] = $payment->id;
            $reqDocument['quotes_payment_client_detail_id'] = $paymentClient->id;
            $reqDocument['required_document_type'] = 'car';
            $reqDocument['required_document_id'] = 0;
            $reqDocument['document_name'] = "Trade license";
            $reqDocument['type'] = 'self';
            $reqDocument['name'] = $file->getClientOriginalName();
            $reqDocument['file_name'] = $filename;
            $reqDocument['file_path'] = 'public/';
            $reqDocument['full_path'] = $full_path;
            $reqDocument['file_extension'] = $file->getClientOriginalExtension();
            $reqDocument['mime_type'] = $file->getMimeType();
            $reqDocument['file_size'] = $file->getSize();
            $reqDocument['created_at'] = Carbon::now();
            $reqDocument['updated_at'] = Carbon::now();

            $doc = new QuotePaymentClientDetailDoc($reqDocument);
            $doc->save();
        }

        if (isset($request->vat_certificate)) {
            $file = $request->vat_certificate;
            $fullname = $file->getClientOriginalName();
            $filename = pathinfo($fullname, PATHINFO_FILENAME);
            $extension = pathinfo($fullname, PATHINFO_EXTENSION);
            $filename = $filename . '-' . time() . '.' . $extension;
            $full_path = $file->storeAs('public', $filename);

            $reqDocument['payment_id'] = $payment->id;
            $reqDocument['quotes_payment_client_detail_id'] = $paymentClient->id;
            $reqDocument['required_document_type'] = 'car';
            $reqDocument['required_document_id'] = 0;
            $reqDocument['document_name'] = "VAT Certificate";
            $reqDocument['type'] = 'self';
            $reqDocument['name'] = $file->getClientOriginalName();
            $reqDocument['file_name'] = $filename;
            $reqDocument['file_path'] = 'public/';
            $reqDocument['full_path'] = $full_path;
            $reqDocument['file_extension'] = $file->getClientOriginalExtension();
            $reqDocument['mime_type'] = $file->getMimeType();
            $reqDocument['file_size'] = $file->getSize();
            $reqDocument['created_at'] = Carbon::now();
            $reqDocument['updated_at'] = Carbon::now();

            $doc = new QuotePaymentClientDetailDoc($reqDocument);
            $doc->save();
        }
        // $this->make_customer_profile($request, $payment->id);

        $environment = App::environment();
        if ($environment != 'production') {
            $this->store_customer_profile($request, $payment->id, 0);
        }

        return $payment;
    }

    private function uqodu_liscense_data($data){
        if(isset($data->requireManualReview)){
            unset($data->requireManualReview);
        }
        if(isset($data->sessionId)){
            unset($data->sessionId);
        }
        if(isset($data->front)){
            if(isset($data->front->faceImage)){
                    unset($data->front->faceImage);
            }
        }
        return $data;
    }
    private function uqodu_vehicle_data($data){
        if(isset($data->requireManualReview)){
            unset($data->requireManualReview);
        }
        if(isset($data->sessionId)){
            unset($data->sessionId);
        }
        if(isset($data->front)){
            if(isset($data->front->faceImage)){
                    unset($data->front->faceImage);
            }
        }
        return $data;
    }

    public function get_application_data($appID)
    {
        $app = Quotepayment::find($appID);
        $quote = CarGetQuote::find($app->quote_id);
        $car_information = json_decode($quote->car_information);
        //        dd($quote);
        $plan = CarPlanPrice::find($app->plan_id);

        // get plan start
        $planObj = new stdClass();

        $planObj->id = $plan->id; //In third_party its plan_price_id in comprehensive its plan_price_range_id
        $planObj->name = $plan->plan->type->name;
        $planObj->third_party_liability = $plan->plan->third_party_liability;

        // dd($app->breakdown);

        foreach ($app->breakdown as $breakdown) {
            if ($breakdown->type == 'vat')
                $planObj->vat = $breakdown->amount;
            else if ($breakdown->type == 'actual_cost')
                $planObj->premium = $breakdown->amount;
            else if ($breakdown->type == 'total_cost')
                $planObj->plan_price = $breakdown->amount;
        }

        $planObj->insurer['name'] = $plan->plan->insurer->name;
        $planObj->insurer['logo'] = ($plan->plan->insurer->media->file_name) ? URL('/') . '/' . 'storage/' . $plan->plan->insurer->media->file_name : '';

        if ($plan->plan->info->count() > 0) {
            foreach ($plan->plan->info as $info) {
                $infoObj = new stdClass();

                $infoObj->id = $info->id;
                $infoObj->include = ($info->is_contains) ? 'yes' : 'no';
                $infoObj->name = ucwords(str_replace('_', ' ', $info->type));
                $infoObj->description = ($info->is_contains) ? $info->description : 'Not Covered';

                $planObj->covers[] = $infoObj;
            }
        } else
            $planObj->covers_benefits = [];

        //        $planObj->terms_conditions['description'] = $plan->plan->car_terms_and_condition_file->name;
        //        $planObj->terms_conditions['file_url'] = ($plan->plan->car_terms_and_condition_file->file_name)? URL('/').'/'.'storage/'.$plan->plan->car_terms_and_condition_file->file_name:'';
        //plan end

        //client details
        $clientData = json_decode($app->client_details[0]->additional_information);

        $client = new stdClass();
        $client->first_name = $clientData->first_name;
        $client->family_name = $clientData->family_name;
        $client->phone_number = $clientData->phone_number;
        $client->email = $clientData->email;

        $car_information  = json_decode($quote->car_information);
        $model_year = $car_information->modelYear;
        $make = $car_information->make;
        $model = $car_information->model;
        $trim = $car_information->trim;
        $body_type = $car_information->bodyType;
        $engine_size = $car_information->engineSize;
        $transmission = $car_information->transmission;
        $date_of_registration = $quote->date_of_registration;
        $valuation_price    =   null;
        if ($quote->cover_type !== "third_party") {
            $valuation_price = $car_information->valuation->estimated;
        }
        $region = $car_information->region;


        $response = new stdClass();

        $response->policy_number = $app->policy_number;
        $response->application_id = $app->unique_id;
        $response->quote_id = $app->quote_id;
        $response->plan_id = $app->plan_id;
        $response->policy_desire_start_date = $app->client_start_date;
        $response->policy_actual_start_date = $app->start_date;
        $response->cover_type = $quote->cover_type;
        $response->company_name = $app->company->name;
        $response->status = $app->application_status;
        $response->currency = ($plan->plan->currency) ? $plan->plan->currency->name : 'AED';
        $response->policy_price = $app->amount;
        $response->payment_status = ($app->status == 'Authorized' || $app->status == 'Captured') ? 'paid' : 'un-paid';
        $response->plan = $planObj;
        $response->client_info = $client;

        $response->car_detail = new stdClass();
        // $response->car = new stdClass();

        $response->car_detail->year = $model_year;
        $response->car_detail->make = $make;
        $response->car_detail->model = $model;
        $response->car_detail->trim = $trim;
        $response->car_detail->body_type = $body_type;
        $response->car_detail->engine_size = $engine_size;
        $response->car_detail->transmission = $transmission;
        $response->car_detail->date_of_registration = $date_of_registration;
        $response->car_detail->valuation_price = $valuation_price;
        $response->car_detail->region = $region;

        //client documents
        $clientDoc = QuotePaymentClientDetailDoc::where('quotes_payment_client_detail_id', $app->client_details[0]->id)->get();
        if ($clientDoc->count() > 0) {
            foreach ($clientDoc as $doc) {
                $docObj = new stdClass();

                $docObj->type = $doc->document_name;
                $docObj->url = URL('/') . '/' . 'storage/' . $doc->file_name;
                $response->documents[] = $docObj;
            }
        } else
            $response->documents = [];


        return $response;
    }

    public function update_application_data($request, $appID)
    {
        $app = Quotepayment::find($appID);

        $app->start_date = Date('Y-m-d', strtotime($request->policy_start_date));
        $other_info['date_of_birth'] = $request->client_info['date_of_birth'];
        $app->other_info = json_encode($other_info);

        if ($app->update()) {
            $client = QuotePaymentClientDetail::where('quote_payment_id', $app->id)->first();
            $clientData['first_name'] = $request->client_info['first_name'];
            $clientData['family_name'] = $request->client_info['family_name'];
            $clientData['phone_number'] = $request->client_info['phone'];
            $clientData['email'] = $request->client_info['email'];
            $clientData['car_company_type'] = ($request->car_detail == 1) ? 'private' : 'commercial';
            $clientData['company_name'] = $request->company_name;
            $client->additional_information = json_encode($clientData);
            if (!$client->update())
                return 0;

            QuotePaymentClientDetailDoc::where('payment_id', $app->id)->delete();
            foreach ($request->documents as $file) {

                $documentType = CarPlanDocument::where('slug', $file['type'])->first();

//                $imgObj = $this->base64ToImage($file['file'], $file['type'], $file['extension']);
                $imgObj = $this->base64ToImage($file['file'], $file['type']);

                $reqDocument['payment_id'] = $app->id;
                $reqDocument['quotes_payment_client_detail_id'] = $client->id;
                $reqDocument['required_document_type'] = 'car';
                $reqDocument['required_document_id'] = $documentType->id;
                $reqDocument['document_name'] = $documentType->name;
                $reqDocument['type'] = 'self';
                $reqDocument['name'] = $imgObj['imageName'];
                $reqDocument['file_name'] =  $imgObj['imageName'];
                $reqDocument['file_path'] = 'public/';
                $reqDocument['full_path'] =  $imgObj['fullPath'];
                $reqDocument['file_extension'] =  $imgObj['extension'];
                $reqDocument['mime_type'] = $imgObj['mime'];
                $reqDocument['file_size'] = $imgObj['size'];
                $reqDocument['created_at'] = Carbon::now();
                $reqDocument['updated_at'] = Carbon::now();

                $doc = new QuotePaymentClientDetailDoc($reqDocument);
                $doc->save();
            }
        } else
            return 0;

        return $app->id;
    }

    public function base64ToImage($img, $type)
    {
        $mime_type = '';
        $image = $img; // image base64 encoded
        preg_match("/data:image\/(.*?);/", $image, $image_extension); // extract the image extension
        $image = preg_replace('/data:image\/(.*?);base64,/', '', $image); // remove the type part
        $image = str_replace(' ', '+', $image);
        if(isset($image_extension[1])){
            $image_ext = $image_extension[1];
        }else{
            $decoded_string = base64_decode($image);
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime_type = finfo_buffer($finfo, $decoded_string);
            $mime_type_tmp = explode('/' , $mime_type);
            $image_ext = $mime_type_tmp[1]; 
        }
        // $image_ext = isset($image_extension[1]) ? $image_extension[1] : 'pdf';
        $imageName = $type . time() . '.' . $image_ext; //generating unique file name;
        $fullPath = Storage::disk('public')->put($imageName, base64_decode($image));
        $imageDetail    =   [];
        // if ($image_ext != 'pdf') {
        //     $imageDetail = getimagesize($img);
        // }
        $data['imageName'] = $imageName;
        $data['fullPath'] = "public/" . $imageName;
        $data['extension'] = $image_ext;
        $data['mime'] = $mime_type;
        $data['size'] = strlen(base64_decode($image));

        return $data;
    }
}
