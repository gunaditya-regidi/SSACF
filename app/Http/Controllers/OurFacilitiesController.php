<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFacilitiesController extends Controller
{
    public function index()
    {
        $topImages = [
            ['url' => asset('images/facilities/t1.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t2.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t3.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t4.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t5.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t6.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t7.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t8.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t9.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/t10.jpeg'), 'title' => ''],
        ];

        $bottomImages = [
            ['url' => asset('images/facilities/b1.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b2.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b3.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b4.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b5.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b6.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b7.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b8.jpeg'), 'title' => ''],
            ['url' => asset('images/facilities/b9.jpeg'), 'title' => ''],
        ];

        return view('our-facilities', compact('topImages', 'bottomImages'));
    }
}
