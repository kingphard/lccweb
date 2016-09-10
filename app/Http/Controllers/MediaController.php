<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Media;

class MediaController extends Controller
{
    public function index()
    {
      $img_cat = media::all();
      return view('index')->with('img_cat', $img_cat);
    }

    

}
