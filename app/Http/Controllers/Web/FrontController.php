<?php

namespace kindergestion\Http\Controllers\Web;

use Illuminate\Http\Request;
use kindergestion\Blog;
use kindergestion\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'DESC')
            ->take(3)
            ->get();

        return view('front.layouts.main', compact('posts'));
    }

    public function login()
    {
        return view('/login');
    }
}
