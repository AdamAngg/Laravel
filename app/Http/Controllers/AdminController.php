<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::latest()->paginate(50)]);
    }
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }
    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'files' => $post->exists ? ['image'] : ['required', 'image'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
        if ($attributes['files'] ?? false) {
            $attributes['files'] = request()->file('files')->store('files');
        }
        session()->flash('succes', 'You sucessfuly updated post');
        $post->update($attributes);
        return redirect('/');
    }
}
