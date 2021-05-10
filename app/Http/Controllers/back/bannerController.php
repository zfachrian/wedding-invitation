<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Banner;
use Illuminate\Support\Facades\Storage;

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
    $banner   =   Banner::findOrFail($id);
    return view('back.banner.edit', compact('banner'));
  }

  public function update($id, Request $request)
  {
    // Form Validate
    $request->validate([
      'image' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|file|max:2000',
    ]);

    // Eloquent ORM
    $banner = Banner::findOrFail($id);
    if ($request->file('image')) {
      $gambar = $request->file('image')->store('banner', 'public');
      if ($banner->banner_image) {
        Storage::delete('public/' . $banner->banner_image);
        $banner->banner_image = $gambar;
      } else {
        $banner->banner_image = $gambar;
      }
    }
    $banner->banner_title = $request->title;
    $banner->banner_description = $request->description;
    $banner->banner_link = $request->link_banner;
    $banner->save();
    return redirect()->route('back.banner.edit', $id)->with('success', 'Banner was update!');
  }

  public function destroy($id)
  {
    $banner = Banner::find($id);
    if ($banner) {
      Storage::delete('public/' . $banner->banner_image);
    }
    Banner::destroy($banner->id);

    $banners   =   Banner::get();
    return view('back.banner.index', compact('banners'))->with('success', 'Banner was delete!');
  }
}
