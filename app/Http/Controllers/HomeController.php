<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view ('about');
    }

    public function show()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }

}
