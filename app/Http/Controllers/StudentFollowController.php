<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
        use DB;

        class StudentFollowController extends Controller
        {
                public function getIndex()
                {
                        return view('studentfollows.index');
                }
        }
