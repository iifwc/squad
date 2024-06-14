<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthTemplate extends Controller
{
    protected $Api_url;

    public function __construct()
    {
        $this->Api_url = config('urls.Api_url');
    }
    
    public function signin()
    {       
        return view('Auth.signin', ['Api_url' => $this->Api_url]);
    }
    
    public function signup()
    {      
        return view('Auth.signup', ['Api_url' => $this->Api_url]);
    }

    public function orgsignup()
    {       
        return view('Auth.sign_up_organiser', ['Api_url' => $this->Api_url]);
    }
    
    public function orgsignuin()
    {       
        return view('Auth.sign_in_organiser', ['Api_url' => $this->Api_url]);
    }
    
    public function admin_singin()
    {      
        return view('Auth.signin_admin', ['Api_url' => $this->Api_url]);
    }
}
