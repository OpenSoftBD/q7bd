@extends('front.master')
@section('css')
@endsection
@section('body')
    <div class="intro-slider-container">
        <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": true}'>

            <div class="intro-slide" style="background-image: url({{ asset('/') }}assets/front/assets/images/demos/demo-2/slider/slide-1.jpg);">
            </div>

            <div class="intro-slide" style="background-image: url({{ asset('/') }}assets/front/assets/images/demos/demo-2/slider/slide-2.jpg);">
            </div>

            <div class="intro-slide" style="background-image: url({{ asset('/') }}assets/front/assets/images/demos/demo-2/slider/slide-3.jpg);">
            </div>
        </div>
        <!-- End .owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span>
        <!-- End .slider-loader -->
    </div>


    <div class="container py-5">
        <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
            </li>
        </ul>
    </div>
    <!-- End .container -->

    <div class="container-fluid">
        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            },
                            "1600": {
                                "items":6,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->
                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $251,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-2-1.jpg" alt="Product image" class="product-image">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->
                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $746,00
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-3-1.jpg" alt="Product image" class="product-image">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $970,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-4-1.jpg" alt="Product image" class="product-image">
                                <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$337,00</span>
                                <span class="old-price">Was $449,00</span>
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-5-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $675,00
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-6-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $457,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $251,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                </div>
                <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            },
                            "1600": {
                                "items":6,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-5-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $675,00
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-6-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $457,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $251,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                </div>
                <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            },
                            "1600": {
                                "items":6,
                                "nav": true
                            }
                        }
                    }'>
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-2-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->
                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $746,00
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-3-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $970,00
                            </div>
                            <!-- End .product-price -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->

                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-2/products/product-4-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-2/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div>
                            <!-- End .product-action-vertical -->

                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$337,00</span>
                                <span class="old-price">Was $449,00</span>
                            </div>
                            <!-- End .product-price -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                            </div>
                            <!-- End .product-nav -->
                        </div>
                        <!-- End .product-body -->
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                        <!-- End .product-action -->
                    </div>
                    <!-- End .product -->
                </div>
                <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
        </div>
        <!-- End .tab-content -->
    </div>
    <!-- End .container-fluid -->

    <div class="mb-5"></div>
    <!-- End .mb-5 -->


    <div class="container">
        <div class="heading heading-center mb-3">
            <h2 class="title">Top Selling Products</h2>
            <!-- End .title -->
        </div>
        <!-- End .heading -->

        <div class="tab-content">
            <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-7-1.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-8-1.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Madra Log Holder</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #927764;"><span class="sr-only">Color name</span></a>
                                    </div>
                                    <!-- End .product-nav -->

                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-9-1.jpg" alt="Product image" class="product-image">
                                        <img src="{{ asset('/') }}assets/front/assets/images/demos/demo-2/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Garden Armchair</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$94,00</span>
                                        <span class="old-price">Was $94,00</span>
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-10-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div>
                                    <!-- End .product-nav -->

                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-11-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Original Outdoor Beanbag</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $259,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-12-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">2-Seater</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $3.107,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-13-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-13-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $2.486,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-14-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-14-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $199,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-15-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-15-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $199,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-16-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-16-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Carronade Table Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $499,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-9-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Garden Armchair</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$94,00</span>
                                        <span class="old-price">Was $94,00</span>
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-12-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">2-Seater</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $3.107,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-13-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-13-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Furniture</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $2.486,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-8-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Madra Log Holder</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #927764;"><span class="sr-only">Color name</span></a>
                                    </div>
                                    <!-- End .product-nav -->

                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-11-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Original Outdoor Beanbag</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $259,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-14-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-14-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $199,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-15-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-15-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Decor</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $199,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-7-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-10-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $401,00
                                    </div>
                                    <!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div>
                                    <!-- End .product-nav -->

                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-16-1.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-16-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Lighting</a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Carronade Table Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $499,00
                                    </div>
                                    <!-- End .product-price -->
                                </div>
                                <!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div>
                                <!-- End .product-action -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .products -->
            </div>
            <!-- .End .tab-pane -->
        </div>
        <!-- End .tab-content -->
    </div>
    <!-- End .container -->

    <div class="container">
        <hr class="mt-1 mb-6">
    </div>
    <!-- End .container -->
@endsection

@section('js')

@endsection
