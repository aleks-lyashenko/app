<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create () {
        return view('user.create');
    }

    public function store(Request $request) {

        //Валидация
        $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|confirmed|min:8',
           'avatar' => 'nullable|image',
        ]);

        //Проверка, был ли загружен аватар
        if ($request->hasFile('avatar')) {
            $folder = date('Y-m-d');
            //Загрузка картинки
            $avatar = $request->file('avatar')->store("images/{$folder}");
        }

        //Множественное сохранение
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatar ?? null
        ]);

        //Запись в сессию
        session()->flash('success', 'Вы успешно зарегистрировались');

        //Авторизовываем пользователя
        Auth::login($user);

        //перенаправляем на главную
        return redirect()->route('home');
    }

    public function loginForm() {
        return view('user.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->home();
        }
        return redirect()->back()->with('error', 'Неправильный логин или пароль');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
