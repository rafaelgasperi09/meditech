<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="container-fluid px-0">
        <div class="row">
            <!-- Login logo -->
            <div class="col-lg-6 login-wrap">
                <div class="login-sec">
                    <div class="log-img">
                        <img class="img-fluid" src="{{ URL::asset('/assets/img/login-02.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
            <!-- /Login logo -->
            <!-- Login Content -->
            <div class="col-lg-6 login-wrap-bg">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <div class="account-logo">
                                    <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/login-logo.png') }}"
                                                                  alt=""></a>
                                </div>
                                <h2>Login</h2>
                                <!-- Form -->
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" id="email" value="" name="email">
                                        <div class="text-danger pt-2">
                                            @error('0')
                                            {{ $message }}
                                            @enderror
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input class="form-control pass-input" type="password" id="password" name="password" value="">
                                        <span class="profile-views feather-eye-off toggle-password"></span>
                                        <div class="text-danger pt-2">
                                            @error('0')
                                            {{ $message }}
                                            @enderror
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="forgotpass">
                                        <div class="remember-me">
                                            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                                <input type="checkbox" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <a href="{{ url('forgot-password') }}">Forgot Password?</a>
                                    </div>
                                    <div class="form-group login-btn">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                                <!-- /Form -->

                                <div class="next-sign">
                                    <p class="account-subtitle">Need an account? <a href="{{ url('register') }}">Sign Up</a>
                                    </p>
                                    <!-- Social Login -->
                                    <div class="social-login">
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-01.svg') }}"
                                                alt=""></a>
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-02.svg') }}"
                                                alt=""></a>
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-03.svg') }}"
                                                alt=""></a>
                                    </div>
                                    <!-- /Social Login -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Content -->
        </div>
    </div>
@endsection
