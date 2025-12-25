<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class NewsAndEventsController extends Controller
{
    public function index()
    {
        // Prepare Blog Posts
        $posts = [];
        $blogFiles = File::files(resource_path('views/blog/posts'));
        $converter = new CommonMarkConverter(['html_input' => 'escape', 'allow_unsafe_links' => false]);

        foreach ($blogFiles as $file) {
            $content = File::get($file->getRealPath());
            $slug = basename($file->getFilename(), '.md');

            // Extract image URL
            $imageUrl = null;
            if (preg_match('/^image:\s*(.*)/m', $content, $matches)) {
                $imageUrl = trim($matches[1]);
                // Remove the image line from the content
                $content = preg_replace('/^image:\s*(.*)\r?\n/', '', $content, 1);
            }

            $posts[] = [
                'title' => str_replace('-', ' ', ucwords($slug)),
                'content' => $converter->convert($content)->getContent(),
                'slug' => $slug,
                'image' => $imageUrl ? asset($imageUrl) : null, // Add image to post data
            ];
        }

        return view('news-and-events', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $path = resource_path("views/blog/posts/{$slug}.md");

        if (!File::exists($path)) {
            abort(404);
        }

        $content = File::get($path);

        // Extract image URL
        $imageUrl = null;
        if (preg_match('/^image:\s*(.*)/m', $content, $matches)) {
            $imageUrl = trim($matches[1]);
            // Remove the image line from the content
            $content = preg_replace('/^image:\s*(.*)\r?\n/', '', $content, 1);
        }

        $converter = new CommonMarkConverter(['html_input' => 'escape', 'allow_unsafe_links' => false]);
        $htmlContent = $converter->convert($content)->getContent();

        $title = str_replace('-', ' ', ucwords($slug));

        $post = [
            'title' => $title,
            'content' => $htmlContent,
            'image' => $imageUrl ? asset($imageUrl) : null,
            'date' => now(),
        ];

        return view('blog-post', ['post' => $post]);
    }
}
