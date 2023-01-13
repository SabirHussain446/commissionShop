<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        session()->forget(['userId']);
        return redirect('login')->with('success', 'You have logged out successfully');
    }
}
