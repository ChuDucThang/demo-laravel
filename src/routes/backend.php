<?php  
	Route::get('/dashboard', [
		'uses'=>'HomeController@index',
		'as'=>'backend.index'
	]);
?>
