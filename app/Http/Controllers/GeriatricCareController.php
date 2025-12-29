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
                'icon' => 'fas fa-user-md',
                'alt' => 'Comprehensive Geriatric Assessment',
                'title' => 'Comprehensive Geriatric Assessment',
                'description' => 'A detailed evaluation of medical conditions, medications, mobility, cognition, nutrition, emotional health, and social support, enabling personalised and coordinated care planning.',
            ],
            [
                'icon' => 'fas fa-briefcase-medical',
                'alt' => 'Medical Management of Chronic Illnesses',
                'title' => 'Medical Management of Chronic Illnesses',
                'description' => 'Ongoing care for age-related and chronic conditions such as diabetes, hypertension, heart disease, arthritis, respiratory illnesses, neurological disorders, and frailty syndromes.',
            ],
            [
                'icon' => 'fas fa-user-nurse',
                'alt' => 'Nursing and Personal Care Support',
                'title' => 'Nursing and Personal Care Support',
                'description' => 'Skilled nursing services, assistance with daily living activities, wound care, medication management, and continuous monitoring to ensure comfort and safety.',
            ],
            [
                'icon' => 'fas fa-walking',
                'alt' => 'Rehabilitative and Mobility Support',
                'title' => 'Rehabilitative and Mobility Support',
                'description' => 'Physiotherapy, mobility training, fall-prevention strategies, and functional rehabilitation aimed at maintaining independence and improving quality of life.',
            ],
            [
                'icon' => 'fas fa-brain',
                'alt' => 'Cognitive and Mental Health Care',
                'title' => 'Cognitive and Mental Health Care',
                'description' => 'Support for elders living with dementia, depression, anxiety, and other cognitive or emotional challenges, including counselling and caregiver guidance.',
            ],
            [
                'icon' => 'fas fa-utensils',
                'alt' => 'Nutrition and Wellness Support',
                'title' => 'Nutrition and Wellness Support',
                'description' => 'Dietary assessment and guidance tailored to age-related needs, chronic conditions, and recovery requirements.',
            ],
            [
                'icon' => 'fas fa-home',
                'alt' => 'Home-Based Geriatric Care',
                'title' => 'Home-Based Geriatric Care',
                'description' => 'Medical, nursing, and supportive services delivered in the familiar comfort of the elder’s home, reducing hospitalisation and promoting continuity of care.',
            ],
            [
                'icon' => 'fas fa-hand-holding-heart',
                'alt' => 'Integrated Geriatric and Palliative Care',
                'title' => 'Integrated Geriatric and Palliative Care',
                'description' => 'For elders with serious or life-limiting illnesses, we provide seamless integration of geriatric and palliative care—focusing on symptom relief, comfort, dignity, and family support.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is Geriatric Care?',
                'answer' => 'Geriatric Care is specialised healthcare focused on the unique medical, functional, emotional, and social needs of older adults. It aims to promote healthy ageing, manage chronic illnesses, maintain independence, and enhance overall quality of life.',
            ],
            [
                'question' => 'Who needs Geriatric Care?',
                'answer' => "Geriatric care is beneficial for:<br>• Adults aged 60 years and above<br>• Elders with multiple or chronic medical conditions<br>• Individuals experiencing mobility issues, memory loss, or frailty<br>• Seniors requiring help with daily activities<br>• Families seeking coordinated and compassionate care for ageing loved ones",
            ],
            [
                'question' => 'How is Geriatric Care different from general medical care?',
                'answer' => "Unlike general medical care, geriatric care:<br>• Addresses multiple health issues together rather than in isolation<br>• Focuses on function, independence, and quality of life<br>• Considers emotional, cognitive, and social well-being<br>• Involves families and caregivers in care planning and decision-making",
            ],
            [
                'question' => 'What services are included in Geriatric Care at Age Care Foundation?',
                'answer' => "Age Care Foundation offers:<br>• Comprehensive geriatric assessment<br>• Management of chronic and age-related illnesses<br>• Nursing and personal care support<br>• Physiotherapy and rehabilitation services<br>• Mental health and cognitive care<br>• Nutrition and wellness support<br>• Home-based geriatric care<br>• Integrated geriatric and palliative care services",
            ],
            [
                'question' => 'Can Geriatric Care be provided at home?',
                'answer' => 'Yes. Many geriatric care services can be delivered at home, including medical consultations, nursing care, physiotherapy, medication management, and caregiver support—allowing elders to receive care in a familiar and comfortable environment.',
            ],
            [
                'question' => 'What is a Comprehensive Geriatric Assessment?',
                'answer' => "It is a detailed evaluation of an elder’s:<br>• Medical conditions and medications<br>• Physical function and mobility<br>• Cognitive and emotional health<br>• Nutrition and social support systems<br>This assessment helps create a personalised care plan tailored to the individual’s needs.",
            ],
            [
                'question' => 'Does Geriatric Care only focus on medical treatment?',
                'answer' => 'No. Geriatric care is holistic. Along with medical management, it addresses emotional well-being, mental health, nutrition, mobility, social engagement, and dignity—recognising the elder as a whole person.',
            ],
            [
                'question' => 'How does Age Care Foundation support elders with dementia or memory problems?',
                'answer' => 'We provide specialised care for elders with dementia, including medical management, behavioural support, counselling, caregiver education, and guidance on safety and daily care, while preserving dignity and comfort.',
            ],
            [
                'question' => 'How are families involved in Geriatric Care?',
                'answer' => "Families are an integral part of the care process. We actively involve them in:<br>• Care planning and decision-making<br>• Understanding the elder’s condition and care needs<br>• Training and emotional support for caregivers",
            ],
            [
                'question' => 'Can Geriatric Care be combined with Palliative Care?',
                'answer' => 'Yes. For elders with serious or life-limiting illnesses, geriatric care can be seamlessly integrated with palliative care to focus on comfort, symptom relief, emotional support, and quality of life.',
            ],
            [
                'question' => 'When should a family consider Geriatric Care?',
                'answer' => "It is advisable to seek geriatric care when an elder:<br>• Has multiple health conditions<br>• Experiences frequent hospital visits<br>• Shows decline in mobility, memory, or daily functioning<br>• Needs coordinated, long-term support<br>Early involvement helps prevent complications and improves outcomes.",
            ],
            [
                'question' => 'What is the goal of Geriatric Care at Age Care Foundation?',
                'answer' => 'Our goal is to help elders age with dignity, comfort, and reassurance, while supporting families through compassionate, coordinated, and affordable care.',
            ],
        ];

        return view('geriatric-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
