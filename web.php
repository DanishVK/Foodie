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


Route::get('/menu',['uses' => 'MasterController@load', 'as' => 'loadmenu']);

Route::get('/', function () {
    return view('welcome');
});





Route::group(['middleware' => ['auth']], function() {


    
Route::get('/home','LoginController@index');
Route::get('/Orders','LoginController@ShowOrders');
Route::get('/update-menu', function () {
    return view('auth.update-menu');
});

Route::get('/forecast', function () {
    return view('auth.forecast');
});

   
});







Route::get('/food-cart',['uses' => 'MasterController@getcart', 'as' => 'cart']);


Route::get('/add-to-cart/{id}','MasterController@AddtoCart');
Route::get('/inc/{id}','MasterController@inc');
Route::get('/dec/{id}','MasterController@dec');
Route::get('/remove/{id}','MasterController@remove');
Route::get('/empty','MasterController@empty');
Route::get('/neworder','paymentController@neworder');
Route::post('/checkout','paymentController@paynow');




Auth::routes();


