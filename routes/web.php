<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contacts\Contacts;

// 第一引数にはURL、第二引数にはコントローラーのフルパスとクラス名＠メソッド名で指定
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', 'App\Http\Controllers\contacts\Contacts@index');
Route::post('/contact', 'App\Http\Controllers\contacts\Contacts@post');
Route::get('/contact/confirm', 'App\Http\Controllers\contacts\Contacts@confirm_index');
Route::post('/contact/confirm', 'App\Http\Controllers\contacts\Contacts@send_mail');
Route::get('/contact/complete', 'App\Http\Controllers\contacts\Contacts@complete_index');
