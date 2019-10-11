<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use View;

class FrontendController extends Controller
{
    public function index()
    {
        View::composer('layouts.front', function ($view) {
            $view->with('categories', Category::all());
        });
        $latest_products = Product::latest()->take(8)->get();
        $subcategories = SubCategory::with('category')->take(3)->get();
        return view('welcome', compact('latest_products', 'subcategories'));
    }
}
