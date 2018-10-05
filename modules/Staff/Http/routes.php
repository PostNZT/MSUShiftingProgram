<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'staff.'.\config('app.domain'),
        'namespace' => 'MnkyDevTeam\Staff\Http\Controllers'
    ],
    function () {
        Route::get('/', 'StaffController@index');
    }
);
