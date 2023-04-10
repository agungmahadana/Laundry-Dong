<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:2',
            'username' => 'required|max:255|min:2|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'confirm-password' => 'required|min:8|max:255|same:password',
            'phone' => 'required|min:10|max:20|unique:users,phone',
            'area' => 'required|not_in:"0"',
            'address' => 'required|min:8|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
}
