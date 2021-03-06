@extends('layouts.front')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/product.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/product_responsive.css') }}">
@endsection

@section('content')

<!-- Product Details -->

<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6 mt-5">
                <div class="details_image">
                    <div class="details_image_large"><img src="{{ $product->ProductImage }}" alt="">
                        <div class="product_extra product_new"><a href="">New</a></div>
                    </div>
                    {{-- <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img
                                src="images/details_1.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_2.jpg"><img
                                src="images/details_2.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_3.jpg"><img
                                src="images/details_3.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image="images/details_4.jpg"><img
                                src="images/details_4.jpg" alt=""></div>
                    </div> --}}
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6 mt-5">
                <div class="details_content">
                    <div class="details_name">{{ $product->name }}</div>
                    <div class="details_discount">BDT. {{ $product->price + 1600 }}</div>
                    <div class="details_price">BDT. {{ $product->price }}</div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Availability:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p>Buy now & Save a lot!</p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <div class="product_quantity clearfix">
                            <span>Qty</span>
                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            <div class="quantity_buttons">
                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                        class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                        class="fa fa-chevron-down" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="button cart_button"><a href="#">Add to cart</a></div>
                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row description_row">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Description</div>
                </div>
                <div class="description_text">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Newsletter -->
@include('includes.newsletter')
@endsection

@section('script')
    <script src="{{ asset('theme/js/product.js') }}"></script>
@endsection
