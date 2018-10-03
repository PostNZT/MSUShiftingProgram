<?php

Route::group(
	[
		'middleware' => 'web', 
		'domain' => 'counselor.'.\config('app.domain'), 
		'namespace' => 'MnkyDevTeam\Counselor\Http\Controllers'
	], function(){
    Route::get('/', 'CounselorController@index');
});
