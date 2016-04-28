<div class="panel panel-default" style="margin-top:10px; margin-bottom:10px;">
	<div class="panel-heading" style="background-color:#FFFFFF;">
		<div class="media" style="margin:0px; padding:2.5px;">
			<div class="media-left media-top">
				<a href="{{ route('profile.index', ['fullname' => $note->nameofWriter()]) }}">
					<img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAQAAAD/5HvMAAABl0lEQVR4Ae3ZwWoTURSH8W+gnRE6omttF+30FYZS+gS676qlfYIm6jvoNvocupOQECQEsjLJIIlhSJ5DSbKa0aUEJ/fG3DkT8Pz+L/At7uLAxY5SSqmAOl/5QV7CVox4RcAWTpiQl7wJz7EUmHOcbIyPlTq50OpYGYgFDbHyUyxogZVcbvJBGpTR5IZTDvE545ZWtUFTYtZdkFYV9IUj/iakW0XQlCOKhKTSQRkxm1xKBzUxacsG3WByJxt0ikkkG3SISSAb5O9b0Bkm57JBt5jcywa1MOnIBuVcsMkVuXRQSkiRx8zlg3K6hAU5varOj5RL1l0xr/ZibHNHREDAOfd09IR1HqRBGrRkRo/Pv9djxrK6oDENronw+JNHxDUNxpJBI2ocY3JMjaTsoIyPxGwj5hNZWUFJQYw5Kikj6D0H/KsDPrgOesuu3rkM6uOxK4++u6AXuPDSXdATXHjqLsgVDTLQ8+O/CVrt29dCIhY0wMobsaAHrDxiKpLzDR9LJ3wXyHnGFgJeM2RR0lMe8ICPUkopG78ANJbTVwrpr1QAAAAASUVORK5CYII=" alt="tempo" />
				</a>
			</div>
			<div class="media-body media-top">
				<span class="text-muted">{{ $note->notedate }}, {{ $note->coursecodeofNote() }}</span>
				<h5 class="media-heading" style="margin-bottom:0px;">
					<a href="{{ route('profile.index', ['fullname' => $note->nameofWriter()]) }}">
						{{ $note->nameofWriter() }}
					</a>
				</h5>
				<span class="text-muted">{{ $note->emailofWriter() }}</span>
			</div>
			<div class="media-right media-top">
				<a data-toggle="collapse" href="#{{ $note->id }}" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-fullscreen"></span>
				</a>
			</div>
			<h4 style="margin:0px; margin-left:10px;">{{ $note->title }}</h4>
			<ul class="list-inline" style="padding:0px; margin-left:4px;">
				<li><span class="text-muted">{{ $note->created_at->diffForHumans() }}</span></li>
				<li class="pull-right"><span class="text-muted">10 comments</span></li>
				<li class="pull-right"><span class="text-muted">10 Likes</span></li>
			</ul>
		</div>
	</div>
	<div class="panel-collapse collapse" id="{{ $note->id }}">
		<ul class="list-group">
			<li class="list-group-item">
				<span style="font-size:1.5em;">{{ $note->content }}</span>
			</li>
			<li class="list-group-item">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-1">
							<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<input type="text" name="commentinput" id="commentinput" class="form-control" placeholder="What is your opinion, {{ Auth::user()->getFirstName() }}?">
						</div>
						<div class="col-sm-1">
							<button type="submit" name="commentsubmit" class="btn btn-default btn-lg">
								<span class="glyphicon glyphicon-send"></span>
							</button>
						</div>
					</div>
				</form>
			</li>
			<li class="list-group-item">
				No Comments yet.
			</li>
		</ul>
	</div>
</div>
