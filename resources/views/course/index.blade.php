@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('profileback')
	<div class="container-fluid" id="backg"></div>

@section('content')
        <div class="container" id="profile">
                <div class="col-md-3">
                        <div class="row">
                                @include('courses.partials.courseblock2')
                        </div>
                </div>
                <div class="col-md-9">
                        <div class="row">
                                <div class="col-md-12">
					<ul class="nav nav-tabs nav-justified" role="tablist" style="background-color:#FFFFFF;">
						<li role="presentation" class="active">
							<a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">
								<h6 style="color:#2196F3;">Notes &nbsp;<span class="badge">
									0
								</span></h6>
							</a>
						</li>
						<li role="presentation">
							<a href="#followedby" aria-controls="followedby" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Followers &nbsp;<span class="badge">
								{{ $course->whoFollowThis()->count() }}
							</span></h6></a>
						</li>
					</ul>
                                        <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="notes">
                                                        <ul class="list-group">
                                                                <li class="list-group-item">{{ $course->getCourseCode() }} doesn't have any note yet.</li>
                                                        </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="followedby">
                                                        <ul class="list-group">
                                                                @if (!$course->whoFollowThis()->count())
                                                                        <li class="list-group-item">{{ $course->getCourseCode() }} isn't followed by any student yet.</li>
                                                                @else
                                                                        @foreach($course->whoFollowThis as $user)
                                                                                <li class="list-group-item">
                                                                                        @include('user.partials.userblock3')
                                                                                </li>
                                                                        @endforeach
                                                                @endif
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@stop
