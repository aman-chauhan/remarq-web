<?php

        namespace Remarq\Http\Controllers;

        use Auth;
        use Illuminate\Http\Request;
        use Remarq\Models\User;

        class AuthController extends Controller
        {
                public function getSignup()
                {
                        return view('auth.signup');
                }

                public function postSignup(Request $request)
                {
                        $this->validate($request, [
                                'firstname' => 'required|alpha|max:20',
                                'lastname' => 'alpha|max:20',
                                'email' => 'required|unique:students|email|max:255',
                                'password' => 'required|min:8',
                        ]);

                        User::create([
                                'first_name' => $request->input('firstname'),
                                'last_name' => $request->input('lastname'),
                                'email' => $request->input('email'),
                                'password' => bcrypt($request->input('password')),
                        ]);

                        return redirect()->route('home')->with('info','Your account has been created and you can now Sign In.');
                }

                public function getSignin()
                {
                        return view('auth.signin');
                }

                public function postSignin(Request $request)
                {
                        $this->validate($request, [
                                'email' => 'required',
                                'password' => 'required',
                        ]);

                        if(!Auth::attempt($request->only(['email','password']), $request->has('remember')))
                        {
                                return redirect()->back()->with('info', 'Could not sign in with those details.');
                        }

                        return redirect()->route('home')->with('info', 'You are now signed in.');
                }

                public function getSignOut()
                {
                        Auth::logout();

                        return redirect()->route('home')->with('info', 'You have now successfully logged out.');
                }
        }
