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
                                @include('user.partials.userblock2')
                        </div>
                </div>
                <div class="col-md-9">
                        <div class="row">
                                <div class="col-md-12">
					<ul class="nav nav-tabs nav-justified" role="tablist" style="background-color:#FFFFFF;">
						<li role="presentation" class="active">
							<a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">
								<h6 style="color:#2196F3;">Notes &nbsp;<span class="label label-default">
									0
								</span></h6>
							</a>
						</li>
						<li role="presentation">
							<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Comments &nbsp;<span class="label label-default">
								0
							</span></h6></a>
						</li>
						<li role="presentation">
							<a href="#likes" aria-controls="likes" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Likes &nbsp;<span class="label label-default">
								0
							</span></h6></a>
						</li>
						<li role="presentation">
							<a href="#follows" aria-controls="follows" role="tab" data-toggle="tab">
								<h6 style="color:#2196F3;">Follows &nbsp;<span class="label label-default">
									{{ $mainuser->whoIFollow()->count() }}
								</span></h6>
							</a>
						</li>
						<li role="presentation">
							<a href="#followedby" aria-controls="followedby" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Followers &nbsp;<span class="label label-default">
								{{ $mainuser->whoFollowMe()->count() }}
							</span></h6></a>
						</li>
						<li role="presentation">
							<a href="#courses" aria-controls="courses" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Courses &nbsp;<span class="label label-default">
								0
							</span></h6></a>
						</li>
					</ul>
                                        <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="notes">
                                                        <ul class="list-group">
                                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} hasn't written any note yet.</li>
                                                        </ul>
                                                </div>
						<div role="tabpanel" class="tab-pane" id="follows">
                                                        <ul class="list-group">
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
                                                <div role="tabpanel" class="tab-pane" id="followedby">
                                                        <ul class="list-group">
                                                                @if (!$mainuser->whoFollowMe()->count())
                                                                        <li class="list-group-item">{{ $mainuser->getFirstName() }} isn't followed by any student yet.</li>
                                                                @else
                                                                        @foreach($mainuser->whoFollowMe as $user)
                                                                                <li class="list-group-item">
                                                                                        @include('user.partials.userblock3')
                                                                                </li>
                                                                        @endforeach
                                                                @endif
                                                        </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="courses">
                                                        <ul class="list-group">
                                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} isn't following any course yet.</li>
                                                        </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="comments">
                                                        <ul class="list-group">
                                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} hasn't commented on any note yet.</li>
                                                        </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="likes">
                                                        <ul class="list-group">
                                                                <li class="list-group-item">{{ $mainuser->getFirstName() }} hasn't liked any note yet.</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@stop
