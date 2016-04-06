@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="row">
                <div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>Sign In</h2>
				</div>
				<div class="panel-body">
					<form class="form-vertical" role="form" action="{{ route('auth.signin') }}" method="post">
		                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                                        <label for="email">Email</label>
		                                        <input type="text" name="email" class="form-control" id="email">
		                                        @if ($errors->has('email'))
		                                                <span class="help-block">{{ $errors->first('email') }}</span>
		                                        @endif
		                                </div>
		                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                                        <label for="password">Password</label>
		                                        <input type="password" name="password" class="form-control" id="password">
		                                        @if ($errors->has('password'))
		                                                <span class="help-block">{{ $errors->first('password') }}</span>
		                                        @endif
		                                </div>
		                                <div class="checkbox">
		                                        <label>
		                                                <input type="checkbox" name="remember"> Remember Me
		                                        </label>
		                                </div>
		                                <div class="form-group text-center">
		                                        <button type="submit" class="btn btn-default btn-lg">Sign In</button>
		                                </div>
		                                <input type="hidden" name="_token" value="{{ Session::token() }}">
		                        </form>
				</div>
			</div>
                </div>
        </div>

@stop
