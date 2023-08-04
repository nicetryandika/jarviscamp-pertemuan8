<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        return view('contents.tables', [
        "title"=> "Tables",
        "users" => User::all(),
        "posts" => Post::all()
        ]);
    }
}