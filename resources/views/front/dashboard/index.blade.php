@extends('front.master')

@section('css')
<style>
    .page-content{
        padding-top: 80px
    }
    .user-container{
        display: flex;
        align-items: center;
    }
    .user-image{
        margin-right: 25px;
    }
    .user-details{
        margin-top: 20px;
    }
</style>
@endsection


@section('body')

<div class="page-content">
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-6 user-container">
                    <div class="user-image">
                        <img src="{{ asset('/') }}assets/front/assets/image/dummy-user.jpg" height="100px" width="100px" alt="{{ $user->name }}" style="border-radius: 50%; color:transparent">
                    </div>
                    <div class="user-details">
                        <p>Hello</p>
                        <h5>{{ $user->name }}</h5>
                    </div>
                </div>
                <div class="col-6 justify-end text-end text-right">
                    <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-danger log-out rounded" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="row">
                <aside class="col-md-4 col-lg-3">
                    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Out</a>
                        </li>
                    </ul>
                </aside><!-- End .col-lg-3 -->

                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                            <p>Hello <span class="font-weight-normal text-dark">{{ $user->name }}</span>
                            <br>
                            From your account dashboard you can view your <a href="#tab-orders" class="tab-trigger-link link-underline">recent orders</a>, manage your <a href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit your password and account details</a>.</p>
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                            <p>No order has been made yet.</p>
                            <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Display Name *</label>
                                <input type="text" class="form-control" required>
                                <small class="form-text">This will be how your name will be displayed in the account section and in reviews</small>

                                <label>Email address *</label>
                                <input type="email" class="form-control" required>

                                <label>Current password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control">

                                <label>New password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control">

                                <label>Confirm new password</label>
                                <input type="password" class="form-control mb-2">

                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                        </div><!-- .End .tab-pane -->
                    </div>
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .dashboard -->
</div><!-- End .page-content -->
@endsection

@section('js')

@endsection
