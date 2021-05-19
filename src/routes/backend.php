<?php  
	Route::get('/dashboard', [
		'uses'=>'HomeController@index',
		'as'=>'backend.index'
	]);

	Route::get('/category', [
		'uses'=>'CategoryController@index',
		'as'=>'backend.category.main'
	]);
?>
