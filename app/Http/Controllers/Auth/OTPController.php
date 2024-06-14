<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OTPController extends Controller
{
    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Mobile_Number' => 'required|numeric|digits:10'
          
        ], [
            'Mobile_Number.required' => 'Mobile Number is required and muset be 10 digit',
            'Mobile_Number.numeric' => 'Mobile Number must be numeric'
            
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => $validator->errors()->first()], 422);
        }
        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);
    
        // Check if an OTP entry already exists for the provided mobile number
        $existingOtp = DB::table('mobile_verification')
            ->where('Mobile_Number', $request->Mobile_Number)
            ->first();
    
        // If an OTP entry exists, update it; otherwise, insert a new entry
        if ($existingOtp) {
            DB::table('mobile_verification')
                ->where('Mobile_Number', $request->Mobile_Number)
                ->update([
                    'OTP' => $otp,
                    'created_at' => now(),
                    'expire_at' => now()->addMinutes(10)
                ]);
        } else {
            DB::table('mobile_verification')->insert([
                'Mobile_Number' => $request->Mobile_Number,
                'OTP' => $otp,
                'created_at' => now(),
                'expire_at' => now()->addMinutes(10)
            ]);
        }
    
        // Send the OTP via SMS (or log it for demonstration)
        \Log::info("OTP for {$request->Mobile_Number}: $otp");
    
        return response()->json(['status' => 'true', 'message' => 'OTP sent successfully']);
    }
}
