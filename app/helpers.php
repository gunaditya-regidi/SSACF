<?php

if (!function_exists('format_title')) {
    function format_title($filename)
    {
        $title = pathinfo($filename, PATHINFO_FILENAME);
        $title = str_replace('-', ' ', $title);
        return ucwords($title);
    }
}

if (!function_exists('get_latest_newsletter')) {
    function get_latest_newsletter()
    {
        $path = resource_path('markdown/posts');
        if (!File::exists($path)) {
            return null;
        }

        $files = File::files($path);
        $newsletters = [];

        foreach ($files as $file) {
            if (str_contains(strtolower($file->getFilename()), 'newsletter')) {
                $content = File::get($file->getPathname());
                try {
                    $object = Spatie\YamlFrontMatter\YamlFrontMatter::parse($content);
                    $newsletters[] = (object)[
                        'title' => $object->matter('title', format_title($file->getFilename())),
                        'slug' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                        'image' => $object->matter('image') ? asset($object->matter('image')) : null,
                        'date' => $object->matter('date') ? \Carbon\Carbon::parse($object->matter('date')) : null,
                    ];
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        if (empty($newsletters)) {
            return null;
        }

        usort($newsletters, function ($a, $b) {
            return $b->date <=> $a->date;
        });

        return $newsletters[0];
    }
}
