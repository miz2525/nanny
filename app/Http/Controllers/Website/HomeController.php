<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Mail\PaymentConfirmed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use stdClass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    public function index(Request $request)
    {
        return view('website.home.index');
    }

    public function contact_us()
    {
        return view('website.contact-us.index');
    }

    public function terms()
    {
        return view('website.terms.index');
    }

    public function privacy_policy()
    {
        return view('website.privacy_policy.index');
    }

    public function ethical_considerations_for_hiring_a_nanny()
    {
        return view('website.ethical_considerations_for_hiring_a_nanny.index');
    }

    public function eligibility_criteria_for_hiring_a_nanny()
    {
        return view('website.eligibility_criteria_for_hiring_a_nanny.index');
    }

    public function blog()
    {
        return view('website.blog.index');
    }

    public function full_time_nanny_dubai()
    {
        return view('website.blog.full_time_nanny_dubai');
    }

    public function babysitter_in_dubai()
    {
        return view('website.blog.babysitter_in_dubai');
    }

    public function find_a_new_job()
    {
        return view('website.find_a_new_job.index');
    }
    
    public function purchase(Request $request, $price_id)
    {
        if(!Auth::check()) return redirect('login');
        return $request->user()->checkout([$price_id], [
            'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
        ]);
    }

    public function checkout_success(Request $request)
    {
        $checkoutSession = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));

        $curl = curl_init();

        $token = base64_encode(env('STRIPE_SECRET'));

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stripe.com/v1/payment_intents/'.$checkoutSession->payment_intent,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic '.$token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        try {
            $user = $request->user();
            Mail::to(['oana.sarmasan@gmail.com', 'mihai@teamedia.ro', 'hello@nannygenie.com', 'addi.ahmad9@gmail.com', 'nannygenie2023@gmail.com'])->send(new PaymentConfirmed($user));
        } catch (\Throwable $th) {
            throw $th;
        }

        $request->user()->update([
            'is_paid' => 1,
            'product_id' => env('STRIPE_PRICE_ID'),
            'payment_id' => $checkoutSession->payment_intent,
            'payment_detail' => json_encode($response)
        ]);
        return redirect()->route('home');
    }

    public function checkout_failed(Request $request)
    {
        dd($request->all(), "FAILED");
    }

    public function send_mail_test(){
        // $user = User::find(2);
        $user = new stdClass();
        $user->email = 'addi.ahmad9@gmail.com';
        Mail::to(['addi.ahmad9@gmail.com', 'addi@teamedia.ro', 'mihai@teamedia.ro'])->send(new PaymentConfirmed($user));
    }

    public function send_mail_by_id($customer_id){
        $user = User::find($customer_id);
        Mail::to(['addi.ahmad9@gmail.com', 'addi@teamedia.ro'])->send(new PaymentConfirmed($user));
    }
}
