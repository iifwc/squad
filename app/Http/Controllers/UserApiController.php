<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    public function get_user_profile_data(Request $request)
    {
        // Retrieve session data
        $mobileNumber = $request->session()->get('Mobile_Number');
        $userType = $request->session()->get('User_Type');
        
        // Fetch user profile data based on Mobile_Number
        $data = DB::table('users')
            ->where('Mobile_Number', $mobileNumber)
            ->get(); // Assuming you expect only one record

        if ($data->isEmpty()) {
            return response()->json([
                'status' => 'fail',
                'message' => "Data not found"
            ]);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        }
    }

    public function get_all_upcoming_event(Request $request)
    {
        $events = DB::table('organiser_event_hosting')
             ->where('Last_Event_Date_Time', '>=', now()) // Example condition
             ->orderBy('Last_Event_Date_Time', 'asc')     // Example ordering
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $events
        ]);
    }

    public function show_eventDetails(Request $request)
    {
        $event_id = $request->input('Event_Id');

        $eventDetails = DB::table('organiser_event_hosting')
            ->leftjoin('organiser_event_gallery', 'organiser_event_hosting.Event_id', '=', 'organiser_event_gallery.Event_id')
            ->where('organiser_event_hosting.Event_id', $event_id)
            ->select('organiser_event_hosting.*', 'organiser_event_gallery.Image', 'organiser_event_gallery.Video') // Select required columns
            ->get();

        return response()->json(['eventDetails' => $eventDetails, 'status' => 'success']);
    }




    public function userwishlist(Request $request) {
        $data = DB::table('user_wishlist')
            ->where('Mobile_Number', $request->Mobile_Number)
            ->get();

        if ($data->isNotEmpty()) {
            $eventIds = $data->pluck('Event_id')->toArray();
            $userwishlistdata = DB::table('organiser_event_hosting')
                ->whereIn('Event_id', $eventIds)
                ->get();

            return response()->json([
                'status' => 'true',
                'userwishlistdata' => $userwishlistdata
            ]);
        } else {
            return response()->json([
                'status' => 'false',
                'message' => 'No data found for this user'
            ]);
        }
    }



    public function userwishlist_add(Request $request) {

        $validator = Validator::make($request->all(), [
            'Mobile_Number' => 'required|numeric|digits:10',
            'Event_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => "Something is wrong. Please connect to the help center"], 422);
        }
    
        // Check if the user already has the event in their wishlist
        $data = DB::table('user_wishlist')
            ->where('Mobile_Number', $request->Mobile_Number)
            ->where('Event_id', $request->Event_id)
            ->first(); // Use first() instead of get()
    
        if ($data) {
            return response()->json([
                'status' => 'true',
                'message' => 'Already added to wishlist!'
            ]);
        } else {
            // If the event is not in the wishlist, add it
            $done = DB::table('user_wishlist')->insert([
                'Mobile_Number' => $request->Mobile_Number,
                'Event_id' => $request->Event_id
            ]);
    
            if ($done) {
                return response()->json([
                    'status' => 'true',
                    'message' => 'Successfully added to wishlist!'
                ]);
            } else {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Failed to add to wishlist!'
                ]);
            }
        }
    }

    



    public function userwishlist_delete(Request $request){



        $validator = Validator::make($request->all(), [
            'Mobile_Number' => 'required|numeric|digits:10',
            'Event_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => "Something is wrong. Please connect to the help center"], 422);
        }


      $done=  DB::table('user_wishlist')->where('Mobile_Number', $request->Mobile_Number)
        ->where('Event_id', $request->Event_id)->delete();


        if ($done) {
            return response()->json([
                'status' => 'true',
                'message' => 'Successfully delete to wishlist!'
            ]);
        } else { 
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to delete to wishlist!'
            ]);
        }
}


}
