<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/hc1.jpeg'), 'title' => 'Personalized In-Home Care', 'description' => 'Professional and compassionate care in the comfort of your own home.'],
            ['url' => asset('images/services/hc2.jpeg'), 'title' => 'Assistance with Daily Living', 'description' => 'Helping with daily tasks to maintain independence.'],
            ['url' => asset('images/services/hc3.jpeg'), 'title' => 'Home Care', 'description' => 'Peace of Mind for Families'],
              
        ];

        $highlightCards = [
            [
                'icon' => 'fa-home',
                'title' => 'In-Home Support',
                'description' => 'Providing assistance with daily activities to help seniors live independently at home.',
            ],
            [
                'icon' => 'fa-user-friends',
                'title' => 'Compassionate Companionship',
                'description' => 'Friendly and supportive caregivers to combat loneliness and isolation.',
            ],
            [
                'icon' => 'fa-clipboard-list',
                'title' => 'Customized Care Plans',
                'description' => 'Tailored care plans to meet the unique needs and preferences of each individual.',
            ],
            [
                'icon' => 'fa-hand-holding-heart',
                'title' => 'Peace of Mind for Families',
                'description' => 'Knowing your loved one is safe and well-cared for in their own home.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is home care?',
                'answer' => 'Home care provides seniors with one-on-one assistance in the comfort of their own home. This can include help with personal care, household chores, medication reminders, and companionship.',
            ],
            [
                'question' => 'How do I know if home care is the right choice for my loved one?',
                'answer' => 'If your loved one needs assistance with daily activities but wants to remain in their own home, home care can be an excellent option. It provides the support they need to maintain their independence and quality of life.',
            ],
            [
                'question' => 'How are caregivers selected?',
                'answer' => 'Our caregivers are carefully screened, trained, and insured. We match caregivers to clients based on personality, skills, and the specific needs of the client.',
            ],
        ];

        return view('home-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
