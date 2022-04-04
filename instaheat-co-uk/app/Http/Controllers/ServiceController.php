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
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

class ServiceController extends Controller
{
    public function customer_services(){
        
        $services = DB::table('services')
            ->orderBy('id','DESC')
            ->get();

        return view('customer-view.service', compact('services'));
    }

    public function admin_service_index(){

        $services = DB::table('services')
            ->orderBy('id','DESC')
            ->get();

        return view('admin.pages.services.service-list', compact('services'));
    }

    //Get Service List
    public function get_all_service(){

        $services = Service::all();

        try {
            return DataTables::of($services)
                ->addIndexColumn()
            
                // ->addColumn('image', function($services){

                //     return '<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                   
                //                 <img src="asset('.$services->image.')">
                //             </div>';
                // })

                ->addColumn('service_name', function($services){

                    return $services->service_name;
                })

                ->addColumn('description', function($services){

                    return $services->description;
                })

                ->addColumn('activeStatus', function($services){
                    if($services->activeStatus == 0){
                        $active = "Active";
                        return  '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$services['id'].'" id="serviceStatusBtn" class="p-1 mb-2 bg-primary text-white" style="text-align: center;">
                                        <span>'.$active.'</span>
                                    </button>
                                </div>'; 
                    }
                    else{
                        $deactive = "Deactive";
                        return '<div class="btn-group d-flex flex-column w-100 me-2">
                                    <button data-id="'.$services['id'].'" id="serviceStatusBtn" class="p-1 mb-2 bg-danger text-white" style="text-align: center;">
                                        <span >'.$deactive.'</span>
                                    </button>
                                </div>';
                    }
                })

                ->addColumn('actions', function($services){
                    return '<button data-id="'.$services['id'].'" id="editServiceBtn">
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

                            <button data-id="'.$services['id'].'" id="deleteServcieBtn">
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

                ->rawColumns(['service_name', 'description', 'activeStatus', 'actions'])
                ->make(true);

        }catch (\Exception $e) {
            dd($e);
        }
    }

    //current customer service creating
    public function new_service_add(Request $request){

        $validator = \Validator::make($request->all(), [
            'service_name' => 'required',
            'description' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0 , 'error'=>$validator->errors()->toArray()]);
        }else{

            $data=array();
            $data['service_name']=$request->service_name;
            $data['description']=$request->description;
            $data['activeStatus']= 0;
           
            if($request->avatar !=""){
                $image = $request->file('avatar');
                $image_name=$image->getClientOriginalName();
                $image_ext=$image->getClientOriginalExtension();
                $image_new_name =$request->username.date("YmdHis");
                $image_full_name=$image_new_name.'.'.$image_ext;
                $upload_path='media/service/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $imageData='/media/service/'.$image_full_name;

                $data['image']=$imageData;
            }


            $query = DB::table('services')->insert($data);


            if($query){
                return response()->json([
                    'code' => 1,
                    'msg' => 'New service created successfully.'
                ],200);
            }else{
                return response()->json([
                    'code' => 0,
                    'msg' => 'Something went wrong.'
                ],412);
            }
        }
    }

    //Get service Details
    public function edit_service_details(Request $request){
        $service_id = $request->service_id;

        $serviceDetails = Service::find($service_id);

        $request->session()->put('service_image', $serviceDetails->image);

        return response()->json(['details'=>$serviceDetails],200);
        //dd($serviceDetails);
    }

    //UPDATE Service DETAILS
    public function update_service_details(Request $request){
        $service_id = $request->cid;

        $validator = \Validator::make($request->all(),[
            'brand_name' => 'required',
            'model_name' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

            $data=array();
            $data['service_name']=$request->service_name;
            $data['description']=$request->description;

            if($request->avatar !=""){
                $image = $request->file('avatar');
                $image_name=$image->getClientOriginalName();
                $image_ext=$image->getClientOriginalExtension();
                $image_new_name =$request->username.date("YmdHis");
                $image_full_name=$image_new_name.'.'.$image_ext;
                $upload_path='media/service/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $imageData='/media/service/'.$image_full_name;

                $data['image']=$imageData;
            }

            $query = DB::table('services')->update($data);

            //dd("test");

            
            if($query){
                return response()->json(['code'=>1, 'msg'=>'Service details have been updated'],200);
            }else{
                return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
            }
        }
    }

    // DELETE Service RECORD
    public function delete_service(Request $request){
        $service_id = $request->service_id;
        $query = Service::find($service_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Service has been deleted from database'],200);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong'],412);
        }
    }
}
