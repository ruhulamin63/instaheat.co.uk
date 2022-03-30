<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //======================== admin dashboard  ==========================
    public function admin_dashboard(){
        //dd("test");
        return view('customer-view.admin.adminHome');
    }


    //======================== customer dashboard  ==========================
    public function customer_index(){
        //dd("test");
        return view('customer-view.index');
    }
}
