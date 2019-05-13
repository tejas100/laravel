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

/*
Route::get('/fun', function () {
    // return view('welcome');
    return "Thank youuuuu!!!!!!!";
});


Route::get('/a/{id}',function($id){
    return 'Id is : '.$id';
});
Demo22
check the commit
*/


// Route::get('/','PagesController@index');
// Route::get('/about','PagesController@about');
// Route::get('/services','PagesController@services');
// Route::resource('posts','PostController');

Route::get('/', function () {
    return view("pages.forms");
   
});