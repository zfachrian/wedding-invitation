<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class dashboardController extends Controller
{

  public function index()
  {
    return view('back.dashboard');
  }
}
