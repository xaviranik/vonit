<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
        return view('welcome', compact('latest_products'));
    }
}
