<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
        $customers = User::orderByDesc('id')->get();
        return view('admin.customer.index', compact('customers'));
    }

    public function payments()
    {
        $customers = User::where('is_paid', 1)->orderByDesc('id')->get();
        return view('admin.customer.payments', compact('customers'));
    }

    function change_status(Request $request) {
        $customer = User::find($request->customer_id);
        $customer->status = $request->status;
        $customer->update();
        return redirect()->back();
    }
}
