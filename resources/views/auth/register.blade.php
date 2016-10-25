@extends('layouts.main_layout')

@section('content')


<section id="signup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h2>Sign up</h2>
                    <p>Please enter your username and password</p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                       {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <label for="name" class="control-label">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">

                            <label for="surname" class="control-label">Surname</label>
                            <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email" class="control-label">E-Mail     Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">

                            <label for="address" class="control-label">Address</label>
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       <label for="password" class="control-label">Password</label>
                           <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <button type="submit" class="btn btn-success btn-lg text-center col-md-12 btn-2">REGISTER</button>
<!--
                        <p class="text-center">OR</p>
                        <button type="submit" class="btn btn-primary btn-lg text-center col-md-12 btn-2"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> LOGIN WITH FACEBOOK</a></button>
-->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
