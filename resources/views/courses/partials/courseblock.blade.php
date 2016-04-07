<div class="media">
        <div class="media-left media-middle">
                <a href="{{ route('course.index', ['coursecode' => $course->getCourseCode()]) }}">
                        <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgAQMAAADYVuV7AAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAACdJREFUeAFjGNSA/////x/ABMmcUQ44BGnIoYMX6OUPStw2yhnMAACMpv4QrNIVyQAAAABJRU5ErkJggg==" alt="{{ $course->getCourseName() }}" />
                </a>
        </div>
        <div class="media-body media-middle">
                <h4 class="media-heading"><a href="{{ route('course.index', ['coursecode' => $course->getCourseCode()]) }}">{{ $course->getCourseCode() }}</a></h4>
                <p class="">
                        {{ $course->getCourseName() }}
                </p>
        </div>
</div>
