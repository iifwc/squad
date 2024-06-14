<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganisationController extends Controller
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('urls.Api_url');
    }
    
    public function orgdash(Request $request)
    {       $mobileNumber = $request->session()->get('Mobile_Number');
        
        
        $user = DB::table('organiser')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('organiser')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
        return view('org.organiser-dashboard', ['users' => $user, 'Api_url' => $this->apiUrl,'user_id'=>$id]);


       
    }

    public function orgevent(Request $request)
    {

        $mobileNumber = $request->session()->get('Mobile_Number');
        
        
        $user = DB::table('organiser')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('organiser')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
        return view('org.organiser-event', ['users' => $user, 'Api_url' => $this->apiUrl,'user_id'=>$id]);


    }


    public function profile(Request $request)
    {

        $mobileNumber = $request->session()->get('Mobile_Number');
        
        
        $user = DB::table('organiser')->where('Mobile_Number', $mobileNumber)->get();

  
    
    
         return view('org.organisation_dashboard_about', ['users' => $user, 'Api_url' => $this->apiUrl,]);


    }



    public function create_event(Request $request)
    {       $mobileNumber = $request->session()->get('Mobile_Number');
        
        
        $user = DB::table('organiser')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('organiser')->select('id')->where('Mobile_Number', $mobileNumber)->get();
       
    
        return view('org.create_event', ['users' => $user, 'Api_url' => $this->apiUrl,'user_id'=>$id]);


       
    }

    





}
