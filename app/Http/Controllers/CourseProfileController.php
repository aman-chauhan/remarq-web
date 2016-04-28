<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
	use Remarq\Models\Course;
	use Remarq\Models\Note;

        class CourseProfileController extends Controller
        {
		public function getCourse($coursecode)
		{
			$course=Course::where('c_code', 'LIKE', "%$coursecode%")->first();

			if(!$course)
			{
				abort(404);
			}

			$notes=Note::where('course_id', $course->id)
			->orderBy('created_at', 'desc')
			->paginate(4);

			return view('course.index')->with('course',$course)->with('notes',$notes);
		}
        }
