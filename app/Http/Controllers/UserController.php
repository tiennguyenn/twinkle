<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all(),
        ]);
    }

    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
          'user' => $user->only('name'),
        ]);
    }

    public function new()
    {
        return Inertia::render('Users/New');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
        ]);

        return to_route('users.index')->with('success', 'User created successfully.');
    }
}