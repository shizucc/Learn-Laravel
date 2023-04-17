<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = array(
        'title' => 'home'
    );
    return view('index',$data);
})->named('dashboard');


Route::get('/about', function(){
    $data = array(
        'author' => 'Alfi Ghozwy',
        'image' => '1164078.png',
    );
    return view('about', $data);
});


Route::get('/blog',[PostController::class, 'posts']);

//Route::get('/post/{post:slug}',[PostController::class, 'post']);


Route::get('/categories',function(){
    $data = array(
        'title' => 'categories',
        'page_title' => 'Categories',
        'categories' => Category::latest()->get()
    );
    return view('categories',$data);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');
Route::resource('/post',PostController::class);