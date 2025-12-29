<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFacilitiesController extends Controller
{
    public function index()
    {
        $topImages = [
            ['url' => asset('images/journey/2012a.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2013a.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2014a.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2015b.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2016a.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2017a.jpg'), 'title' => ''],
            ['url' => asset('images/journey/2018a.jpg'), 'title' => ''],
        ];

        $bottomImages = [
            ['url' => asset('images/services/ad1.jpeg'), 'title' => ''],
            ['url' => asset('images/services/gc1.jpeg'), 'title' => ''],
            ['url' => asset('images/services/hc1.jpeg'), 'title' => ''],
            ['url' => asset('images/services/orc1.jpeg'), 'title' => ''],
            ['url' => asset('images/services/pc1.jpeg'), 'title' => ''],
        ];

        return view('our-facilities', compact('topImages', 'bottomImages'));
    }
}
