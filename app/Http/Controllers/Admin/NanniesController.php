<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Nanny;
use App\Services\MediaService;
use App\Services\NanniesBackgroundService;
use App\Services\NanniesCommentService;
use App\Services\NannyService;
use Illuminate\Http\Request;

class NanniesController extends Controller
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
        $nannies = Nanny::all();
        return view('admin.nannies.index', compact('nannies'));
    }

    public function add()
    {
        return view('admin.nannies.form');
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        // Adding nanny
        $result = NannyService::storeUpdate($request->nanny);
        $nanny_id = $result->id;

        // Adding nanny backgrounds
        NanniesBackgroundService::storeUpdate($nanny_id, $request->nannies_backgrounds);
        
        // Adding nanny images
        MediaService::nanny_images($nanny_id, $request->nanny_images);

        return redirect()->route('admin.all-nannies')->with($result->type, $result->message);
    }

    public function edit($nanny_id)
    {
        $nanny = Nanny::find($nanny_id);
        $languages = json_decode($nanny->languages);
        $environment = \App::environment();
        return view('admin.nannies.form', compact('nanny', 'languages', 'environment'));
    }

    public function update(Request $request, $nanny_id)
    {
       // Adding nanny
       $result = NannyService::storeUpdate($request->nanny, $nanny_id);
       $nanny_id = $result->id;

       // Adding nanny backgrounds
       NanniesBackgroundService::storeUpdate($nanny_id, $request->nannies_backgrounds);

       if(isset($request->nanny_images)){
            // Adding nanny images
            MediaService::nanny_images($nanny_id, $request->nanny_images);
       }
       

       return redirect()->route('admin.all-nannies')->with($result->type, $result->message);
    }

    public function store_comment(Request $request, $nanny_id)
    {
        // Adding nanny
        $result = NanniesCommentService::store($nanny_id, $request);
        return redirect()->back()->with($result->type, $result->message);
    }
    
    public function delete_nanny_image($image_id)
    {
        MediaService::destroy_media($image_id);
    }

    public function update_nanny_images(Request $request, $nanny_id){
        // Adding nanny images
       MediaService::nanny_images($nanny_id, $request->nanny_images);
    }
}
