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
                                                People you know.
                                        </small>
                                </h2>
                        </div>
                </div>
                <div class="row">
			<ul class="nav nav-tabs" role="tablist" style="background-color:#FFFFFF;">
				<li role="presentation" class="active">
					<a href="#follows" aria-controls="follows" role="tab" data-toggle="tab">
						<h6 style="color:#2196F3;">Following &nbsp;{{ $follows->count() }}</h6>
					</a>
				</li>
				<li role="presentation">
					<a href="#followedby" aria-controls="followedby" role="tab" data-toggle="tab"><h6 style="color:#2196F3;">Followers &nbsp;{{ $followedby->count() }}</h6></a>
				</li>
			</ul>
                        <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="follows">
                                        <ul class="list-group">
						@if (!$follows->count())
							<li class="list-group-item">No one is following you.</li>
						@else
							@foreach ($follows as $user)
								<li class="list-group-item">
									@include('user/partials/userblock3')
								</li>
							@endforeach
						@endif
                                        </ul>
                                </div>
				<div class="tab-pane" role="tabpanel" id="followedby">
					<ul class="list-group">
                                                @if (!$followedby->count())
							<li class="list-group-item">No one is following you.</li>
						@else
							@foreach ($followedby as $user)
								<li class="list-group-item">
									@include('user/partials/userblock3')
								</li>
							@endforeach
						@endif
                                        </ul>
				</div>
                        </div>
                </div>
        </div>
@stop
