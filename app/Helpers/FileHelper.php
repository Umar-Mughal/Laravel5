<?php 

namespace App\Helpers;

// use Storage;
use Illuminate\Support\Facades\Storage;
use Image;

class FileHelper
{
	public static function addFile($request, $file)
	{
		if($request->hasFile($file))
        {   
        	$image=$request->$file;
        	$image_name=$request->$file->getClientOriginalName();
        	
        	$path = storage_path('app/public/images/' . $image_name);
        	$resized_image=Image::make($image)->resize(160,160)->save($path);

            return $image_name;
        }
	}
}