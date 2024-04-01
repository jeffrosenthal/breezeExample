<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve all posts
        $posts = Post::all();

        // Return a view and pass the posts to it
        return view('posts.index', ['posts' => $posts]);
    }
}
