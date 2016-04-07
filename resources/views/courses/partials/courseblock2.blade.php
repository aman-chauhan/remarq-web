<div class="panel panel-primary">
        <div class="panel-heading text-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADAAQAAAAB6p1GqAAAAAnRSTlMAAHaTzTgAAAA2SURBVHgB7dKxCQAgAANB919aG9EJQhTuq8C1GVKoubsLgNcBgFMfQP8loH8L8OF9AAAgk7QAc5f4agR+t9AAAAAASUVORK5CYII=" alt="{{ $course->getCourseCode() }}" width="100%"/>
        </div>
        <ul class="list-group text-center">
                <li class="list-group-item">
                        <h4><a href="{{ route('course.index', ['coursecode' => $course->getCourseCode()]) }}">{{ $course->getCourseCode() }}</a></h4>
			<p class="text-muted">
                                {{ $course->getCourseName() }}
                        </p>
                </li>
		@if (Auth::user()->isFollowingCourse($course))
			<li class="list-group-item">
				<a href="{{ route('coursefollows.remove', ['coursecode' => $course->getCourseCode()]) }}" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Following</a>
			</li>
		@else
			<li class="list-group-item">
				<a href="{{ route('coursefollows.add', ['coursecode' => $course->getCourseCode()]) }}" class="btn btn-primary">Follow</a>
			</li>
		@endif
        </ul>
</div>
