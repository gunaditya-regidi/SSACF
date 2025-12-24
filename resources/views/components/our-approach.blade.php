<style>
    .foco {
        background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    .approach-card {
        background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        padding: 2rem;
        border-radius: 15px;
        color: #fff;
    }
</style>

<section class="our-approach-section py-20" style="background-image: url('{{ url('images/topper/mmm.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold foco sm:text-5xl">Our Approach to Care</h2>
            <p class="mt-4 text-xl text-black">A compassionate and holistic model for senior well-being.</p>
        </div>

        <!-- Holistic Care Approach -->
        <div class="approach-card mb-12">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-white mb-4">Holistic Care Approach</h3>
                    <p class="text-white leading-relaxed">We believe our patient is a unique whole person with individual needs and we regard the illness as a suffering and not just a disease with symptoms and signs. We adopt a holistic care approach where in we address the physical, psychological, social and spiritual concerns and needs of our patients. While medical therapies remain critical, we use alternative therapies like art therapy, music therapy, relaxation therapy, yoga and meditation, built into the daily routines of our patients.

All this is made possible by our extended support team as well as by a thriving community of committed volunteers.</p>
                </div>
                <div class="md:w-1/2">
                    <div class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden slider" data-slider-id="holistic-care">
                        <div class="slider-track">
                        <div class="slide"><img src="{{ url('images/art/art4.JPG') }}" alt="Celebrating Life 1" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art3.JPG') }}" alt="Celebrating Life 2" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art2.JPG') }}" alt="Celebrating Life 3" class="absolute inset-0 w-full h-full object-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Family Care Approach -->
        <div class="approach-card mb-12">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-white mb-4">Family Care Approach</h3>
                    <p class="text-white leading-relaxed">We recognize that our patient is central to his or her family and the family suffers as much if not more, when a diagnosis of a grave illness is made. Patients because of their serious illness and the heavy symptom burden, many a time lose the ability of carrying out even the activities of their daily living. This imposes tremendous stress and emotional burden on the family members. Hence we also embrace the family and extend our ‘family care approach’. Our physicians, nurses, counsellors and volunteers engage with the family and extend physical, emotional and social support to them.

We train family members to give them the confidence and skills to look after their loved ones when they leave our facility and go back home.

In addition, the family members are extended the much needed bereavement counselling, when the tragedy strikes them.</p>
                </div>
                <div class="md:w-1/2">
                     <div class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden slider" data-slider-id="family-care">
                        <div class="slider-track">
                        <div class="slide"><img src="{{ url('images/art/art1.JPG') }}" alt="Celebrating Life 1" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art4.JPG') }}" alt="Celebrating Life 2" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art2.JPG') }}" alt="Celebrating Life 3" class="absolute inset-0 w-full h-full object-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Celebrating Life -->
        <div class="approach-card">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-white mb-4">Celebrating Life</h3>
                    <p class="text-white leading-relaxed">Every life lived is measured not just in years but in the cherished moments gathered. We help our patients and their families to relive these moments and celebrate them even through their last days. Our dedicated volunteers recognize the unfulfilled wishes of our patients and help them realize them, may it be, spending a day with their favorite celebrity or a beach ride, to cooking their favorite dishes, or engaging them in anything and everything they wish for. We try to add ‘Life to their days.’</p>
                </div>
                <div class="md:w-1/2">
                     <div class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden slider" data-slider-id="celebrating-life">
                        <div class="slider-track">
                            <div class="slide"><img src="{{ url('images/art/art1.JPG') }}" alt="Celebrating Life 1" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art3.JPG') }}" alt="Celebrating Life 2" class="absolute inset-0 w-full h-full object-cover"></div>
                            <div class="slide"><img src="{{ url('images/art/art2.JPG') }}" alt="Celebrating Life 3" class="absolute inset-0 w-full h-full object-cover"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
