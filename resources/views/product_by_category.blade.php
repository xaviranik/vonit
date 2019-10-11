@extends('layouts.front')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/categories.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/categories_responsive.css') }}">
@endsection

@section('content')

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <div class="results">Showing <span>{{ count($subcategory->products) }}</span> results</div>
                    <div class="sorting_container ml-md-auto">
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Sort by</span>
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn"
                                            data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span>
                                        </li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                            <span>Price</span></li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                            <span>Name</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="products">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>{{ $subcategory->name . ' ' . $subcategory->category->name }}</h2>
                                <hr>
                                <div class="row">
                                    <!-- Product -->
                                    @forelse ($subcategory->products as $product)
                                    <div class="product col-md-3">
                                        <div class="product_image"><img src="{{ $product->ProductImage }}" alt=""></div>
                                        <div class="product_extra product_new"><a href="#">New</a></div>
                                        <div class="product_content">
                                            <div class="product_title"><a
                                                    href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="product_price">BDT. {{ $product->price }}</div>
                                        </div>
                                    </div>
                                    @empty
                                    <h4 class="py-5">Nothing here yet! Feel free to check again later!</h4>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Newsletter -->
@include('includes.newsletter')
@endsection

@section('script')
<script src="{{ asset('theme/js/categories.js') }}"></script>
@endsection
