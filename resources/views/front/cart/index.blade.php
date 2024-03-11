@extends('front.master')

@section('title')
    Cart
@endsection

@section('css')

<style>
    .page-content {
  background:none;
}
.card{
    border-radius: 10px !important;
}
thead{
    background-color: rgb(98, 135, 236);
}
.table th, .table thead th{
    font-size: 17px;
    padding: 16px;
    color: white;
    font-weight: 600;
}
.remove-button{
    background: transparent;
  border: none;
  color: red;
}
.card-footer{
    border-top: none;
    background: transparent;
    font-size: 20px;
    font-weight: 600;
    text-align: end;
}
.checkout-button{
    min-width: 100px;
    padding: 10px;
    background: #6488e8;
    border-radius: 5px;
    color: white;
}
.checkout-button:hover{
    background: #3a5ab9;
    color: #ffff
}
.product-title {
    font-size: 20px;
}

</style>
@endsection


@section('body')

<nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
    <div class="container-fluid mx-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card p-5 m-5" style="border-top:none">
                        <div class="card-header">
                            <h4 class="card-title mb-4" style="font-size: 28px">
                                Shopping Cart
                            </h4>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Title</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach($carts as $productId => $product)
                                    @php
                                        $total += $product['price'] * $product['quantity'];
                                    @endphp
                                    <tr data-id="{{ $productId }}">
                                        <td class="product-col" style="width: 170px">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset($product['photo']) }}" alt="Product image">
                                                    </a>
                                                </figure>
                                            </div>
                                        </td>
                                        <td>
                                            <h3 class="product-title">
                                                <a href="#">{{ $product['name'] }}</a>
                                            </h3>
                                        </td>
                                        <td class="price-col">${{ $product['price'] }}</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <input type="number" class="form-control" value="{{ $product['quantity'] }}" min="1" max="10" step="1" data-decimals="0" required>
                                                <input type="hidden" id="productId" value="{{ $productId }}">
                                            </div>
                                        </td>
                                        <td class="total-col">${{ $product['price'] * $product['quantity'] }}</td>
                                        <td class="remove-col">
                                            <button class="remove-button" onclick="removeFromCart('{{ $productId }}')">Remove</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="subtotal">
                                Subtotal: <span>${{ $total }}</span>
                                <button type="submit" class="btn checkout-button">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
@endsection

@section('js')

<script>
    $(document).ready(function() {
        $('.cart-product-quantity input').on('change', function() {
            var productId = $(this).closest('tr').data('id');
            var quantity = $(this).val();
            updateToCart(productId, quantity);
            console.log(productId, quantity);
        });
        let updateCartUrl = "{{ route('cart.update', ':productId') }}";

        function updateToCart(productId, quantity) {
            let url = updateCartUrl.replace(':productId', productId);
            $.ajax({
                url: url,
                type: "PUT",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId,
                    quantity: quantity
                },
                success: function(response) {
                    console.log(response);
                    toastr.success('<span style="font-size:16px">Product updated to cart successfully!</span>');
                    location.reload();
                }
            });
        }

    });
    function removeFromCart(productId) {
        $.ajax({
            url: "{{ route('cart.remove') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                product_id: productId
            },
            success: function(response) {
                toastr.success('<span style="font-size:16px">Product removed from cart successfully!</span>');
                location.reload();
            }
        });
    }
</script>
@endsection
