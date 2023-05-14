<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Nanny;

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
        $nannies = Nanny::where('status', 'active')->paginate(6);
        return view('website.nanny.index', compact('nannies'));
    }

    public function profile($nanny_id)
    {
        $nanny = Nanny::where(['id'=>$nanny_id, 'status'=>'active'])->first();
        if(!$nanny) return redirect()->route('all-nannies');
        return view('website.nanny.profile', compact('nanny'));
    }
}
