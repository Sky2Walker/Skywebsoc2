<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); // Используйте то же представление, которое возвращает MainController.
    }

    
    public function login(Request $request)
    {
        // Валидация данных формы входа
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации пользователя
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Аутентификация прошла успешно
            return redirect('/profile'); // Перенаправление на страницу после входа
        }

        // Если аутентификация не удалась, перенаправьте обратно с ошибкой
        return back()->withErrors(['email' => 'Неправильный email или пароль']);
    }
    
}
