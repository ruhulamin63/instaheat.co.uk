<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\QuestionnaireAnswer;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class DashboardController extends Controller
{
    //======================== admin dashboard  ==========================
    public function admin_dashboard(){
        
        //dd("test");
        return view('admin.adminHome');
    }

    //Get today's order List
    public function get_today_order(){

        $orders = QuestionnaireAnswer::where('activeStatus',1)
        ->where('created_at', '>', now()->subDays(1)->endOfDay())
        ->orderBy('id','DESC')
        ->get();

        //dd($orders);

        try {
            return DataTables::of($orders)
                ->addIndexColumn()

                ->addColumn('customer_name', function($orders){

                    return $orders->customer_name;
                })

                ->addColumn('customer_contact_number', function($orders){

                    return $orders->customer_contact_number;
                })

                ->addColumn('fuel_type', function($orders){

                    return $orders->fuel_type;
                })

                ->addColumn('boiler_type', function($orders){

                    return $orders->boiler_type;
                })

                ->addColumn('convert_combi_boiler', function($orders){
                    $yes="Yes";
                    $no="No";

                    if($orders->convert_combi_boiler == "Yes"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$yes.'</span>
                                </div>';
                    }else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$no.'</span>
                                </div>';
                    }
                })

                ->addColumn('under_a_carport', function($orders){

                    $yes="Yes";
                    $no="No";

                    if($orders->under_a_carport == "Yes"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$yes.'</span>
                                </div>';
                    }else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$no.'</span>
                                </div>';
                    }
                })

                ->addColumn('thirty_cm_away_window', function($orders){
                    $yes="Yes";
                    $no="No";

                    if($orders->thirty_cm_away_window == "Yes"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$yes.'</span>
                                </div>';
                    }else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$no.'</span>
                                </div>';
                    }
                })

                ->addColumn('moving_5_meter', function($orders){
                    $yes="Yes";
                    $no="No";

                    if($orders->moving_5_meter == "Yes"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$yes.'</span>
                                </div>';
                    }else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$no.'</span>
                                </div>';
                    }
                })

                ->addColumn('fuel_come_out', function($orders){
                    return $orders->fuel_come_out;
                })

                ->addColumn('pitched_or_flat', function($orders){
                    $pitched="Pitched";
                    $flat="Flat";

                    if($orders->pitched_or_flat == "Pitched"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$pitched.'</span>
                                </div>';
                    }else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$flat.'</span>
                                </div>';
                    }
                })
               
                ->addColumn('house_live_in', function($orders){

                    return $orders->house_live_in;
                })

                ->addColumn('number_of_bedroom', function($orders){

                    return $orders->number_of_bedroom;
                })

                ->addColumn('number_of_bathroom', function($orders){

                    return $orders->number_of_bathroom;
                })

                ->addColumn('status', function($orders){
                    if($orders->status == 0){
                        $incomplete = "Incomplete";
                        return  '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="todayOrderStatusBtn" class="p-1 mb-2 bg-primary text-white" style="text-align: center;">
                                        <span>'.$incomplete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else if($orders->status == 1){
                        $complete = "Complete";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="todayOrderStatusBtn" class="p-1 mb-2 bg-success text-white" style="text-align: center;">
                                        <span>'.$complete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else{
                        $cancel = "Cancel";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="todayOrderStatusBtn" class="p-1 mb-2 bg-danger text-white" style="text-align: center;">
                                        <span >'.$cancel.'</span>
                                    </button>
                                </div>';
                    }
                    // return $appointment->amount;
                })

                ->rawColumns(['customer_name', 'customer_contact_number', 'fuel_type', 'boiler_type', 'convert_combi_boiler', 'under_a_carport', 'thirty_cm_away_window', 'moving_5_meter','fuel_come_out', 'pitched_or_flat', 'house_live_in', 'number_of_bedroom', 'number_of_bathroom', 'status'])
                ->make(true);

        }catch (\Exception $e) {
            dd($e);
        }
    }

    //Get Order status details
    public function edit_order_status_details(Request $request){
        $order_id = $request->order_id;

        $orderDetails = QuestionnaireAnswer::find($order_id);

        return response()->json(['details'=>$orderDetails],200);
        //dd($orderDetails);
    }

    //Change Status
    public function update_order_status_change(Request $request){

        $order_id = $request->cid;

        $validator = \Validator::make($request->all(),[
            'status'=>'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

            $data=array();
            $data['status']= $request->status;

            $query = DB::table('questionnaire_answers')->update($data);


            if($query){
                return response()->json(['code'=>1, 'msg'=>'Order status have been changed'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        }
    }


    //======================== customer dashboard  ==========================
    public function customer_index(){
        //dd("test");
        return view('customer-view.index');
    }
}
