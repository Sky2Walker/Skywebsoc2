<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
     public function profilePage(){
        return view('profilePage');
    }

    public function show($username)
    {
        // Найти пользователя по никнейму
        return view('profile', ['username' => $username]);
       
    }
    
    public function userFeed()
    {
        return view('userFeed');
    }
}
