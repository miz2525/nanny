<?php
namespace App\Services;

use App\Models\City;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\Cache;

class HelperService {

    public static function StoreCountriesCache(){
        if(!Cache::get('countries')){
            Cache::store('file')->put('countries', Country::all());
        }
    }

    public static function StoreCitiesCache(){
        if(!Cache::get('cities')){
            Cache::store('file')->put('cities', City::all());
        }
    }

    public static function StoreLanguagesCache(){
        if(!Cache::get('languages')){
            Cache::store('file')->put('languages', Language::all());
        }
    }

    public static function GetCountriesCache(){
        if(!Cache::get('countries')){
            Cache::store('file')->put('countries', Country::all());
        }
        return Cache::get('countries');
    }

    public static function GetCitiesCache(){
        if(!Cache::get('cities')){
            Cache::store('file')->put('cities', City::all());
        }
        return Cache::get('cities');
    }

    public static function GetLanguagesCache(){
        if(!Cache::get('languages')){
            Cache::store('file')->put('languages', Language::all());
        }
        return Cache::get('languages');
    }

    public static function logErrorMessage($logMessage)
    {
        app('log')->error($logMessage);
    }

    public static function GetNannyStatusSpan($type){
        $span = '<span class="badge badge-outline-success">Active</span>';
        switch ($type) {
            case 'active':
                $span = '<span class="badge badge-outline-success">Active</span>';
                break;
            
            case 'not_active':
                $span = '<span class="badge badge-outline-secondary">Not active</span>';
                break;

            case 'under_review':
                $span = '<span class="badge badge-outline-warning">Under review</span>';
                break;
            
            default:
                $span = '<span class="badge badge-outline-success">Active</span>';
                break;
        }

        return $span;
    }

    public static function GetNannyBackgroundByKey($key, $backgrounds){
        return $backgrounds->where('background_type', $key)->first();
    }

    public static function calculateAge($date)
    {
        $date = new \Carbon\Carbon($date);
        return (int) $date->diffInYears();
    }

    public static function dateDifferanceTwoDates($fromDate, $toDate)
    {
        $a = strtotime($fromDate);
        $b = strtotime($toDate);

        $difference = $b - $a;

        $second = 1;
        $minute = 60 * $second;
        $hour   = 60 * $minute;
        $day    = 24 * $hour;
        $month  = 30 * $day;
        $year   = 12 * $month;

        $ans["year"]  = floor($difference / $year);
        $ans["month"]  = floor($difference / $month);
        $ans["day"]    = floor($difference / $day);
        $ans["hour"]   = floor(($difference % $day) / $hour);
        $ans["minute"] = floor((($difference % $day) % $hour) / $minute);
        $ans["second"] = floor(((($difference % $day) % $hour) % $minute) / $second);
        $data = array("years" => $ans["year"], "months" => $ans["month"], "days" => $ans["day"], "hours" => $ans["hour"], "minutes" => $ans["minute"], "seconds" => $ans["second"]);
        return $data;
    }

    public static function dateDifferanceTwoDatesFormat($fromDate, $toDate)
    {
        $diff = self::dateDifferanceTwoDates($fromDate, $toDate);
        if($diff['years']>0){
            if($diff['years']>1){
                return $diff['years'].' years';
            }
            return $diff['years'].' year';
        }

        if($diff['months']>0){
            if($diff['months']>1){
                return $diff['months'].' months';
            }
            return $diff['months'].' month';
        }

        if($diff['days']>0){
            if($diff['days']>1){
                return $diff['days'].' days';
            }
            return $diff['days'].' day';
        }

        if($diff['hours']>0){
            if($diff['hours']>1){
                return $diff['hours'].' hours';
            }
            return $diff['hours'].' hour';
        }

        if($diff['minutes']>0){
            if($diff['minutes']>1){
                return $diff['minutes'].' minutes';
            }
            return $diff['minutes'].' minute';
        }

        if($diff['seconds']>0){
            if($diff['seconds']>1){
                return $diff['seconds'].' seconds';
            }
            return $diff['seconds'].' second';
        }
        return '';
    }

    public static function GetNannyLanguagesHtml($languages){
        // Filipino (native), English (advanced)
        $html = '';
        $languages = json_decode($languages);
        if(collect($languages)->count()>0){
            foreach ($languages as $key => $language) {
                $lang = Language::find($language->id);
                if($key==0){
                    $html .= $lang->name.' ('.$language->level.')';
                }else{
                    $html .= ', '.$lang->name.' ('.$language->level.')';
                }
            }
        }
        return $html;
    }

    public static function GetCustomerPaymentDetail($customer){
        return json_decode($customer->payment_detail);
    }
}
