<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
