<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'staff.'.\config('app.domain'),
        'namespace' => 'MnkyDevTeam\Staff\Http\Controllers'
    ],
    function () {
        Route::group(['middleware' => 'guest', 'namespace' => "Auth"], function () {
            Route::view('login', 'staff::login')->name('staff.login');
            Route::post('login', "LoginController")->name('staff.login.submit');
        });

        Route::group(['middleware' => 'auth:staff'], function () {
            Route::get('/', function () {
                return \redirect(\route('staff.user.dashboard'));
            })->name('staff.home');

            Route::get('dashboard', "User\DashboardController")->name('staff.user.dashboard');

            Route::post('logout', "Auth\LogoutController")->name('staff.logout');
        });

        Route::group(['middleware' => 'auth:staff', 'prefix' => 'student', 'namespace' => 'Student'], function () {
           Route::get('/', 'StudentPageController')->name('staff.student');
        });

        Route::group(['middleware' => 'auth:staff', 'prefix' => 'profile', 'namespace' => 'Profile'], function () {
            // Route::get('/', 'ProfilePageController')->name('staff.profile');
        });
    }
);
