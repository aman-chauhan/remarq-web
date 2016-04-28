<?php

        namespace Remarq\Http\Controllers;
	use Auth;
	use Remarq\Models\Course;
	use Remarq\Models\Note;
	use Remarq\Models\User;

        class HomeController extends Controller
        {
                public function index()
                {
			if (Auth::check())
			{
				$courses=Course::all();
				$notes=Note::where(function ($query)
				{
					return $query
					->where('user_id', Auth::user()->id)
					->orWhereIn('user_id',Auth::user()->whoIFollow()->lists('follow_id'));
				})
				->orderBy('created_at', 'desc')
				->paginate(4);

				return view('timeline.index')->with('mainuser', Auth::user())->with('courses',$courses)->with('notes',$notes);
			}
                        return view('home');
                }
        }
