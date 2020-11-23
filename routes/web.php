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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function ()
{
	return view('login');
});

Route::get('/login', function ()
{
	return view('login');
});


Route::get('/register', function ()
{
	return view('register');
});

Route::post('/store',"UserController@store");
Route::post('/logs',"UserController@logs");


 Route::group(['middleware'=>'admin'],function(){

 Route::get('dashboard', 'UserController@dashboard'); 
 Route::get('logout', 'UserController@logout');

 Route::get('count', 'UserController@count'); 
 Route::get('employees', 'UserController@employees');
 Route::post('/storess',"UserController@storess");
 Route::get('create1', 'UserController@create1'); 
 Route::post('products/{id}', 'UserController@destroy1'); 
 

 Route::get('customers', 'UserController@customers'); 
 Route::get('create', 'UserController@create'); 
Route::post('/stores',"UserController@stores");
Route::get('index', 'UserController@index'); 
Route::get('edit', 'UserController@edit'); 
Route::post('customer/update', 'UserController@update'); 
Route::post('customer/{id}', 'UserController@destroy'); 

 });


Route::resource('customer', 'UserController');
Route::resource('products', 'UserController');

 

 ?>




