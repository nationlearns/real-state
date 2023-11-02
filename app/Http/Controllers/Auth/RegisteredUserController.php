<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\UserOtp;

class RegisteredUserController extends Controller
{

    public function create(): View
    {
        return view('auth.register');
    }

    public function createUser(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        // ]);

        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'intrested_in' => $request->intrested_in,
            'budget' => $request->budget,
            'prefered_city' =>$request->prefered_city,
            'required_loans'=> $request->required_loans,
            'prefered_bank'  => $request->prefered_bank,
            'marital_status' => $request->marital_status,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,

        ]);

        return response()->json(['status'=>400,'message' => 'User Created Successfully', 'userData' => $user]);
    }


    public function sendOTP($sender, $numbers, $message, $otp){

        $apiKey = urlencode('MDhlMTdhOWIzYWI2ODIzMzQxYWNiZmYwNTY0Mzc1NjE=');

        // Prepare data for POST request
        // $data = array('apikey' => $apiKey);

        session()->put('session_otp', $otp);
        session()->put('mobile_number', $numbers);

        // $request->session()->put('session_otp', $otp);
        // $request->session()->put('mobile_number', $numbers);

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
        $otp = rand(100000, 999999);
        $message = rawurlencode('Dear user Please use this OTP : '.$otp.' to continue on Nation Learns.');

        $otpData= UserOtp::create([
            'otp' => $otp,
            'mobile'=> $numbers
        ]);

        $this->sendOTP($sender, $numbers, $message, $otp);
        return true;
    }

}
