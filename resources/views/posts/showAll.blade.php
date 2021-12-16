@extends('layouts.layout')

@section('content')

    <h1>Последние статьи</h1>
    <div class="post-container">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{$post->title}}</h2>
                <p>{{ mb_strimwidth($post->content, 0, 200, '...')}}</p>
                <img src="{{asset('public/storage/' . $post->image)}}" alt="Изображение">
            </div>
        @endforeach
    </div>

@endsection
