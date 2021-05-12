<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class passwordController extends Controller
{

  public function index()
  {
    return view('back.password');
  }

  public function update(Request $request)
  {

    $request->validate([
      'current_password'     => 'required',
      'password'  => 'required|same:password',
      'password_confirmation'  => 'required|same:password'
    ]);

    $user = User::where('email', $request->email)->first();

    if (Hash::check($request->current_password, $user->password)) {
      //Eloquent ORM
      $user->password = Hash::make($request->password);
      $user->save();
    } else {
      return redirect('/panel/password')->with('success', 'password was wrong!');
    }
    return redirect('/panel/password')->with('success', 'Password was updated!');
  }

  public function setting()
  {
    if (session('name') !== "sapu jagat") {
      return abort(404);
    }
    $users = user::get();
    return view('back.password_setting', compact('users'));
  }

  public function reset(Request $request)
  {
    if (session('name') !== 'sapu jagat') {
      return abort(404);
    }

    $user = User::find($request->id);
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect('/panel/password/reset')->with('success', 'Password was reseted!');
  }
}
