@extends('front.master')

@section('css')

@endsection

@section('body')
<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <h3 class="fw-bold">Login Account</h3>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                        <form action="{{ route('login') }}" method="POST" id="account-login">
                            @csrf
                            <div class="form-group">
                                <label for="singin-email-2">Email <span style="color: red">*</span></label>
                                <input type="text" name="email" class="form-control" id="singin-email-2" placeholder="Emaill" required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="singin-password-2">Password <span style="color: red">*</span></label>
                                <input type="password" class="form-control" placeholder="Password" id="singin-password-2" name="password" required>
                            </div><!-- End .form-group -->
                            <a href="#" class="forgot-link ">Forgot Your Password?</a>
                            <div class="form-group pt-3">
                                <input type="submit" class="btn btn-login text-white" value="Login">
                            </div><!-- End .form-footer -->
                        </form>
                        <div class="form-choice">
                            <p class="text-center">or sign in with</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-social-login btn-f w-100">
                                        <img src="{{ asset('/') }}assets/front/assets/image/facebook.png" alt="">
                                        Facebook
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('google.redirect') }}" class="btn btn-social-login btn-g">
                                        <img src="{{ asset('/') }}assets/front/assets/image/google.png" alt="">
                                        Google
                                    </a>
                                </div>
                            </div><!-- End .row -->
                        </div>
                        <p class="text-center pt-5 text-black">Don't have an account? <a href="{{ route('user.register') }}" style="color: rgb(98, 135, 236); font-weight:700">Create Your Account</a></p>

                    </div><!-- .End .tab-pane -->

                </div><!-- End .tab-content -->
            </div><!-- End .form-tab -->
        </div><!-- End .form-box -->
    </div><!-- End .container -->
</div>
@endsection

@section('js')

@endsection
