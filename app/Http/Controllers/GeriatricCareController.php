<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeriatricCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => 'images/services/gc1.jpeg', 'title' => 'Comprehensive Geriatric Assessments', 'description' => 'Holistic evaluations to create personalized care plans.'],
            ['url' => 'images/services/gc2.jpeg', 'title' => 'Chronic Disease Management', 'description' => 'Expert management of age-related health conditions.'],
            ['url' => 'images/services/geriatric-3.jpeg', 'title' => 'Healthy Aging Programs', 'description' => 'Promoting wellness and an active lifestyle for seniors.'],
        ];

        $highlightCards = [
            [
                'icon' => 'images/icons/assessment.png',
                'alt' => 'Personalized Assessment',
                'title' => 'Personalized Assessment',
                'description' => 'In-depth evaluations to understand each patient\'s unique needs.',
            ],
            [
                'icon' => 'images/icons/care-plan.png',
                'alt' => 'Customized Care Plans',
                'title' => 'Customized Care Plans',
                'description' => 'Developing tailored strategies for optimal health and well-being.',
            ],
            [
                'icon' => 'images/icons/monitoring.png',
                'alt' => 'Continuous Monitoring',
                'title' => 'Continuous Monitoring',
                'description' => 'Regular check-ins to adapt care as needs evolve.',
            ],
            [
                'icon' => 'images/icons/family-support.png',
                'alt' => 'Family Support',
                'title' => 'Family Support',
                'description' => 'Providing guidance and resources for families and caregivers.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is geriatric care?',
                'answer' => 'Geriatric care is a specialized field that focuses on the health and well-being of older adults. It aims to promote health by preventing and treating diseases and disabilities in older adults.',
            ],
            [
                'question' => 'Why is specialized care for seniors important?',
                'answer' => 'Seniors have unique health needs that require a specialized approach. Geriatric care providers are trained to manage complex conditions and a a more comprehensive, patient-centered approach to care.',
            ],
            [
                'question' => 'What services are included in geriatric care?',
                'answer' => 'Services can include comprehensive assessments, management of chronic conditions, medication management, mobility support, and coordination of care with other specialists.',
            ],
        ];

        return view('geriatric-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
