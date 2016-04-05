@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="container">
                <div class="row">
                        <div class="page-header">
                                <h2>
                                        Students
                                        <small>
                                                Get all student updates here.
                                        </small>
                                </h2>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-9">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Updates from Students</h4></div>
                                        <ul class="list-group">
                                                <li class="list-group-item">Yo Bro!</li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Followed by</h4></div>
                                        <ul class="list-group">
                                                <li class="list-group-item">Yo Bro!</li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
@stop
