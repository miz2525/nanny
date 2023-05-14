<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.contact-us.index');
    }

    public function terms()
    {
        return view('website.terms.index');
    }

    
}
