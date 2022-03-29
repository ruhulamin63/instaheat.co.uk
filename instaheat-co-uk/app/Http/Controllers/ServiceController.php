<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function customer_services(){
        //dd("test");
        return view('customer-view.service');
    }
}
