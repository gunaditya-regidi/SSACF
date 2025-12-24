<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespiteCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/respite-1.jpg'), 'title' => 'Short-Term Stays', 'description' => 'A safe and welcoming place for your loved one while you take a break.'],
            ['url' => asset('images/services/respite-2.jpg'), 'title' => '24/7 Care and Support', 'description' => 'Professional care and supervision around the clock.'],
            ['url' => asset('images/services/respite-3.jpg'), 'title' => 'Peace of Mind for Caregivers', 'description' => 'Rest and recharge knowing your loved one is in good hands.'],
        ];

        $highlightCards = [
            [
                'icon' => asset('images/icons/caregiver-support.png'),
                'alt' => 'Caregiver Relief',
                'title' => 'Caregiver Relief',
                'description' => 'Providing temporary relief for family caregivers to prevent burnout.',
            ],
            [
                'icon' => asset('images/icons/quality-care.png'),
                'alt' => 'Professional Care',
                'title' => 'Professional Care',
                'description' => 'High-quality, compassionate care in a safe and supportive setting.',
            ],
            [
                'icon' => asset('images/icons/flexible-scheduling.png'),
                'alt' => 'Flexible Scheduling',
                'title' => 'Flexible Scheduling',
                'description' => 'Short-term stays that can be planned in advance or used for emergencies.',
            ],
            [
                'icon' => asset('images/icons/peace-of-mind.png'),
                'alt' => 'Peace of Mind',
                'title' => 'Peace of Mind',
                'description' => 'Enjoy your time off knowing your loved one is receiving the best possible care.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is respite care?',
                'answer' => 'Respite care provides short-term relief for primary caregivers. It can be arranged for just an afternoon or for several days or weeks. Care can be provided at home, in a healthcare facility, or at an adult day center.',
            ],
            [
                'question' => 'Why is respite care important for caregivers?',
                'answer' => 'Caregiving is a demanding role, and respite care provides caregivers with a much-needed break to rest, recharge, and attend to their own personal needs, which can help prevent burnout.',
            ],
            [
                'question' => 'How do I know if I need respite care?',
                'answer' => 'If you are feeling overwhelmed, stressed, or resentful about your caregiving responsibilities, it may be a sign that you need a break. Respite care can provide the support you need to continue providing quality care for your loved one.',
            ],
        ];

        return view('respite-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
