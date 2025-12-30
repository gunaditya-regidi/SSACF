<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalliativeCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/pc1.jpeg'), 'title' => 'Comfort in Care', 'description' => 'Our team provides compassionate support to ensure comfort at every stage.'],
            ['url' => asset('images/services/pc3.jpeg'), 'title' => 'A Peaceful Journey', 'description' => 'Creating a calm and serene environment for our patients and their families.'],
            ['url' => asset('images/services/pc4.jpeg'), 'title' => 'Skilled', 'description' => 'Combining medical expertise with a gentle, understanding approach.'],
            ['url' => asset('images/services/pc5.jpeg'), 'title' => 'Compassionate', 'description' => 'Presence. Compassion. Palliative care.'],
            ['url' => asset('images/services/pc6.jpeg'), 'title' => 'A Peaceful Journey', 'description' => 'Creating a calm and serene environment for our patients and their families.'],
            ['url' => asset('images/services/pc7.jpeg'), 'title' => 'Skilled', 'description' => 'Combining medical expertise with a gentle, understanding approach.'],
            ['url' => asset('images/services/pc8.jpeg'), 'title' => 'Compassionate', 'description' => 'Presence. Compassion. Palliative care.'],
            ['url' => asset('images/services/pc9.jpeg'), 'title' => 'Comfort in Care', 'description' => 'Our team provides compassionate support to ensure comfort at every stage.'],
            
        ];

        $highlightCards = [
            [
                'icon' => 'fas fa-clinic-medical',
                'alt' => 'Out-Patient care',
                'title' => 'Out-Patient care',
                'description' => 'We provide out-patient services on all working days, availed by patients who are on a curative treatment and referred for pain management. We engage with patient family too and follow up the patient in collaboration with the primary specialist.',
            ],
            [
                'icon' => 'fas fa-sun',
                'alt' => 'Day-Care',
                'title' => 'Day-Care',
                'description' => 'We extend day care services to patients requiring acute pain management, wound dressing, palliative paracentesis, bladder lavage, constipation dealt with and catheter change. These also serve as respite care for the Caregivers.',
            ],
            [
                'icon' => 'fas fa-procedures',
                'alt' => 'In-patient care',
                'title' => 'In-patient care',
                'description' => 'We provide in-patient care services, at our integrated Geriatric and Palliative care centre, for patients who require symptom management stoma care, wound care, lymphedema management, etc. on a long term.',
            ],
            [
                'icon' => 'fas fa-home',
                'alt' => 'Home-Care',
                'title' => 'Home-Care',
                'description' => 'Palliative Home Care is provided by a mobile medical team for patients who can be cared for in their own homes. Visits are conducted at weekly, fortnightly or monthly intervals as per the health needs of the patient.',
            ],
            [
                'icon' => 'fas fa-heartbeat',
                'alt' => 'Hospice-Care',
                'title' => 'Hospice-Care',
                'description' => 'We provide terminal care and end of life care, by trained medical teams. The psychosocial concerns of patients and families are also addressed through counselling and constant engagement.',
            ],
            [
                'icon' => 'fas fa-phone-alt',
                'alt' => 'Telephone Support',
                'title' => 'Telephone Support',
                'description' => 'The Palliative care team supports the patients and their families by being available for advice and guidance round the clock on all days including Sundays and Holidays.',
            ],
        ];

        $faqs = [
            [
                'question' => 'What is palliative care?',
                'answer' => 'The aim of palliative care is to improve the quality of life of the person suffering from serious and prolonged illness. It prevents or treats symptoms of disease and also the side effects of the treatment.',
            ],
            [
                'question' => 'What else does Palliative Care Include?',
                'answer' => "Apart from physical support, Palliative care also addresses the emotional, psycho social and spiritual problems that illnesses can bring up. When the person feels better in these areas, they have an improved quality of life.\n\nPhysical Support:\nAddressing physical symptoms like pain, trouble sleeping, shortness of breath, loss of appetite. nausea, vomiting etc.\nTreatments may include Medicines, Dietary advice, Physical therapy.\n\nPsychological / Emotional Support:\nPatients and their families face stress during illness that can lead to fear, anxiety, hopelessness, or depression,\nTreatments may include Counselling, Medicines\n\nSocial support:\nSome of the problems brought on by illness are social and financial, such as money or job-related problems, insurance questions, and legal issues. A palliative care team may:\n1. Explain complex medical issues or help families understand treatment choices.\n2. Provide or refer families to financial counselling\n3. Help connect you to resources for transportation or housing\n\nSpiritual support:\nWhen people are challenged by illness, they may look for meaning or question their faith. A palliative care team may help patients and families explore their beliefs and values so they can move toward acceptance and peace.",
            ],
            [
                'question' => 'How is palliative care different from hospice care?',
                'answer' => 'Hospice care is a type of palliative care for people who are nearing the end of life. Palliative care, on the other hand, can be provided at any stage of a serious illness, and it can be provided along with curative treatment.',
            ],
            [
                'question' => 'Where can palliative services be provided?',
                'answer' => 'Palliative care can be offered at hospitals, outpatient clinics, patient’s homes and hospice.',
            ],
            [
                'question' => 'What are the illnesses where Palliative Care is helpful?',
                'answer' => "Palliative care can be appropriate for any age, any diagnosis, any stage of the disease and any prognosis. But it is generally offered for people with prolonged illnesses, such as:\n1. Cancer\n2. Heart disease\n3. Lung diseases\n4. Kidney failure\n5. Dementia\n6. HIV/AIDS\n7. Degenerative neurological conditions eg. Parkinson’s disease.",
            ],
            [
                'question' => "Will you need a doctor's recommendation to determine if someone is eligible for palliative care?",
                'answer' => 'Yes, in most of the cases it is necessary that, the primary care physician who is treating the patient should refer him / her for supportive or palliative care.',
            ],
            [
                'question' => 'Can Palliative care be taken along with curative treatment?',
                'answer' => 'Yes. Palliative Care is not in conflict with curative care. The principles of symptom control and psychosocial support used in palliative care are beneficial to the patient even when the disease is curable.',
            ],
            [
                'question' => 'Is palliative care only for the end-of-life stage patients?',
                'answer' => 'Care of the dying patient (End Of Life Care) is an important part of palliative care however palliative care is not terminal care alone.Palliative care is relevant at every stage of disease particularly when it is prolonged and incurable. Palliative care may be given as supportive care when the illness is diagnosed, throughout the curative treatment, and during follow-up. If the disease becomes unmanageable and curative treatment becomes inappropriate then it becomes hospice care and towards the end it becomes terminal care.. It also provides bereavement support for the family after the death of the patient.',
            ],
        ];

        return view('palliative-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
