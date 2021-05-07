<?php

namespace App\Http\Controllers\back;

// use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Http\Models\User;
// use Session;

class authController extends Controller
{

  public function index()
  {
    return view('back.login');
  }
}
