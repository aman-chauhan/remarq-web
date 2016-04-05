@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="container">
                <div class="col-md-3">
                        <div class="row">
                                @include('user.partials.userblock2')
                        </div>
                        <div class="row">
                                <ul class="list-group">
                                        <li class="list-group-item"><h3>Follows</h3></li>
                                        @if (!$mainuser->whoIFollow()->count())
                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} hasn't followed any student yet.</li>
                                        @else
                                                @foreach ($mainuser->whoIFollow as $user)
                                                        <li class="list-group-item">
                                                                @include('user.partials.userblock3')
                                                        </li>
                                                @endforeach
                                        @endif
                                </ul>
                        </div>
                        <div class="row">
                                <ul class="list-group">
                                        <li class="list-group-item"><h3>Followed By</h3></li>
                                        @if (!$mainuser->whoFollowMe()->count())
                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} isn't followed any student yet.</li>
                                        @else
                                                @foreach($mainuser->whoFollowMe as $user)
                                                        <li class="list-group-item">
                                                                @include('user.partials.userblock3')
                                                        </li>
                                                @endforeach
                                        @endif
                                </ul>
                        </div>
                        <div class="row">
                                <ul class="list-group">
                                        <li class="list-group-item"><h3>Courses</h3></li>
                                </ul>
                        </div>
                </div>
                <div class="col-md-6">
                        <ul class="list-group">
                                <li class="list-group-item"><h3>Comments</h3></li>
                                <li class="list-group-item">JKL</li>
                        </ul>
                </div>
                <div class="col-md-3">
                        <ul class="list-group">
                                <li class="list-group-item"><h3>Likes</h3></li>
                                <li class="list-group-item">MNO</li>
                        </ul>
                </div>
        </div>
@stop
