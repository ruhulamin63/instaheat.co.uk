<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetQuoteController extends Controller
{
    public function customer_getQuote(){
        //dd("test");
        return view('customer-view.get-quote');
    }

    public function boiler_logic_30(){
        //dd("test");
        return view('customer-view.boilers-logic-30');
    }

    public function question_2(){
        //dd("test");
        return view('customer-view.question-2');
    }
}
