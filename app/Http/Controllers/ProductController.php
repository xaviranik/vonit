<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('subcategory')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = SubCategory::with('category')->get();
        return view('admin.product.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'subcategory' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($files = $request->file('image')) {
            $destinationPath = public_path('/img/'); // upload path
            $productImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $productImage);
        }

        Product::create([
            'name' => $request->name,
            'subcategory_id' => $request->subcategory,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $productImage,
        ]);

        Session::flash('success', 'Product created successfully!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $subcategories = SubCategory::all();
        return view('admin.product.edit', compact('product', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'subcategory' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        if ($files = $request->file('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $oldProductImage = public_path("img/{$product->image}");
            if (File::exists($oldProductImage))
            {
                unlink(public_path('/img/') . $product->image);
            }
            $destinationPath = public_path('/img/');
            $productImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $productImage);
        }

        $product->name = $request->name;
        $product->subcategory_id = $request->subcategory;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $productImage;
        

        $product->save();

        Session::flash('success', 'Product updated successfully!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('success', 'Product deleted successfully!');
        return redirect()->route('product.index');
    }
}
