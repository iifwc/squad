<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerUser(Request $request): JsonResponse
    {


        date_default_timezone_set('Asia/Kolkata');
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'Mobile_Number' => 'required|numeric|required|numeric|digits:10|unique:users,Mobile_Number',
            'otp' => 'required|numeric',
        ], [
            'Mobile_Number.required' => 'Mobile Number is required|digits:10',
            'Mobile_Number.numeric' => 'Mobile Number must be numeric',
            'otp.required' => 'OTP is required',
            'otp.numeric' => 'OTP must be numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => $validator->errors()->first()], 422);
        }
        $otpVerified = $this->verifyOtp($request->otp, $request->Mobile_Number);

        if (!$otpVerified) {
            return response()->json(['status' => 'error', 'message' => 'Wrong OTP.'], 400);
        }

        // Insert user into the database
        $userInserted = DB::table('users')->insert([
            'Name' => $request->input('Name'),
            'Mobile_Number' => $request->input('Mobile_Number'),
            'Mobile_Number_Verification' => 'verify',
        ]);

        if (!$userInserted) {
            return response()->json(['status' => 'error', 'message' => 'Failed to register user'], 500);
        }

        // Retrieve the inserted user
        $user = DB::table('users')->where('Mobile_Number', $request->input('Mobile_Number'))->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'Failed to retrieve user after registration'], 500);
        }else{     Auth::loginUsingId($user->id);
            $request->session()->regenerate();
            $request->session()->put('id', $user->id);
            $request->session()->put('Mobile_Number',$user->Mobile_Number);
            $request->session()->put('User_Type','user');
           
    
            return response()->json(['status' => 'true', 'message' => 'Sign in successful',]);  }

      
       
    }


    public function OrganisationUser(Request $request): JsonResponse
    {


        date_default_timezone_set('Asia/Kolkata');
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'Mobile_Number'=> 'required|numeric|digits:10|unique:organiser,Mobile_Number',
            'otp' => 'required|numeric',
        ], [
            'Mobile_Number.required' => 'Mobile Number is required|digits:10',
            'Mobile_Number.numeric' => 'Mobile Number must be numeric',
            'otp.required' => 'OTP is required',
            'otp.numeric' => 'OTP must be numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => $validator->errors()->first()], 422);
        }
        $otpVerified = $this->verifyOtp($request->otp, $request->Mobile_Number);

        if (!$otpVerified) {
            return response()->json(['status' => 'error', 'message' => 'Wrong OTP.'], 400);
        }

        // Insert user into the database
        $userInserted = DB::table('organiser')->insert([
            'Name' => $request->input('Name'),
            'Mobile_Number' => $request->input('Mobile_Number'),
            'Mobile_Number_Verification' => 'verify',
           
        ]);

        if (!$userInserted) {
            return response()->json(['status' => 'error', 'message' => 'Failed to register user'], 500);
        }

        // Retrieve the inserted user
        $user = DB::table('organiser')->where('Mobile_Number', $request->input('Mobile_Number'))->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'Failed to retrieve user after registration'], 500);
        }else{     Auth::loginUsingId($user->id);
            $request->session()->regenerate();
            $request->session()->put('id', $user->id);
            $request->session()->put('Mobile_Number',$user->Mobile_Number);
            $request->session()->put('User_Type','organiser');
           
    
            return response()->json(['status' => 'true', 'message' => 'Sign in successful',]);  }

      
       
    }
    /**
     * Verify the OTP.
     *
     * @param int $otp
     * @param string $mobileNumber
     * @return bool
     */
    private function verifyOtp(int $otp, string $mobileNumber): bool
    {
       
        // Retrieve the latest OTP entry from the database
        $otpEntry = DB::table('mobile_verification')
            ->where('Mobile_Number', $mobileNumber)
            ->orderBy('created_at', 'desc') // Get the latest OTP
            ->first();

        // Check if the OTP matches
        if ($otpEntry && $otpEntry->OTP == $otp) {
            // OTP is correct, proceed with user verification or any other logic
            return true;
        } else {
            // OTP is incorrect
            return false;
        }
    }
    }

