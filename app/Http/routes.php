 <?php

        Route::group(['middleware' => ['web']], function ()
        {
                Route::get('/',[
                        'uses' => '\Remarq\Http\Controllers\HomeController@index',
                        'as' => 'home',
                ]);

                Route::get('/signup', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@getSignup',
                        'as' => 'auth.signup',
                        'middleware' => ['guest'],
                ]);

                Route::post('/signup', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@postSignup',
                        'middleware' => ['guest'],
                ]);

                Route::get('/signin', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@getSignin',
                        'as' => 'auth.signin',
                        'middleware' => ['guest'],
                ]);

                Route::post('/signin', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@postSignin',
                        'middleware' => ['guest'],
                ]);

                Route::get('/signout', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@getSignOut',
                        'as' => 'auth.signout',
                ]);

                Route::get('/search', [
                        'uses' => '\Remarq\Http\Controllers\SearchController@getResults',
                        'as' => 'search.results',
                ]);

                Route::get('/user/{username}', [
                        'uses' => '\Remarq\Http\Controllers\ProfileController@getProfile',
                        'as' => 'profile.index',
                ]);

                Route::get('/profile/edit', [
                        'uses' => '\Remarq\Http\Controllers\ProfileController@getEdit',
                        'as' => 'profile.edit',
                        'middleware' => ['auth'],
                ]);

                Route::post('/profile/edit', [
                        'uses' => '\Remarq\Http\Controllers\ProfileController@postEdit',
                        'middleware' => ['auth'],
                ]);

                Route::get('/students', [
                        'uses' => '\Remarq\Http\Controllers\StudentFollowController@getIndex',
                        'as' => 'studentfollows.index',
                        'middleware' => ['auth'],
                ]);

		Route::get('/students/add/{username}', [
			'uses' => '\Remarq\Http\Controllers\StudentFollowController@getAdd',
			'as' => 'studentfollows.add',
			'middleware' => ['auth'],
		]);

		Route::get('/students/remove/{username}', [
			'uses' => '\Remarq\Http\Controllers\StudentFollowController@getRemove',
			'as' => 'studentfollows.remove',
			'middleware' => ['auth'],
		]);

		Route::get('/course/{coursecode}', [
                        'uses' => '\Remarq\Http\Controllers\CourseProfileController@getCourse',
                        'as' => 'course.index',
                ]);

		Route::get('/courses', [
                        'uses' => '\Remarq\Http\Controllers\CourseFollowController@getIndex',
                        'as' => 'coursefollows.index',
                        'middleware' => ['auth'],
                ]);

		Route::get('/courses/add/{coursecode}', [
			'uses' => '\Remarq\Http\Controllers\CourseFollowController@addCourse',
			'as' => 'coursefollows.add',
			'middleware' => ['auth'],
		]);

		Route::get('/courses/remove/{coursecode}', [
			'uses' => '\Remarq\Http\Controllers\CourseFollowController@removeCourse',
			'as' => 'coursefollows.remove',
			'middleware' => ['auth'],
		]);


        });
