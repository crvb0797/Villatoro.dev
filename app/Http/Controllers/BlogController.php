<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show(Post $post)
    {
        $this->authorize('published', $post);
        $similares = Post::where('category_id', $post->category_id)
            ->where('status', Post::PUBLICADO)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(5)
            ->get();
        return view('blog.show', compact('post', 'similares'));
    }
}
