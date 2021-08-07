<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaticPagesController extends Controller
{
    function home()
    {
        $directories = Storage::directories('public');
        // $files = implode($files);
        // $files = iconv('utf-8','gbk//IGNORE',$files);
        // $files = mb_convert_encoding($files,'UTF-8','GBK');
        //return view('home',['files' => $files]);
        return view('home',['directories' => $directories]);
    }
    function img($img)
    {
        $files = Storage::files("public/".$img);
        return view('img',['files' => $files]);
    }
}
