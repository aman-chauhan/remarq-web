<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
	use Remarq\Models\Course;
        use DB;

        class SearchController extends Controller
        {
                public function getResults(Request $request)
                {
                        $query = $request->input('query');

                        if(!$query)
                        {
                                return redirect()->route('home');
                        }

                        $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%$query%")->get();
			$courses = Course::where('c_code', 'LIKE', "%$query%")->orWhere('c_name', 'LIKE', "%$query%")->get();

                        return view('search.results')->with('users', $users)->with('courses', $courses);
                }
        }
