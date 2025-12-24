<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsAndEventsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PalliativeCareController;
use App\Http\Controllers\GeriatricCareController;
use App\Http\Controllers\DementiaCareController;
use App\Http\Controllers\TransitionalCareController;
use App\Http\Controllers\RespiteCareController;
use App\Http\Controllers\RehabilitativeCareController;
use App\Http\Controllers\HospiceCareController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\OutreachGeriatricCareController;
use App\Http\Controllers\AdvocacyAndTrainingController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\CommonMark\CommonMarkConverter;

Route::get('/', function () {
    $converter = new CommonMarkConverter();
    $posts_path = resource_path('views/blog/posts');
    $posts = [];

    if (File::isDirectory($posts_path)) {
        $posts = collect(File::files($posts_path))
            ->map(function ($file) use ($converter) {
                $contents = File::get($file->getPathname());
                $slug = Str::slug(basename($file, '.md'));

                // Extract image from the first line
                preg_match('/^image: (.+)/m', $contents, $imageMatches);
                $image = $imageMatches[1] ?? null;
                if ($image) {
                    $image = url(trim($image));
                }

                // Extract title from H3
                preg_match('/^### (.+)/m', $contents, $titleMatches);
                $title = $titleMatches[1] ?? 'Untitled';

                // Remove title and image from content
                $cleanContent = preg_replace([
                    '/^image: .+/m',
                    '/^### .+/m'
                ], '', $contents);
                
                $htmlContent = $converter->convert(trim($cleanContent))->getContent();

                return [
                    'slug' => $slug,
                    'title' => $title,
                    'content' => $htmlContent,
                    'image' => $image,
                    'date' => null, // No date in the current markdown structure
                ];
            });
    }

    return view('welcome', ['posts' => $posts]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/our-team', function () {
    return view('our-team');
})->name('our-team');

Route::get('/our-journey', function () {
    return view('our-journey');
})->name('our-journey');

Route::get('/our-approach', function () {
    return view('our-approach');
})->name('our-approach');

Route::get('/news-and-events', [NewsAndEventsController::class, 'index'])->name('news-and-events');
Route::get('/blog/{slug}', [NewsAndEventsController::class, 'show'])->name('blog.show');

Route::get('/support-us', function () {
    return view('support-us');
})->name('support-us');

Route::get('/palliative-care', [PalliativeCareController::class, 'index'])->name('palliative-care');

Route::get('/geriatric-care', [GeriatricCareController::class, 'index'])->name('geriatric-care');

Route::get('/dementia-care', [DementiaCareController::class, 'index'])->name('dementia-care');

Route::get('/transitional-care', [TransitionalCareController::class, 'index'])->name('transitional-care');

Route::get('/respite-care', [RespiteCareController::class, 'index'])->name('respite-care');

Route::get('/rehabilitative-care', [RehabilitativeCareController::class, 'index'])->name('rehabilitative-care');

Route::get('/hospice-care', [HospiceCareController::class, 'index'])->name('hospice-care');

Route::get('/home-care', [HomeCareController::class, 'index'])->name('home-care');

Route::get('/outreach-geriatric-care', [OutreachGeriatricCareController::class, 'index'])->name('outreach-geriatric-care');

Route::get('/advocacy-and-training', [AdvocacyAndTrainingController::class, 'index'])->name('advocacy-and-training');

Route::get('/render-welcome', function () {
    $converter = new CommonMarkConverter();
    $posts_path = resource_path('views/blog/posts');
    $posts = [];

    if (File::isDirectory($posts_path)) {
        $posts = collect(File::files($posts_path))
            ->map(function ($file) use ($converter) {
                $contents = File::get($file->getPathname());
                $slug = Str::slug(basename($file, '.md'));

                // Extract image from the first line
                preg_match('/^image: (.+)/m', $contents, $imageMatches);
                $image = $imageMatches[1] ?? null;
                if ($image) {
                    $image = url(trim($image));
                }

                // Extract title from H3
                preg_match('/^### (.+)/m', $contents, $titleMatches);
                $title = $titleMatches[1] ?? 'Untitled';

                // Remove title and image from content
                $cleanContent = preg_replace([
                    '/^image: .+/m',
                    '/^### .+/m'
                ], '', $contents);
                
                $htmlContent = $converter->convert(trim($cleanContent))->getContent();

                return [
                    'slug' => $slug,
                    'title' => $title,
                    'content' => $htmlContent,
                    'image' => $image,
                    'date' => null, // No date in the current markdown structure
                ];
            });
    }

    return view('welcome', ['posts' => $posts])->render();
});