<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Validation\Rules\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.news.post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        $fileImage = time().'.'.$request->image->extension();
        $request->image->storeAs('public/images', $fileImage);

        $post = new Post();
        $post->image = $fileImage;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->author = Auth::user()->name;
        $post->save();

        return redirect()->route('news.index')->with('success', '¡Noticia creada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        return view('dashboard.news.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'author'
        ]);

        $post = Post::find($id);
        if($request->hasFile('image')) {
            Storage::delete('public/images/' . $post->image);
            $fileImage = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $fileImage);
            $post->image = $fileImage;
        }
            $post->title = $request->title;
            $post->body = $request->body;
            $post->category = $request->category;
            $post->author = Auth::user()->name;
            $post->update();

        return redirect()->route('news.index')->with('success', '¡Noticia actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {  
        $post = Post::find($id);

        if(Storage::delete('public/images/' . $post->image)) {
            Post::destroy($id);
        }

        return redirect()->route('news.index')->with('danger', '¡Noticia creada exitosamente!');
    }
}
