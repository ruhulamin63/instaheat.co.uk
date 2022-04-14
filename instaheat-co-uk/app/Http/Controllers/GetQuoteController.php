<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\QuestionnaireAnswer;
use App\Models\Boiler;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class GetQuoteController extends Controller
{
    public function customer_getQuote(){

        $boilers = DB::table('boilers')
        ->orderBy('id','DESC')
        ->get();

        return view('customer-view.get-quote', compact('boilers'));
    }

    //Get Booking Details
    public function customer_booking_details(Request $request){
        $booking_id = $request->booking_id;

        $bookingDetails = Boiler::find($booking_id);

        return response()->json(['details'=>$bookingDetails],200);
        //dd($orderDetails);
    }

    public function boiler_logic_30($id){

        $boilers = Boiler::where('id',$id)->get();

        return view('customer-view.boilers-logic-30', compact('boilers'));
    }

    public function boiler_logic_30_booking(Request $request){
        $booking_id = $request->booking_id;
        // $customer_name = $request->customer_name;
        // $customer_contact_number = $request->customer_contact_number;
        // $year_warranty = $request->year_warranty;

        $boilers = Boiler::where('id',$booking_id)->first();

        //Storage::disk('test')->put('example.txt', 'Contents');

        $validator = \Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_contact_number' => 'required|min:6|max:16',
            'year_warranty' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0 , 'error'=>$validator->errors()->toArray()]);
        }else{

            //$boiler = Boiler::where('id',$id)->first();

            $data=array();

            $data['boiler_id']= $id;
            
            $data['customer_name']=$request->customer_name;
            $data['customer_contact_number']=$request->customer_contact_number;
            $data['year_warranty'] = $request->year_warranty;
            
            if($request->year_warranty == 5){
                $data['price'] = $boiler->price_for_5_year;
            }else{
                $data['price'] = $boiler->price_for_10_year;
            }

            //dd('test');

            $data['fuel_type']= $request->fuel_type;
            $data['boiler_type']= $request->boiler_type;
            $data['convert_combi_boiler']= $request->convert_combi_boiler;
            $data['under_a_carport']= $request->under_a_carport;
            $data['thirty_cm_away_window']= $request->thirty_cm_away_window;
            $data['moving_5_meter']= $request->moving_5_meter;
            $data['fuel_come_out']= $request->fuel_come_out;
            $data['pitched_or_flat']= $request->pitched_or_flat;
            $data['house_live_in']= $request->house_live_in;
            $data['number_of_bedroom']= $request->number_of_bedroom;
            $data['number_of_bathroom']= $request->number_of_bathroom;

            $data['status']= 0;
            $data['activeStatus']= 1;

            $query = DB::table('questionnaire_answers')->insert($data);


            if($query){
                return response()->json([
                    'code' => 1,
                    'msg' => 'Order created successfully.'
                ],200);
            }else{
                return response()->json([
                    'code' => 0,
                    'msg' => 'Something went wrong.'
                ],412);
            }
        }
        
    }

    // public function boiler_logic_30_details(Request $request, $id){

    //     $boilers = Boiler::where('id',$id)->first();

    //     return view('customer-view.boilers-logic-30', compact('boilers'));
    // }

    public function boiler_logic_list(){

        $boilers = DB::table('boilers')
            ->orderBy('id','DESC')
            ->get();

        return view('customer-view.boiler-logic-list', compact('boilers'));
    }

    public function question_2(){
        //dd("test");
        return view('customer-view.question-2');
    }
}
