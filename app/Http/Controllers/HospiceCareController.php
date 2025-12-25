<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospiceCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/hospice-1.jpg'), 'title' => 'Comfort and Dignity', 'description' => 'Providing compassionate care that focuses on quality of life.'],
            ['url' => asset('images/services/hospice-2.jpg'), 'title' => 'Symptom Management', 'description' => 'Expert medical care to manage pain and other symptoms.'],
            ['url' => asset('images/services/hospice-3.jpg'), 'title' => 'Emotional and Spiritual Support', 'description' => 'Caring for the whole person, not just the illness.'],
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/compassion.png'),
                'alt' => 'Compassionate Support',
                'title' => 'Compassionate Support',
                'description' => 'A team-oriented approach to expert medical care, pain management, and emotional and spiritual support.',
            ],
            [
                'icon' => asset('images/icons/dignity.png'),
                'alt' => 'Dignity and Respect',
                'title' => 'Dignity and Respect',
                'description' => 'Honoring the choices and values of each individual with deep respect.',
            ],
            [
                'icon' => asset('images/icons/family-support.png'),
                'alt' => 'Support for Families',
                'title' => 'Support for Families',
                'description' => 'Providing guidance, resources, and bereavement counseling for loved ones.',
            ],
            [
                'icon' => asset('images/icons/peace-of-mind.png'),
                'alt' => 'A Peaceful Journey',
                'title' => 'A Peaceful Journey',
                'description' => 'Creating a calm and serene environment for patients and their families.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is hospice care?',
                'answer' => 'Hospice care is a special kind of care that focuses on the quality of life for people and their caregivers who are experiencing an advanced, life-limiting illness. Hospice care provides compassionate care for people in the last phases of incurable disease so that they may live as fully and comfortably as possible.',
            ],
            [
                'question' => 'When is it time to consider hospice care?',
                'answer' => 'Hospice is appropriate when a patient has a life-limiting illness with a prognosis of six months or less if the disease runs its expected course. It is also for patients who want to focus on comfort and quality of life rather than curative treatments.',
            ],
            [
                'question' => 'Where is hospice care provided?',
                'answer' => 'Hospice care is most often provided in the patient\'s home, but it can also be provided in a freestanding hospice center, hospital, or nursing home.',
            ],
        ];

        return view('hospice-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
