<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use App\Http\Controllers\Controller;

class SignoutController extends Controller
{
    



    public function signout(Request $request)
    {
        Auth::guard('web')->logout();
        session()->flash('message', 'You have been logged out successfully.');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
