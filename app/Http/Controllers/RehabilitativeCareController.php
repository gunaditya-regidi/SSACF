<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RehabilitativeCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/rehab-1.jpg'), 'title' => 'Physical Therapy', 'description' => 'Restoring mobility and strength through targeted exercises.'],
            ['url' => asset('images/services/rehab-2.jpg'), 'title' => 'Occupational Therapy', 'description' => 'Helping you regain the skills for daily living.'],
            ['url' => asset('images/services/rehab-3.jpg'), 'title' => 'Speech-Language Pathology', 'description' => 'Improving communication and swallowing abilities.'],
        ];

        $highlightCards = [
            [
                'icon' => 'fa-clipboard-list',
                'alt' => 'Personalized Therapy Plans',
                'title' => 'Personalized Therapy Plans',
                'description' => 'Customized programs designed to meet your specific recovery goals.',
            ],
            [
                'icon' => 'fa-user-doctor',
                'alt' => 'Expert Therapists',
                'title' => 'Expert Therapists',
                'description' => 'A dedicated team of licensed therapists committed to your recovery.',
            ],
            [
                'icon' => 'fa-chart-line',
                'alt' => 'Functional Improvement',
                'title' => 'Functional Improvement',
                'description' => 'Focusing on regaining the skills needed for daily independence.',
            ],
            [
                'icon' => 'fa-book-reader',
                'alt' => 'Ongoing Support & Education',
                'title' => 'Ongoing Support & Education',
                'description' => 'Providing guidance and resources to support a long-term recovery.',
            ],
        ];

        $faqs = [
    [
        'question' => 'What is Rehabilitative Care?',
        'answer' => 'Rehabilitative Care focuses on helping individuals regain, restore, or maintain physical, functional, and cognitive abilities after illness, injury, surgery, or prolonged hospitalisation. Its goal is to improve independence, mobility, and quality of life.',
    ],
    [
        'question' => 'Who needs Rehabilitative Care?',
        'answer' => 'Rehabilitative care is beneficial for:<br>
          Older adults experiencing functional decline<br>
          Individuals recovering from surgery, stroke, fractures, or serious illness<br>
          Patients after prolonged hospital or ICU stays<br>
          Persons with mobility, balance, or strength limitations<br>
          Individuals needing support to resume daily activities',
    ],
    [
        'question' => 'How is Rehabilitative Care different from routine medical care?',
        'answer' => 'Rehabilitative care is:<br>
          Goal-oriented and recovery-focused<br>
          Centred on function, mobility, and independence<br>
          Delivered through therapeutic interventions such as physiotherapy<br>
          Integrated with medical and nursing care for safe recovery',
    ],
    [
        'question' => 'What Rehabilitative Care services are provided by Age Care Foundation?',
        'answer' => 'Sneha Sandhya Age Care Foundation offers:<br>
          Functional assessment and personalised care planning<br>
          Physiotherapy and mobility rehabilitation<br>
          Post-surgical and post-illness rehabilitation<br>
          Pain management support<br>
          Training in activities of daily living (ADLs)<br>
          Cognitive and functional rehabilitation<br>
          Home-based rehabilitative care<br>
          Integration with geriatric and palliative care services',
    ],
    [
        'question' => 'Can Rehabilitative Care be provided at home?',
        'answer' => 'Yes. Many rehabilitative services, especially physiotherapy and functional training, can be provided at home, allowing patients to recover in a familiar and comfortable environment.',
    ],
    [
        'question' => 'How long does Rehabilitative Care last?',
        'answer' => 'The duration varies depending on the individual’s condition, recovery goals, and progress. Care plans are reviewed regularly and adjusted to meet evolving needs.',
    ],
    [
        'question' => 'Who provides Rehabilitative Care at Age Care Foundation?',
        'answer' => 'Care is delivered by a multidisciplinary team that may include doctors, physiotherapists, nurses, and trained caregivers, working together to support safe and effective recovery.',
    ],
    [
        'question' => 'Is Rehabilitative Care only for younger patients?',
        'answer' => 'No. Rehabilitative care is especially important for older adults. Age does not limit the benefits of rehabilitation; therapy is tailored to individual ability, safety, and comfort.',
    ],
    [
        'question' => 'How does Rehabilitative Care support independence?',
        'answer' => 'By improving strength, balance, mobility, and confidence, rehabilitative care helps individuals perform daily activities safely and independently, reducing dependence on others.',
    ],
    [
        'question' => 'Can Rehabilitative Care help prevent future complications?',
        'answer' => 'Yes. Rehabilitation helps:<br>
          Reduce the risk of falls<br>
          Prevent muscle weakness and deconditioning<br>
          Improve mobility and endurance<br>
          Support safer long-term functioning',
    ],
    [
        'question' => 'Can Rehabilitative Care be combined with Geriatric or Palliative Care?',
        'answer' => 'Yes. At Age Care Foundation, rehabilitative care is seamlessly integrated with geriatric care for elders and with palliative care for those with serious illnesses, focusing on comfort, function, and quality of life.',
    ],
    [
        'question' => 'When should families consider Rehabilitative Care?',
        'answer' => 'Families should consider rehabilitative care when:<br>
          A patient is discharged from hospital or surgery<br>
          There is a decline in mobility or daily functioning<br>
          Recovery is slow or uncertain<br>
          Professional guidance is needed to restore independence safely<br>
        Early rehabilitation leads to better outcomes.',
    ],
    [
        'question' => 'What is the goal of Rehabilitative Care at Age Care Foundation?',
        'answer' => 'The goal is to help individuals recover function, rebuild confidence, and regain independence, while supporting families with compassionate, coordinated care.',
    ],
];

        return view('rehabilitative-care', compact('sliderImages', 'highlightCards', 'faqs'));
    }
}
