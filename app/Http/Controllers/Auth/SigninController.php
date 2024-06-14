<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use DB;

class SigninController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function user_signin(LoginRequest $request): JsonResponse
    {
        

        $request->session()->regenerate();

     

        $optverify = $this->verifyOtp($request->otp, $request->Mobile_Number);

        // Handle OTP verification result
        if ($optverify == true) {
            // Attempt to fetch user from database
            $user = DB::table('users')
                ->where('Mobile_Number', $request->Mobile_Number)
                ->first();

            if ($user) {
                // Store Mobile Number and User Type in the session
                Auth::loginUsingId($user->id);
                $request->session()->put('id', $user->id);
                $request->session()->put('Mobile_Number', $user->Mobile_Number);
                $request->session()->put('User_Type', 'user');
     

                return response()->json(['status' => 'true', 'message' => 'Sign in successful ']);
            } else {
                // Invalid user details
                return response()->json(['status' => 'false', 'message' => 'Invalid User Details'], 404);
            }
        } else {
            // Invalid OTP
            return response()->json(['status' => 'false', 'message' => 'Invalid OTP'], 400);
        }

        
    }

    public function admin_signin(LoginRequest $request): JsonResponse
    {
        

        $request->session()->regenerate();

        date_default_timezone_set('Asia/Kolkata');
        // Validate incoming request
       

      

        $optverify = $this->verifyOtp($request->otp, $request->Mobile_Number);

        // Handle OTP verification result
        if ($optverify == true) {
            // Attempt to fetch user from database
            $user = DB::table('admin')
                ->where('Mobile_Number', $request->Mobile_Number)
                ->first();

            if ($user) {
                // Store Mobile Number and User Type in the session
                Auth::loginUsingId($user->id);
                $request->session()->put('id', $user->id);
                $request->session()->put('Mobile_Number', $user->Mobile_Number);
                $request->session()->put('User_Type', 'admin');
             


                return response()->json(['status' => 'true', 'message' => 'Sign in successful'],404);
            } else {
                // Invalid user details
                return response()->json(['status' => 'false', 'message' => 'Invalid User Details'], 404);
            }
        } else {
            // Invalid OTP
            return response()->json(['status' => 'false', 'message' => 'Invalid OTP'], 400);
        }

        
    }

    public function org_signin(LoginRequest $request): JsonResponse
    {
        

        $request->session()->regenerate();

        date_default_timezone_set('Asia/Kolkata');
        // Validate incoming request
       

        $optverify = $this->verifyOtp($request->otp, $request->Mobile_Number);

        // Handle OTP verification result
        if ($optverify == true) {
            // Attempt to fetch user from database
            $user = DB::table('organiser')
                ->where('Mobile_Number', $request->Mobile_Number)
                ->first();

            if ($user) {
                // Store Mobile Number and User Type in the session
                Auth::loginUsingId($user->id);
                $request->session()->put('id', $user->id);
                $request->session()->put('Mobile_Number', $user->Mobile_Number);
                $request->session()->put('User_Type', 'organiser');
                


                return response()->json(['status' => 'true', 'message' => 'Sign in successful' ]);
            } else {
                // Invalid user details
                return response()->json(['status' => 'false', 'message' => 'Invalid User Details'], 404);
            }
        } else {
            // Invalid OTP
            return response()->json(['status' => 'false', 'message' => 'Invalid OTP'], 400);
        }

        
    }



    public function verifyOtp($otp, $Mobile_Number)
    {
        // Retrieve the latest OTP entry from the database
        $otpEntry = DB::table('mobile_verification')
            ->where('Mobile_Number', $Mobile_Number)
            ->orderBy('created_at', 'desc') // Get the latest OTP
            ->first();
    
        // Check if the OTP matches
        return $otpEntry && $otpEntry->OTP == $otp;
    }
    
   
   
    }  
