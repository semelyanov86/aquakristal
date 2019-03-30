<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class MainController extends Controller
{
    public function welcome()
    {
        $posts = Post::where('category_id', 2)->where('status', 'PUBLISHED')->where('featured', 1)->get();
        return view('welcome', compact('posts'));
    }

    public function showPost(Post $post)
    {
        return view('single-blog-post', compact('post'));
    }
}
