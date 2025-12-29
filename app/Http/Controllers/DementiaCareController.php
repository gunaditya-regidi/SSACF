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
                'fa_icon' => 'fa-notes-medical',
                'title' => 'Early Identification and Assessment',
                'description' => 'Comprehensive evaluation of memory, cognition, behaviour, physical health, and functional abilities to enable early diagnosis and appropriate care planning.',
            ],
            [
                'fa_icon' => 'fa-stethoscope',
                'title' => 'Medical Management and Monitoring',
                'description' => 'Ongoing care for dementia and associated conditions, including medication management, monitoring of disease progression, and treatment of co-existing illnesses.',
            ],
            [
                'fa_icon' => 'fa-hand-holding-heart',
                'title' => 'Person-Centred Daily Care Support',
                'description' => 'Assistance with daily activities, personal care, nutrition, mobility, and routines designed to promote comfort, safety, and familiarity.',
            ],
            [
                'fa_icon' => 'fa-brain',
                'title' => 'Behavioural and Emotional Support',
                'description' => 'Non-pharmacological approaches to manage agitation, anxiety, confusion, sleep disturbances, and behavioural changes, with a focus on empathy and reassurance.',
            ],
            [
                'fa_icon' => 'fa-puzzle-piece',
                'title' => 'Cognitive Stimulation and Meaningful Engagement',
                'description' => 'Structured activities and therapeutic interventions that encourage mental engagement, preserve skills, and promote a sense of purpose and well-being.',
            ],
            [
                'fa_icon' => 'fa-users',
                'title' => 'Caregiver Education and Support',
                'description' => 'Training, counselling, and practical guidance for family caregivers to help them understand dementia, manage challenges, reduce caregiver stress, and provide effective care at home.',
            ],
            [
                'fa_icon' => 'fa-home',
                'title' => 'Home-Based Dementia Care',
                'description' => 'Dementia care services delivered in the comfort and familiarity of the patient’s home, reducing disorientation and supporting continuity of care.',
            ],
            [
                'fa_icon' => 'fa-hand-holding-medical',
                'title' => 'Integrated Geriatric and Palliative Dementia Care',
                'description' => 'For advanced stages of dementia, we provide integrated care focusing on comfort, symptom relief, dignity, and end-of-life support for both patients and families.',
            ],
        ];

        $faqs = [
    [
        'question' => 'What is Dementia?',
        'answer' => 'Dementia is a collective term for conditions that affect memory, thinking, behaviour, communication, and the ability to perform daily activities. It is progressive in nature and commonly affects older adults, though it is not a normal part of ageing.',
    ],
    [
        'question' => 'What is Dementia Care?',
        'answer' => 'Dementia Care is a specialised, person-centred approach that supports individuals living with dementia and their families. It focuses on maintaining dignity, safety, comfort, and quality of life, while addressing medical, emotional, behavioural, and social needs.',
    ],
    [
        'question' => 'What are the early signs of dementia?',
        'answer' => "Early signs may include:\n• Memory loss affecting daily life\n• Difficulty in communication or finding words\n• Confusion with time, place, or familiar tasks\n• Changes in mood, behaviour, or personality\n• Poor judgement or withdrawal from activities\nEarly assessment helps in planning care and support.",
    ],
    [
        'question' => 'Who should seek Dementia Care services?',
        'answer' => "Dementia care is recommended for:\n• Individuals diagnosed with dementia or memory disorders\n• Elders showing signs of cognitive decline\n• Families struggling with caregiving challenges\n• Persons requiring structured support as dementia progresses",
    ],
    [
        'question' => 'How is Dementia Care different from general elder care?',
        'answer' => "Dementia care requires specialised understanding and skills. It:\n• Focuses on person-centred and non-pharmacological approaches\n• Addresses behavioural and emotional changes\n• Adapts care environments and routines\n• Provides extensive caregiver education and support",
    ],
    [
        'question' => 'What Dementia Care services are provided by Age Care Foundation?',
        'answer' => "Age Care Foundation offers:\n• Early identification and cognitive assessment\n• Medical management and monitoring\n• Personalised daily care support\n• Behavioural and emotional support\n• Cognitive stimulation and engagement activities\n• Caregiver training, counselling, and support\n• Home-based dementia care services\n• Integrated geriatric and palliative dementia care",
    ],
    [
        'question' => 'Can Dementia Care be provided at home?',
        'answer' => 'Yes. Many dementia care services can be delivered at home, where familiar surroundings help reduce confusion and anxiety. Home-based care also supports families in maintaining routines and continuity.',
    ],
    [
        'question' => 'How does Age Care Foundation support family caregivers?',
        'answer' => "We support caregivers through:\n• Education on understanding dementia and disease progression\n• Practical training in daily care and communication\n• Emotional counselling and stress management\n• Guidance on safety, nutrition, and behavioural challenges",
    ],
    [
        'question' => 'What role does Dementia India Alliance (DIA), Bengaluru play?',
        'answer' => "Age Care Foundation collaborates with Dementia India Alliance (DIA), Bengaluru as a knowledge and training partner. Through this collaboration:\n• Care teams receive specialised training in best-practice dementia care\n• Services are aligned with national and global dementia care standards\n• Families benefit from informed guidance and awareness initiatives",
    ],
    [
        'question' => 'Is medication the only treatment for dementia?',
        'answer' => 'No. While medications may help manage certain symptoms, dementia care relies heavily on non-pharmacological approaches, including structured routines, behavioural strategies, emotional reassurance, and meaningful engagement.',
    ],
    [
        'question' => 'How does Age Care Foundation manage behavioural changes in dementia?',
        'answer' => "Behavioural symptoms are addressed using compassionate, non-restrictive methods such as:\n• Identifying triggers and unmet needs\n• Maintaining familiar routines\n• Creating calming environments\n• Using reassurance, validation, and empathy\nMedication is used only when clinically necessary.",
    ],
    [
        'question' => 'Can Dementia Care be combined with Palliative Care?',
        'answer' => 'Yes. In advanced stages, dementia care can be integrated with palliative care to focus on comfort, symptom relief, dignity, and end-of-life support for both the individual and the family.',
    ],
    [
        'question' => 'When should families consider professional Dementia Care?',
        'answer' => "Families should seek support when:\n• Memory or behaviour changes begin affecting daily life\n• Caregiving becomes physically or emotionally overwhelming\n• Safety concerns arise\n• Structured, long-term support is needed\nEarly involvement leads to better planning and reduced stress.",
    ],
    [
        'question' => 'What is the goal of Dementia Care at Age Care Foundation?',
        'answer' => 'Our goal is to ensure that persons living with dementia are cared for with dignity, compassion, and respect, while families are supported, informed, and never left to face the journey alone.',
    ],
];

        return view('dementia-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
