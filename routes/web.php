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

<<<<<<< HEAD
Route::get('customers','Customers@getAllCustomers');

Route::get('customer/{id}','Customers@getCustomers');

Route::get('/', function(){
    return view('form');
});
Route::post('customer','Customers@addCustomer');



// Route::delete('customer/{id}', function(){
//     return 'youhou';
// })
//
// Route::put('customers/{id}', function(){
//     return 'hahahaha';
// })
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 00f993e6c1cc11e7278c8c6d5e16b0ed049746b9
