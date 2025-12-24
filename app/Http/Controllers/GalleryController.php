<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            ['url' => url('images/art/art1.JPG'), 'title' => 'Engaging Activities'],
            ['url' => url('images/art/art2.JPG'), 'title' => 'Community Fellowship'],
            ['url' => url('images/art/art3.JPG'), 'title' => 'Art Therapy'],
            ['url' => url('images/art/art4.JPG'), 'title' => 'Creative Expression'],
            ['url' => url('images/art/art1.JPG'), 'title' => 'Engaging Activities'],
            ['url' => url('images/art/art2.JPG'), 'title' => 'Community Fellowship'],
        ];

        $panoramas = [
            [
                'title' => 'Virtual Tour of our Facility (Sample)',
                'thumbnail' => 'https://pannellum.org/images/alma.jpg',
                'panorama' => 'https://pannellum.org/images/alma.jpg'
            ],
            [
                'title' => 'Peaceful Garden Area',
                'thumbnail' => url('images/background/greenwv.jpg'),
                'panorama' => url('images/background/14.jpg') 
            ],
            [
                'title' => 'Community Hall',
                'thumbnail' => url('images/background/bglo.jpg'),
                'panorama' => url('images/background/14.jpg')
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
