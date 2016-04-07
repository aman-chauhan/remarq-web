<div class="media">
        <div class="media-left media-middle">
                <a href="{{ route('course.index', ['coursecode' => $course->getCourseCode()]) }}">
                        <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABIAQMAAABvIyEEAAAABlBMVEUAAAAAAAClZ7nPAAAAAXRSTlMAQObYZgAAACZJREFUeAFjoCGo//+/8f//f0ON1QCkSGdRZC8YMJLFGpLhTDsAAD39HvBSIv96AAAAAElFTkSuQmCC" alt="{{ $course->getCourseCode() }}" />
                </a>
        </div>
        <div class="media-body media-middle">
                <h5 class="media-heading"><a href="{{ route('course.index', ['coursecode' => $course->getCourseCode()]) }}">{{ $course->getCourseCode() }}</a></h5>
        </div>

</div>
