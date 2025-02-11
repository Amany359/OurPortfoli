<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


=======
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
<<<<<<< HEAD
<<<<<<< HEAD
            'name' => 'required|string|max:50',
=======
            'name' => 'required|max:50',
>>>>>>> feature/setting
=======
            'name' => 'required|max:50',
>>>>>>> feature/Projects
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'حدث خطأ',
                'errors' => $validator->errors()
            ],422);
        }

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role'=>1,
            'password'=>Hash::make($request->password),
<<<<<<< HEAD
<<<<<<< HEAD
            'remember_token'=>Str::random(40),
        ]);
        
        $subjec = "verify email";
        $body = "تحقق من البريد الإلكتروني للتفعيل";
        Mail::to($request->email,)->send(new SendMail($user,$subjec,$body));
        return response()->json([
            'message' => 'تحقق من البريد الإلكتروني لتفعيل حسابك',
=======
=======
>>>>>>> feature/Projects
        ]);

        return response()->json([
            'message' => 'تم التسجيل بنجاح',
<<<<<<< HEAD
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
            'data' => $user
        ],200);
    }


    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',

        ]);
<<<<<<< HEAD
<<<<<<< HEAD

        $user = User::where('email','=',$request->email)->first();

     
  
      
=======
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
        if ($validator->fails()) {
            return response()->json([
                'message' => 'حدث خطأ',
                'errors' => $validator->errors()
            ],422);
        }

        $user = User::where('email',$request->email)->first();

        $userdata = array(
            'email' => $request->email,
            'password' => $request->password
          );

        if(Auth::attempt($userdata)){
<<<<<<< HEAD
<<<<<<< HEAD
            if($user->email_verified_at==null){
                return response()->json([
                    'message' => 'تحقق من تفعيل الايميل',
                ],422);}

            $token = $user->createToken('auth-token')->plainTextToken;

=======
            $token = $user->createToken('auth-token')->plainTextToken;
>>>>>>> feature/setting
=======
            $token = $user->createToken('auth-token')->plainTextToken;
>>>>>>> feature/Projects
            return response()->json([
                'message' => 'تم الدخول بنجاح',
                'token'=>$token,
                'data'=>$user
            ],200);
        }else{
            return response()->json([
                'message' => 'بيانات الدخول غير صحيحة',
            ],400);
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD

    
    public function verify(string $token){
   
        $user = User::where('remember_token','=',$token)->first();

      if(!empty($user)){
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();
        return response()->json([
            'message' => 'تم تفعيل الحساب بنجاح',
            'token' =>$token
        ],200);
      }else{
        return response()->json([
            'message' => 'لايوجد',
        ],404);
      }
        
    }



=======
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
}
