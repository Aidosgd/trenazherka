<?php

namespace App\Http\Controllers;

use Ibec\Media\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Gallery::find(1);

        return view('layouts.app', compact('slider'));
    }
}
