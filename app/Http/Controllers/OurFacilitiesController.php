<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFacilitiesController extends Controller
{
    public function index()
    {
        $topImages = [
            ['url' => asset('images/facilities/t1.jpeg'), 'alt' => 'A serene view of the facility exterior with lush greenery.'],
            ['url' => asset('images/facilities/t2.jpeg'), 'alt' => 'A comfortable and well-lit patient room.'],
            ['url' => asset('images/facilities/t3.jpeg'), 'alt' => 'The main entrance to the Age Care Foundation hospital.'],
            ['url' => asset('images/facilities/t4.jpeg'), 'alt' => 'A common area for residents to socialize.'],
            ['url' => asset('images/facilities/t5.jpeg'), 'alt' => 'A view of the solar panels on the facility roof.'],
            ['url' => asset('images/facilities/t6.jpeg'), 'alt' => 'The facility garden and outdoor seating area.'],
            ['url' => asset('images/facilities/t7.jpeg'), 'alt' => 'A wide shot of the hospital building and surrounding landscape.'],
            ['url' => asset('images/facilities/t8.jpeg'), 'alt' => 'The reception and waiting area of the hospital.'],
            ['url' => asset('images/facilities/t9.jpeg'), 'alt' => 'A patient room with a view of the mountains.'],
            ['url' => asset('images/facilities/t10.jpeg'), 'alt' => 'The exterior of the ACF Hospital building.'],
        ];

        $bottomImages = [
            ['url' => asset('images/facilities/b1.jpeg'), 'alt' => 'A close-up of the ACF Hospital sign.'],
            ['url' => asset('images/facilities/b2.jpeg'), 'alt' => 'The rooftop garden at the facility.'],
            ['url' => asset('images/facilities/b3.jpeg'), 'alt' => 'An indoor recreational area for patients.'],
            ['url' => asset('images/facilities/b4.jpeg'), 'alt' => 'A walkway with a view of the surrounding hills.'],
            ['url' => asset('images/facilities/b5.jpeg'), 'alt' => 'A peaceful corner of the facility with comfortable seating.'],
            ['url' => asset('images/facilities/b6.jpeg'), 'alt' => 'The dining hall for residents and patients.'],
            ['url' => asset('images/facilities/b7.jpeg'), 'alt' => 'A physiotherapy and rehabilitation room.'],
            ['url' => asset('images/facilities/b8.jpeg'), 'alt' => 'A view from one of the facility balconies.'],
            ['url' => asset('images/facilities/b9.jpeg'), 'alt' => 'The landscaped garden at the front of the hospital.'],
        ];

        return view('our-facilities', compact('topImages', 'bottomImages'));
    }
}
