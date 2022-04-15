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

        $boilers = Boiler::where('id',$booking_id)->first();

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

            $data['boiler_id']= $booking_id;
            
            $data['customer_name']=$request->customer_name;
            $data['customer_contact_number']=$request->customer_contact_number;
            $data['year_warranty'] = $request->year_warranty;
            
            if($request->year_warranty == 5){
                $data['price'] = $boilers->price_for_5_year;
            }else{
                $data['price'] = $boilers->price_for_10_year;
            }

            //dd($request->roof_pitched);

            if($request->item_gas == 'Gas'){
                $data['fuel_type']= $request->item_gas;
            }

            if($request->item_combi == 'Combi'){
                $data['boiler_type']= $request->item_combi;
            }
            if($request->item_standard == 'Standard'){
                $data['boiler_type']= $request->item_standard;
            }
            if($request->item_system == 'System'){
                $data['boiler_type']= $request->item_system;
            }
            if($request->item_back_boiler == 'Back-boiler'){
                $data['boiler_type']= $request->item_back_boiler;
            }

            if($request->yes_combi_boiler == 'Yes'){
                $data['convert_combi_boiler']= $request->yes_combi_boiler;
            }
            if($request->no_combi_boiler == 'No'){
                $data['convert_combi_boiler']= $request->no_combi_boiler;
            }
            if($request->moving_over_yes == 'Yes'){
                $data['moving_5_meter']= $request->moving_over_yes;
            }
            if($request->moving_over_no == 'No'){
                $data['moving_5_meter']= $request->moving_over_no;
            }

            if($request->come_out_roof == 'Roof'){
                $data['fuel_come_out']= $request->come_out_roof;
            }
            if($request->come_out_wall == 'Wall'){
                $data['fuel_come_out']= $request->come_out_wall;
            }

            if($request->roof_pitched == 'Pitched'){
                $data['pitched_or_flat']= $request->roof_pitched;
            }
            if($request->roof_flat == 'Flat'){
                $data['pitched_or_flat']= $request->roof_flat;
            }
            if($request->under_a_carport_yes == 'Yes'){
                $data['under_a_carport']= $request->under_a_carport_yes;
            }
            if($request->under_a_carport_no == 'No'){
                $data['under_a_carport']= $request->under_a_carport_no;
            }
            
            if($request->from_the_window_yes == 'Yes'){
                $data['thirty_cm_away_window']= $request->from_the_window_yes;
            }
            if($request->from_the_window_no == 'No'){
                $data['thirty_cm_away_window']= $request->from_the_window_no;
            }
            
            if($request->you_live_in_flat == 'Flat'){
                $data['house_live_in']= $request->you_live_in_flat;
            }
            if($request->you_live_in_bungalow == 'Bungalow'){
                $data['house_live_in']= $request->you_live_in_bungalow;
            }
            if($request->you_live_in_terrace == 'Terrace'){
                $data['house_live_in']= $request->you_live_in_terrace;
            }
            if($request->you_live_in_semi_detatched == 'Semi detatched'){
                $data['house_live_in']= $request->you_live_in_demi_detatched;
            }
            if($request->you_live_in_detatched == 'Detatched'){
                $data['house_live_in']= $request->you_live_in_detatched;
            }
            
            if($request->bedroom_one == '1'){
                $data['number_of_bedroom']= $request->bedroom_one;
            }
            if($request->bedroom_two == '2'){
                $data['number_of_bedroom']= $request->bedroom_two;
            }else if($request->bedroom_three == '3'){
                $data['number_of_bedroom']= $request->bedroom_three;
            }
            if($request->bedroom_four == '4'){
                $data['number_of_bedroom']= $request->bedroom_four;
            }
            if($request->bedroom_five_plus == '5+'){
                $data['number_of_bedroom']= $request->bedroom_five_plus;
            }
            if($request->bathroom_one == '1'){
                $data['number_of_bathroom']= $request->bathroom_one;
            }
            if($request->bathroom_two == '2'){
                $data['number_of_bathroom']= $request->bathroom_two;
            }
            if($request->bathroom_three_plus == '3+'){
                $data['number_of_bathroom']= $request->bathroom_three_plus;
            }

            // else{
            //     return response()->json([
            //         'code' => 0,
            //         'msg' => 'Something went wrong.'
            //     ],412);

            //     echo "something is wrong!";
            // }

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
