<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
	use Remarq\Models\Course;

        class CourseProfileController extends Controller
        {
		public function getCourse($coursecode)
		{
			$course=Course::where('c_code', 'LIKE', "%$coursecode%")->first();

			if(!$course)
			{
				abort(404);
			}
			return view('course.index')->with('course',$course);
		}
        }
