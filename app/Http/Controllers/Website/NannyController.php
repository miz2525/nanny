<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

class NannyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('website.nanny.index');
    }

    public function profile()
    {
        return view('website.nanny.profile');
    }
}
