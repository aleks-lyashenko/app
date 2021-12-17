<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

//для гостей
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

//для авторизованных
Route::group(['middleware' => 'auth'], function () {

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::match(['get', 'post'], '/show', [PostController::class, 'show'])->name('showNumber');
    Route::get('front', [PostController::class, 'front']);

    Route::group(['prefix' => 'post'], function () {
       Route::get('/create', [PostController::class, 'create'])->name('post.create');
       Route::post('/', [PostController::class, 'store'])->name('post.store');
       Route::get('/show', [PostController::class, 'showAll'])->name('post.show');
    });

});



Route::fallback(function (){
    return view('errors.404');
});


//TODO Проверить работу посредников - при вводе url страницы, которая не существует, перенаправляется на 404, но если
// она не доступна из-за того что не вошел в профиль - перенаправляется на логин
