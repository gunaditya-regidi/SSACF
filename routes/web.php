<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelMarkdown\MarkdownParser;
use Illuminate\Support\Facades\File;
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

Route::get('/', function () {
    $posts = [];
    $path = resource_path('markdown/posts');

    if (!File::exists($path)) {
        File::makeDirectory($path, 0755, true);
    }

    $files = File::files($path);

    foreach ($files as $file) {
        $posts[] = app(MarkdownParser::class)->parse(file_get_contents($file));
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
