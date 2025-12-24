<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvocacyAndTrainingController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => 'images/services/ad1.jpeg', 'title' => 'Empowering Seniors', 'description' => 'Advocating for the rights and well-being of older adults.'],
            ['url' => 'images/services/ad2.jpeg', 'title' => 'Caregiver Training Programs', 'description' => 'Equipping caregivers with the skills and knowledge for confident care.'],
            ['url' => 'images/services/advocacy-3.jpeg', 'title' => 'Community Education', 'description' => 'Raising awareness about the issues facing seniors.'],
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/advocacy.png'),
                'alt' => 'Policy Advocacy',
                'title' => 'Policy Advocacy',
                'description' => 'Working to shape policies that protect and support the rights of seniors.',
            ],
            [
                'icon' => asset('images/icons/empowerment.png'),
                'alt' => 'Patient Empowerment',
                'title' => 'Patient Empowerment',
                'description' => 'Ensuring seniors have a voice in their own care and treatment decisions.',
            ],
            [
                'icon' => asset('images/icons/training.png'),
                'alt' => 'Caregiver Training',
                'title' => 'Caregiver Training',
                'description' => 'Providing comprehensive training for both family and professional caregivers.',
            ],
            [
                'icon' => asset('images/icons/community.png'),
                'alt' => 'Community Engagement',
                'title' => 'Community Engagement',
                'description' => 'Building partnerships to create a more age-friendly community.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is advocacy in senior care?',
                'answer' => 'Advocacy in senior care involves working to protect the rights, dignity, and quality of life of older adults. This can include influencing public policy, ensuring access to quality care, and empowering seniors to be active participants in their own healthcare.',
            ],
            [
                'question' => 'Why is training for caregivers important?',
                'answer' => 'Proper training equips caregivers with the skills and knowledge to provide safe, effective, and compassionate care. It also helps to reduce caregiver stress and prevent burnout.',
            ],
            [
                'question' => 'How can I get involved in advocacy efforts?',
                'answer' => 'There are many ways to get involved, from contacting your elected officials to volunteering with organizations that support seniors. We offer resources and training to help you become an effective advocate for older adults.',
            ],
        ];

        return view('advocacy-and-training', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
