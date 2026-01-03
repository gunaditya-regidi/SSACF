<?php

use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\OurFacilitiesController;
use Illuminate\Support\Str;
use Carbon\Carbon;

Route::get('/', function () {
    $blogController = new BlogController();
    $latestPosts = $blogController->getLatestPosts(2);

    // Logic to get the latest newsletter
    $newsletter_files = File::files(public_path('newsletters'));
    $latest_newsletter_data = null;
    $latest_date = null;

    $pdf_files = collect($newsletter_files)->filter(function ($file) {
        return strtolower($file->getExtension()) === 'pdf';
    });

    foreach ($pdf_files as $pdf) {
        $filename = $pdf->getFilenameWithoutExtension();
        try {
            $date = Carbon::parse($filename);

            if (is_null($latest_date) || $date->isAfter($latest_date)) {
                $latest_date = $date;

                // Find corresponding image
                $image_path = null;
                $image_extensions = ['png', 'jpg', 'jpeg'];
                foreach ($image_extensions as $ext) {
                    $potential_image_filename = $filename . '.' . $ext;
                    $found_files = collect(File::files(public_path('newsletters')))->filter(function($file) use ($potential_image_filename) {
                        return strtolower($file->getFilename()) === strtolower($potential_image_filename);
                    });
                    
                    if($found_files->isNotEmpty()) {
                         $image_path = asset('newsletters/' . $found_files->first()->getFilename());
                         break;
                    }
                }

                $latest_newsletter_data = (object) [
                    'title' => $date->format('F Y') . ' Newsletter',
                    'image' => $image_path,
                    'pdf_url' => asset('newsletters/' . $pdf->getFilename()),
                ];
            }
        } catch (\Exception $e) {
            // Ignore files that do not parse
        }
    }

    return view('welcome', [
        'posts' => $latestPosts,
        'latestNewsletter' => $latest_newsletter_data,
    ]);
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
Route::get('/api/newsletters', [NewsAndEventsController::class, 'getNewsletters'])->name('api.newsletters');
Route::get('/news-and-events/{slug}', [NewsAndEventsController::class, 'show'])->name('news-and-events.show');

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

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/disclaimers', function () {
    return view('disclaimers');
})->name('disclaimers');

Route::get('/our-facilities', [OurFacilitiesController::class, 'index'])->name('our-facilities');
