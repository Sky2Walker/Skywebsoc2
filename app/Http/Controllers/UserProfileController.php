<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function showProfile()
    {
       

        
          
            return view('profilePage');
        
          
    }
}