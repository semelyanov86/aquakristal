<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class MainController extends Controller
{
    public function welcome()
    {
        $posts = Post::where('category_id', 2)->get();
        return view('welcome', compact('posts'));
    }
}
