<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaticPagesController extends Controller
{
    function home()
    {
        $files = Storage::allFiles();
        return view('home',['files' => $files[2]]);
    }
}
