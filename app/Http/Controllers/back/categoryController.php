<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Category;

class categoryController extends Controller
{

  public function index()
  {
    $categories   =   Category::get();
    return view('back.category.index', compact('categories'));
  }

  public function create()
  {
    return view('back.category.create');
  }

  public function store(Request $request)
  {
    // Form Validate
    $request->validate([
      'title' => 'required'
    ]);

    // Eloquent ORM
    $category = new Category;
    $category->category_name = $request->title;
    $category->category_detail = $request->description;
    $category->save();

    return redirect()->route('back.category.create')->with('success', 'Category was created!');
  }

  public function edit($id)
  {
    $category   =   Category::findOrFail($id);
    return view('back.category.edit', compact('category'));
  }

  public function update($id,  Request $request)
  {
    // Form Validate
    $request->validate([
      'title' => 'required',
    ]);

    // Eloquent ORM
    $category = Category::findOrFail($id);
    $category->category_name = $request->title;
    $category->category_detail = $request->description;
    $category->save();

    return redirect()->route('back.category.edit', $id)->with('success', 'category was update!');
  }


  public function destroy($id)
  {
    Category::destroy($id);

    $categories   =   Category::get();
    return view('back.category.index', compact('categories'))->with('success', 'category was deleted!');
  }
}
