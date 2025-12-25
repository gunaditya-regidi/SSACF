<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class NewsAndEventsController extends Controller
{
    public function index()
    {
        $files = File::files(resource_path('views/blog/posts'));
        $posts = [];

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        foreach ($files as $file) {
            $slug = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $content = File::get($file->getPathname());

            // Extract image URL from the front matter
            $imageUrl = null;
            if (preg_match('/^image:\s*(.*)/m', $content, $matches)) {
                $imageUrl = trim($matches[1]);
                // Remove the image line from the content
                $content = preg_replace('/^image:\s*(.*)\r?\n/', '', $content, 1);
            }

            $posts[] = (object)[
                'title' => str_replace('-', ' ', ucwords($slug)),
                'content' => $converter->convert($content)->getContent(),
                'slug' => $slug,
                'image' => $imageUrl, // Pass the image URL directly to the view
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
            $imageUrl = asset('storage/' . trim($matches[1]));
            // Remove the image line from the content
            $content = preg_replace('/^image:\s*(.*)\r?\n/', '', $content, 1);
        }

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        $htmlContent = $converter->convert($content)->getContent();

        return view('blog-post', [
            'title' => str_replace('-', ' ', ucwords($slug)),
            'content' => $htmlContent,
            'image' => $imageUrl, // Pass the image URL to the view
        ]);
    }
}
