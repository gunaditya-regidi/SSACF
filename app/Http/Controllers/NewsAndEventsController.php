<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
                    'content' => $converter->convert($content)->getContent(),
                    'slug' => $slug,
                    'image' => $imageUrl,
                ];
            }
        }

        $newsletter_images = File::glob(public_path('newsletters/*.png'));
        $newsletters = [];
        foreach ($newsletter_images as $image_path) {
            $filename_png = basename($image_path);
            $filename_pdf = pathinfo($filename_png, PATHINFO_FILENAME) . '.pdf';
            $newsletters[] = (object)[
                'png' => asset('newsletters/' . $filename_png),
                'pdf' => asset('newsletters/' . $filename_pdf),
                'title' => $this->format_title(pathinfo($filename_png, PATHINFO_FILENAME)),
            ];
        }

        return view('news-and-events', [
            'posts' => $posts,
            'newsletters' => $newsletters,
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

        $htmlContent = $converter->convert($content)->getContent();

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

    public function getNewsletters()
    {
        $files = File::glob(public_path('newsletters/*.png'));
        $newsletters = [];

        foreach ($files as $file) {
            $filename_png = basename($file);
            $filename_pdf = pathinfo($filename_png, PATHINFO_FILENAME) . '.pdf';

            $newsletters[] = [
                'image_url' => asset('newsletters/' . $filename_png),
                'pdf_url' => asset('newsletters/' . $filename_pdf),
                'title' => $this->format_title(pathinfo($filename_png, PATHINFO_FILENAME)),
            ];
        }

        return response()->json($newsletters);
    }

    private function format_title($filename)
    {
        preg_match('/([a-zA-Z]+)(\d+)/', $filename, $matches);
        $month = $matches[1];
        $year = $matches[2];
        return ucfirst($month) . ' ' . $year;
    }
}
