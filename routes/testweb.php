<?php

Route::get('/', function () {
    return view('backend.dashboard');
});



Route::group([
	'middleware'=>'auth',
	'prefix' => 'backend',
	
], function(){

Route::get('dashboard','BackendController@dashboard');

// Route for category
Route::resource('categories','CategoryController')->middleware('role:Admin');

});

Route::get('userprofile', 'ProfileController@profile')->name('userprofile');

Route::resource('posts','PostController');

// Route for Member
Route::resource('members','MemberController');
// Route::resource('members','MemberController@edit')->name('membersedit');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route for frontend
// Route::get('main','FrontendController@main')->name('main');

// Route for frontend
// Route::get('register','FrontendController@register');

// Route::get('showCategory','FrontendController@showCategory');

// Route::get('newpost','FrontendController@newPost')->name('newpost');

// Route::get('detailpost/{id}','FrontendController@detailPost')->name('detailpost');

//Frontend
// Route::get('/frontend','FrontendController@main');


