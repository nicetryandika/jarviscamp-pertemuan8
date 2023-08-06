<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

    $data = [
        "title" => "Dashboard",
        "user" => [
            "name" => "<h5>Hallo, Andika</h5>",
            "email" => "hariwijayaandika@gmail.com",
            //"pesan" => "<h1>HALLOOOOO</h1>"
        ]
    ];
    return view('contents.dashboard', $data);
});

Route::get('/users', [UserController::class, 'index']);

Route::resouce('/categories', CategoryController::class);