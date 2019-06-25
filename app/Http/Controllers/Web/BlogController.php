<?php

namespace kindergestion\Http\Controllers\Web;

use Illuminate\Http\Request;
use kindergestion\Blog;
use kindergestion\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = Blog::orderBy('created_at','DESC')
            ->paginate(9);

        return view('front.parts.blog.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Blog::where('slug', $slug)
            ->first();

        $lastPosts = Blog::orderBy('created_at','DESC')
            ->take(5)
            ->get();

        return view('front.parts.blog.post', compact('post','lastPosts'));
    }
}
