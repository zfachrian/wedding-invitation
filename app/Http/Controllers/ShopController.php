<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;

class ShopController extends Controller
{

    public function index()
    {
        // $product = Product::with('category')->get();
        $products = Product::with('category')->orderByDesc('products.updated_at', 'desc')->get();
        $categories = Category::get();
        return view('shop', compact('products', 'categories'));
    }

    public function indexByCategory($id)
    {
        $products = Product::with('category')->where('products.categories_id', '=', $id)->orderByDesc('products.updated_at', 'desc')->get();
        $categories = Category::get();
        $path = Category::findOrFail($id);
        return view('shop', compact('products', 'categories', 'path'));
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $relatedProducts = Product::with('category')->where([['products.categories_id', '=', $product->category->id,], ['products.id', '!=', $product->id,]])->orderByDesc('products.updated_at', 'desc')->get();
        return view('detailShop', compact('product', 'relatedProducts'));
    }
}
