<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
	use Remarq\Models\Course;
	use Auth;
        use DB;

	class CourseFollowController extends Controller
	{
		public function getIndex()
		{
			$follows = Auth::user()->courseIFollow;

			return view('coursefollows.index')
				->with('follows', $follows);
		}

		public function addCourse($coursecode)
		{
			$course = Course::where('c_code', 'LIKE', "%$coursecode%")->first();

			if(!$course)
			{
				return redirect()->route('home')->with('info', 'That course could not be found.');
			}

			if(Auth::user()->isFollowingCourse($course))
			{
				return redirect()->route('course.index', ['coursecode' => $course->getCourseCode()])->with('info', 'You are already following this course.');
			}

			Auth::user()->followCourse($course);

			return redirect()->route('course.index', ['coursecode' => $course->getCourseCode()]);
		}

		public function removeCourse($coursecode)
		{
			$course = Course::where('c_code', 'LIKE', "%$coursecode%")->first();

			if(!$course)
			{
				return redirect()->route('home')->with('info', 'That course could not be found.');
			}

			if(!Auth::user()->isFollowingCourse($course))
			{
				return redirect()->route('course.index', ['coursecode' => $course->getCourseCode()])->with('info', 'You are already not following this course.');
			}

			Auth::user()->unFollowCourse($course);

			return redirect()->route('course.index', ['coursecode' => $course->getCourseCode()]);
		}
	}
