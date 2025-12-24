<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransitionalCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => 'images/services/transitional-1.jpg', 'title' => 'Hospital-to-Home Transitions', 'description' => 'Seamless support for a safe and successful recovery at home.'],
            ['url' => 'images/services/transitional-2.jpg', 'title' => 'Post-Surgical Care', 'description' => 'Specialized care to help you heal and regain strength after surgery.'],
            ['url' => 'images/services/transitional-3.jpg', 'title' => 'Medication Management', 'description' => 'Ensuring medications are taken correctly to prevent complications.'],
        ];

        $highlightCards = [
            [
                'icon' => 'images/icons/care-coordination.png',
                'alt' => 'Seamless Coordination',
                'title' => 'Seamless Coordination',
                'description' => 'Working with hospitals and families to ensure a smooth transition.',
            ],
            [
                'icon' => 'images/icons/rehabilitation.png',
                'alt' => 'Personalized Rehabilitation',
                'title' => 'Personalized Rehabilitation',
                'description' => 'Customized therapy plans to help you regain independence.',
            ],
            [
                'icon' => 'images/icons/safety.png',
                'alt' => 'Home Safety Assessments',
                'title' => 'Home Safety Assessments',
                'description' => 'Identifying and eliminating potential hazards in the home.',
            ],
            [
                'icon' => 'images/icons/patient-education.png',
                'alt' => 'Patient and Family Education',
                'title' => 'Patient & Family Education',
                'description' => 'Providing the knowledge and skills for a confident recovery.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is transitional care?',
                'answer' => 'Transitional care provides short-term support for individuals recovering from a hospital stay, surgery, or other medical event. The goal is to ensure a safe and successful transition back to home and prevent readmission to the hospital.',
            ],
            [
                'question' => 'Who can benefit from transitional care?',
                'answer' => 'Anyone who has recently been discharged from a hospital or is recovering from a major medical procedure can benefit from the extra support of transitional care.',
            ],
            [
                'question' => 'How long does transitional care last?',
                'answer' => 'The duration of transitional care varies based on individual needs, but it typically lasts for a few weeks to a few months.',
            ],
        ];

        return view('transitional-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
