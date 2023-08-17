<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;



class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ]);
        $attributes['slug'] = Str::slug($attributes['title'], '-');

        auth()->user()->posts()->create($attributes);

        return redirect('/');
    }
}
