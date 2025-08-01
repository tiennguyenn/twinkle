<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;

class CounterController extends Controller
{
    public function index()
    {
        return Inertia::render('Counter', [
            'count' => 2,
        ]);
    }
}