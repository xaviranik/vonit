@extends('layouts.front')

@section('content')
<!-- Home -->
<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background"
                    style="background-image:url({{ asset('static/slider/slider_1.png') }})">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn"
                                    data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Various products, One Destination</div>
                                    <div class="home_slider_subtitle"><h2>Feel free to check our huge collection of products!</h2></div>
                                    <div class="button button_light home_button"><a href="/">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background"
                    style="background-image:url({{ asset('static/slider/slider_2.png') }})">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn"
                                    data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Various products, One Destination</div>
                                    <div class="home_slider_subtitle"><h2>Feel free to check our huge collection of products!</h2></div>
                                    <div class="button button_light home_button"><a href="/">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background"
                    style="background-image:url({{ asset('static/slider/slider_3.png') }})">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content" data-animation-in="fadeIn"
                                    data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Various products, One Destination</div>
                                    <div class="home_slider_subtitle"><h2>Feel free to check our huge collection of products!</h2></div>
                                    <div class="button button_light home_button"><a href="/">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Slider Dots -->

        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                <li class="home_slider_custom_dot active">01.</li>
                                <li class="home_slider_custom_dot">02.</li>
                                <li class="home_slider_custom_dot">03.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Latest Products -->
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Latest Products</h2>
                <hr>
                <div class="row">
                    <!-- Product -->
                    @forelse ($latest_products as $product)
                    <div class="product col-md-3">
                        <div class="product_image"><img src="{{ $product->ProductImage }}" alt=""></div>
                        <div class="product_extra product_new"><a href="/">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a></div>
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
<!-- Ad -->
<div class="avds_xl">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="avds_xl_container clearfix">
                    <div class="avds_xl_background" style="background-image:url({{ asset('theme/images/ad_1.jpg') }})">
                    </div>
                    <div class="avds_xl_content">
                        <div class="avds_title">Awesome Deals!</div>
                        <div class="avds_text">Stay with Vonit Technology and enjoy Awesome Deals Everyday!</div>
                        <div class="avds_link avds_xl_link"><a href="/">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@forelse ($subcategories as $subcategory)
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
                        <div class="product_extra product_new"><a href="/">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a></div>
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
@empty

@endforelse
<!-- Ad -->
<div class="avds_xl">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="avds_xl_container clearfix">
                    <div class="avds_xl_background" style="background-image:url({{ asset('theme/images/ad_2.jpg') }})">
                    </div>
                    <div class="avds_xl_content">
                        <div class="avds_title">Laptops & Gadgets</div>
                        <div class="avds_text">Buy Laptop & Gadgets at discounted rate!</div>
                        <div class="avds_link avds_xl_link"><a href="/">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Icon Boxes -->
<div class="icon_boxes">
    <div class="container">
        <div class="row icon_box_row">

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="theme/images/icon_1.svg" alt=""></div>
                    <div class="icon_box_title">Free Shipping inside Dhaka!</div>
                    <div class="icon_box_text">
                        <p>Enjoy free shipping inside Dhaka! Take chill pill and forget the hassle!</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="theme/images/icon_2.svg" alt=""></div>
                    <div class="icon_box_title">Free Returns</div>
                    <div class="icon_box_text">
                        <p>As long as the product is intact and fresh, We can assure free returns if you changed your mind anytime!</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="theme/images/icon_3.svg" alt=""></div>
                    <div class="icon_box_title">24h Fast Support</div>
                    <div class="icon_box_text">
                        <p>We got your back 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter -->
@include('includes.newsletter')
@endsection
