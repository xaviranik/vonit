<?php

namespace App\Http\Controllers;


use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index()
    {
        $latest_products = Product::latest()->take(8)->get();
        $subcategories = SubCategory::with('category')->take(3)->get();
        return view('welcome', compact('latest_products', 'subcategories'));
    }
}
