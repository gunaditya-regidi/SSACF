<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvocacyAndTrainingController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/ad1.jpeg'), 'title' => 'Raising Awareness', 'description' => 'Promoting the rights and well-being of the elderly.'],
            ['url' => asset('images/services/ad2.jpeg'), 'title' => 'Empowering Caregivers', 'description' => 'Providing training for compassionate and skilled care.'],
        ];

        $highlightCards = [
            [
                'icon' => 'fa-bullhorn',
                'title' => 'Advocacy for Dignity and Inclusion',
                'description' => 'Our advocacy programmes focus on promoting the rights, well-being, and social inclusion of the elderly. We actively raise awareness on geriatric and palliative care, encouraging early recognition of age-related health challenges such as dementia, chronic illnesses, frailty, and caregiver stress.<br><br>By addressing misconceptions around ageing, illness, and end-of-life care, we aim to foster informed conversations that lead to timely care, reduced suffering, and improved quality of life for elders and their families.',
            ],
            [
                'icon' => 'fa-person-chalkboard',
                'title' => 'Training for Compassionate Care',
                'description' => 'Training is a vital pillar of our mission. We believe that quality elder care depends on knowledge, skill, and compassionate attitudes. Our training initiatives are designed to equip healthcare professionals, caregivers, volunteers, and community workers with practical skills and ethical understanding required to care for the elderly and the seriously ill.<br><br>Our programmes emphasise:<br>&bull; Person-centred and dignity-based care<br>&bull; Understanding ageing, dementia, and chronic illness<br>&bull; Compassionate communication and caregiver support<br>&bull; Sensitivity to cultural, emotional, and end-of-life needs',
            ],
            [
                'icon' => 'fa-people-roof',
                'title' => 'Building a Caring Community',
                'description' => 'At Age Care Foundation, advocacy and training go hand in hand—creating informed individuals, empowered caregivers, and responsive institutions. Together, they help build a community where elders are respected, caregivers are supported, and serious illness is approached with compassion rather than fear.<br><br>Through these efforts, Sneha Sandhya Age Care Foundation continues to work towards a future where ageing is met with dignity, illness with understanding, and care with compassion.',
            ],
        ];

        return view('advocacy-and-training', compact('sliderImages', 'highlightCards'));
    }
}
