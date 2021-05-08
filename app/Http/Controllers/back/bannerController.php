<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Banner;

class bannerController extends Controller
{

  public function index()
  {
    $banners   =   Banner::get();
    return view('back.banner.index', compact('banners'));
  }

  public function create()
  {
    return view('back.banner.create');
  }

  public function store(Request $request)
  {
    // Form Validate
    $request->validate([
      'image' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|required|file|max:2000',
    ]);

    if ($request->file('image')) {
      $image = $request->file('image')->store('banner', 'public');

      // Eloquent ORM
      $banner = new Banner;
      $banner->banner_title = $request->title;
      $banner->banner_description = $request->description;
      $banner->banner_image = $image;
      $banner->banner_link = $request->link_banner;
      $banner->save();
    } else {
      return redirect()->route('back.banner.create')->with('danger', 'Failed, Image required!');
    }

    return redirect()->route('back.banner.create')->with('success', 'Banner was created!');
  }

  public function edit($id)
  {
    // dd($id);
    return view('back.banner.edit');
  }
}
