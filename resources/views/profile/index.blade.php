@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="container">
                <div class="col-md-3">
                        <div class="row">
                                <hr style="border:1px solid black;">
                                @include('user.partials.userblock')
                                <hr style="border:1px solid black;">
                        </div>
                </div>
                <div class="col-md-9">
                        <hr style="border:1px solid black;">
                        <div class="row"><!-- For Students Followed -->
                                DEF
                        </div>
                        <div class="row"> <!-- For Courses Followed -->
                                GHI
                        </div>
                        <div class="row"><!-- For User Timeline Comments-->
                                JKL
                        </div>
                        <div class="row"><!-- For User Timeline Likes-->
                                MNO
                        </div>
                        <hr style="border:1px solid black;">
                </div>
        </div>
@stop
