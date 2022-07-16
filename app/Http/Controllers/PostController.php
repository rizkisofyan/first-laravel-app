<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function tampil()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }
}
