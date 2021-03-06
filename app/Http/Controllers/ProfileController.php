<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
	use Remarq\Models\Course;
	use Remarq\Models\Note;
        use DB;
        use Auth;

        class ProfileController extends Controller
        {
                public function getProfile($fullname)
                {
                        $user=User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%$fullname%")->first();

                        if(!$user)
                        {
                                abort(404);
                        }

			$notes=Note::where('user_id', $user->id)
			->orderBy('created_at', 'desc')
			->paginate(4);

			return view('profile.index')
                                ->with('mainuser',$user)
				->with('notes',$notes);
                }

                public function getEdit()
                {
                        return view('profile.edit');
                }

                public function postEdit(Request $request)
                {
                        $this->validate($request, [
                                'firstname' => 'required|alpha|max:20',
                                'lastname' => 'alpha|max:20',
                        ]);

                        Auth::user()->update([
                                'first_name' => $request->input('firstname'),
                                'last_name' => $request->input('lastname'),
                        ]);

                        return redirect()->route('profile.edit')->with('info', 'Your profile has been succesfully updated!');
                }
        }
