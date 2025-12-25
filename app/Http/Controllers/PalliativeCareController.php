<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalliativeCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/pc1.jpeg'), 'title' => 'Comfort in Care', 'description' => 'Our team provides compassionate support to ensure comfort at every stage.'],
            ['url' => asset('images/services/pc2.jpeg'), 'title' => 'Skilled & Compassionate', 'description' => 'Combining medical expertise with a gentle, understanding approach.'],
            ['url' => asset('images/services/pc3.jpeg'), 'title' => 'A Peaceful Journey', 'description' => 'Creating a calm and serene environment for our patients and their families.'],
            ['url' => asset('images/services/pc4.jpeg'), 'title' => 'Skilled & Compassionate', 'description' => 'Combining medical expertise with a gentle, understanding approach.'],
            
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/compassion.png'),
                'alt' => 'Compassion',
                'title' => 'Compassion',
                'description' => 'Care delivered with kindness and empathy.',
            ],
            [
                'icon' => asset('images/icons/dignity.png'),
                'alt' => 'Dignity',
                'title' => 'Dignity',
                'description' => 'Respecting the choices and values of each individual.',
            ],
            [
                'icon' => asset('images/icons/quality.png'),
                'alt' => 'Quality of Life',
                'title' => 'Quality of Life',
                'description' => 'Focusing on comfort and well-being.',
            ],
            [
                'icon' => asset('images/icons/patient-first.png'),
                'alt' => 'Patient-First Approach',
                'title' => 'Patient-First',
                'description' => 'Putting our patients at the heart of everything we do.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is palliative care?',
                'answer' => 'Palliative care is specialized medical care for people with serious illnesses. It focuses on providing relief from the symptoms and stress of a serious illness. The goal is to improve quality of life for both the patient and the family.',
            ],
            [
                'question' => 'Who is palliative care for?',
                'answer' => 'Palliative care is for anyone with a serious illness, such as cancer, heart disease, or lung disease. It can be provided at any age and at any stage of an illness, and it can be provided along with curative treatment.',
            ],
            [
                'question' => 'How is palliative care different from hospice care?',
                'answer' => 'Hospice care is a type of palliative care for people who are nearing the end of life. Palliative care, on the other hand, can be provided at any stage of a serious illness, and it can be provided along with curative treatment.',
            ],
            [
                'question' => 'Where is palliative care provided?',
                'answer' => 'Palliative care can be provided in a variety of settings, including hospitals, nursing homes, outpatient clinics, and at home.',
            ],
        ];

        return view('palliative-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
