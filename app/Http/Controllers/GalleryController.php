<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $specificImages = [
            'images/gallery/DJI_0002.JPG',
            'images/gallery/DJI_0010.JPG',
            'images/gallery/DJI_0020.JPG',
            'images/facilities/b1.jpeg',
            'images/art/art3.JPG',
            'images/facilities/b5.jpeg',
            'images/facilities/t7.jpeg',
            'images/facilities/b7.jpeg',
            'images/art/art4.JPG',
            'images/facilities/b4.jpeg',
            'images/art/art1.JPG',
            'images/art/art2.JPG',
        ];

        $journeyImagePaths = File::glob(public_path('images/journey/*'));
        $journeyImages = collect($journeyImagePaths)->map(function ($path) {
            return 'images/journey/' . basename($path);
        })->all();

        $allImages = array_merge($specificImages, $journeyImages);

        $images = collect($allImages)->map(function ($path) {
            return [
                'url' => asset($path),
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

        return view('gallery', compact('images', 'panoramas'));
    }
}
