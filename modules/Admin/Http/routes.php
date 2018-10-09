<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'admin.'.\config('app.domain'),
        'namespace' => 'MnkyDevTeam\Admin\Http\Controllers'
    ],
    function () {
        Route::group(['middleware' => 'guest', 'namespace' => "Auth"], function () {
            Route::view('login', 'admin::login')->name('admin.login');
            Route::post('login', "LoginController")->name('admin.login.submit');
        });

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('/', function () {
                return \redirect(\route('admin.user.dashboard'));
            })->name('admin.home');

            Route::get('dashboard', "User\DashboardController")->name('admin.user.dashboard');

            Route::post('logout', "Auth\LogoutController")->name('admin.logout');
        });

        Route::group(['middleware' => 'auth:admin', 'prefix' => 'employee', 'namespace' => 'Employee'], function () {
            Route::get('/', 'EmployeePageController')->name('admin.employee');
            Route::post('/', 'EmployeeEnlistController')->name('admin.employee.enlist');
            Route::get('{employee}/details', 'EmployeeDetailsPageController')->name('admin.employee.details');
            // Route::patch('{employee}/details/update', 'EmployeeDetailsUpdateInfoController')
            //     ->name('admin.employee.details.update-info');
            Route::patch('{employee}/details/reset-password', 'EmployeeDetailsResetPasswordController')
                ->name('admin.employee.details.reset-password');

            Route::group(['prefix' => 'listing/api', 'namespace' => 'Api'], function () {
                Route::get('/', 'EmployeeListingController@listing')
                    ->name('admin.employee.listing.api');
                Route::get('/datatables', 'EmployeeListingController@datatables')
                    ->name('admin.employee.listing.api.datatables');
            });
        });
    }
);
