<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function profilePage(){
        return view('profilePage');
    }

    public function profile()
    {
        return view('profile');
    }
    
    public function userFeed()
    {
        return view('userFeed');
    }
}
