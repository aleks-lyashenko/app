<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Показывает поиск телефонных номеров
    public function show() {
        return view('service.showNumber');
    }

    public function front() {
        return view('service.front');
    }
    public function verstka() {
        return view('free.layout');
    }

    //Форма для добавления новой статьи
    public function create() {
        return view('posts.create');
    }

    //сохраняет новую статью в БД
    public function store(Request $request) {
        //валидация
        $validated = $request->validate([
           'title' => 'required|unique:posts|max:255',
            'content' => 'required|',
            'image' => 'required|image'
        ]);
        //работа с файлом
        $folder = date('Y-m-d');
        $image = $request->file('image')->store("images/$folder");

        //сохранение
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
        ]);
        //запись в сессию сообщения об успехе
        $request->session()->flash('success', 'Данные успешно сохранены');
        //редирект
        return redirect()->home();
    }

    public function showAll() {
        $posts = Post::all();
        return view('posts.showAll', compact('posts'));
    }
}

//TODO Реализовать добавление, редактирование, удаление и просмотр статей
