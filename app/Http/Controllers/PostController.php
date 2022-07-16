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

    public function search($id) 
    {
        // Mencari data berdasarkan id
        $post = Post::find($id);
        return $post;
    }

    public function searchByTitle($title) 
    {
        // Mencari data berdasarkan kecocokan field lain
        $post = Post::where('title', 'like', '%' . $title . '%'); 
        return $post;
    }

    public function tambah($title, $content)
    {
        // Menambah data baru
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->save();
        // return $post;
        return redirect('/posts');
    }

    public function update($id, $title, $content)
    {
        // Menambah data baru
        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();
        // return $post;
        return redirect('/posts');
    }

    public function delete($id)
    {
        // Menghapus data berdasarkan id
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
