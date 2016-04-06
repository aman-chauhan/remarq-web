@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
	<div class="jumbotron">
		<h1>RemarQ</h1>
		<h5>A comprehensive application for making notes accessible.</h5>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 style="color:#FFFFFF;">What RemarQ provides...</h3>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="row text-center">
					<div class="col-md-8 text-center">
						<h3>Share Notes instantly with the community.!</h3>
					</div>
					<div class="col-md-4 text-center">
						<span class="glyphicon glyphicon-pencil" style="font-size:200px;"></span>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="row text-center">
					<div class="col-md-4 text-center">
						<span class="glyphicon glyphicon-search" style="font-size:200px;"></span>
					</div>
					<div class="col-md-8 text-center">
						<h3>Use the search bar to search for notes based on date and course code.!</h3>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="row text-center">
					<div class="col-md-8 text-center">
						<h3>Follow other students to never miss important notes.</h3>
					</div>
					<div class="col-md-4 text-center">
						<span class="glyphicon glyphicon-user" style="font-size:200px;"></span>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="row text-center">
					<div class="col-md-4 text-center">
						<span class="glyphicon glyphicon-book" style="font-size:200px;"></span>
					</div>
					<div class="col-md-8 text-center">
						<h3>Follow a subject itself to learn more!</h3>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="row text-center">
					<div class="col-md-8 text-center">
						<h3>No need for last minute photocopies! All the notes are here for you to refer.</h3>
					</div>
					<div class="col-md-4 text-center">
						<span class="glyphicon glyphicon-print" style="font-size:200px;"></span>
					</div>
				</div>
			</li>
		</ul>
	</div>
@stop
