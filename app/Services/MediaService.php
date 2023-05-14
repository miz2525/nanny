<?php
namespace App\Services;

use App\Models\Media;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class MediaService {

    public static function sizes(){
        return [
            'thumbnail' => [
                'width' => 150,
                'height' => 93
            ],
            'medium' => [
                'width' => 300,
                'height' => 185
            ],
            'large' => [
                'width' => 550,
                'height' => 340
            ]
        ];
    }

    public static function nanny_images($nanny_id, $files){
        foreach ($files as $key => $file) {

            $fullname = $file->getClientOriginalName();
            $filename = pathinfo($fullname, PATHINFO_FILENAME);
            $extension = pathinfo($fullname, PATHINFO_EXTENSION);
            $filename = str_replace('-', '', $filename);
            $filename = str_replace('  ', '_', $filename);
            $filename = str_replace(' ', '_', $filename);
            $filename = strtolower($filename);
            $filename = $filename.time().'.'.$extension;


            $data = array();
            $data['module'] = 'nanny';
            $data['module_id'] = $nanny_id;
            $data['type'] = 'nanny_images';
            $data['name'] = $file->getClientOriginalName();
            $data['file_name'] = $filename;
            $data['file_path'] = 'public/';
            $data['full_path'] = $file->storeAs('/public', $filename);
            $data['file_extension'] = $file->getClientOriginalExtension();
            $data['mime_type'] = $file->getMimeType();
            $data['file_size'] = $file->getSize();

            // foreach (self::sizes() as $key => $value) {
            //     File::isDirectory(storage_path('app/public/'.$key)) or File::makeDirectory(storage_path('app/public/'.$key), 0777, true, true);
            //     self::resize_image(storage_path('app/public/'.$filename), storage_path('app/public/'.$key.'/'.$filename), $value['width'], $value['height']);
            // }
            Media::create($data);
        }
    }

    public static function destroy_media($id){
        $media = Media::find($id);
        self::unlink_media($media->file_name);
        $media->delete();
    }
    

    public static function resize_image($file_path, $save_path, $width, $height){
        $img = Image::make($file_path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($save_path);
    }

    public static function unlink_media($filename){
        if(file_exists(storage_path('app/public/'.$filename))) unlink(storage_path('app/public/'.$filename));

        // foreach (self::sizes() as $key => $value) {
        //     if(file_exists(storage_path('app/public/'.$key.'/'.$filename))) unlink(storage_path('app/public/'.$key.'/'.$filename));
        // }
    }

    

    
}
