@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')

<div class="login-box">
    <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="hidden" name="namelogin" value="backend" class="namelogin">
        <div class="form-group has-feedback">
            <input type="number" name="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" value="{{ old('mobile') }}" placeholder="Mobile" required autofocus>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            @if ($errors->has('mobile'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mobile') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>
        <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
            <label>
                <input type="checkbox"> Remember Me
            </label>
            </div>
        </div><!-- /.col -->
        <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center">
        <!-- <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="{{route('register')}}" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@endsection
