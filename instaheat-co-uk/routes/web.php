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

Route::get('/home', 'DashboardController@customer_index')->name('customer.home');
Route::get('/services', 'ServiceController@customer_services')->name('customer.services');
Route::get('/contact', 'ContactController@customer_contact')->name('customer.contact');

Route::get('/get-quote', 'GetQuoteController@customer_getQuote')->name('customer.get.quote');
Route::get('/get-ques-2', 'GetQuoteController@question_2')->name('customer.ques.2');

Route::get('/boiler-logic-30', 'GetQuoteController@boiler_logic_30')->name('boilers.logic.30');