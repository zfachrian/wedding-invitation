<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rsvp;
// use App\Http\Models\Category;
// use App\Http\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function main()
    {
        return view('main');
    }

    public function store(Request $request)
  {
    //dd($request);
    // Form Validate
    $request->validate([
      'name' => 'required',
      'amount' => 'required',
      'email' => 'required'
    ]);

    // Eloquent ORM
    $rsvp = new rsvp;
    $rsvp->name = $request->name;
    $rsvp->amount = $request->amount;
    $rsvp->email = $request->email;
    //dd($rsvp);
    $rsvp->save();
    
    return redirect()->route('rsvp.index')->with('success', 'Your RSVP data was recorded!');
  }
}
