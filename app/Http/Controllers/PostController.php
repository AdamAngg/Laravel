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
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search']) ?? Post::latest())->get(),
            'categories' => Category::all()
        ]);
    }

    public function showSinglePost(Post $post)
    {
        return view('post', ['post' => $post]);
    }

    public function showSingleCategory(Category $category)
    {
        return view('posts', [
            'posts' => $category->posts,
            'currentCategory' => $category->name,
            'categories' => Category::all()
        ]);
    }

    public function showSingleAuthor(User $author)
    {
        return view('posts', [
            'posts' => $author->posts,
            "categories" => Category::all()
        ]);
    }
}
