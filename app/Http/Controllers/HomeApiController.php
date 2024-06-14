<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeApiController extends Controller
{
    public function queries(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $filePath = null; // Initialize filePath variable

        if ($request->hasFile('Attachments')) { // Corrected variable name from 'Attachment'
            $file = $request->file('Attachments');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'Query_Attachment_File/' . $fileName; // Construct the file path
            $file->move(public_path('Query_Attachment_File'), $fileName); // Move the file to the 'Query_Attachment_File' directory
        }

        $data = [
            'Contact_Name' => $request->Contact_Name,
            'Email' => $request->Email,
            'Subject' => $request->Subject,
            'Query_For' => $request->Query_For,
            'Description' => $request->Description,
            'Claasification' => $request->Claasification, // Corrected spelling
            'Attachment' => $filePath,
            'Created_At' => now()->format('Y-m-d H:i:s') ,
        ];

        try {
            DB::table('queries')->insert($data);
            return response()->json([
                'status' => 'true',
                'data' =>$data
            ]);
        } catch (\Exception $e) {
            // Handle database insertion error
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to save the data.',
                'error' => $e->getMessage()
            ]);
        }
    }



    public function contact_us(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Mobile_Number' => 'required|string|digits:10',
            'Email' => 'required|email|max:255',
            'Message' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['status' => 'false', 'message' => $validator->errors()->first()], 422);
        }

        // If validation passes, insert the contact us form data into the database
        $contact_us = DB::table('contact_us')->insert([
            'First_Name' => $request->input('First_Name'),
            'Last_Name' => $request->input('Last_Name'),
            'Mobile_Number' => $request->input('Mobile_Number'),
            'Email' => $request->input('Email'),
            'Message' => $request->input('Message'),
        ]);

        // Check if insertion was successful
        if ($contact_us) {
            // Return a success response if insertion was successful
            return response()->json(['message' => 'Contact information saved successfully'], 200);
        } else {
            // Return an error response if insertion failed
            return response()->json(['message' => 'Failed to save contact information'], 500);
        }
    }
}
