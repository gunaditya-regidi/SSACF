<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $imagePaths = File::glob(public_path('images/gallery/*'));
        $images = collect($imagePaths)->map(function ($path) {
            return [
                'url' => url('/images/gallery/' . basename($path)),
                'title' => basename($path)
            ];
        });

        $panoramaPaths = File::glob(public_path('images/360/*'));
        $panoramas = collect($panoramaPaths)->map(function ($path) {
            return [
                'title' => basename($path),
                'thumbnail' => url('/images/360/' . basename($path)),
                'panorama' => url('/images/360/' . basename($path))
            ];
        });

        $videos = [
            ['youtube_id' => 'z1Y2_C8S2nE', 'title' => 'A Day at Age Care Foundation', 'thumbnail' => 'https://i3.ytimg.com/vi/z1Y2_C8S2nE/maxresdefault.jpg'],
            ['youtube_id' => 'Ipa5SA09y1E', 'title' => 'Our Commitment to Quality Care', 'thumbnail' => 'https://i3.ytimg.com/vi/Ipa5SA09y1E/maxresdefault.jpg'],
            ['youtube_id' => 'dQw4w9WgXcQ', 'title' => 'A Message of Hope', 'thumbnail' => 'https://i3.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg'],
        ];

        return view('gallery', compact('images', 'panoramas', 'videos'));
    }
}
