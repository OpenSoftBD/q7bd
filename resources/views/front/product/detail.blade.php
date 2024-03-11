@extends('front.master')
@section('title')
    {{ $product->name }}
@endsection
@section('css')
<style>
    
</style>
@endsection
@section('body')
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-2 mt-5">

        <div class="container upper d-flex align-items-center shadow w-max h-80 rounded-pill ">
            <div
                class="top-bar w-full h-auto flex justify-between items-center bg-white py-4 px-8 rounded-full drop-shadow-md">
                <div class="flex justify-between items-center gap-3"><small>Share: </small><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class=" cursor-pointer" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                        </path>
                    </svg><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512"
                        class=" cursor-pointer" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z">
                        </path>
                    </svg></div>
                <div class="flex justify-between items-center gap-5"><small
                        class="flex justify-between items-center gap-2 cursor-pointer"><svg stroke="currentColor"
                            fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                            stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>Save</small><small class="flex justify-between items-center gap-2 cursor-pointer"><svg
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M320 488c0 9.5-5.6 18.1-14.2 21.9s-18.8 2.3-25.8-4.1l-80-72c-5.1-4.6-7.9-11-7.9-17.8s2.9-13.3 7.9-17.8l80-72c7-6.3 17.2-7.9 25.8-4.1s14.2 12.4 14.2 21.9v40h16c35.3 0 64-28.7 64-64V153.3C371.7 141 352 112.8 352 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V320c0 70.7-57.3 128-128 128H320v40zM456 80a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM192 24c0-9.5 5.6-18.1 14.2-21.9s18.8-2.3 25.8 4.1l80 72c5.1 4.6 7.9 11 7.9 17.8s-2.9 13.3-7.9 17.8l-80 72c-7 6.3-17.2 7.9-25.8 4.1s-14.2-12.4-14.2-21.9V128H176c-35.3 0-64 28.7-64 64V358.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V192c0-70.7 57.3-128 128-128h16V24zM56 432a24 24 0 1 0 48 0 24 24 0 1 0 -48 0z">
                            </path>
                        </svg>Add to Compare</small></div>
            </div>
        </div><!-- End .container -->

    </nav><!-- End .breadcrumb-nav -->



    <div class="page-content pt-5">
        <div class="container">
            <div class="product-details-top">
                <div class="row shadow-xl mb-2">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{ asset($product->image) }}"
                                        data-zoom-image="{{ asset($product->image) }}" style="width: 80%"
                                        alt="product image">

                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure>

                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h2 class="product-title" style="font-size: 30px; color:rgb(98, 135, 236)">{{ $product->name }}
                            </h2>

                            <div class="ratings-container">
                                <div class="keypoints flex justify-start items-start gap-3 mb-4 xl:items-center">
                                    <p>Discount Price: <span
                                            class="font-bold">{{ $product->regular_price - $product->sale_price }}৳</span>
                                    </p>
                                    <p>Regular Price: <span class="font-semibold">{{ $product->regular_price }}৳</span></p>
                                    <p>Status: <span class="font-semibold">{{ $product->product_status }}</span></p>
                                    <p>Brand: <span class="font-semibold">{{ $product->brand }}</span></p>
                                </div>
                            </div><!-- End .rating-container -->

                            <h5 class="text-xl font-medium mb-2 -mt-6" style="color: rgb(98, 135, 236); margin-top: -30px;">
                                Payment Options</h5>

                            <div class=" ">
                                <form
                                    class="flex justify-start items-start gap-5 flex-col sm:flex-row xl:flex-row xl:items-center">
                                    <label
                                        class="option1 border border-[#2d7385]&quot;border-slate-300&quot; flex justify-center items-center gap-10 py-5 px-10 rounded-md ">
                                        <input type="radio" name="paymentMethod">
                                        <div class=" items-start flex-col gap-1">
                                            <h4 class="text-2xl font-semibold"> {{ $product->sale_price }}৳</h4>
                                            <small>Cash Discount Price</small>
                                            <br>
                                            <small>Online / Cash Payment</small>
                                        </div>
                                    </label>
                                </form>
                            </div>

                            <div class="quantity-section flex items-center gap-3 mt-2 mb-2"><button
                                    class="box rounded border border-gray-200 text-2xl">-</button>
                                <div
                                    class="box bg-gray-100 rounded border border-gray-200 text-xl flex justify-center items-center">
                                    5</div><button class="box rounded border border-gray-200 text-2xl">+</button>
                            </div>

                            <div class="buy-section">
                                <div class="w-full mt-5 flex gap-5 sm:w-1/2"><button
                                        class="w-full py-3 flex items-center justify-center gap-3 text-white rounded-md"
                                        style="background: rgb(98, 135, 236);">Buy Now</button><button disabled=""
                                        class="w-full py-3 flex items-center justify-center gap-3 rounded-md border border-gray-300 opacity-60"><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                                            </path>
                                        </svg>
                                        <p>Already in Cart</p>
                                    </button></div>
                            </div>

                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

        </div><!-- End .container -->
    </div>


    <div class="grid-container">
        <div class="grid grid-cols-8" style="
            margin-left: 5%;
            margin-right:2%">

            <div class="mt-4"><button type="button" class="btn btn-primary btn-lg rounded-md">Specification</button>
                <button type="button" class="btn btn-outline-primary btn-lg rounded-md">Description</button></div>

            <table class="w-full bg-white my-5 shadow-md rounded-md overflow-hidden">
                <thead>
                    <tr class="border">
                        <th class="py-4 border px-4 text-left uppercase">Properties</th>
                        <th class="py-4 border px-4 text-left uppercase">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border">
                        <td class="py-2 border px-4">Brand:</td>
                        <td class="py-2 border px-4">Usha Martin</td>
                    </tr>
                    <tr class="border">
                        <td class="py-2 border px-4">Model:</td>
                        <td class="py-2 border px-4">6 Core</td>
                    </tr>
                </tbody>
            </table>
            <div id="description" class="product-details1 w-full bg-white p-5 rounded-md drop-shadow-md mb-6">
                <h2 class="text-xl mb-4 font-medium" style="color: rgb(98, 135, 236);">Description</h2>
                <p class="text-justify text-base">The latest price of the Usha Martin 2 Core Fiber Optic Cable in
                    Bangladesh is 11.30৳. You can buy the Usha Martin 6 Core Fiber Optic Cable at the best price from our
                    website or visit our showroom. Stay connected with our what’s Page or Facebook Page.</p>
            </div>
        </div>
        <div class="shadow-2xl mt-5" style="margin-right: 5%;background-color:#fff">
            <div class=" w-auto h-auto p-5">
                <h4 class="font-medium py-3 border-b border-slate-200 text-center" style="font-size: 30px; color:rgb(98, 135, 236)">Related Products</h4>
                <hr>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        {{-- <img src="{{}}" class="card-img" alt="..."> --}}
                        <img id="product-zoom" src="{{ asset($product->image) }}"
                        data-zoom-image="{{ asset($product->image) }}"
                        alt="product image">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
