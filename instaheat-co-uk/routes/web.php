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
    Route::get('/boiler-logic-list', 'GetQuoteController@boiler_logic_list')->name('boilers.logic.list');


Route::group(['middleware'=>['checkSession']] , function(){

    //======================admin panel======================
    Route::get('/admin-home', 'DashboardController@admin_dashboard')->name('admin.home');

    Route::get('/get-today-order','DashboardController@get_today_order')->name('get.today.order');
    Route::post('/today-edit-status','DashboardController@edit_order_status_details')->name('today.edit.order.status.details');
    Route::post('/today-update-status','DashboardController@update_order_status_change')->name('today.update.order.status.change');

    Route::get('/order-index', 'OrderController@order_index')->name('get.order.index');

    Route::get('/get-all-order', 'OrderController@get_all_order')->name('get.all.order.list');
    Route::post('/get-all-order','OrderController@edit_order_details')->name('edit.order.details');
    Route::post('/update-order','OrderController@update_order_details')->name('update.order.details');
    Route::post('/delete-order','OrderController@delete_order')->name('delete.order');

    Route::post('/order-add', 'OrderController@new_customer_order_add')->name('admin.new.customer.add.order');
    Route::post('/edit-status','OrderController@edit_order_status_details')->name('edit.order.status.details');
    Route::post('/update-status','OrderController@update_order_status_change')->name('update.order.status.change');

    //========================BoilerController================
    Route::get('/boiler-index', 'BoilerController@boiler_index')->name('get.boiler.index');

    Route::get('/get-all-boiler', 'BoilerController@get_all_boiler')->name('get.all.boiler.list');
    Route::post('/boiler-add', 'BoilerController@new_boiler_add')->name('admin.new.boiler.add');
    Route::post('/get-all-boiler','BoilerController@edit_boiler_details')->name('edit.boiler.details');
    Route::post('/update-boiler','BoilerController@update_boiler_details')->name('update.boiler.details');
    Route::post('/delete-boiler','BoilerController@delete_boiler')->name('delete.boiler');

    //==================service controller================
    Route::get('/service-index', 'ServiceController@admin_service_index')->name('get.service.index');

    Route::get('/get-all-boiler', 'ServiceController@get_all_service')->name('get.all.service.list');
    Route::post('/service-add', 'ServiceController@new_service_add')->name('admin.new.service.add');
    Route::post('/get-all-service','ServiceController@edit_service_details')->name('edit.service.details');
    Route::post('/update-service','ServiceController@update_service_details')->name('update.service.details');
    Route::post('/delete-service','ServiceController@delete_service')->name('delete.service');

    //==========================================Profile=========================================================
    //profile
    Route::get('admin/setting', 'ProfileController@admin_settings')->name('admin.setting');
    Route::get('admin/overview', 'ProfileController@admin_overview')->name('admin.overview');

    Route::post('admin/setting/change_info', 'ProfileController@change_info')->name('admin.change.info');
    Route::post('admin/setting/change_email', 'ProfileController@change_email')->name('admin.change.email');
    Route::post('admin/setting/change_password', 'ProfileController@change_password')->name('admin.change.password');


});
