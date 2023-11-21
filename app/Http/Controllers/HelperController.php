<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function uploadFile($file) {
        $destination = 'uploads/';
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        \Storage::makeDirectory($destination);
        \Storage::putFileAs('uploads', $file, $file_name);
        return  $destination. $file_name;
    }
}
