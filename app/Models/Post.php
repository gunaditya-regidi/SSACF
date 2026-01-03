<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $date;
    public $images;
    public $content;
    public $slug;

    public function __construct($title, $date, $images, $content, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->images = $images;
        $this->content = $content;
        $this->slug = $slug;
    }

    public static function all()
    {
        $files = File::files(resource_path("views/blog/posts"));

        return collect($files)
            ->map(function ($file) {
                return static::parse($file);
            })
            ->sortByDesc('date');
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function parse($file)
    {
        $document = YamlFrontMatter::parse(File::get($file));

        return new Post(
            $document->matter('title'),
            $document->matter('date'),
            $document->matter('images'),
            $document->body(),
            basename($file, '.md')
        );
    }

    public static function getLatestPosts($count = null)
    {
        $posts = static::all();

        if ($count) {
            return $posts->take($count);
        }

        return $posts;
    }
}
