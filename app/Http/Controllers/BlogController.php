<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Post::find($id);
        return view('blog.post', compact('blog'));
    }
}
