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
                                        Courses
                                        <small>
                                                Subjects you follow.
                                        </small>
                                </h2>
                        </div>
                </div>
                <div class="row">
			<ul class="nav nav-tabs" role="tablist" style="background-color:#FFFFFF;">
				<li role="presentation" class="active">
					<a href="#follows" aria-controls="follows" role="tab" data-toggle="tab">
						<h6 style="color:#2196F3;">Courses &nbsp;{{ $follows->count() }}</h6>
					</a>
				</li>
			</ul>
                        <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="follows">
                                        <ul class="list-group">
						@if (!$follows->count())
							<li class="list-group-item">You are following no one.</li>
						@else
							@foreach ($follows as $course)
								<li class="list-group-item">
									@include('courses/partials/courseblock3')
								</li>
							@endforeach
						@endif
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
@stop
