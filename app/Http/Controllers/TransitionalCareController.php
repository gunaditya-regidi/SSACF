<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransitionalCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => 'images/services/transitional-1.jpg', 'title' => 'Hospital-to-Home Transitions', 'description' => 'Seamless support for a safe and successful recovery at home.'],
            ['url' => 'images/services/transitional-2.jpg', 'title' => 'Post-Surgical Care', 'description' => 'Specialized care to help you heal and regain strength after surgery.'],
            ['url' => 'images/services/transitional-3.jpg', 'title' => 'Medication Management', 'description' => 'Ensuring medications are taken correctly to prevent complications.'],
        ];

        $highlightCards = [
            [
                'fa_icon' => 'fa-hospital-user',
                'title' => 'Post-Hospital Discharge Planning',
                'description' => 'Coordination with hospital teams to ensure smooth discharge, clarity on treatment plans, medications, follow-up care, and warning signs.',
            ],
            [
                'fa_icon' => 'fa-heartbeat',
                'title' => 'Medical Monitoring and Follow-Up',
                'description' => 'Regular medical reviews, monitoring of recovery, management of co-existing conditions, and timely intervention to prevent complications.',
            ],
            [
                'fa_icon' => 'fa-user-nurse',
                'title' => 'Skilled Nursing Care',
                'description' => 'Support for wound care, catheter and tube care, injections, medication administration, pain management, and vital monitoring.',
            ],
            [
                'fa_icon' => 'fa-pills',
                'title' => 'Medication Management and Education',
                'description' => 'Review of prescriptions, prevention of medication errors, adherence support, and education for patients and caregivers.',
            ],
            [
                'fa_icon' => 'fa-walking',
                'title' => 'Rehabilitation and Functional Recovery',
                'description' => 'Physiotherapy and mobility support to rebuild strength, prevent falls, and restore independence after illness, surgery, or prolonged hospitalisation.',
            ],
            [
                'fa_icon' => 'fa-leaf',
                'title' => 'Nutrition and Wellness Support',
                'description' => 'Dietary guidance tailored to recovery needs, chronic conditions, and age-related requirements.',
            ],
            [
                'fa_icon' => 'fa-home',
                'title' => 'Home-Based Transitional Care',
                'description' => 'Transitional care services provided in the comfort of the patient’s home, reducing stress and supporting faster, safer recovery.',
            ],
            [
                'fa_icon' => 'fa-hands-helping',
                'title' => 'Emotional and Caregiver Support',
                'description' => 'Counselling, reassurance, and training for families to help them confidently manage care during the transition period.',
            ],
            [
                'fa_icon' => 'fa-hand-holding-heart',
                'title' => 'Integration with Geriatric and Palliative Care',
                'description' => 'For elderly patients and those with serious illnesses, transitional care is seamlessly integrated with geriatric and palliative care services to ensure continuity, comfort, and dignity.',
            ],
        ];

        $faqs = [
    [
        'question' => 'What is Transitional Care?',
        'answer' => 'Transitional Care is short-term, coordinated healthcare support provided when a patient moves from one care setting to another—most commonly from hospital to home. It ensures continuity of care during recovery and reduces the risk of complications and hospital readmissions.',
    ],
    [
        'question' => 'Who needs Transitional Care?',
        'answer' => "Transitional care is especially helpful for:\n• Older adults after hospital discharge\n• Patients recovering from surgery, serious illness, or injury\n• Individuals with multiple medical conditions\n• Patients who need nursing, rehabilitation, or medical monitoring at home\n• Families who require guidance in managing post-discharge care",
    ],
    [
        'question' => 'Why is Transitional Care important?',
        'answer' => "The period immediately after hospital discharge is often a vulnerable time. Transitional care helps:\n• Prevent avoidable complications and readmissions\n• Ensure medications are taken correctly\n• Support recovery and rehabilitation\n• Provide reassurance and clarity to patients and families",
    ],
    [
        'question' => 'How is Transitional Care different from regular home care?',
        'answer' => "Transitional care is:\n• Time-bound and goal-oriented\n• Focused on recovery and stabilisation after acute care\n• Closely coordinated with hospital discharge plans\n• Designed to transition patients safely to long-term care or independence",
    ],
    [
        'question' => 'What services are included in Transitional Care at Age Care Foundation?',
        'answer' => "Sneha Sandhya Age Care Foundation provides:\n• Post-hospital discharge planning and coordination\n• Medical monitoring and follow-up\n• Skilled nursing care\n• Medication review and management\n• Physiotherapy and rehabilitation support\n• Nutrition and wellness guidance\n• Emotional and caregiver support\n• Home-based transitional care services",
    ],
    [
        'question' => 'Can Transitional Care be provided at home?',
        'answer' => 'Yes. Most transitional care services can be delivered at home, allowing patients to recover in a familiar environment while receiving professional medical and nursing support.',
    ],
    [
        'question' => 'How long does Transitional Care last?',
        'answer' => 'Transitional care is typically provided for a short, defined period, depending on the patient’s condition and recovery needs. The duration is individualised and reviewed regularly.',
    ],
    [
        'question' => 'Who provides Transitional Care at Sneha Sandhya?',
        'answer' => 'Care is delivered by a multidisciplinary team, which may include doctors, nurses, physiotherapists, counsellors, and trained caregivers, working together to support recovery.',
    ],
    [
        'question' => 'How are families involved in Transitional Care?',
        'answer' => "Families are actively involved and supported through:\n• Clear guidance on care routines and medications\n• Training in basic caregiving tasks\n• Education on warning signs and follow-up needs\n• Emotional reassurance and counselling",
    ],
    [
        'question' => 'Does Transitional Care help prevent hospital readmissions?',
        'answer' => 'Yes. By ensuring proper follow-up, medication management, rehabilitation, and early identification of complications, transitional care significantly reduces the risk of unnecessary hospital readmissions.',
    ],
    [
        'question' => 'Can Transitional Care be combined with Geriatric or Palliative Care?',
        'answer' => 'Yes. Transitional care at Sneha Sandhya can be seamlessly integrated with geriatric care for older adults and palliative care for patients with serious or life-limiting illnesses, ensuring continuity and comfort.',
    ],
    [
        'question' => 'When should families consider Transitional Care?',
        'answer' => "Families should consider transitional care when:\n• A patient is being discharged from hospital\n• Recovery requires continued medical or nursing support\n• There are concerns about managing care at home\n• The patient is elderly or medically complex\nEarly planning leads to smoother transitions and better outcomes.",
    ],
    [
        'question' => 'What is the goal of Transitional Care at Sneha Sandhya?',
        'answer' => 'The goal is to ensure a safe, supported, and confident transition from hospital to home—promoting recovery, preventing complications, and empowering patients and families.',
    ],
];

        return view('transitional-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
