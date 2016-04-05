@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="page-header">
                <h2>Update <small>Change your details</small></h2>
        </div>
        <div class="row">
                <div class="col-lg-6">
                        <form class="form-vertical" role="form" action="{{ route('profile.edit') }}" method="post">
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname" class="control-label">Your First Name</label>
                                        <input type="text" name="firstname" class="form-control" id="firstname" value="{{ Request::old('firstname') ?: Auth::user()->first_name }}">
                                        @if ($errors->has('firstname'))
                                                <span class="help-block">{{ $errors->first('firstname') }}</span>
                                        @endif
                                </div>
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="lastname" class="control-label">Your Last Name</label>
                                        <input type="text" name="lastname" class="form-control" id="lastname" value="{{ Request::old('lastname') ?: Auth::user()->last_name }}">
                                        @if ($errors->has('lastname'))
                                                <span class="help block">{{ $errors->first('lastname') }}</span>
                                        @endif
                                </div>
                                <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-default">Update</button>
                                </div>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </form>
                </div>
        </div>
@stop
