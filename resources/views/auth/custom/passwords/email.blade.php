@extends('auth.custom.partials.master')

@section('title')
Forgot Password
@endsection


@section('content')
<div class="login-content">
    <h1 class="text-capitalize">{{ Helpers::settingsVal('website_name') }} Reset Password</h1>
    <form class="form" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>Enter email. </span>
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
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <input class="form-control form-control-solid placeholder-no-fix form-group" 
                       type="email" autocomplete="off" placeholder="Email Address" name="email"
                       required autofocus="" value="{{ old('email') }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                &nbsp;
            </div>
            <div class="col-sm-8 text-right">
                <button class="btn green" type="submit">Send Password Reset Link</button>
            </div>
        </div>
    </form>
</div>
@endsection