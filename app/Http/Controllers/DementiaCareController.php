<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DementiaCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/dementia-1.jpg'), 'title' => 'Specialized Memory Care', 'description' => 'Safe and supportive environments for individuals with memory loss.'],
            ['url' => asset('images/services/dementia-2.jpg'), 'title' => 'Cognitive Therapies', 'description' => 'Engaging activities to help maintain cognitive function.'],
            ['url' => asset('images/services/dementia-3.jpg'), 'title' => 'Family and Caregiver Support', 'description' => 'Providing resources and guidance for those supporting loved ones with dementia.'],
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/safety.png'),
                'alt' => 'Safe Environment',
                'title' => 'Safe Environment',
                'description' => 'A secure and nurturing setting designed for individuals with dementia.',
            ],
            [
                'icon' => asset('images/icons/cognitive-support.png'),
                'alt' => 'Cognitive Support',
                'title' => 'Cognitive Support',
                'description' => 'Personalized activities to enhance cognitive function and quality of life.',
            ],
            [
                'icon' => asset('images/icons/dignity.png'),
                'alt' => 'Care with Dignity',
                'title' => 'Care with Dignity',
                'description' => 'Respectful and compassionate care that honors each individual.',
            ],
            [
                'icon' => asset('images/icons/family-support.png'),
                'alt' => 'Family Education',
                'title' => 'Family Education',
                'description' => 'Empowering families with knowledge and strategies for dementia care.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is dementia care?',
                'answer' => "Dementia care is specialized care for individuals with Alzheimer's disease and other types of dementia. It focuses on creating a safe, comfortable, and engaging environment that is tailored to the unique needs of a person with memory loss.",
            ],
            [
                'question' => 'How does dementia care differ from other types of senior care?',
                'answer' => 'Dementia care is provided by caregivers with specialized training in communicating with and assisting individuals with cognitive decline. The environment is also specially designed to reduce confusion and prevent wandering.',
            ],
            [
                'question' => 'When should someone consider dementia care?',
                'answer' => "If a loved one's safety and well-being are at risk due to memory loss, or if caregiving responsibilities have become overwhelming, it may be time to consider professional dementia care.",
            ],
        ];

        return view('dementia-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
