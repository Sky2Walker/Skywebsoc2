<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('index'); // Используйте то же представление, которое возвращает MainController.
    }

    public function login(Request $request)
    {
        // Валидация данных авторизации
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации пользователя
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Если аутентификация успешна, перенаправьте пользователя на нужную страницу
            return redirect('/profilefeed'); // Замените '/dashboard' на URL страницы, на которую вы хотите перенаправить пользователя после входа.
        }

        // Если аутентификация не удалась, верните пользователя на страницу входа с ошибкой
        return redirect('/login')->with('error', 'Неверный email или пароль.');
    }
}
