<?php

use App\Http\Controllers\HomeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\OTPController;
use App\Http\Controllers\Auth\Verify_OTPController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\EventSearchApiController;

use App\Http\Controllers\AdminApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


// auth_api


    Route::post('/send-otp', [OTPController::class, 'sendOtp']);
    Route::post('/verify-otp', [Verify_OTPController::class, 'verifyOtp']);
    Route::post('/user_signin',[SigninController::class,'user_signin']);
    Route::post('/admin_signin',[SigninController::class,'admin_signin']);
    Route::post('/org_signin',[SigninController::class,'org_signin']);
    Route::post('/user_signup',[RegisteredUserController::class,'registerUser']);   
    Route::post('/organisation-signup',[RegisteredUserController::class,'OrganisationUser']);
    
    Route::get('/signout',[SignoutController::class,'signout'])->name('signout');
    Route::get('/user-profile',[UserApiController::class,'get_user_profile_data']);















// user_related api
Route::post('/event',[UserApiController::class,'get_all_upcoming_event']);
Route::post('/eventSearch',[EventSearchApiController::class,'searchevent']);
Route::post('/event-details',[UserApiController::class,'show_eventDetails']);
Route::post('/user_wishlist',[UserApiController::class,'userwishlist']);
Route::post('/userwishlist_add',[UserApiController::class,'userwishlist_add']);
Route::post('/userwishlist_delete',[UserApiController::class,'userwishlist_delete']);








Route::post('/contact_us',[HomeApiController::class,'contact_us']);
Route::post('/queries',[HomeApiController::class, 'queries']);


