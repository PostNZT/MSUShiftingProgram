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

            Route::group(['prefix' => 'general', 'namespace' => 'General'], function () {
                Route::get('/', 'StudentOverviewPageController')->name('staff.student.general');
            });

            Route::group(['prefix' => 'request', 'namespace' => 'Request'], function() {
                Route::get('/', 'StudentRequestPageController')->name('staff.student.request');
                Route::post('/enlist', 'StudentRequestDataController')
                    ->name('staff.student.request.enlist');
                Route::group(['prefix' => '{student}/details'], function() {
                    Route::get('/', 'StudentRequestDetailsPageController')
                        ->name('staff.student.request.details');
                    Route::patch('updateInformation', 'StudentRequestUpdateController')
                        ->name('staff.student.request.details.update-personal-information');
                    Route::post('uploadInformation', 'StudentRequestUploadGradesController')
                        ->name('staff.student.request.details.upload-grades-information');

                    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {
                      Route::get('/listing', 'StudentGradesListingController@listing')
                      ->name('staff.student.details.api.listing');
                      Route::get('/listing/datatable', 'StudentGradesListingController@datatable')
                      ->name('staff.student.details.api.listing.datatable');
                    });
                });


            });

            Route::group(['prefix' => 'upload', 'namespace' => 'Upload'], function() {
                Route::get('/', 'UploadStudentPageController')->name('staff.student.upload');
            });

            Route::group(['prefix' => 'listing', 'namespace' => 'Listing'], function() {
                Route::get('/', 'StudentListingPageController')->name('staff.student.listing');

                Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {
                    Route::get('/listing', 'StudentListingController@listing')
                        ->name('staff.student.api.listing');
                    Route::get('/listing/datatable', 'StudentListingController@datatable')
                        ->name('staff.student.api.listing.datatable');
                });
            });
        });

    }
);
