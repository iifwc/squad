<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    protected $Api_url;

    public function __construct()
    {
        $this->apiUrl = config('urls.Api_url');
    }
    


    public function privacy_policy(Request  $request){



        $mobileNumber = $request->session()->get('Mobile_Number');



        $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
    
        return view('privacy_policy', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);
        
    }

    public function terms_and_conditions(Request $request){

        $mobileNumber = $request->session()->get('Mobile_Number');

        
        $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
    
        return view('Term_and_Conditions', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);

        

    }



    public function contact_us(Request  $request){



        $mobileNumber = $request->session()->get('Mobile_Number');



        $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
    
        return view('contact_us', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);
        
    }



    
    public function help_article_detail_view(Request  $request){



        $mobileNumber = $request->session()->get('Mobile_Number');
    



        $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
    
        
        return view('help_article_detail_view', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);}



        public function help_center(Request  $request){



            $mobileNumber = $request->session()->get('Mobile_Number');
            $type= $request->session()->get('User_Type');
    
    
      
    
    
            $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
            $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
           
        
        
            return view('help_center', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);}













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

  
        




  
}

