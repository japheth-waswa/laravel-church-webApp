@extends('auth.custom.partials.master')

@section('title')
Login
@endsection


@section('content')
<div class="login-content">
    <h1 class="text-capitalize">{{ Helpers::settingsVal('website_name') }} Login</h1>
    <form role="form" method="POST" action="{{ route('login') }}" class="login-form">
        {{ csrf_field() }}
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>Enter email and password. </span>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
             <button class="close" data-close="alert"></button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-xs-6">
                <input class="form-control form-control-solid placeholder-no-fix form-group" 
                       type="email" autocomplete="off" placeholder="Email Address" name="email"
                       required autofocus="" value="{{ old('email') }}"/>
            </div>
            <div class="col-xs-6">
                <input class="form-control form-control-solid placeholder-no-fix form-group" 
                       type="password" autocomplete="off" placeholder="Password" name="password" 
                       required/> </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="rem-password">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                               <span></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-8 text-right">
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}" id="" class="forget-password">Forgot Password?</a>
                </div>
                <button class="btn green" type="submit">Sign In</button>
            </div>
        </div>
    </form>

</div>
@endsection