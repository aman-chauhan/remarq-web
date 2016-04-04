@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <h3>
                Sign Up
        </h3>
        <div class="row">
                <div class="col-lg-6">
                        <form class="form-vertical" role="form" action="{{ route('auth.signup') }}" method="post">
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname" class="control-label">Your First Name</label>
                                        <input type="text" name="firstname" class="form-control" id="firstname" value="{{ Request::old('firstname') ?: '' }}">
                                        @if ($errors->has('firstname'))
                                                <span class="help-block">{{ $errors->first('firstname') }}</span>
                                        @endif
                                </div>
                                <div class="form-group">
                                        <label for="lastname" class="control-label">Your Last Name</label>
                                        <input type="text" name="lastname" class="form-control" id="lastname" value="{{ Request::old('lastname') ?: '' }}">
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
                                <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-default">Sign Up</button>
                                </div>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                </div>
        </div>
@stop
