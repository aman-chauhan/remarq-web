<?php

        namespace Remarq\Http\Controllers;
        use Illuminate\Http\Request;
        use Remarq\Models\User;
        use DB;

        class FollowController extends Controller
        {
                public function getIndex()
                {
                        return view('follows.index');
                }
        }
