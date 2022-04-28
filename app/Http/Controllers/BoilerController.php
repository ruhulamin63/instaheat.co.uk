<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use App\Models\QuestionnaireAnswer;
use App\Models\Orderdetail;
use App\Models\Boiler;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class BoilerController extends Controller
{
    public function boiler_index(){

        $boilers = DB::table('boilers')
            ->orderBy('id','DESC')
            ->get();

        $id = Session()->get('admin_id');
        $users = User::where('id',$id)->first();

        return view('admin.pages.boilers.boiler-list', compact('boilers', 'users'));
    }

    //Get Boiler List
    public function get_all_boiler(){

        $boilers = Boiler::all();

        try {
            return DataTables::of($boilers)
                ->addIndexColumn()
            
                ->addColumn('price_for_5_year', function($boilers){

                    return '<div class="btn-group d-flex flex-column w-100 me-2">
                                <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$boilers->price_for_5_year.'</span>
                            </div>';
                })

                ->addColumn('price_for_10_year', function($boilers){

                    return '<div class="btn-group d-flex flex-column w-100 me-2">
                                <span class="p-1 mb-2 bg-warning text-dark" style="text-align: center;" class="min-w-100px">'.$boilers->price_for_10_year.'</span>
                            </div>';
                })

                ->addColumn('actions', function($boilers){
                    return '<button data-id="'.$boilers['id'].'" id="editBoilerBtn" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </button>

                            &nbsp;&nbsp;

                            <button data-id="'.$boilers['id'].'" id="deleteBoilerBtn" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        </div>';
                })

                ->rawColumns(['price_for_5_year','price_for_10_year', 'actions'])
                ->make(true);

        }catch (\Exception $e) {
            dd($e);
        }
    }

    //current customer order creating
    public function new_boiler_add(Request $request){

        $validator = \Validator::make($request->all(), [
            'brand_name' => 'required',
            'model_name' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0 , 'error'=>$validator->errors()->toArray()]);
        }else{

            $data=array();
            $data['brand_name']=$request->brand_name;
            $data['model_name']=$request->model_name;
            $data['type']= $request->type;
            $data['central_heating_output']= $request->central_heating_output;
            $data['hot_water_flow_rate']= $request->hot_water_flow_rate;
            $data['short_desc']= $request->short_desc;
            // $data['extras']= $request->extras;
            $data['price_for_5_year']= $request->price_for_5_year;
            $data['price_for_10_year']= $request->price_for_10_year;


            if($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                //$image_name=$image->getClientOriginalName();
                $image_ext=$image->getClientOriginalExtension();
    
                //$image_new_name =$request->contact_number.date("YmdHis");
                //dd($image_ext);
    
                $image_full_name=$request->model_name.'.'.$image_ext;
                Image::make($image)->resize(400, 400)->save('media/boiler/'. $image_full_name);
                $imageData='media/boiler/'.$image_full_name;
    
                $data['image']=$imageData;
            }else {
                $thumbnail = null;
            }
    


            $query = DB::table('boilers')->insert($data);


            if($query){
                return response()->json([
                    'code' => 1,
                    'msg' => 'New boilder created successfully.'
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
    public function edit_boiler_details(Request $request){
        $boiler_id = $request->boiler_id;

        $orderDetails = Boiler::find($boiler_id);

        $request->session()->put('boiler_image', $orderDetails->image);

        return response()->json(['details'=>$orderDetails],200);
        //dd($orderDetails);
    }

    //UPDATE Order DETAILS
    public function update_boiler_details(Request $request){
        $boiler_id = $request->cid;

        //dd($order_id);

        $validator = \Validator::make($request->all(),[
            'brand_name' => 'required',
            'model_name' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

            $boilers = Boiler::find($boiler_id);

            $boilers->brand_name = $request->brand_name;
            $boilers->model_name = $request->model_name;
            $boilers->type = $request->type;
            $boilers->central_heating_output = $request->central_heating_output;
            $boilers->hot_water_flow_rate = $request->hot_water_flow_rate;
            $boilers->short_desc = $request->short_desc;
            $boilers->price_for_5_year = $request->price_for_5_year;
            $boilers->price_for_10_year = $request->price_for_10_year;

            if($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                //$image_name=$image->getClientOriginalName();
                $image_ext=$image->getClientOriginalExtension();
    
                //$image_new_name =$request->contact_number.date("YmdHis");
                //dd($image_ext);
    
                $image_full_name=$request->model_name.'.'.$image_ext;
                Image::make($image)->resize(400, 400)->save('media/boiler/'. $image_full_name);
                $imageData='/media/boiler/'.$image_full_name;
    
                $boilers->image=$imageData;
            }else {
                $thumbnail = null;
            }
            
            $query = $boilers->update();

            //dd("test");

            
            if($query){
                return response()->json(['code'=>1, 'msg'=>'Boiler details have been updated'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        }
    }

    // DELETE Order RECORD
    public function delete_boiler(Request $request){
        $boiler_id = $request->boiler_id;
        $query = Boiler::find($boiler_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Boiler has been deleted from database'],200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
        }
    }

    //================Boiler details========================
    public function boiler_details($id){
        $boiler = Boiler::where('id',$id)->get();
        $boiler_details = Orderdetail::where('boiler_id',$id)->get();

        $id = Session()->get('admin_id');
        $users = User::where('id',$id)->first();

        //dd($boiler_details);

        return view('admin.pages.order.crud.boiler-details', compact('boiler_details', 'users', 'boiler'));
    }
}
