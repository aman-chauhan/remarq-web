@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('profileback')
	<div class="container-fluid" id="backg" style="min-height: 300px;
	background: url('/Remarq/resources/assets/images/static_books.jpg') no-repeat center center fixed;
	background-size: cover;"></div>

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
									{{ $notes->count() }}
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
							<div class="row">
								<div class="col-md-12">
									<div class="panel-group">
										@if (!$notes->count())
											<div class="panel panel-default">
												<div class="panel-heading">
													No notes were uploaded in {{ $course->getCourseCode() }}.
												</div>
											</div>
										@else
											@foreach ($notes as $note)
												@include('notes.partials.noteblock1')
											@endforeach
										@endif
									</div>
									<div class="text-center">
										{!! $notes->render() !!}
									</div>
								</div>
							</div>
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
