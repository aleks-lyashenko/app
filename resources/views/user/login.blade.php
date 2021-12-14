@extends('layouts.layout')

@section('title')
    @parent:: Login
@endsection

@section('content')

    <body>
    <div class="container">
        <h1>Добро пожаловать</h1>
        <img src="/public/img/guest.png" alt="">
        <form action="" method="post">
            @csrf
            <input type="email" name="email" placeholder="Адрес электронной почты" value="{{old('email')}}">
            <input type="password" name="password" placeholder="Пароль">
            <button>Login</button>
        </form>

        <ul>
            <li>Забыли <a href="">Имя пользователя / пароль?</a></li>
            <li>Еще нет аккаунта? <a href="{{route('register.store')}}">Присоединиться</a></li>
        </ul>
    </div>

@endsection
