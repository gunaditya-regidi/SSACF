<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutreachGeriatricCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => 'images/services/orc1.jpeg', 'title' => 'Community Health Clinics', 'description' => 'Bringing geriatric care directly to underserved communities.'],
            ['url' => 'images/services/orc2.jpeg', 'title' => 'Mobile Health Units', 'description' => 'Our mobile clinics provide on-site care for seniors with limited mobility.'],
            ['url' => 'images/services/orc3.jpeg', 'title' => 'Health Education Workshops', 'description' => 'Empowering seniors with knowledge to manage their health.'],
            ['url' => 'images/services/orc4.jpeg', 'title' => 'Mobile Health Units', 'description' => 'Our mobile clinics provide on-site care for seniors with limited mobility.'],
            
        ];

        $highlightCards = [
            [
                'icon' => 'images/icons/community.png',
                'alt' => 'Community-Based Care',
                'title' => 'Community-Based Care',
                'description' => 'Bringing essential geriatric health services directly to local communities.',
            ],
            [
                'icon' => 'images/icons/accessibility.png',
                'alt' => 'Accessible to All',
                'title' => 'Accessible to All',
                'description' => 'Breaking down barriers to care for vulnerable and underserved seniors.',
            ],
            [
                'icon' => 'images/icons/prevention.png',
                'alt' => 'Preventive Health',
                'title' => 'Preventive Health',
                'description' => 'Focusing on early detection and proactive health management.',
            ],
            [
                'icon' => 'images/icons/empowerment.png',
                'alt' => 'Health Empowerment',
                'title' => 'Health Empowerment',
                'description' => 'Equipping seniors and communities with knowledge and resources.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is outreach geriatric care?',
                'answer' => 'Outreach geriatric care is a proactive approach to delivering healthcare to older adults in their own communities. This can include mobile health clinics, community health screenings, and educational workshops.',
            ],
            [
                'question' => 'Who benefits from outreach care?',
                'answer' => 'Outreach care is especially beneficial for seniors who have difficulty accessing traditional healthcare due to mobility issues, lack of transportation, or living in a remote or underserved area.',
            ],
            [
                'question' => 'What types of services are offered?',
                'answer' => 'Services can include health assessments, chronic disease management, vaccinations, and education on a wide range of health topics relevant to seniors.',
            ],
        ];

        return view('outreach-geriatric-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
