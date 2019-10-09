<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use View;

class FrontendController extends Controller
{
    public function index()
    {
        View::composer('layouts.front', function ($view) {
            $view->with('categories', Category::all());
        });
        return view('welcome');
    }
}
