<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RehabilitativeCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/rehab-1.jpg'), 'title' => 'Physical Therapy', 'description' => 'Restoring mobility and strength through targeted exercises.'],
            ['url' => asset('images/services/rehab-2.jpg'), 'title' => 'Occupational Therapy', 'description' => 'Helping you regain the skills for daily living.'],
            ['url' => asset('images/services/rehab-3.jpg'), 'title' => 'Speech-Language Pathology', 'description' => 'Improving communication and swallowing abilities.'],
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/rehabilitation.png'),
                'alt' => 'Personalized Therapy Plans',
                'title' => 'Personalized Therapy Plans',
                'description' => 'Customized programs designed to meet your specific recovery goals.',
            ],
            [
                'icon' => asset('images/icons/expert-therapists.png'),
                'alt' => 'Expert Therapists',
                'title' => 'Expert Therapists',
                'description' => 'A dedicated team of licensed therapists committed to your recovery.',
            ],
            [
                'icon' => asset('images/icons/functional-improvement.png'),
                'alt' => 'Functional Improvement',
                'title' => 'Functional Improvement',
                'description' => 'Focusing on regaining the skills needed for daily independence.',
            ],
            [
                'icon' => asset('images/icons/patient-education.png'),
                'alt' => 'Ongoing Support & Education',
                'title' => 'Ongoing Support & Education',
                'description' => 'Providing guidance and resources to support a long-term recovery.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is rehabilitative care?',
                'answer' => 'Rehabilitative care helps individuals regain their strength, mobility, and independence after an injury, illness, or surgery. It includes physical therapy, occupational therapy, and speech therapy.',
            ],
            [
                'question' => 'Who can benefit from rehabilitative care?',
                'answer' => 'Anyone who has experienced a loss of function due to a medical event can benefit. This includes individuals recovering from a stroke, joint replacement, or major surgery.',
            ],
            [
                'question' => 'Where is rehabilitative care provided?',
                'answer' => 'Rehabilitative care can be provided in a variety of settings, including hospitals, skilled nursing facilities, and at home.',
            ],
        ];

        return view('rehabilitative-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
