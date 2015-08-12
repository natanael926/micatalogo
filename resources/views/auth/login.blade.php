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

            {!! Form::open(array(
                        'url'    => '/auth/login',
                        'class'  => 'form-horizontal',
                        'method' => 'POST',
                        'role'   => 'form')) !!}

                <p>
                    {!! Form::label('user_login', 'E-mail'); !!}<br />
                    {!! Form::email('email', $value = old('email'), $attributes = array(
                                                                                    'class'  => 'input',
                                                                                    'id'     => 'user_login',
                                                                                    'size'   => '20')); !!}
                </p>

                <p>
                    {!! Form::label('user_pass', 'Password'); !!}<br />
                    {!! Form::password('password', array('class' => 'input', 'id'  => 'user_pass', 'size' => '20')); !!}
                </p>

                <p class="forgetmenot">
                    <label class="icheck-label form-label" for="rememberme">
                        {!! Form::checkbox('remember', 'forever', true, array('id' => 'rememberme', 'class' => 'skin-square-orange' ) ); !!}
                    Remember me</label>
                </p>

                <p class="submit">
                    {!! Form::submit('Sign In', array('name' => 'wp-submit', 'id' => 'wp-submit', 'class' => 'btn btn-orange btn-block')); !!}
                </p>
            {!! Form::close() !!}
            <p id="nav">
                {!! link_to('password/email', $title = 'Forgot password?', $attributes = array('class' => 'pull-left', 'title' => 'Password Lost and Found'), $secure = null); !!}
                {!! link_to('auth/register', $title = 'Sign Up', $attributes = array('class' => 'pull-right', 'title' => 'Sign Up'), $secure = null); !!}
            </p>

        </div>
    </div>
@endsection
