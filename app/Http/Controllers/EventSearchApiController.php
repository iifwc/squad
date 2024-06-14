<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class EventSearchApiController extends Controller
{
    public function searchevent(Request $request)
    {
        
        $validatedData = $request->validate([
            'Event_Title' => 'nullable|string|max:255',
            'Location' => 'nullable|string|max:255',
            // Ensure at least one parameter is provided
            'required_without_all:Event_Title,Location' => 'string|max:255'
        ]);
        

      

        // Start with a base query on the events table
        $query = DB::table('organiser_event_hosting');

        if ($request->filled('Event_Title')) {
            $query->where('Event_Title', 'like', '%' . $request->input('Event_Title') . '%');
        }

        if ($request->filled('Location')) {
            $query->where('City', 'like', '%' . $request->input('Location') . '%');
        }

        // Execute the query and get the results
        $events = $query->get();

        if ($events->isEmpty()) {
            // If no events found, return not found response
            return response()->json([
                'status' => 'false',
                'message' => 'No events found matching the criteria.'
            ], 404);
        }

        // Return the results as a JSON response
        return response()->json([
            'status' => 'true',
            'events' => $events
        ]);
    }
}
