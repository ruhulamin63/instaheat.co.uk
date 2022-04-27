<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\QuestionnaireAnswer;
use App\Models\Orderdetail;
use App\Models\User;
use App\Models\Boiler;
use Carbon\Carbon;
use DataTables;

class OrderController extends Controller
{

    public function order_index(){

        $question = DB::table('questionnaire_answers')
            ->where('activeStatus',1)
            ->orderBy('id','DESC')
            ->get();

        $id = Session()->get('admin_id');
        $users = User::where('id',$id)->first();

        return view('admin.pages.order.order-list', compact('users', 'question'));
    }

    public function order_details_index(){
        $order_details = DB::table('orderdetails')
            ->where('activeStatus',1)
            ->orderBy('id','DESC')
            ->get();

        $id = Session()->get('admin_id');
        $users = User::where('id',$id)->first();

        return view('admin.pages.order.order-details', compact('users', 'order_details'));
    }

    public function order_details(){
        $orders = Orderdetail::all();

        try {
            return DataTables::of($orders)
                ->addIndexColumn()

                ->addColumn('status', function($orders){
                    if($orders->status == 0){
                        $incomplete = "Incomplete";
                        return  '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="badge badge-dark" style="text-align: center;">
                                        <span>'.$incomplete.'</span>
                                    </span>
                                </div>'; 
                    }
                    else if($orders->status == 1){
                        $complete = "Complete";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="badge badge-success" style="text-align: center;">
                                        <span>'.$complete.'</span>
                                    </span>
                                </div>'; 
                    }
                    else{
                        $cancel = "Cancel";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="badge badge-danger" style="text-align: center;">
                                        <span >'.$cancel.'</span>
                                    </span>
                                </div>';
                    }
                })
               
                ->addColumn('actions', function($orders){
                    return '<a href="/boiler-logic-30/'.$orders['boiler_id'].'" class="btn btn-primary btn-sm">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>';
                })

                ->rawColumns(['status', 'actions'])
                ->make(true);

        }catch (\Exception $e) {
            dd($e);
        }
    }

