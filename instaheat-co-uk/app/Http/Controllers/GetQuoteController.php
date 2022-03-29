<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetQuoteController extends Controller
{
    public function customer_getQuote(){
        //dd("test");
        return view('customer-view.get-quote');
    }
}
