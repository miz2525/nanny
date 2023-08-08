<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Nanny;
use Illuminate\Http\Request;

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

    public function index(Request $request)
    {
        $nannies = Nanny::select('nannies.*')->join('countries', 'nannies.nationality_id', '=', 'countries.id')->where(['nannies.status'=>'active', 'is_deleted'=>0]);

        if(isset($request->ex) && $request->ex!=''){
            ($request->ex=='<1')? $nannies->where('nannies.experience_years', "<", 1) : $nannies ;
            ($request->ex=='1-3')? $nannies->whereBetween('nannies.experience_years', [1, 3]) : $nannies ;
            ($request->ex=='3-5')? $nannies->whereBetween('nannies.experience_years', [3, 5]) : $nannies ;
            ($request->ex=='5>')? $nannies->where('nannies.experience_years', ">", 5) : $nannies ;
        }
        if(isset($request->la) && $request->la!=''){
            $language = Language::where('name', $request->la)->first();
            $string = '"id":"'.$language->id.'"';
            $nannies->where('languages', 'like', '%'.$string.'%');
        }
        if(isset($request->ag) && $request->ag!=''){
            $nannies->where('age_group_experience', 'like', '%'.$request->ag.'%');
        }
        if(isset($request->visa) && $request->visa!=''){
            $nannies->where('visa_status', $request->visa);
        }
        if(isset($request->edu) && $request->edu!=''){
            $nannies->where('education_level', $request->edu);
        }
        $nannies->orderByDesc('updated_at');
        $nannies = $nannies->paginate(6);
        return view('website.nanny.index', compact('nannies'));
    }

    public function latest_added()
    {
        $nannies = Nanny::where('status', 'active')->orderby('id', 'DESC')->paginate(6);
        return view('website.nanny.latest_added', compact('nannies'));
    }

    public function profile($nanny_id)
    {
        $nanny = Nanny::where(['id'=>$nanny_id, 'status'=>'active'])->first();
        if($nanny->is_deleted) abort(404);
        if(!$nanny) return redirect()->route('all-nannies');
        return view('website.nanny.profile', compact('nanny'));
    }
}
