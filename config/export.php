<?php

return [
    /*
     * If true, the exporter will crawl your site and export all found pages.
     *
     * You can also crawl a site with `php artisan export:crawl`.
     */
    'crawl' => true,

    /*
     * If true, the exporter will include a `200.html` file in the export,
     * which can be used by servers to handle all routes.
     */
    'fallback' => false,

    /*
     * The disk and directory to write the exported files to.
     */
    'disk' => 'dist',

    /*
     * The paths to include in the export.
     *
     * Use a string for a single path or an array for multiple paths.
     */
    'paths' => [
        '/',
        '/about',
        '/services',
        '/mission',
        '/gallery',
        '/blog',
        '/contact',
        '/donate',
        '/our-team',
        '/our-journey',
        '/our-approach',
        '/news-and-events',
        '/support-us',
        '/palliative-care',
        '/geriatric-care',
        '/dementia-care',
    ],

    /*
     * The paths to exclude from the export.
     *
     * Use a string for a single path or an array for multiple paths.
     */
    'exclude' => [],

    /*
     * The files and folders to include in the export.
     *
     * You can list folders and files that should be included recursively.
     * For example, `public/build` will include the entire `build` folder.
     */
    'include' => [
        'public/build',
        'public/images',
        'public/favicon.ico',
        'public/robots.txt',
    ],

    /*
     * The files and folders to exclude from the export.
     *
     * You can list folders and files that should be excluded recursively.
     * For example, `public/build` will exclude the entire `build` folder.
     */
    'exclude_files' => [
        'public/videos',
    ],

    /*
     * Before the export begins, these commands will be executed.
     */
    'before' => [],

    /*
     * After the export is complete, these commands will be executed.
     */
    'after' => [],
];
