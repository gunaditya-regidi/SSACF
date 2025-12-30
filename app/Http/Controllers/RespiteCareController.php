<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespiteCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/rec1.jpeg'), 'title' => 'Short-Term Stays', 'description' => 'A safe and welcoming place for your loved one while you take a break.'],
            ['url' => asset('images/services/rec2.jpeg'), 'title' => '24/7 Care and Support', 'description' => 'Professional care and supervision around the clock.'],
            ['url' => asset('images/services/rec3.jpeg'), 'title' => 'Peace of Mind for Caregivers', 'description' => 'Rest and recharge knowing your loved one is in good hands.'],
            ['url' => asset('images/services/rec4.jpeg'), 'title' => 'Respite Care for Dementia ', 'description' => 'Specialised care for individuals living with dementia.'],
            ['url' => asset('images/services/rec5.jpeg'), 'title' => 'Daily Living Support', 'description' => 'Assistance with bathing, dressing, feeding, mobility, toileting, and daily routines.'],
            
        ];

        $highlightCards = [
            [
                'icon' => 'fa-hospital-user',
                'alt' => 'Short-Term Inpatient Respite Care',
                'title' => 'Short-Term Inpatient Respite Care',
                'description' => 'Temporary admission for elders or patients who require supervised medical, nursing, and personal care in a supportive facility setting.',
            ],
            [
                'icon' => 'fa-home-user',
                'alt' => 'Home-Based Respite Care',
                'title' => 'Home-Based Respite Care',
                'description' => 'Professional caregivers and nurses provide care at home, allowing the patient to remain in familiar surroundings while family caregivers take a break.',
            ],
            [
                'icon' => 'fa-user-nurse',
                'alt' => 'Medical and Nursing Support',
                'title' => 'Medical and Nursing Support',
                'description' => 'Ongoing medical supervision, medication management, monitoring of chronic conditions, wound care, and symptom control during the respite period.',
            ],
            [
                'icon' => 'fa-hands-helping',
                'alt' => 'Personal Care and Daily Living Support',
                'title' => 'Personal Care and Daily Living Support',
                'description' => 'Assistance with bathing, dressing, feeding, mobility, toileting, and daily routines, delivered with sensitivity and respect.',
            ],
            [
                'icon' => 'fa-brain',
                'alt' => 'Respite Care for Dementia and Cognitive Disorders',
                'title' => 'Respite Care for Dementia and 
Cognitive Disorders',
                'description' => 'Specialised care for individuals living with dementia, with structured routines, safety measures, and trained staff to reduce anxiety and confusion.',
            ],
            [
                'icon' => 'fa-hand-holding-heart',
                'alt' => 'Integrated Geriatric and Palliative 
Respite Care',
                'title' => 'Integrated Geriatric and Palliative 
Respite Care',
                'description' => 'For elders with serious or life-limiting illnesses, respite care is seamlessly integrated with geriatric and palliative care services to ensure care, comfort, dignity, and continuity.',
            ],
            [
                'icon' => 'fa-exchange-alt',
                'alt' => 'Caregiver Guidance and Transition Support',
                'title' => 'Caregiver Guidance and Transition Support',
                'description' => 'Clear communication, care updates, and smooth handover before and after the respite period to ensure confidence and continuity of care.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is Respite Care?',
                'answer' => 'Respite Care is short-term, planned care provided to an elderly or medically dependent person, allowing family caregivers temporary relief from their caregiving responsibilities while ensuring the individual continues to receive safe, compassionate, and professional care.',
            ],
            [
                'question' => 'Who can benefit from Respite Care?',
                'answer' => 'Respite care is beneficial for:<br>
                   Family caregivers who need rest or time for personal commitments<br>
                  Elders requiring continuous supervision or assistance<br>
                  Persons with chronic illnesses, disability, or frailty<br>
                  Individuals living with dementia or cognitive impairment',
            ],
            [
                'question' => 'Why is Respite Care important?',
                'answer' => 'Caregiving can be physically and emotionally demanding. Respite care helps:<br>
                  Prevent caregiver burnout and stress<br>
                  Maintain the quality and continuity of care<br>
                  Support caregiver health and well-being<br>
                  Strengthen long-term caregiving relationships',
            ],
            [
                'question' => 'What types of Respite Care does Age Care Foundation provide?',
                'answer' => 'Sneha Sandhya Age Care Foundation offers:<br>
                  Short-term inpatient respite care<br>
                  Home-based respite care<br>
                  Medical and nursing support during respite<br>
                  Personal care and daily living assistance<br>
                  Specialised respite care for dementia<br>
                  Integrated geriatric and palliative respite care',
            ],
            [
                'question' => 'How long can Respite Care be provided?',
                'answer' => 'Respite care can range from a few hours to several days or weeks, depending on the needs of the elder or patient and the caregiver’s requirements. Duration is flexible and individualised.',
            ],
            [
                'question' => 'Can Respite Care be provided at home?',
                'answer' => 'Yes. Home-based respite care allows the individual to remain in familiar surroundings while trained caregivers or nurses provide care in the absence of family members.',
            ],
            [
                'question' => 'Is Respite Care suitable for persons with dementia?',
                'answer' => 'Yes. Sneha Sandhya provides specialised respite care for individuals living with dementia, delivered by trained staff using structured routines, safety measures, and person-centred approaches to reduce anxiety and confusion.',
            ],
            [
                'question' => 'Will the quality of care change during Respite Care?',
                'answer' => 'No. Respite care at Sneha Sandhya ensures continuity and quality. Care plans are followed closely, and services are delivered with the same attention, dignity, and compassion as regular care.',
            ],
            [
                'question' => 'How are families involved during the Respite Care period?',
                'answer' => 'Families are kept informed through:<br>
                  Clear care plans and handover before respite begins<br>
                  Regular updates during the respite period<br>
                  Smooth transition and guidance when regular caregiving resumes',
            ],
            [
                'question' => 'Can Respite Care include medical and nursing support?',
                'answer' => 'Yes. Depending on the individual’s needs, respite care may include medical supervision, nursing care, medication management, wound care, and symptom monitoring.',
            ],
            [
                'question' => 'Can Respite Care be combined with Geriatric or Palliative Care?',
                'answer' => 'Yes. Respite care can be seamlessly integrated with geriatric care for older adults and palliative care for individuals with serious or life-limiting illnesses, ensuring comfort and continuity.',
            ],
            [
                'question' => 'When should caregivers consider Respite Care?',
                'answer' => 'Caregivers should consider respite care when:<br>
                  They feel physically or emotionally exhausted<br>
                  They need time for personal, family, or work commitments<br>
                  The care needs become overwhelming<br>
                  Planned or emergency breaks are required<br>
                Seeking respite early helps sustain long-term caregiving.',
            ],
            [
                'question' => 'Is choosing Respite Care a sign of neglect?',
                'answer' => 'No. Choosing respite care is a responsible and compassionate decision that supports both the caregiver and the person receiving care. It helps maintain healthier, more sustainable caregiving.',
            ],
            [
                'question' => 'What is the goal of Respite Care at Age Care Foundation?',
                'answer' => 'The goal is to provide reliable, respectful, and compassionate care for elders and patients while giving caregivers peace of mind, rest, and renewed strength.',
            ],
        ];

        return view('respite-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
