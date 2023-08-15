<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            'currentCategory' => Category::firstWhere('slug', request('category')),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function showSingleAuthor(User $author)
    {
        return view('posts.showSingleAuthor', [
            'posts' => $author->posts,
        ]);
    }
}
