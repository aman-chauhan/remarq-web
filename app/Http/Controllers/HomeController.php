<?php

        namespace Remarq\Http\Controllers;
	use Auth;

        class HomeController extends Controller
        {
                public function index()
                {
			if (Auth::check())
			{
				return view('timeline.index')->with('mainuser', Auth::user());
			}
                        return view('home');
                }
        }
