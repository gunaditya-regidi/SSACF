<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'posts' => Post::getLatestPosts(),
        ]);
    }

    public function getLatestPosts($count = null)
    {
        $posts = Post::getLatestPosts($count);

        return $posts->map(function ($post) {
            return [
                'title' => $post->title,
                'content' => $post->content,
                'slug' => $post->slug,
                'image' => $post->images[0] ?? null,
                'date' => $post->date,
            ];
        });
    }
}
