<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\CommonMarkConverter;

class NewsAndEventsController extends Controller
{
    public function index()
    {
        $posts = [];
        $paths = [
            resource_path('views/blog/posts'),
            resource_path('markdown/posts'),
        ];

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        foreach ($paths as $path) {
            if (!File::exists($path)) {
                continue;
            }

            $files = File::files($path);

            foreach ($files as $file) {
                $slug = pathinfo($file->getFilename(), PATHINFO_FILENAME);
                $content = File::get($file->getPathname());

                $imageUrl = null;
                if (preg_match('/^image:\s*(.*)/m', $content, $matches)) {
                    $imageUrl = asset(trim($matches[1]));
                    $content = preg_replace('/^image:\s*(.*)\\r?\\n/', '', $content, 1);
                }

                $posts[] = (object)[
                    'title' => str_replace('-', ' ', ucwords($slug)),
                    'content' => $converter->convertToHtml($content),
                    'slug' => $slug,
                    'image' => $imageUrl,
                ];
            }
        }

        return view('news-and-events', [
            'posts' => collect($posts),
        ]);
    }

    public function show($slug)
    {
        $possiblePaths = [
            resource_path("views/blog/posts/{$slug}.md"),
            resource_path("markdown/posts/{$slug}.md"),
        ];

        $path = null;
        foreach ($possiblePaths as $p) {
            if (File::exists($p)) {
                $path = $p;
                break;
            }
        }

        if (!$path) {
            abort(404);
        }

        $content = File::get($path);
        $date = File::lastModified($path);

        $imageUrl = null;
        if (preg_match('/^image:\s*(.*)/m', $content, $matches)) {
            $imageUrl = asset(trim($matches[1]));
            $content = preg_replace('/^image:\s*(.*)\\r?\\n/', '', $content, 1);
        }

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        $htmlContent = $converter->convertToHtml($content);

        $post = (object)[
            'title' => str_replace('-', ' ', ucwords($slug)),
            'content' => $htmlContent,
            'image' => $imageUrl,
            'date' => $date,
        ];

        return view('blog-post', [
            'post' => $post,
        ]);
    }
}
