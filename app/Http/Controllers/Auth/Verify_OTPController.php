<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class Verify_OTPController extends Controller
{
    public function verifyOtp(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'Mobile_Number' => 'required|numeric',
            'otp' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => $validator->errors()->first()], 422);
        }

       
        $otpEntry = DB::table('mobile_verification')
            ->where('Mobile_Number', $request->Mobile_Number)
            ->orderBy('created_at', 'desc') // Get the latest OTP
            ->first();

        
      

        // Check if the OTP matches
        if ($otpEntry->OTP == $request->otp) {
            // OTP is correct, proceed with user verification or any other logic
            return response()->json(['status' => 'true', 'message' => 'OTP verified successfully.']);
        } else {
            // OTP is incorrect
            return response()->json(['status' => 'false', 'message' => 'Invalid OTP'], 462);
        }
    }
}
