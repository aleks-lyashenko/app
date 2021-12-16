@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Форма для добавления новой статьи</h1>
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <label for="title">Название статьи</label>
                <input type="text" id="'title" name="title" value="{{old('title')}}">
            </div>
            <div class="content">
                <label for="content">Содержание</label>
                <textarea id="content" name="content" rows="10" cols="50" >{{old('content')}}</textarea>
            </div>
            <div class="image">
                <label for="image">Добавьте изображение</label>
                <input type="file" name="image" id="image">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

@endsection
