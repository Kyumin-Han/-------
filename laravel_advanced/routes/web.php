<?php

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

// 처음 접속 시 로그인 되어있지 않아 dashboard가 호출되지 않는 문제 생김
// middleware를 통해서 로그인부터 완료 후 dashboard로 진입
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
})->name('comments');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/counter', function() {
    return view('livewire.home');
});