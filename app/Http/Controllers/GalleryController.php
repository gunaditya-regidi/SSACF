<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            ['url' => asset('images/art/art1.JPG'), 'title' => 'Engaging Activities'],
            ['url' => asset('images/art/art2.JPG'), 'title' => 'Community Fellowship'],
            ['url' => asset('images/art/art3.JPG'), 'title' => 'Art Therapy'],
            ['url' => asset('images/art/art4.JPG'), 'title' => 'Creative Expression'],
            ['url' => asset('images/art/art1.JPG'), 'title' => 'Engaging Activities'],
            ['url' => asset('images/art/art2.JPG'), 'title' => 'Community Fellowship'],
        ];

        $panoramas = [
            [
                'title' => 'Virtual Tour of our Facility (Sample)',
                'thumbnail' => 'https://pannellum.org/images/alma.jpg',
                'panorama' => 'https://pannellum.org/images/alma.jpg'
            ],
            [
                'title' => 'Peaceful Garden Area',
                'thumbnail' => asset('images/background/greenwv.jpg'),
                'panorama' => asset('images/background/14.jpg') 
            ],
            [
                'title' => 'Community Hall',
                'thumbnail' => asset('images/background/bglo.jpg'),
                'panorama' => asset('images/background/14.jpg')
            ],
        ];

        $videos = [
            ['youtube_id' => 'z1Y2_C8S2nE', 'title' => 'A Day at Age Care Foundation', 'thumbnail' => 'https://i3.ytimg.com/vi/z1Y2_C8S2nE/maxresdefault.jpg'],
            ['youtube_id' => 'Ipa5SA09y1E', 'title' => 'Our Commitment to Quality Care', 'thumbnail' => 'https://i3.ytimg.com/vi/Ipa5SA09y1E/maxresdefault.jpg'],
            ['youtube_id' => 'dQw4w9WgXcQ', 'title' => 'A Message of Hope', 'thumbnail' => 'https://i3.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg'],
        ];

        return view('gallery', compact('images', 'panoramas', 'videos'));
    }
}
