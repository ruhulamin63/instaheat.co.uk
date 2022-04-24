<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB; //Import query builser
use App\Models\Boiler;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{
    public function signin(){
        return view('authenticate.signin');
    }

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
            $password=md5($request->password);

            $user=DB::table('users')
            ->where('username',$request->input('username'))
            ->where('status',1)
            ->first();

           
            if($user){

                if($user->password == $password){
                    
                    $request->session()->put('admin_id', $user->id);
                    $request->session()->put('username', $user->username);
                    $request->session()->put('admin_first_name', $user->first_name);
                    $request->session()->put('admin_last_name', $user->last_name);
                    $request->session()->put('admin_status', $user->status);
                    $request->session()->put('admin_email', $user->email);
                    $request->session()->put('admin_address', $user->address);
                    $request->session()->put('admin_division', $user->division);
                    $request->session()->put('admin_country', $user->country);
                    $request->session()->put('admin_phone', $user->phone);
                    $request->session()->put('admin_image', $user->image);
                    $request->session()->put('admin_password', $user->password);

                    if($user->status == 1){
                        //dd('test');
                        return redirect()->route('admin.home')->with('message', 'Logged In Successfully');
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

        return redirect()->route('admin.login');
    }
}
