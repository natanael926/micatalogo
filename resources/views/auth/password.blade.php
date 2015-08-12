@extends('layouts.login')

@section('content')
    <div class="login-wrapper">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
                            'url'    => '/password/email',
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

                <p class="submit">
                    {!! Form::submit('Send Password Reset Link', array('name' => 'wp-submit', 'id' => 'wp-submit', 'class' => 'btn btn-orange btn-block')); !!}
                </p>
            </form>

            <p id="nav">
                {!! link_to('/auth/login', $title = 'Log In', $attributes = array('class' => 'pull-right', 'title' => 'Log In'), $secure = null); !!}
                {!! link_to('auth/register', $title = 'Sign Up', $attributes = array('class' => 'pull-left', 'title' => 'Sign Up'), $secure = null); !!}
            </p>

        </div>
    </div>
@endsection