    //Get Order List
    public function get_all_order(){

        $orders = QuestionnaireAnswer::all();

        try {
            return DataTables::of($orders)
                ->addIndexColumn()

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
                    $null="Null";

                    if($orders->moving_5_meter == "Yes"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$yes.'</span>
                                </div>';
                    }else if($orders->moving_5_meter == "No"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$no.'</span>
                                </div>';
                    }
                    else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$null.'</span>
                                </div>';
                    }
                })

                ->addColumn('fuel_come_out', function($orders){
                    return $orders->fuel_come_out;
                })

                ->addColumn('pitched_or_flat', function($orders){
                    $pitched="Pitched";
                    $flat="Flat";
                    $null="Null";

                    if($orders->pitched_or_flat == "Pitched"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$pitched.'</span>
                                </div>';
                    }else if($orders->pitched_or_flat == "Flat"){
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$flat.'</span>
                                </div>';
                    }
                    else{
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <span class="p-1 mb-2 bg-info text-white" style="text-align: center;" class="min-w-100px">'.$null.'</span>
                                </div>';
                    }
                })

                ->addColumn('status', function($orders){
                    if($orders->status == 0){
                        $incomplete = "Incomplete";
                        return  '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="badge badge-dark" style="text-align: center;">
                                        <span>'.$incomplete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else if($orders->status == 1){
                        $complete = "Complete";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="badge badge-success" style="text-align: center;">
                                        <span>'.$complete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else{
                        $cancel = "Cancel";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="badge badge-danger" style="text-align: center;">
                                        <span >'.$cancel.'</span>
                                    </button>
                                </div>';
                    }
                })

                ->addColumn('actions', function($orders){
                    return '<a href="/boiler-logic-30/'.$orders['boiler_id'].'" class="btn btn-primary btn-sm">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            
                            <button data-id="'.$orders['id'].'" id="editOrderBtn" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </button>

                            <button data-id="'.$orders['id'].'" id="deleteOrderBtn" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        </div>';
                })

                ->rawColumns(['convert_combi_boiler', 'under_a_carport', 'thirty_cm_away_window', 'moving_5_meter','fuel_come_out', 'pitched_or_flat', 'status', 'actions'])
                ->make(true);

        }catch (\Exception $e) {
            dd($e);
        }

        //return view('admin.pages.order-list');
    }

    //current customer order creating
    public function new_customer_order_add(Request $request){

        $validator = \Validator::make($request->all(), [
            'customer_name' => 'required',
            'customer_contact_number' => 'required|min:8|max:11',
            'year_warranty' => 'required',
            'fuel_type' => 'required',
            'boiler_type' => 'required',
            'convert_combi_boiler' => 'required',
            'under_a_carport' => 'required',
            'thirty_cm_away_window' => 'required',
            'fuel_come_out' => 'required',
            'house_live_in' => 'required',
            'number_of_bedroom' => 'required',
            'number_of_bathroom' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0 , 'error'=>$validator->errors()->toArray()]);
        }else{

            $boiler = Boiler::where('id',1)->first();

            $data=array();

            $data['boiler_id']= 1;
            
            $data['customer_name']=$request->customer_name;
            $data['customer_contact_number']=$request->customer_contact_number;
            //$data['year_warranty'] = $boiler->year_warranty;
            
            // if($request->year_warranty == 5){
            //     $data['price'] = $boiler->price_for_5_year;
            // }else{
            //     $data['price'] = $boiler->price_for_10_year;
            // }

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
                    'msg' => 'New order created successfully.'
                ],200);
            }else{
                return response()->json([
                    'code' => 0,
                    'msg' => 'Something went wrong.'
                ],412);
            }
        }
    }


    //Get Order Details
    public function edit_order_details(Request $request){
        $order_id = $request->order_id;

        $orderDetails = QuestionnaireAnswer::find($order_id);

        return response()->json(['details'=>$orderDetails],200);
        //dd($orderDetails);
    }

    //UPDATE Order DETAILS
    public function update_order_details(Request $request){
        $order_id = $request->cid;

        //dd($order_id);
        
        $validator = \Validator::make($request->all(),[
            'customer_name' => 'required',
            'customer_contact_number' => 'required',
            'year_warranty' => 'required',
        ]);

        // if(!$validator->passes()){
        //     dd('test');
        //     return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        // }else{
           
            $boiler = Boiler::where('id',$order_id)->first();

            $orderDetails = QuestionnaireAnswer::find($order_id);

            $orderDetails->customer_name = $request->customer_name;
            $orderDetails->customer_contact_number = $request->customer_contact_number;

            $orderDetails->fuel_type = $request->fuel_type;
            $orderDetails->boiler_type = $request->boiler_type;
            $orderDetails->convert_combi_boiler = $request->convert_combi_boiler;
            $orderDetails->under_a_carport = $request->under_a_carport;
            $orderDetails->thirty_cm_away_window = $request->thirty_cm_away_window;

            $orderDetails->moving_5_meter = $request->moving_5_meter;
            $orderDetails->fuel_come_out = $request->fuel_come_out;
            $orderDetails->pitched_or_flat = $request->pitched_or_flat;
            $orderDetails->thirty_cm_away_window = $request->thirty_cm_away_window;
            $orderDetails->house_live_in = $request->house_live_in;

            $orderDetails->number_of_bedroom = $request->number_of_bedroom;
            $orderDetails->number_of_bathroom = $request->number_of_bathroom;

           // dd('test');
            //$query = DB::table('questionnaire_answers')->update($data);
            $query = $orderDetails->update();

            //dd("test");

            
            if($query){
                return response()->json(['code'=>1, 'msg'=>'Order details have been updated'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        //}
    }

    // DELETE Order RECORD
    public function delete_order(Request $request){
        $order_id = $request->order_id;
        $query = QuestionnaireAnswer::find($order_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Order has been deleted from database'],200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
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

            $order_list = QuestionnaireAnswer::find($order_id);

            $order_list->status = $request->status;
            $query = $order_list->update();


            if($query){
                return response()->json(['code'=>1, 'msg'=>'Order status have been changed'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        }
    }

    
}
