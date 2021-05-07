<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class bannerController extends Controller
{

  public function index()
  {
    return view('back.banner');
  }
}
