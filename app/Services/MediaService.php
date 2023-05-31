<?php
namespace App\Services;

use App\Models\Media;
use Illuminate\Support\Facades\Storage;
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
            self::nanny_image($nanny_id, $file);
        }
    }
    
    public static function nanny_image($nanny_id, $file){
        $file = json_decode($file);
        $image_64 = $file->src;
        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 
        $image = str_replace($replace, '', $image_64); 
        $image = str_replace(' ', '+', $image);

        $fullname = $file->name;
        $filename = pathinfo($fullname, PATHINFO_FILENAME);
        $extension = $file->file_extension;
        $filename = str_replace('-', '', $filename);
        $filename = str_replace('  ', '_', $filename);
        $filename = str_replace(' ', '_', $filename);
        $filename = strtolower($filename);
        $imageName = $filename.time().'.'.$extension;

        Storage::disk('public')->put($imageName, base64_decode($image));
        $data['module'] = 'nanny';
        $data['module_id'] = $nanny_id;
        $data['type'] = 'nanny_images';
        $data['name'] = $file->name;
        $data['file_name'] = $imageName;
        $data['file_path'] = 'public/';
        $data['full_path'] = $data['file_path'].'/'.$imageName;
        $data['file_extension'] = $extension;
        $data['mime_type'] = $file->mime_type;
        $data['file_size'] = $file->file_size;
        
        Media::create($data);
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
