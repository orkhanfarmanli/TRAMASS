@extends('layout')

@section('content')
	<section id="signin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h2>Reset Password</h2>
                    <p>Please enter your username and password</p>
                    <form>
                        <div class="form-group">
                            <label for="inputEmail1">Username or Email</label>
                            <input type="email" class="form-control" id="inputEmail1" placeholder="">
                        </div>
                        <input type="submit" value="RESET PASSWORD" class="btn btn-success btn-lg text-center col-md-12 btn-2">
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
