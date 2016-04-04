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

        });
