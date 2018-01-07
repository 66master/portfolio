<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Storage;


/**
*
* @param array $files
* @param array $imageFiles
* @return array $imageFiles
*
**/

function get_images($path){

    $files = Storage::files($path);	//'/public/logos'

    foreach($files as $value){

    	$imageFiles[] = basename($value);

    }
    return $imageFiles;

}
