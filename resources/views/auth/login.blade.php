@extends('layouts.login_register')

@section('page_title', 'Login')

@section('content')

    <div class="row voffset7">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal voffset3" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        @if($errors->has('error_message'))
                            <div class="col-md-offset-4 col-md-6 has-error">
                                <span class="help-block">
                                    <strong>{{ $errors->first('error_message') }}</strong>
                                </span>
                            </div>
                        @endif

                         
                        @if ( session()->has('message') )                        
                        <div class="form-group alert alert-success alert-dismissable">
                            <div class="col-md-offset-2 col-md-8">
                                <span class="help-block">
                                    <strong>{{ session()->get('message') }}</strong>
                                </span>
                            </div>
                        </div>
                        @endif

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">                         
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/register') }}">Register</a>
                               <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                    
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    @if($errors->has('error_message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('error_message') }}
                    </div>
                    @endif
                   
                    <fieldset>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">

                            <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">

                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                      
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

-->
@endsection
