
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
        stroke: #e2e8f0;
        stroke-width: 15;
        stroke-dasharray: 3000;
        stroke-dashoffset: 3000;
        animation: draw-path 5s ease-in-out forwards;
    }

    @keyframes draw-path {
        to {
            stroke-dashoffset: 0;
        }
    }

    .milestone {
        position: absolute;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .milestone.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .milestone-content {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: left;
        overflow: hidden; /* Ensure image corners are rounded */
    }
    
    .milestone-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .milestone-text-content {
        padding: 20px;
    }

    .milestone-year {
        font-size: 1.5rem;
        font-weight: bold;
        color: #4a90e2;
        margin-bottom: 10px;
    }

    .milestone-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #334155;
    }
    
</style>

<div class="relative bg-cover bg-center py-24" {{-- style="background-image: url('{{ url('images/topper/peeps.jpg') }}');" --}}>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto text-center relative">
        <h1 class="text-4xl font-bold text-white tracking-wider">Our Journey</h1>
        <p class="text-lg text-white mt-4">From Humble Beginnings to a Beacon of Hope</p>
    </div>
</div>

<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">A Timeline of Compassion and Care</h2>
            <p class="text-gray-600 mt-2">We began our humble journey in 2012, taking small steps and forging many partnerships all along.</p>
        </div>

        <div class="journey-container mb-20">
            <svg width="100%" height="3100" viewBox="0 0 800 3100">
                <path class="journey-path" d="M 400 50 C 600 150, 200 250, 400 350 C 600 450, 200 550, 400 650 C 600 750, 200 850, 400 950 C 600 1050, 200 1150, 400 1250 C 600 1350, 200 1450, 400 1550 C 600 1650, 200 1750, 400 1850 C 600 1950, 200 2050, 400 2150 C 600 2250, 200 2350, 400 2450 C 600 2550, 200 2650, 400 2750 C 600 2850, 200 2950, 400 3050" />
            </svg>

            <x-milestone year="2012" image="{{ url('images/background/bgimg2.jpg') }}" top="50px" left="50%" transform="translateX(-150%)">
                Age Care Foundation was established as a charitable trust on 24th August 2012.
            </x-milestone>

            <x-milestone year="2013" image="{{ url('images/background/bgimg3.jpg') }}" top="350px" left="50%" transform="translateX(50%)">
                Further expanded our outreach services by adding more out-patient clinics and old age homes.
            </x-milestone>

            <x-milestone year="2014" image="{{ url('images/background/bgimg4.jpg') }}" top="650px" left="50%" transform="translateX(-150%)">
                The center for Palliative and Supportive care moved into the main building of St.Joseph's Hospital.
            </x-milestone>
            
            <x-milestone year="2015" image="{{ url('images/background/bgimg5.jpg') }}" top="950px" left="50%" transform="translateX(50%)">
                The outreach medical camps were further expanded to interior places like Chodavaram.
            </x-milestone>
            
            <x-milestone year="2017" image="{{ url('images/background/greenwv.jpg') }}" top="1250px" left="50%" transform="translateX(-150%)">
                Mrs.Poonam Malakondaiah, visited the hospice. Age Care Foundation moved into the new office premises.
            </x-milestone>
            
            <x-milestone year="2019" image="{{ url('images/topper/mmm.jpg') }}" top="1550px" left="50%" transform="translateX(50%)">
                Dr.M.R.Raja Gopal, Chairman, Pallium India (Trust) was the guest of honour on the Seventh Foundation day of ACF.
            </x-milestone>
            
            <x-milestone year="2020" image="{{ url('images/background/bgimg1.jpg') }}" top="1850px" left="50%" transform="translateX(-150%)">
                Launched home health care services for the benefit of persons with Dementia (PwD).
            </x-milestone>
            
            <x-milestone year="2021" image="{{ url('images/art/art1.JPG') }}" top="2150px" left="50%" transform="translateX(50%)">
                Entered into MOU with GVP Institute of Healthcare & Medical Technology and relocated the Hospice.
            </x-milestone>
            
            <x-milestone year="2022" image="{{ url('images/art/art2.JPG') }}" top="2450px" left="50%" transform="translateX(-150%)">
                Bhoomipooja performed for construction of the integrated center for Geriatric and Palliative Care.
            </x-milestone>
            
            <x-milestone year="2023" image="{{ url('images/art/art3.JPG') }}" top="2750px" left="50%" transform="translateX(50%)">
                Joined hands with Mahatma Gandhi Cancer Hospital & Research Institute and L.V.Prasad Eye Institute.
            </x-milestone>

            <x-milestone year="2024" image="{{ url('images/art/art4.JPG') }}" top="3050px" left="50%" transform="translateX(-150%)">
                Launched a new initiative to provide free meals to seniors in need.
            </x-milestone>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const milestones = document.querySelectorAll('.milestone');

        function showMilestones() {
            milestones.forEach(milestone => {
                if (isElementInViewport(milestone)) {
                    milestone.classList.add('is-visible');
                }
            });
        }

        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Modified to handle multiple milestones in view on load
        function checkAllMilestones() {
            let delay = 0;
            milestones.forEach((milestone, index) => {
                // Check if the element is in the viewport
                const rect = milestone.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    setTimeout(() => {
                        milestone.classList.add('is-visible');
                    }, delay);
                    delay += 200; // Stagger the animation
                }
            });
        }

        window.addEventListener('scroll', checkAllMilestones);
        checkAllMilestones(); // Initial check
    });
</script>
