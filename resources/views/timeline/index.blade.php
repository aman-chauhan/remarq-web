@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12">
				@include('user.partials.userblock4')
			</div>
		</div>
	</div>
	<div class="col-md-6">
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 style="color:#FFFFFF;">Add Note</h4>
					</div>
					<div class="panel-body">
						<form role="form" class="form" action="#" method="post">
							<div class="form-group">
								<label for=""></label>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page-header">
					<h1>Timeline</h1>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						Update 1
					</li>
					<li class="list-group-item">
						Update 2
					</li>
				</ul>
			</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Something interesting
			</div>
			<ul class="list-group">
				<li class="list-group-item">
					Update 1
				</li>
				<li class="list-group-item">
					Update 2
				</li>
				<li class="list-group-item">
					Update 2
				</li>
				<li class="list-group-item">
					Update 2
				</li>
				<li class="list-group-item">
					Update 2
				</li>
			</ul>
		</div>
	</div>
@stop
