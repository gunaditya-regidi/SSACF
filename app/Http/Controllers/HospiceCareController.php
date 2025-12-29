<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        'icon' => 'fa-heart-pulse',
        'alt' => 'Pain and Symptom Management',
        'title' => 'Pain and Symptom Management',
        'description' => 'Expert management of pain and distressing symptoms such as breathlessness, nausea, fatigue, anxiety, and restlessness, ensuring comfort and relief.',
    ],
    [
        'icon' => 'fa-user-nurse',
        'alt' => 'Medical and Nursing Care',
        'title' => 'Medical and Nursing Care',
        'description' => 'Continuous medical supervision and skilled nursing care tailored to the patient’s changing needs, delivered with dignity and respect.',
    ],
    [
        'icon' => 'fa-hand-holding-heart',
        'alt' => 'Emotional and Psychological Support',
        'title' => 'Emotional and Psychological Support',
        'description' => 'Counselling and compassionate presence for patients and families to address fear, grief, anxiety, and emotional distress.',
    ],
    [
        'icon' => 'fa-praying-hands',
        'alt' => 'Spiritual and Cultural Support',
        'title' => 'Spiritual and Cultural Support',
        'description' => 'Respectful support aligned with the patient’s beliefs, values, and cultural practices, helping find meaning and peace.',
    ],
    [
        'icon' => 'fa-house-user',
        'alt' => 'Care at Home or in a Hospice Setting',
        'title' => 'Care at Home or in a Hospice Setting',
        'description' => 'Hospice care services provided either at home or in a dedicated inpatient setting, based on patient preference and medical needs.',
    ],
    [
        'icon' => 'fa-users',
        'alt' => 'Family and Caregiver Support',
        'title' => 'Family and Caregiver Support',
        'description' => 'Guidance, education, and emotional support for families, helping them care confidently for their loved ones and cope with anticipatory grief.',
    ],
    [
        'icon' => 'fa-file-signature',
        'alt' => 'End-of-Life Care Planning',
        'title' => 'End-of-Life Care Planning',
        'description' => 'Support with advance care planning, goals-of-care discussions, and ensuring that the patient’s wishes are honoured.',
    ],
    [
        'icon' => 'fa-handshake-angle',
        'alt' => 'Bereavement Support',
        'title' => 'Bereavement Support',
        'description' => 'Continued emotional support for families even after the loss of a loved one, recognising that care does not end with death.',
    ],
    [
        'icon' => 'fa-hand-holding-medical',
        'alt' => 'Integration with Geriatric and Palliative Care',
        'title' => 'Integration with Geriatric and Palliative Care',
        'description' => 'Hospice care at Age Care Foundation is seamlessly integrated with our geriatric and palliative care services, ensuring continuity, comfort, and trust.',
    ],
];

        $faqs = [
    [
        'question' => 'What is Hospice Care?',
        'answer' => 'Hospice Care is specialised care for individuals with advanced, life-limiting illnesses where the focus is on comfort, dignity, and quality of life rather than cure. It addresses physical symptoms as well as emotional, social, and spiritual needs.',
    ],
    [
        'question' => 'Who is eligible for Hospice Care?',
        'answer' => 'Hospice care is appropriate for individuals who:<br>
          Have an advanced or life-limiting illness<br>
          Are no longer benefiting from curative treatments<br>
          Prefer comfort-focused care<br>
          Need comprehensive support for end-of-life care<br>
        Eligibility is determined through medical assessment and discussion with the patient and family.',
    ],
    [
        'question' => 'Does choosing Hospice Care mean giving up hope?',
        'answer' => 'No. Hospice care does not mean giving up. It means redefining hope—towards comfort, peace, meaningful moments, and dignity at the end of life.',
    ],
    [
        'question' => 'When should families consider Hospice Care?',
        'answer' => 'Families should consider hospice care when:<br>
          Symptoms become difficult to manage<br>
          Hospitalisations become frequent<br>
          Treatment focus shifts from cure to comfort<br>
          The patient or family expresses a wish for peaceful, dignified care<br>
        Early referral allows better symptom control and family support.',
    ],
    [
        'question' => 'Where is Hospice Care provided?',
        'answer' => 'Hospice care can be provided:<br>
          At home, in familiar surroundings<br>
          In a dedicated hospice or inpatient care setting<br>
        The choice depends on the patient’s medical needs and personal preferences.',
    ],
    [
        'question' => 'What Hospice Care services are provided by Age Care Foundation?',
        'answer' => 'Sneha Sandhya Age Care Foundation provides:<br>
          Expert pain and symptom management<br>
          Medical and skilled nursing care<br>
          Emotional and psychological support<br>
          Spiritual and cultural support<br>
          Hospice care at home or in an inpatient setting<br>
          Family and caregiver education and support<br>
          End-of-life care planning<br>
          Bereavement support for families',
    ],
    [
        'question' => 'Can Hospice Care be combined with other services?',
        'answer' => 'Yes. Hospice care at Sneha Sandhya is integrated with palliative and geriatric care services, ensuring continuity, comfort, and holistic support.',
    ],
    [
        'question' => 'Will my loved one be in pain during Hospice Care?',
        'answer' => 'Managing pain and distressing symptoms is a central focus of hospice care. Our team works diligently to ensure care, comfort and relief using appropriate medical and supportive measures.',
    ],
    [
        'question' => 'How are families involved in Hospice Care?',
        'answer' => 'Families are actively involved and supported through:<br>
          Participation in care planning and decisions<br>
          Training and guidance in caregiving<br>
          Emotional counselling and reassurance<br>
          Continuous communication with the care team',
    ],
    [
        'question' => 'Does Hospice Care provide emotional and spiritual support?',
        'answer' => 'Yes. Hospice care supports emotional well-being and respects spiritual, cultural, and personal beliefs, helping patients and families find peace and meaning.',
    ],
    [
        'question' => 'Is Hospice Care only for elderly patients?',
        'answer' => 'No. Hospice care is based on medical need, not age. While many patients are elderly, hospice care is provided to adults of all ages with life-limiting illnesses.',
    ],
    [
        'question' => 'What happens if the patient’s condition changes?',
        'answer' => 'Care plans are reviewed regularly and adapted to the patient’s evolving needs. The hospice team remains responsive to changes in symptoms and comfort requirements.',
    ],
    [
        'question' => 'Does Hospice Care continue support for families after death?',
        'answer' => 'Yes. Sneha Sandhya provides bereavement and grief support for families even after the loss of a loved one, recognising that care extends beyond the patient.',
    ],
    [
        'question' => 'What is the goal of Hospice Care at Age Care Foundation?',
        'answer' => 'The goal is to ensure that every person experiences the end of life with comfort, dignity, compassion, and respect, while families receive guidance, support, and reassurance.',
    ],
];

        return view('hospice-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
