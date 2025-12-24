<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class BlogController extends Controller
{
    public function index()
    {
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
                'image' => $imageUrl,
            ];
        }

        return view('blog', [
            'posts' => $posts,
        ]);
    }
}
