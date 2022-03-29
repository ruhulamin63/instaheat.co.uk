<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function customer_index(){
        //dd("test");
        return view('customer-view.index');
    }
}
