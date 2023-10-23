<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
     // 

    public function showRegistrationForm()
    {
        return view('index'); // Используйте то же представление, которое возвращает MainController.
    }

    public function register(Request $request)
    {
        // Валидация данных регистрации.
        $request->validate([
            'email' => 'required|email|unique:users',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Создание нового пользователя.
        $user = new User;
        $user->email = $request->input('email');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));

        // Другие поля пользователей могут быть заполнены здесь.

        $user->save();


        
        // После успешной регистрации, вы можете перенаправить пользователя на другую страницу.
        return redirect('/profile'); // На главную страницу, например.
    }

}
