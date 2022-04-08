<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\QuestionnaireAnswer;
use App\Models\Boiler;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class GetQuoteController extends Controller
{
    public function customer_getQuote(){
        //dd("test");
        return view('customer-view.get-quote');
    }

    public function boiler_logic_30(){

        $boilers = DB::table('boilers')
        ->orderBy('id','DESC')
        ->get();

        return view('customer-view.boilers-logic-30', compact('boilers'));
    }

    public function boiler_logic_list(){
        //dd("test");
        return view('customer-view.boiler-logic-list');
    }

    public function question_2(){
        //dd("test");
        return view('customer-view.question-2');
    }
}
