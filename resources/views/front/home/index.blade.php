@extends('front.master')
@section('css')
<style>
    .text-bold{
        font-weight: 700;
    }
    .text-decoration-line-through{
        text-decoration: line-through;
        color: #7a7979;
    }
    .product.product-11 a:hover{
        text-decoration: none;
        color: #6287ec;
    }
    .product.product-11 .btn-product-icon {
        color: #fff;
        border: 1px solid #ebebeb;
        background: #6287ec;
    }
    .product.product-11 .btn-product-icon:hover, .product.product-11 .btn-product-icon:focus {
        color: #fff;
        background: #6287ec;
        border: 1px solid #6287ec;
    }
</style>
@endsection
@section('body')
    <div class="intro-slider-container mb-5">
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
        <div class="row">
            <div class="col-12 text-center text-bold">
                <h4 class="text-bold">Popular Categories</h4>
                <p class="text-bold">Acquire your preferred item from the popular category!</p>
            </div>
        </div>
    </div>
    <!-- End .container -->

    <div class="container-fluid">
        <div class="categories">
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                <div class="col-6 col-md-2 col-lg-2">
                    <div class="product product-11 text-center">
                        <a href="{{ route('category.product', $category->id) }}">
                            <div class="card text-center" style="padding: 30px">
                                <div class="card-body p-0">
                                    <img src="{{ asset($category->image) }}" class="mx-auto d-block mb-2">
                                    <h3 class="product-title">{{ $category->name }}</h3>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
            <!-- End .row -->
        </div>
    </div>
    <!-- End .container-fluid -->

    <div class="mb-5"></div>
    <!-- End .mb-5 -->


    <div class="container-fluid">
        <div class="heading heading-center mb-3 text-bold">
            <h2 class="title text-bold">Featured Products</h2>
            <p class="text-bold">Confirm and grab your desired product!</p>
        </div>
        <div class="products">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-11">
                        <figure class="product-media">
                            <a href="{{ route('product.detail', $product->id)}}">
                                <img src="{{ asset($product->image) }}" alt="Product image" class="product-image">
                                <img src="{{ asset($product->image) }}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}); return false;">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                                <a href="#" class="btn-product-icon"><i class="fa-solid fa-heart"></i></a>
                                <a href="#" class="btn-product-icon"><i class="fa-solid fa-code-compare"></i></a>
                                <a href="#" class="btn-product-icon"><i class="fa-solid fa-eye"></i></a>
                            </div>
                        </figure>

                        <div class="product-body text-left">
                            <h3 class="product-title mb-2"><a href="{{ route('product.detail', $product->id) }}">{{ $product->name }}</a></h3>
                            <div class="product-price text-left">
                                <span>${{ $product->sale_price }}</span> <span class="text-decoration-line-through ml-3">${{ $product->regular_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End .container -->

    <div class="container">
        <hr class="mt-1 mb-6">
    </div>
    <!-- End .container -->
@endsection

@section('js')

<script>
    function addToCart(productId, productName, productPrice) {
        let formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('product_id', productId);
        formData.append('quantity', 1);
        $.ajax({
            url: "{{ route('cart.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                toastr.success('<span style="font-size:15px">Product added to cart successfully!</span>');
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

@endsection
