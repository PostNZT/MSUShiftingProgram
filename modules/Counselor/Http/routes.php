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

            Route::group(['prefix' => 'listing', 'namespace' => 'Listing'], function() {
                Route::get('/', 'StudentListinPageController')->name('counselor.student.listing');

                Route::group(['prefix' => '{student}/details'], function() {
                    Route::get('/', 'StudentDetailsPageController')->name('counselor.student.listing.details');
                    Route::patch('updateInformation', 'StudentUpdatePersonalInformationController')
                        ->name('counselor.student.details.update-personal-information');
                    Route::patch('updateStatus', 'StudentUpdateShiftingStatusController')
                        ->name('counselor.student.details.update-shifting-status');

                    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {
                      Route::get('/listing', 'StudentCounselorGradeListingController@listing')
                      ->name('counselor.student.details.api.listing');
                      Route::get('/listing/datatable', 'StudentCounselorGradeListingController@datatable')
                      ->name('counselor.student.details.api.listing.datatable');
                    });
                });

                Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {
                    Route::get('/listing', 'StudentResourceListingController@listing')
                        ->name('counselor.student.api.listing');
                    Route::get('/listing/datatable', 'StudentResourceListingController@datatable')
                        ->name('counselor.student.api.listing.datatable');
                });
            });
        });
    }
);
