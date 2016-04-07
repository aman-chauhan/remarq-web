@extends('templates.default')

@section('title')
        <title>RemarQ</title>

@section('styles')
        <link rel="stylesheet" href="/Remarq/resources/assets/css/homestyle.css">

@section('content')
        <div class="page-header">
                <h2>Search <small>Your search results for "{{ Request::input('query') }}"</small></h2>
        </div>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" role="tablist" style="background-color:#FFFFFF;">
				<li role="presentation" class="active">
					<a href="#userresults" aria-control="userresults" role="tab" data-toggle="tab">
						<h6>Users &nbsp;<span class="badge">{{ $users->count() }}</span></h6>
					</a>
				</li>
				<li role="presentation">
					<a href="#courseresults" aria-control="courseresults" role="tab" data-toggle="tab">
						<h6>Courses &nbsp;<span class="badge">{{ $courses->count() }}</span></h6>
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="userresults">
					<ul class="list-group">
			                        @if (!$users->count())
			                                <li class="list-group-item">Bummer. Try Again.</li>
			                        @else
			                                @foreach ($users as $user)
			                                        <li class="list-group-item">
			                                                @include('user/partials/userblock')
			                                        </li>
			                                @endforeach
			                        @endif
			                </ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="courseresults">
					<ul class="list-group">
			                        @if (!$courses->count())
							<li class="list-group-item">Bummer. Try Again.</li>
						@else
							@foreach ($courses as $course)
								<li class="list-group-item">
									@include('courses/partials/courseblock')
								</li>
							@endforeach
						@endif
			                </ul>
				</div>
			</div>
		</div>
	</div>
@stop
