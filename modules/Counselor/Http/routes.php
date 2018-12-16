<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'counselor.'.\config('app.domain'),
        'namespace' => 'MnkyDevTeam\Counselor\Http\Controllers'
    ],
    function () {
        Route::group(['middleware' => 'guest', 'namespace' => "Auth"], function () {
            Route::view('login', 'counselor::login')->name('counselor.login');
            Route::post('login', "LoginController")->name('counselor.login.submit');
        });

        Route::group(['middleware' => 'auth:counselor'], function () {
            Route::get('/', function () {
                return \redirect(\route('counselor.user.dashboard'));
            })->name('counselor.home');

            Route::get('dashboard', "User\DashboardController")->name('counselor.user.dashboard');

            Route::post('logout', "Auth\LogoutController")->name('counselor.logout');
        });

        Route::group(['middleware' => 'auth:counselor', 'prefix' => 'student', 'namespace' => 'Student'], function() {
            Route::group(['prefix' => 'general', 'namespace' => 'General'], function() {
                Route::get('/', 'StudentGeneralOverviewPageController')->name('counselor.student.general');
            });
        });
    }
);
