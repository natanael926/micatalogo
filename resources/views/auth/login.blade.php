@extends('layouts.login')

@section('content')

    <div class="login-wrapper">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
            <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <p>
                    <label for="user_login">E-mail<br />
                        <input type="email" name="email" id="user_login" class="input" value="{{ old('email') }}" size="20"  /></label>
                </p>
                <p>
                    <label for="user_pass">Password<br />
                        <input type="password" name="password" id="user_pass" class="input" value="demo" size="20" /></label>
                </p>
                <p class="forgetmenot">
                    <label class="icheck-label form-label" for="rememberme"><input name="remember" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me</label>
                </p>



                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                </p>
            </form>

            <p id="nav">
                <a class="pull-left" href="{{ url('/password/email') }}" title="Password Lost and Found">Forgot password?</a>
                <a class="pull-right" href="{{ url('/auth/register') }}" title="Sign Up">Sign Up</a>
            </p>

        </div>
    </div>
@endsection
