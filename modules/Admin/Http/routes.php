<?php

Route::group(
	[
		'middleware' => 'web', 
		'domain' => 'admin.'.\config('app.domain'), 
		'namespace' => 'MnkyDevTeam\Admin\Http\Controllers'
	], function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
});
