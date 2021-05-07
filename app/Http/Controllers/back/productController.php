<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class productController extends Controller
{

  public function index()
  {
    return view('back.product');
  }
}
