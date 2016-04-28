<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
	use Remarq\Models\Course;
	use Auth;

        class NoteController extends Controller
        {
                public function postNote(Request $request)
		{
			$this->validate($request, [
				'notecontent' => 'required|max:1000',
				'notetitle' => 'required|max:140',
				'dateselect' => 'required'
			]);

			Auth::user()->notesWritten()->create([
				'course_id' => $request->input('coursecode'),
				'notedate' => $request->input('dateselect'),
				'title' => $request->input('notetitle'),
				'content' => $request->input('notecontent'),
			]);

			return redirect()
				->route('home')
				->with('info', 'Note has been posted.');

		}
        }
