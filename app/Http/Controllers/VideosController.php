<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    //uplode video

    public function uplodeVideo()
    {
        return view('Admin-Side.videos.uplode-video');
    }
}
