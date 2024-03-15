<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});
// Route::get('/home', function(){
//     return view('home', ['title'=>'Toidicode.com','alertMessage'=>'Thông báo đẩy']);
// })->name('home');
// Route::get('/home', function(){
//     return "lam";
// })->name('home'Route::get('/home', function(){
Route::get('/post', function(){
    $posts =[
        ['name'=>'Post1'],
        ['name'=>'Post2'],
        ['name'=>'Post3'],
        ['name'=>'Post4'],
    ];
    return view('home',compact('posts'));
})->name('post');

Route::get('/form', function(){
    return view('form');
});
Route::get('/dashboard', function(){
    return view('admins.dashboard');
});