@extends('layouts.layout')

@section('title')
@parent :: Register
@endsection

@section('content')
<div class="container">

    <h1 class="text-center mb-5">Регистрация</h1>

    <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" class="form-control mb-3" id="name" name="name" value="{{old('name')}}" placeholder="Имя">
        </div>

        <div class="form-group">
            <label for="email">Введите адрес электронной почты</label>
            <input type="email" class="form-control mb-3" id="email" name="email" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label for="password">Введите пароль</label>
            <input type="password" class="form-control mb-3" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Введите пароль еще раз</label>
            <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group">
            <label for="avatar">Загрузите аватар (опционально)</label>
            <input type="file" class="form-control-file mb-3" id="avatar" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>

    </form>

    <ul>
        <li>Уже есть аккаунт? <a href="{{route('home')}}">Войти</a></li>
    </ul>
</div>
@endsection
