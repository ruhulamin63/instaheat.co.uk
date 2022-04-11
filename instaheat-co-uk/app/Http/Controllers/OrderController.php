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

    //Get Order List
    public function get_all_order(){

        $orders = QuestionnaireAnswer::all();

        try {
            return DataTables::of($orders)
                ->addIndexColumn()

                // ->addColumn('customer_name', function($orders){

                //     return $orders->customer_name;
                // })

                // ->addColumn('customer_contact_number', function($orders){

                //     return $orders->customer_contact_number;
                // })

                // ->addColumn('fuel_type', function($orders){

                //     return $orders->fuel_type;
                // })

                // ->addColumn('boiler_type', function($orders){

                //     return $orders->boiler_type;
                // })

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
               
                // ->addColumn('house_live_in', function($orders){

                //     return $orders->house_live_in;
                // })

                // ->addColumn('number_of_bedroom', function($orders){

                //     return $orders->number_of_bedroom;
                // })

                // ->addColumn('number_of_bathroom', function($orders){

                //     return $orders->number_of_bathroom;
                // })

                ->addColumn('status', function($orders){
                    if($orders->status == 0){
                        $incomplete = "Incomplete";
                        return  '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="p-1 mb-2 bg-primary text-white" style="text-align: center;">
                                        <span>'.$incomplete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else if($orders->status == 1){
                        $complete = "Complete";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="p-1 mb-2 bg-success text-white" style="text-align: center;">
                                        <span>'.$complete.'</span>
                                    </button>
                                </div>'; 
                    }
                    else{
                        $cancel = "Cancel";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$orders['id'].'" id="orderStatusBtn" class="p-1 mb-2 bg-danger text-white" style="text-align: center;">
                                        <span >'.$cancel.'</span>
                                    </button>
                                </div>';
                    }
                })

                ->addColumn('actions', function($orders){
                    return '<button data-id="'.$orders['id'].'" id="editOrderBtn">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>

                            &nbsp;&nbsp;

                            <button data-id="'.$orders['id'].'" id="deleteOrderBtn">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
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
            $data['year_warranty'] = $boiler->year_warranty;
            
            if($request->year_warranty == 5){
                $data['price'] = $boiler->price_for_5_year;
            }else{
                $data['price'] = $boiler->price_for_10_year;
            }

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
        $order_id = $request->order_id;
        
        $validator = \Validator::make($request->all(),[
            'customer_name' => 'required',
            'customer_contact_number' => 'required',
            'year_warranty' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

            $boiler = Boiler::where('id',1)->first();
            //$question = QuestionnaireAnswer::where('boiler_id',1)->first();

           // dd($boiler);

            $data=array();

            //$data['boiler_id']= $boiler_id;

            // $data['customer_name']=$request->customer_name;
            // $data['customer_contact_number']=$request->customer_contact_number;
            // $data['year_warranty']=$request->year_warranty;

            $orderDetails = QuestionnaireAnswer::find($order_id);

            $orderDetails->customer_name = $request->customer_name;
            $orderDetails->customer_contact_number = $request->customer_contact_number;
            $orderDetails->year_warranty = $request->year_warranty;
            
            if($request->year_warranty == 5){
                //$data['price'] = $boiler->price_for_5_year;
                $orderDetails->price = $request->price;
            }else{
                //$data['price'] = $boiler->price_for_10_year;
                $orderDetails->price = $request->price;
            }

            // $data['fuel_type']= $request->fuel_type;
            // $data['boiler_type']= $request->boiler_type;
            // $data['convert_combi_boiler']= $request->convert_combi_boiler;
            // $data['under_a_carport']= $request->under_a_carport;
            // $data['thirty_cm_away_window']= $request->thirty_cm_away_window;
            // $data['moving_5_meter']= $request->moving_5_meter;
            // $data['fuel_come_out']= $request->fuel_come_out;
            // $data['pitched_or_flat']= $request->pitched_or_flat;
            // $data['house_live_in']= $request->house_live_in;
            // $data['number_of_bedroom']= $request->number_of_bedroom;
            // $data['number_of_bathroom']= $request->number_of_bathroom;
            // $data['status']= 0;
            // $data['activeStatus']= 1;

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
            $orderDetails->status = 0;
            $orderDetails->activeStatus = 1;


            //$query = DB::table('questionnaire_answers')->update($data);
            $query = $orderDetails->update();

            //dd("test");

            
            if($query){
                return response()->json(['code'=>1, 'msg'=>'Order details have been updated'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        }
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

    
}
