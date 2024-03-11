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
    .nav-dashboard {
        display: flex;
        margin-right: 10px;
    }
    .nav-dashboard .nav-link.active:before {
        left: 0;
        opacity: 0;
    }
    .nav-dashboard .nav-link.active{
        color: #6287ec;
        padding-left: 0px;
    }

    .nav-dashboard .nav-link:hover{
        color: #6287ec;
    }
    .nav-dashboard .nav-link{
        color: #000;
        margin-right: 20px;
        border-bottom: none;
        font-size: 14px;
        font-size: 16px;
        font-weight: 500;
    }
    .btn-outline-primary-2{
        color: #6287ec;
        border-color: #6287ec;
    }

    .btn-outline-primary-2:hover{
        color: #fff;
        background-color: #6287ec;
        border-color: #6287ec;
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
                <aside class="col-12 col-12">
                    <ul class="nav nav-dashboard flex mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Edit Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab-updatepass-link" data-toggle="tab" href="#tab-updatepass" role="tab" aria-controls="tab-updatepass" aria-selected="false">Update Password</a>
                        </li>
                    </ul>
                </aside>

                <div class="col-12">
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
                            <form method="post" action="{{ route('profile.update') }}" class="row g-3">
                                @csrf
                                @method('patch')
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <small class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <input id="name" name="name" type="text" value="{{ $user->name }}" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email address</label>
                                    <small class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <input id="email" name="email" type="email" class="form-control" value="{{ $user->email }}">
                                </div>
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <p>Your email address is unverified.</p>
                                    <button form="send-verification" class="btn btn-primary">Click here to re-send the verification email.</button>
                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                @endif

                                <div class="text-start py-3 px-2">
                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tab-updatepass" role="tabpanel" aria-labelledby="tab-updatepass-link">
                            <form method="post" action="{{ route('password.update') }}" class="row g-3">
                                @csrf
                                @method('put')
                                <div class="col-12">
                                    <label class="form-label">Current Password</label>
                                    <small class="text-danger">
                                        @error('current_password')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <input id="update_password_current_password" name="current_password" type="password" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">New Password</label>
                                    <small class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <input id="update_password_password" name="password" type="password" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password Confirmation</label>
                                    <small class="text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control">
                                </div>
                                <div class="text-start py-3 px-2">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .dashboard -->
</div><!-- End .page-content -->
@endsection

@section('js')

@endsection

