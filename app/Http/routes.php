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
                ]);

                Route::post('/signup', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@postSignup',
                ]);

                Route::get('/signin', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@getSignin',
                        'as' => 'auth.signin',
                ]);

                Route::post('/signin', [
                        'uses' => '\Remarq\Http\Controllers\AuthController@postSignin',
                ]);

        });
