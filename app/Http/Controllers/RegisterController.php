<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function createUser(Request $request){
        $data= $request->all();
        $checkUser = User::where('mobile', $data['mobile'])->count();
        if($checkUser > 0){
            return response()->json(['status'=>405, 'error'=>"User Account Already Registered With this Number"]);
        }else{
            $user = User::create([
                'name' => $data['name'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);
            return response()->json(['status'=>405, 'error'=>""]);
        }
        
    }


    public function sendOTP($sender, $numbers, $message, $otp){

        $apiKey = urlencode('MDhlMTdhOWIzYWI2ODIzMzQxYWNiZmYwNTY0Mzc1NjE=');

        session()->put('session_otp', $otp);
        session()->put('mobile_number', $numbers);

        // Message details
        $numbers = urlencode($numbers) ;
        $sender = urlencode($sender);
       
        $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $timestamp =  $_SERVER["REQUEST_TIME"];
        session()->put('otp_time', $timestamp);
    }

    public function requestForOtp(Request $request)
    {
        $sender = 'NATLER';
        $numbers = $request->input('mobileNumber');
        $checkOtp= UserOtp::where('mobile', $numbers)->first();
        if(!empty($checkOtp)){
            $otp= $checkOtp->otp;
        }else{
            $otp = rand(100000, 999999);
        }
        $message = rawurlencode('Dear user Please use this OTP : '.$otp.' to continue on Real Estate.');    
        $otpData= UserOtp::create([
            'otp' => $otp,
            'mobile'=> $numbers
        ]);

        $this->sendOTP($sender, $numbers, $message, $otp);
        return true;
    }


    public function validateOtpApi(Request $request)
    {
        if ($request) {
            $data = $request->all();
            $userOtp = $data['otp'];
            
            $timestamp =  $_SERVER["REQUEST_TIME"];

            
            if(($timestamp - $data['otp_time']) > 60)  // 300 refers to 300 seconds
            {
                // $request->session()->put('otp-expired', true);
                return response()->json(['status'=>405,'message' => '', 'error'=>"Don't receive the code Or OTP expired?"]);
            }

            if($userOtp){
                $otpData= UserOtp::where('mobile', $data['mobile'])->where('otp',$userOtp)->count();
                if($otpData > 0){
                    $deleteotp=UserOtp::where('mobile', $data['mobile'])->delete();
                    return response()->json(['status'=>405,'message' => '', 'error'=>"", 'success'=>"OTP verified"]);
                }else{
                    return response()->json(['status'=>405,'message' => '', 'error'=>"Invalid OTP"]);
                }
                
            }else{
                return response()->json(['status'=>405,'message' => '','error'=>"Failed to authenticate. OTP code is invalid!"]);
            }
        }
        return response()->json(['status'=>405,'message' => '','error'=>"SomeThing Went Wrong!"]);
    }

    public function accountDetails(){
       
        return view('auth.account-details');
    }
}
