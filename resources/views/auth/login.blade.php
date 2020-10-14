<?php

use App\Http\Controllers\Platform\Core\Helper\SettingsHelper as SettingsHelper;
use Krucas\Settings\Facades\Settings as Settings;

?>

@extends('layouts.auth')

@section('body_class','login-page')

@section('content')

    <div class="container-fluid login-page">
        <div class="row">
            <div class="col-md-7 pad-0">
                <div class="slider-login">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/image/img-11.jpg"></div>
                        <div class="item"><img src="/image/img-11.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="login-right">
                    <div class="login-form">
                        <div class="fusion-logo">
                            <a href="javascript:void(0);"><img src="{{ asset('image/fusion-logo.png') }}" alt=""></a>
                        </div>
                        <div class="login-bx" id="log-pass">
                            <h3>Log in</h3>
                            <form id="sign_in" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                    <div class="{{ $errors->has('username') ? ' is-invalid' : '' }}">
                                    <input type="text" placeholder='username' name="username" autofocus  value="{{ old('username') }}" autocomplete="off">
                                </div>
                                <div class="{{ $errors->has('password') ? ' error' : '' }}">
                                    <input type="password" placeholder="password" name="password" autofocus>
                                     </div>
                                <span>
                                    <button type="submit" class="submit">Login</button>
                                </span>
                                <div class="forgot-pass" id="forgot"><a href="#"><!-- Forgot Password?</a></div>
                                <?php print_r($errors); ?>
                                @if (isset($errorMessage))
                                    <span class="erorr-msg">
                                            <strong>{{ $errorMessage }}</strong>
                                    </span>
                                @endif -->
                            </form>
                        </div>

                        <div class="login-bx" id="confirm-pass">
                            <h3>Log in</h3>
                            <form>
                                <span>
                                    <input type="text" placeholder="Email" >
                                </span>
                                <span>
                                    <button type="button" class="submit">Submit</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection


 
