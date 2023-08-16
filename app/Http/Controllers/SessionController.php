<?php

namespace App\Http\Controllers;


class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        session()->flash('success', 'You have succesfuly logout');
        return redirect('/');
    }
    public function create()
    {
        return view('session.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            session()->flash('success', 'Welcome back!');
            return redirect('/');
        } else {
            return back()->withErrors(['password' => 'Wrong email or password']);
        }
    }
}
