<?php

Route::group(
	[
		'middleware' => 'web', 
		'domain' => 'admin.'.\config('app.domain'), 
		'namespace' => 'MnkyDevTeam\Admin\Http\Controllers'
	], function() {
		Route::group(['middleware' => 'guest', 'namespace' => "Auth"], function () {
            Route::view('login', 'admin::login')->name('admin.login');
            Route::post('login', "LoginController")->name('admin.login.submit');
        });

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/', function () {
                return \redirect(\route('admin.user.dashboard'));
            })->name('admin.home');

            Route::get('profile', "User\ProfileController")->name('admin.user.dashboard');

            Route::post('logout', "Auth\LogoutController")->name('admin.logout');
        });
    
});
