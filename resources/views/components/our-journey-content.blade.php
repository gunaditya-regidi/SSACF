<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<style>
    .journey-container {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .journey-path {
        fill: none;
        stroke: #cbd5e1; /* slate-300 */
        stroke-width: 8;
        stroke-linecap: round;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
        height: 100%;
    }

    .milestone-entry {
        position: relative;
        margin-bottom: 80px; /* Space between milestones */
        display: flex;
        align-items: center;
        width: 100%;
    }

    .milestone-content-block {
        width: calc(50% - 60px); /* Half width minus some margin */
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .milestone-entry.is-visible .milestone-content-block {
        opacity: 1;
        transform: translateY(0);
    }

    /* Alternating layout for desktop */
    .milestone-entry:nth-child(odd) .milestone-image-block {
        order: 1;
        margin-right: auto;
    }
    .milestone-entry:nth-child(odd) .milestone-text-block {
        order: 2;
        margin-left: auto;
    }
    .milestone-entry:nth-child(even) .milestone-image-block {
        order: 2;
        margin-left: auto;
    }
    .milestone-entry:nth-child(even) .milestone-text-block {
        order: 1;
        margin-right: auto;
    }

    .milestone-image-block .milestone-slideshow {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }
    
    .milestone-slideshow img {
        width: 100%;
        height: 300px; 
        object-fit: cover;
    }

    .milestone-text-block {
        background: #ffffff;
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .milestone-text-block .year {
        font-size: 1.75rem;
        font-weight: bold;
        color: #4a90e2;
        margin-bottom: 8px;
    }
    
    .milestone-text-block .title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #1e293b; /* slate-800 */
        margin-bottom: 12px;
    }

    .milestone-text-block .text {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #334155;
        text-align: justify;
    }

    .milestone-marker {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #4a90e2;
        border: 4px solid #ffffff;
        z-index: 10;
    }

    /* Slick overrides */
    .slick-dots li button:before {
        font-size: 12px;
        color: #4a90e2;
    }
    .slick-dots li.slick-active button:before {
        color: #4a90e2;
    }

    /* --- Responsive Styles --- */
    @media (max-width: 1024px) {
        .journey-path {
            left: 20px; /* Position timeline to the left */
            transform: translateX(0);
        }

        .milestone-marker {
            left: 20px; /* Align marker with the timeline */
        }

        .milestone-entry {
            flex-direction: column; /* Stack items vertically */
            align-items: flex-start; /* Align items to the start */
        }

        .milestone-content-block {
            width: calc(100% - 80px); /* Full width minus margin for timeline */
            margin-left: 80px; /* Create space from the timeline */
            margin-bottom: 20px;
        }

        /* Remove alternating order for stacked layout */
        .milestone-entry:nth-child(odd) .milestone-image-block,
        .milestone-entry:nth-child(even) .milestone-image-block {
            order: 1;
            margin-right: 0;
            margin-left: 80px;
        }
        .milestone-entry:nth-child(odd) .milestone-text-block,
        .milestone-entry:nth-child(even) .milestone-text-block {
            order: 2;
            margin-left: 80px;
            margin-right: 0;
        }
    }

    @media (max-width: 768px) {
        .journey-path, .milestone-marker {
            left: 10px;
        }
        .milestone-content-block, 
        .milestone-entry:nth-child(odd) .milestone-image-block,
        .milestone-entry:nth-child(even) .milestone-image-block,
        .milestone-entry:nth-child(odd) .milestone-text-block,
        .milestone-entry:nth-child(even) .milestone-text-block {
            width: calc(100% - 40px);
            margin-left: 40px;
        }

        .milestone-text-block .year {
            font-size: 1.5rem;
        }
        .milestone-text-block .title {
            font-size: 1.15rem;
        }
        .milestone-text-block .text {
            font-size: 1rem;
        }
    }

</style>

<div class="bg-white py-5 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <div class="mx-auto max-w-2xl">
            <h1 class="text-4xl font-bold tracking-tight text-blue-900 sm:text-6xl">Our Journey</h1>
           </div>
    </div>
</div>

<div class="py-10 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-3xl font-bold text-gray-800">A Timeline of Care with Compassion</h2>
            <p class="text-gray-600 mt-2">We began our humble journey in 2012, taking small steps and forging many partnerships all along.</p>
        </div>

        <div class="journey-container">
            <div style="position: relative;">
                <svg class="journey-path" width="30" height="100%">
                     <path d="M 4 0 V 10000" />
                </svg>

                @php
                    $milestones = [
                        [
                            'year' => '2012',
                            'title' => 'Where Compassion Took Root',
                            'text' => 'The beginning of a promise to care with dignity. Sneha Sandhya Age Care Foundation was established as a charitable trust on 24 August 2012, inspired and sponsored by Sneha Sandhya, a society of senior citizens dedicated to elder welfare since 2004. Our journey began at St. Joseph’s Hospice, Visakhapatnam, with outpatient geriatric clinics across the city and regular visits to old age homes.',
                            'images' => [url('images/journey/2012a.jpg'), url('images/journey/2012b.jpeg'), url('images/journey/2012c.jpeg')]
                        ],
                        [
                            'year' => '2013',
                            'title' => 'Care That Reached Further',
                            'text' => 'Healthcare made accessible, affordable, and free. Our outreach services expanded with additional outpatient clinics and old age home visits. Free health screening for hypertension and diabetes, along with free medicines, became a cornerstone of our commitment to accessible care for the elderly.',
                            'images' => [url('images/journey/2013a.jpg'), url('images/journey/2013b.jpg'), url('images/journey/2013c.jpg'), url('images/journey/2013d.jpg'), url('images/journey/2013e.jpeg'), url('images/journey/2013f.jpg')]
                        ],
                        [
                            'year' => '2014',
                            'title' => 'Strengthening Supportive Care',
                            'text' => 'Building capacity to serve those in serious suffering. The Centre for Palliative and Supportive Care moved into the main building of St. Joseph’s Hospital, Visakhapatnam. With improved infrastructure, we began offering more comprehensive palliative care services and saw a steady increase in patient intake. Collaboration with Homi Bhabha Cancer Hospital & Research Centre, Visakhapatnam further strengthened our palliative care services.',
                            'images' => [url('images/journey/2014a.jpg'), url('images/journey/2014b.jpeg'), url('images/journey/2014c.jpeg'), url('images/journey/2014d.jpeg')]
                        ],
                        [
                            'year' => '2015',
                            'title' => 'Taking Care to the Underserved',
                            'text' => 'Care beyond city limits. Medical outreach camps were extended to interior and rural areas such as Chodavaram, enabling many underserved patients to access care. Simultaneously, awareness programmes were conducted to sensitise communities about the importance and need for palliative care.',
                            'images' => [url('images/journey/2015a.jpeg'), url('images/journey/2015b.jpeg'),url('images/journey/2015c.jpeg'), url('images/journey/2015d.jpeg'), url('images/journey/2015e.jpeg')]
                        ],
                        [
                            'year' => '2016',
                            'title' => 'Recognition That Encouraged Us',
                            'text' => 'Affirmation of purpose from public leaders. We were honoured by visits from distinguished guests including Mrs. Poonam Malakondaih, IAS, Principal Secretary (Health), Government of Andhra Pradesh; Mr. T. Krishna Babu, IAS, Chairman, Visakhapatnam Port Trust; and Mr. Pravin Kumar, IAS, District Collector of Visakhapatnam, who appreciated our services to the elderly and the seriously ill.',
                             'images' => [url('images/journey/2016a.jpeg'), url('images/journey/2016b.jpeg'), url('images/journey/2016c.jpeg'), url('images/journey/2016d.jpeg')]
                        ],
                        [
                            'year' => '2017',
                            'title' => 'Inspired by a National Pioneer',
                            'text' => 'A turning point in awareness and advocacy. It was a privilege to host Dr. M. R. Raja Gopal, Chairman of Pallium India Trust and a pioneer of palliative care in India. His interactions with doctors and medical students across Visakhapatnam and neighbouring districts significantly advanced awareness and sensitisation among healthcare providers.',
                            'images' => [url('images/journey/2017a.jpg'), url('images/journey/2017b.jpg'),url('images/journey/2017c.jpeg'), url('images/journey/2017d.jpeg')]
                        ],
                        [
                            'year' => '2018',
                            'title' => 'Care at the Doorstep',
                            'text' => 'When healing travelled to homes. Home-based palliative care services were launched for patients with serious illnesses through a dedicated mobile medical team. This programme was supported by the Pain Relief and Palliative Care Society, Hyderabad, and Two Worlds Cancer Collaboration, Canada for a period of three years. The Foundation also received recognition as a Registered Medical Institution (RMI) from the Drug Control Authority, Government of Andhra Pradesh.',
                             'images' => [url('images/journey/2018a.jpeg'), url('images/journey/2018b.jpeg'), url('images/journey/2018c.jpeg'), url('images/journey/2018d.jpeg'), url('images/journey/2018e.jpeg')]
                        ],
                        [
                            'year' => '2019',
                            'title' => 'Responding to Dementia Care Needs',
                            'text' => 'Specialised care for complex conditions. Home healthcare services were expanded to include specialised support for persons living with dementia.',
                            'images' => [url('images/journey/2019a.jpeg'), url('images/journey/2019b.jpeg'), url('images/journey/2019c.jpeg'),]
                        ],
                        [
                            'year' => '2020',
                            'title' => 'Learning Without Borders',
                            'text' => 'Global expertise, local impact. Dr. Christine Drummond, Palliative Care Physician, and Dr. Seshu Boda, Family Physician, from Australasian Palliative Link International, Australia, visited to share expertise and best practices. An MoU was signed with Pradhama Hospitals, and the hospice services were relocated there.',
                            'images' => [url('images/journey/2020a.jpeg'), url('images/journey/2020b.jpeg'), url('images/journey/2020c.jpeg'), url('images/journey/2020d.jpeg'), url('images/journey/2020e.jpeg'), url('images/journey/2020f.jpeg'), url('images/journey/2020g.jpeg')]
                        ],
                        [
                            'year' => '2021',
                            'title' => 'Compassion in a Time of Crisis',
                            'text' => 'Standing with the vulnerable during COVID-19. An MoU was entered into with GVP Institute of Healthcare & Medical Technology, and hospice services were relocated to GVP Medical College Hospital, Visakhapatnam. During the COVID-19 pandemic, the Foundation collaborated with other NGOs to distribute medicines, pulse oximeters, thermometers, masks, and sanitisers to underprivileged and unreached communities.',
                            'images' => [url('images/journey/2021a.jpeg'), url('images/journey/2021b.jpeg'), url('images/journey/2021c.jpeg'), url('images/journey/2021d.jpeg'), url('images/journey/2021e.jpeg'), url('images/journey/2021f.jpeg'), url('images/journey/2021g.jpeg'), url('images/journey/2021h.jpeg'), url('images/journey/2021i.jpeg')]
                        ],
                        [
                            'year' => '2022',
                            'title' => 'A Landmark Moment',
                            'text' => 'From vision to foundation stone. Bhoomi Pooja was performed on 7 August 2022 for the construction of an Integrated Centre for Geriatric and Palliative Care at Gambheeram, Visakhapatnam, on land generously provided by the Free Polio Surgical & Research Foundation. This marked a defining moment in our journey. In the same year, we partnered with Mahatma Gandhi Cancer Hospital & Research Institute to provide comprehensive palliative care services.',
                            'images' => [url('images/journey/2022a.jpeg'), url('images/journey/2022b.jpeg'), url('images/journey/2022c.jpeg'), url('images/journey/2022d.jpeg')]
                        ],
                        [
                            'year' => '2023',
                            'title' => 'Strengthening Holistic Partnerships',
                            'text' => 'Care that sees, understands, and supports. An MoU was signed with L. V. Prasad Eye Institute to provide free eye care to underprivileged senior citizens and residents of old age homes in Visakhapatnam. Collaboration with Dementia India Alliance, Bengaluru further strengthened services for persons living with dementia and their families.',
                            'images' => [url('images/journey/2023a.jpeg'), url('images/journey/2023b.jpeg'), url('images/journey/2023c.jpeg'), url('images/journey/2023d.jpeg')]
                        ],
                        [
                            'year' => '2024',
                            'title' => 'Building a Centre of Excellence',
                            'text' => 'Care with Compassion taking concrete shape. Construction of the Integrated Geriatric and Palliative Care Hospital progressed steadily. The overwhelming support from corporates, institutions, and individuals brought us closer to our vision of establishing a centre of excellence committed to compassionate care.',
                            'images' => [url('images/journey/2024a.jpeg'), url('images/journey/2024b.jpeg'), url('images/journey/2024c.jpeg'), url('images/journey/2024d.jpeg')]
                        ],
                        [
                            'year' => '2025',
                            'title' => 'Care Comes Home',
                            'text' => 'A long-held dream realised. The Integrated Centre for Geriatric and Palliative Care was completed, and clinical services commenced at Gambheeram, Visakhapatnam, to be a unique healthcare facility providing Geriatric and Palliative care services in the state of Andhra Pradesh. In December 2025, Sneha Sandhya Age Care Foundation, in collaboration with GITAM Institute of Medical Sciences and Research, co-hosted DemCon’25, an international conference organised by Dementia India Alliance, Bengaluru—marking yet another milestone in our commitment to care, learning, and leadership in supportive care.',
                            'images' => [url('images/journey/2025a.jpeg'), url('images/journey/2025b.jpeg'), url('images/journey/2025c.jpeg'), url('images/journey/2025d.jpeg'), url('images/journey/2025e.jpeg')]
                        ],
                    ];
                @endphp

                @foreach ($milestones as $milestone)
                    <div class="milestone-entry">
                        <div class="milestone-marker"></div>
                        <div class="milestone-content-block milestone-image-block">
                            <div class="milestone-slideshow">
                                @foreach ($milestone['images'] as $image)
                                    <div><img src="{{ $image }}" alt="Milestone {{ $milestone['year'] }} Image"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="milestone-content-block milestone-text-block">
                            <div class="year">{{ $milestone['year'] }}</div>
                            <div class="title">{{ $milestone['title'] }}</div>
                            <p class="text">{{ $milestone['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- JQuery and Slick Carousel JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        const milestones = document.querySelectorAll('.milestone-entry');

        function checkMilestones() {
            const windowHeight = window.innerHeight;

            milestones.forEach((milestone) => {
                const rect = milestone.getBoundingClientRect();
                if (rect.top < windowHeight * 0.85) { 
                    milestone.classList.add('is-visible');
                }
            });
        }

        window.addEventListener('scroll', checkMilestones);
        checkMilestones();

        // Initialize Slick Carousel
        $('.milestone-slideshow').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>
