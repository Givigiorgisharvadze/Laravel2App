<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\youtubevideos;

class ShowController extends Controller
{
    public function show()
    {
        $data=youtubevideos::all();

        return view('home',compact('data'));

    }
}
