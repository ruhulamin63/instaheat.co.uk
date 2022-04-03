<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



    Route::get('/login', 'UserAuthController@signin')->name('admin.login');
    Route::post('/login', 'UserAuthController@loggedin')->name('admin.login');

    Route::get('/register', 'UserAuthController@signup');
    Route::post('/register', 'UserAuthController@CreateNewUser')->name('admin.register');

    Route::get('/logout','UserAuthController@logout')->name('admin.logout');



    //================================= Customer Panel====================================
    Route::get('/', 'DashboardController@customer_index')->name('customer.home');
   
    Route::get('/services', 'ServiceController@customer_services')->name('customer.services');
    Route::get('/contact', 'ContactController@customer_contact')->name('customer.contact');

    Route::get('/get-a-quote', 'GetQuoteController@customer_getQuote')->name('customer.get.quote');
    Route::get('/get-ques-2', 'GetQuoteController@question_2')->name('customer.ques.2');

    Route::get('/boiler-logic-30', 'GetQuoteController@boiler_logic_30')->name('boilers.logic.30');


Route::group(['middleware'=>['checkSession']] , function(){

    //======================admin panel======================
    Route::get('/admin-home', 'DashboardController@admin_dashboard')->name('admin.home');

    Route::get('/get-today-order','DashboardController@get_today_order')->name('get.today.order');

    Route::get('/order-index', 'OrderController@order_index')->name('get.order.index');

    Route::get('/get-all-order', 'OrderController@get_all_order')->name('get.all.order.list');
    Route::post('/get-all-order','OrderController@edit_order_details')->name('edit.order.details');
    Route::post('/update-order','OrderController@update_order_details')->name('update.order.details');
    Route::post('/delete-order','OrderController@delete_order')->name('delete.order');

});
