<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
	use Auth;
        use DB;

        class StudentFollowController extends Controller
        {
                public function getIndex()
                {
			$followedby = Auth::user()->whoFollowMe;
			$follows = Auth::user()->whoIFollow;

                        return view('studentfollows.index')
				->with('followedby',$followedby)
				->with('follows', $follows);
                }

		public function getAdd($username)
		{
			$user = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%$username%")->first();

			if(!$user)
			{
				return redirect()->route('home')->with('info', 'That user could not be found.');
			}

			if(Auth::user()->isFollowing($user))
			{
				return redirect()->route('profile.index', ['fullname' => $user->getName()])->with('info', 'You are already following this user.');
			}

			Auth::user()->followUser($user);

			return redirect()->route('profile.index', ['fullname' => $user->getName()]);
		}

		public function getRemove($username)
		{
			$user = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%$username%")->first();

			if(!$user)
			{
				return redirect()->route('home')->with('info', 'That user could not be found.');
			}

			if(!Auth::user()->isFollowing($user))
			{
				return redirect()->route('profile.index', ['fullname' => $user->getName()])->with('info', 'You are already not following this user.');
			}

			Auth::user()->unFollowUser($user);		//define in user model

			return redirect()->route('profile.index', ['fullname' => $user->getName()]);
		}
        }
