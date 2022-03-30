<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB; //Import query builser
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{
    public function signin(){
        return view('authenticate.signin');
    }

    //===============================view signin page=========================================
    // public function signinIndex(Request $request){
    //     // session_start();

    //     if($request->session()->has('username')){
    //         if($request->session()->get('status') == 1){
    //             return redirect('/admin/home');
    //         }else{
    //             return view('authenticate.signin');
    //         }
    //     }else{
    //         return view('authenticate.signin');
    //     }

    // }

    //===============================view login page=========================================
    public function loggedin(Request $request){

        $validator = Validator::make($request->all(), [
            'username' => 'required|max:50',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        }else{
            $password=md5($request->input('password'));

            $user=DB::table('users')
            ->where('username',$request->input('username'))
            ->where('status',1)
            ->first();

           
            if($user){

                if($user->password == $password){

                    //$id = $user->id;
                    //$myBike = Bike_information::where('full_name',$id)->where('activeStatus',1)->orderBy('id','DESC')->get();

                    
                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('username', $user->username);
                    $request->session()->put('first_name', $user->first_name);
                    $request->session()->put('last_name', $user->last_name);
                    $request->session()->put('status', $user->status);
                    $request->session()->put('admin_email', $user->email);
                    $request->session()->put('admin_address', $user->address);
                    $request->session()->put('admin_division', $user->division);
                    $request->session()->put('admin_country', $user->country);
                    $request->session()->put('admin_phone', $user->phone);
                    $request->session()->put('admin_image', $user->image);
                    $request->session()->put('admin_password', $user->password);

                    if($user->status == 1){
                        return redirect('/admin-home')->with('message', 'Logged In Successfully');
                    }else{
                        return redirect()->back()->with([
                            'error' => true,
                            'message' => 'User Not found !'
                        ]);
                    }
                }else{
                    return redirect()->back()->with([
                        'error' => true,
                        'message' => 'Incorrect username or password'
                    ]);
                }

            }else{
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'User Not found !'
                ]);
            }
        }
    }


    //================================Logout page==================================================
    public function logout(Request $request){

        $request->session()->flush();

        return redirect('/login');
    }

    //===============================create user page=========================================
    public function signup(){
        return view('authenticate.signup');
    }

    // public function CreateNewUser(Request $request){

    //     $validator = Validator::make($request->all(), [
    //         'firstName' => ['required', 'min:3' ,'max:30'],
    //         'lastName' => ['required', 'min:3' ,'max:30'],
    //         'username' => 'required',
    //         'address' => 'required',
    //         'password' => [
    //                         'required',
    //                         'string',
    //                         'min:8',
    //                         'max:20',
    //                         // 'regex:/[a-z]/',
    //                         // 'regex:/[A-Z]/',
    //                         // 'regex:/[0-9]/',
    //                         // 'regex:/[@$!%*#?&]/',
    //                     ],
    //         'confirm-password' => 'required|same:password',
    //         'phone' => 'required|min:11|max:15'

    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->with([
    //             'error' => true,
    //             'message' => 'Required data missing.'
    //         ]);
    //     }else{

    //         $user=DB::table('users')
    //         ->where('phone',$request->phone)
    //         ->orWhere('username',$request->username)
    //         ->first();

    //         if($user){

    //             return redirect()->back()->with([
    //                 'error' => true,
    //                 'message' => 'Username or Phone Already register'
    //             ]);

    //         }else{

    //             $data=array();
    //             $data['first_name']=$request->firstName;
    //             $data['last_name']=$request->lastName;
    //             $data['username']=$request->username;
    //             $data['password']=md5($request->password);
    //             $data['address']=$request->address;
    //             $data['email']=$request->email;
    //             $data['phone']=$request->phone;
    //             $data['type']=2;
    //             $data['status']=1;

    //             $insert_user = DB::table('users')->insert($data);

    //             // Verify_user::create([
    //             //     'token' =>Str::random(60),
    //             //     'user_id' =>$insert_user->id,
    //             // ]);
    //             // Mail::to($insert_user->email)->send(new Verify_mail($insert_user));
               
    //             if($insert_user){

    //                 return redirect()->route('user.login')->with('message', 'Please click on the link sent to your email');
    //                 // return redirect('/login')->with([
    //                 //     'message' => 'User Create Successfully'
    //                 // ]);
    //             }else{
    //                 return redirect('/login')->with([
    //                     'message' => 'Something going wrong'
    //                 ]);
    //             }
    //         }

            
    //     }
    // }
}
