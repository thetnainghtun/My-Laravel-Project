<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('backend.dashboard');
});*/



Route::group([
	'middleware'=>'auth',
	'prefix' => 'backend',
	
], function(){

Route::get('dashboard','BackendController@dashboard')->name('dashboard')->middleware('role:Admin');

// Route for category
Route::resource('categories','CategoryController')->middleware('role:Admin');

});

Route::resource('userprofile', 'ProfileController');

Route::resource('posts','PostController');

// Route for Member
Route::resource('members','MemberController');
// Route::resource('members','MemberController@edit')->name('membersedit');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/','FrontendController@main')->name('main');
Route::get('newpost','FrontendController@newPost')->name('newpost');
Route::get('categoryfilter/{id}', 'FrontendController@categoryfilter')->name('categoryfilter');


Route::post('category_data','FrontendController@category_data')->name('category_data');

// Route for register
Route::get('register','FrontendController@register');
Route::get('detailpost/{id}','FrontendController@detailPost')->name('detailpost');


