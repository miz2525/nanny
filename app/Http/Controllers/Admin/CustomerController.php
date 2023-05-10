<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
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
        return view('admin.customer.index');
    }
}
