<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Banner;
use App\Http\Models\Category;
use App\Http\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderByDesc('updated_at', 'desc')->get();
        $categories = Category::orderByDesc('updated_at', 'desc')->limit(3)->get();
        $newProducts = Product::orderByDesc('created_at', 'desc')->limit(6)->get();
        $afordableProducts = Product::orderBy('product_price', 'asc')->limit(6)->get();
        return view('home', compact('banners', 'categories', 'newProducts', 'afordableProducts'));
    }
}
