<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function customer_contact(){
        //dd("test");
        return view('customer-view.contact');
    }
}
