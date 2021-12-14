@extends('layouts.layout')

@section('title')
@parent:: Home
@endsection

@section('content')

<body>
<div class="container">
    @auth()
        <p>Вы зашли под пользователем <b>{{auth()->user()->name}}</p>
        <img src="{{asset('public/storage/' . auth()->user()->avatar)}}" alt="avatar">
        <p><a href="{{route('logout')}}">Выйти из профиля</a></p>

        <div class="navigation">
            <ul>
                <li><a href="{{route('showNumber')}}">Найти телефонный номер</a></li>
                <li><a href="">Просмотр задач</a></li>
                <li><a href="">Лента новостей</a></li>
                <li><a href="">Добавить новость</a></li>
                <li><a href="">Личный кабинет</a></li>
            </ul>
        </div>
    @endauth

    @guest()
        <p>Чтобы воспользоваться нашим сайтом, вам нужно:</p>
        <ul>
            <li>
                <a href="{{route('register.create')}}">Зарегистрироваться</a>
            </li>
            <li>
                <a href="{{route('login')}}">Войти в свой профиль</a>
            </li>
        </ul>
    @endguest
</div>

@endsection


