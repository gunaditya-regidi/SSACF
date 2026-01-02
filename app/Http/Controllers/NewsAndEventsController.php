<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Carbon\Carbon;

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
            'html_input' => 'allow',
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

                try {
                    $object = YamlFrontMatter::parse($content);
                    $title = $object->matter('title', str_replace('-', ' ', ucwords($slug)));
                    $date = $object->matter('date') ? Carbon::parse($object->matter('date')) : Carbon::now();
                    $htmlContent = $converter->convertToHtml($object->body());

                    // Check for a single image or an array of images
                    $images = $object->matter('images');
                    if ($images && is_array($images) && count($images) > 0) {
                        $imageUrl = asset($images[0]);
                    } else {
                        $imageUrl = $object->matter('image') ? asset($object->matter('image')) : null;
                    }
                } catch (\Exception $e) {
                    // Fallback for files without front matter
                    $title = str_replace('-', ' ', ucwords($slug));
                    $imageUrl = null;
                    $date = Carbon::now();
                    $htmlContent = $converter->convertToHtml($content);
                }

                $posts[] = (object)[
                    'title' => $title,
                    'content' => $htmlContent,
                    'slug' => $slug,
                    'image' => $imageUrl,
                    'date' => $date,
                ];
            }
        }

        // Sort posts by date, descending
        usort($posts, function ($a, $b) {
            return $b->date <=> $a->date;
        });

        return view('news-and-events', [
            'posts' => $posts,
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

        try {
            $object = YamlFrontMatter::parse($content);
            $title = $object->matter('title', str_replace('-', ' ', ucwords($slug)));
            $imageUrl = $object->matter('image') ? asset($object->matter('image')) : null;
            $images = $object->matter('images') ?? null;
            $date = $object->matter('date') ? Carbon::parse($object->matter('date')) : Carbon::now();
            $body = $object->body();
        } catch (\Exception $e) {
            // Fallback for files without front matter
            $title = str_replace('-', ' ', ucwords($slug));
            $imageUrl = null;
            $images = null;
            $date = Carbon::now();
            $body = $content;
        }

        $converter = new CommonMarkConverter([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);

        $htmlContent = $converter->convertToHtml($body);

        $post = (object)[
            'title' => $title,
            'content' => $htmlContent,
            'image' => $imageUrl,
            'images' => $images, // Pass the images array
            'date' => $date,
        ];

        return view('blog-post', [
            'post' => $post,
        ]);
    }
}
