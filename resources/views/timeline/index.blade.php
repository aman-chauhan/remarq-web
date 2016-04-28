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
			<div class="panel panel-primary text-center">
				<div class="panel-heading">
					Add Note
				</div>
				<div class="panel-body text-center" style="padding:0px;">
					<form role="form" class="form text-center" action="{{ route('note.post') }}" method="post">
						<div class="col-md-6">
							<div class="form-group">
								<select class="form-control" name="coursecode" id="coursecodes" style="margin:0px;">
									@if (!count($courses))
										<option value="null" disabled="true">No courses</option>
									@else
										@foreach ($courses as $course)
											<option value="{{ $course->getCourseID() }}">{{ $course->getCourseCode() }}</option>
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group{{ $errors->has('dateselect') ? ' has error' : '' }}">
								<input type="date" name="dateselect" id="dateselect" class="form-control" placeholder="YYYY-MM-DD">
								@if ($errors->has('dateselect'))
									<span class="help-block">{{ $errors->first('dateselect') }}</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('notetitle') ? ' has error' : '' }}">
							<div class="col-md-12">
								<input type="text" name="notetitle" id="notetitle" class="form-control" placeholder="Choose an interesting title!">
								@if ($errors->has('notetitle'))
									<span class="help-block">{{ $errors->first('notetitle') }}</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('notecontent') ? ' has error' : '' }}">
							<div class="col-md-12">
								<textarea rows="3" name="notecontent" id="notecontent" class="form-control" placeholder="What would you like to post, {{ Auth::user()->getFirstName() }}?"></textarea>
								@if ($errors->has('notecontent'))
									<span class="help-block">{{ $errors->first('notecontent') }}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<button type="reset" class="btn btn-sm btn-default" style="margin-top:10px;"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" style="margin-top:10px;"><span class="glyphicon glyphicon-send"></span> Submit</button>
							</div>
						</div>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="page-header" style="margin-top:0px;">
				<h1>Timeline</h1>
			</div>
			<div class="panel-group">
				@if (!$notes->count())
					<div class="panel panel-default">
						<div class="panel-heading">
							No notes were uploaded by you or your friends.
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
