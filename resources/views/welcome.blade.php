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
                                    <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed
                                        viverra velit venenatis fermentum luctus.</div>
                                    <div class="button button_light home_button"><a href="#">Shop Now</a></div>
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
                                    <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed
                                        viverra velit venenatis fermentum luctus.</div>
                                    <div class="button button_light home_button"><a href="#">Shop Now</a></div>
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
                                    <div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed
                                        viverra velit venenatis fermentum luctus.</div>
                                    <div class="button button_light home_button"><a href="#">Shop Now</a></div>
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
                        <div class="product_extra product_new"><a href="categories.html">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a></div>
                            <div class="product_price">BDT. {{ $product->price }}</div>
                        </div>
                    </div>
                    @empty

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
                    <div class="avds_xl_background" style="background-image:url(theme/images/avds_xl.jpg)">
                    </div>
                    <div class="avds_xl_content">
                        <div class="avds_title">Amazing Devices</div>
                        <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a
                            ultricies metus.</div>
                        <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
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
                        <div class="product_extra product_new"><a href="#">New</a></div>
                        <div class="product_content">
                            <div class="product_title"><a href="{{ route('product.show', ['product' => $product]) }}">{{ $product->name }}</a></div>
                            <div class="product_price">BDT. {{ $product->price }}</div>
                        </div>
                    </div>
                    @empty

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
                    <div class="avds_xl_background" style="background-image:url(theme/images/avds_xl.jpg)">
                    </div>
                    <div class="avds_xl_content">
                        <div class="avds_title">Amazing Devices</div>
                        <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a
                            ultricies metus.</div>
                        <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
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
                    <div class="icon_box_title">Free Shipping Worldwide</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.
                            Sed nec molestie.</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="theme/images/icon_2.svg" alt=""></div>
                    <div class="icon_box_title">Free Returns</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.
                            Sed nec molestie.</p>
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="theme/images/icon_3.svg" alt=""></div>
                    <div class="icon_box_title">24h Fast Support</div>
                    <div class="icon_box_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.
                            Sed nec molestie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter -->
@include('includes.newsletter')
@endsection
