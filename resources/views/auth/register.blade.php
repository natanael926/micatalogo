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

            {!! Form::open(array(
                            'url'    => '/auth/register',
                            'class'  => 'form-horizontal',
                            'method' => 'POST',
                            'id'     => 'loginform',
                            'name'   => 'loginform',
                            'role'   => 'form')) !!}

                <p>
                    {!! Form::label('user_login', 'Full Name'); !!}<br />
                    {!! Form::text('name', $value = old('name'), $attributes = array(
                                                                                    'class'  => 'input',
                                                                                    'id'     => 'user_login',
                                                                                    'size'   => '20')); !!}

                </p>
                <p>
                    {!! Form::label('user_login', 'Email'); !!}<br />
                    {!! Form::email('email', $value = old('email'), $attributes = array(
                                                                                'class'  => 'input',
                                                                                'id'     => 'user_login',
                                                                                'size'   => '20')); !!}
                </p>

                <p>
                    {!! Form::label('user_pass', 'Password'); !!}<br />
                    {!! Form::password('password', $attributes = array(
                                                                        'class'  => 'input',
                                                                        'id'     => 'user_pass',
                                                                        'size'   => '20')); !!}

                    </label>
                </p>
                <p>
                    {!! Form::label('user_pass', 'Confirm Password'); !!}<br />
                    {!! Form::password('password_confirmation', $attributes = array(
                                                                        'class'  => 'input',
                                                                        'id'     => 'user_pass1',
                                                                        'size'   => '20')); !!}
                </p>
                {{--<p class="forgetmenot">--}}
                {{--<label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> I agree to terms to conditions</label>--}}
                {{--</p>--}}



                <p class="submit">
                    {!! Form::submit('Sign Up', array('name' => 'wp-submit', 'id' => 'wp-submit', 'class' => 'btn btn-orange btn-block')); !!}
                </p>
            {!! Form::close() !!}

            <p id="nav">
                {!! link_to('password/email', $title = 'Forgot password?', $attributes = array('class' => 'pull-left', 'title' => 'Password Lost and Found'), $secure = null); !!}
                {!! link_to('auth/login', $title = 'Log In', $attributes = array('class' => 'pull-right', 'title' => 'Log In'), $secure = null); !!}
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




