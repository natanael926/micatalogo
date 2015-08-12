@extends('layouts.login')

@section('content')
    <div class="register-wrapper">

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

        <div id="register" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
            <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

            <form class="form-horizontal" role="form" method="POST" name="loginform" id="loginform" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <p>
                    <label for="user_login">Full Name<br />
                        <input type="text" name="name" id="user_login" class="input" value="{{ old('name') }}" size="20" /></label>
                </p>
                <p>
                    <label for="user_login">Email<br />
                        <input type="email" name="email" id="user_login" class="input" value="{{ old('email') }}" size="20" /></label>
                </p>
                <p>
                    <label for="user_login">Username<br />
                        <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
                </p>
                <p>
                    <label for="user_pass">Password<br />
                        <input type="password" name="password" id="user_pass" class="input" value="" size="20" />

                    </label>
                </p>
                <p>
                    <label for="user_pass">Confirm Password<br />
                        <input type="password" name="password_confirmation" id="user_pass1" class="input" value="" size="20" />
                    </label>
                </p>
                {{--<p class="forgetmenot">--}}
                {{--<label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> I agree to terms to conditions</label>--}}
                {{--</p>--}}



                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
                </p>
            </form>

            <p id="nav">
                <a class="pull-left" href="{{ url('/password/email') }}" title="Password Lost and Found">Forgot password?</a>
                <a class="pull-right" href="{{ url('/auth/login') }}" title="Sign Up">Log In</a>
            </p>
            <div class="clearfix"></div>
            <div class="col-md-12 text-center register-social">

                <a href="#" class="btn btn-primary btn-lg facebook"><i class="fa fa-facebook icon-sm"></i></a>
                <a href="#" class="btn btn-primary btn-lg twitter"><i class="fa fa-twitter icon-sm"></i></a>
                <a href="#" class="btn btn-primary btn-lg google-plus"><i class="fa fa-google-plus icon-sm"></i></a>
                <a href="#" class="btn btn-primary btn-lg dribbble"><i class="fa fa-dribbble icon-sm"></i></a>

            </div>

        </div>
    </div>

@endsection




