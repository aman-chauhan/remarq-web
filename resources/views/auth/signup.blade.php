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
					<h2>Sign Up</h2>
				</div>
				<div class="panel-body">
					<form class="form-vertical" role="form" action="{{ route('auth.signup') }}" method="post">
		                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
		                                        <label for="firstname" class="control-label">Your First Name</label>
		                                        <input type="text" name="firstname" class="form-control" id="firstname" value="{{ Request::old('firstname') ?: '' }}">
		                                        @if ($errors->has('firstname'))
		                                                <span class="help-block">{{ $errors->first('firstname') }}</span>
		                                        @endif
		                                </div>
		                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
		                                        <label for="lastname" class="control-label">Your Last Name</label>
		                                        <input type="text" name="lastname" class="form-control" id="lastname" value="{{ Request::old('lastname') ?: '' }}">
		                                        @if ($errors->has('lastname'))
		                                                <span class="help block">{{ $errors->first('lastname') }}</span>
		                                        @endif
		                                </div>
		                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                                        <label for="email" class="control-label">Your E-Mail Address</label>
		                                        <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
		                                        @if ($errors->has('email'))
		                                                <span class="help-block">{{ $errors->first('email') }}</span>
		                                        @endif
		                                </div>
		                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                                        <label for="password" class="control-label">Your Password</label>
		                                        <input type="password" name="password" class="form-control" id="password" value="">
		                                        @if ($errors->has('password'))
		                                                <span class="help-block">{{ $errors->first('password') }}</span>
		                                        @endif
		                                </div>
		                                <div class="form-group text-center">
		                                        <button type="submit" name="submit" class="btn btn-default btn-lg">Sign Up</button>
		                                </div>
		                                <input type="hidden" name="_token" value="{{ Session::token() }}">
		                        </form>
				</div>
			</div>
                </div>
        </div>
@stop
