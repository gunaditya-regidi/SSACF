<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutreachGeriatricCareController extends Controller
{
    public function index()
    {
        $sliderImages = [
            ['url' => asset('images/services/orc1.jpeg'), 'alt' => 'Community Clinics'],
            ['url' => asset('images/services/orc2.jpeg'), 'alt' => 'Outreach Clinics'],
            ['url' => asset('images/services/orc3.jpeg'), 'alt' => 'Community Clinics'],
            ['url' => asset('images/services/orc4.jpeg'), 'alt' => 'Outreach Clinics'],
            ['url' => asset('images/services/orc5.jpeg'), 'alt' => 'Community Clinics'],
            ['url' => asset('images/services/orc6.jpeg'), 'alt' => 'Outreach Clinics'],
            ['url' => asset('images/services/orc7.jpeg'), 'alt' => 'Community Clinics'],
           
        ];

        $highlightCards = [
            [
                'icon' => 'fa-hands-holding-child',
                'title' => 'Bringing Healthcare Closer to the Elderly',
                'description' => 'Ageing often comes with multiple health challenges, compounded by poverty, isolation, and difficulty in accessing healthcare facilities.<br><br>Recognising this reality, Age Care Foundation conducts regular outpatient geriatric clinics at multiple locations across the city of Visakhapatnam and in select neighbouring villages. These clinics are also organised at old age homes, ensuring that elderly inmates receive timely and dignified medical attention.<br><br>Our outreach clinics serve as a vital lifeline for seniors who are unable to afford private healthcare or travel long distances for treatment.',
            ],
            [
                'icon' => 'fa-hand-holding-medical',
                'title' => 'Services Offered Through Outreach Clinics',
                'description' => 'The outreach geriatric clinics provide free primary healthcare services, including:<br>&bull; Medical consultations for common and chronic illnesses<br>&bull; Basic health assessments and monitoring<br>&bull; Guidance on disease management and healthy ageing<br>&bull; Counselling and reassurance for elderly patients<br><br>To ensure continuity of care, essential medicines are dispensed free of cost to elderly persons from poor socio-economic backgrounds, helping them manage chronic conditions without financial burden.',
            ],
            [
                'icon' => 'fa-users-line',
                'title' => 'Impact in the Community',
                'description' => 'Every month, about 600 to 800 elderly persons benefit from these outreach services.<br><br>For many, these clinics are the only reliable source of medical care. By addressing health concerns early and providing regular follow-up, the clinics help prevent complications, reduce suffering, and improve overall quality of life.<br><br>Our outreach programme has made a meaningful difference not only to elders living within the community but also to those residing in old age homes, who often lack access to regular medical services.',
            ],
        ];

        return view('outreach-geriatric-care', compact('sliderImages', 'highlightCards'));
    }
}
