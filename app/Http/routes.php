<?php

        Route::get('/',[
                'uses' => '\Remarq\Http\Controllers\HomeController@index',
                'as' => 'home',
        ]);
