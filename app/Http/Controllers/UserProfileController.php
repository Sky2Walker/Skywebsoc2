<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function showProfile($username)
    {
        // Здесь вы можете получить информацию о пользователе по его имени пользователя ($username)
        $user = User::where('username', $username)->first();

        if ($user) {
            // Если пользователь найден, передайте его данные в вид 'profilePage'
            return view('profilePage', ['user' => $user]);
        } else {
            // Если пользователь не найден, выполните соответствующие действия
            // Например, перенаправьтесь на страницу с сообщением об ошибке
            return redirect()->route('errorPage'); // Замените 'errorPage' на название маршрута для страницы ошибки.
        }
    }
}
