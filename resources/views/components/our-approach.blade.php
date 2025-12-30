<section class="our-approach-section py-20" style="background-image: url('{{ url('images/topper/mmm.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold foco sm:text-5xl">Our Approach to Care</h2>
            <p class="mt-4 text-xl text-black">A compassionate and holistic model for senior well-being.</p>
        </div>

        <!-- Holistic Care Approach: Content Left, Carousel Right -->
        <div class="approach-card mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                <div class="bg-white bg-opacity-75 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-black mb-4">Holistic Care Approach</h3>
                    <p class="text-black leading-relaxed">At Sneha Sandhya Age Care Foundation, we believe that caring for the elderly and those with serious or life-limiting illnesses means caring for the whole person, not just the disease. Our holistic approach to geriatric and palliative care addresses physical health, emotional well-being, mental and cognitive needs, social connections, and spiritual concerns.<br><br>Through integrated medical care, rehabilitation, counselling, family support, and compassionate end-of-life care, we strive to relieve suffering, preserve dignity, and enhance quality of life at every stage of ageing and illness.<br><br>By working closely with patients and families, and by seamlessly integrating care across home, community, hospital, and hospice settings, we ensure continuity, comfort, and respect—because every life deserves care that is complete, compassionate, and humane.</p>
                </div>
                <div>
                    <div id="holistic-carousel" class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="carousel-item active"><img src="{{ url('images/approach/1.png') }}" alt="Holistic Care 1" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/approach/2.png') }}" alt="Holistic Care 2" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/approach/3.png') }}" alt="Holistic Care 3" class="absolute inset-0 w-full h-full object-cover"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Family Care Approach: Carousel Left, Content Right -->
        <div class="approach-card mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                <div class="md:order-last bg-white bg-opacity-75 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-black mb-4">Family Care Approach</h3>
                    <p class="text-black leading-relaxed">We recognize that our patient is central to his or her family and the family suffers as much if not more, when a diagnosis of a grave illness is made. Patients because of their serious illness and the heavy symptom burden, many a time lose the ability of carrying out even the activities of their daily living. This imposes tremendous stress and emotional burden on the family members. Hence, we also embrace the family and extend our ‘family care approach’. Our physicians, nurses, counsellors and volunteers actively involve families in care planning and decision-making, while providing education, emotional support, and respite to help them cope with caregiving responsibilities. By supporting caregivers alongside patients, we ensure continuity, dignity, and compassionate care.<br><br>Across home, hospital, hospice, and community settings, we walk alongside families—offering guidance, reassurance, and respect—because caring for families strengthens care for those who matter most.</p>
                </div>
                <div>
                     <div id="family-carousel" class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="carousel-item active"><img src="{{ url('images/approach/4.png') }}" alt="Family Care 1" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/art/art4.JPG') }}" alt="Family Care 2" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/art/art2.JPG') }}" alt="Family Care 3" class="absolute inset-0 w-full h-full object-cover"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Celebrating Life: Content Left, Carousel Right -->
        <div class="approach-card">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                <div class="bg-white bg-opacity-75 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-black mb-4">Celebrating Life</h3>
                    <p class="text-black leading-relaxed">Every life lived is measured not just in years but in the cherished moments gathered. We help our patients and their families to relive these moments and celebrate them even through their last days. Our dedicated volunteers recognize the unfulfilled wishes of our patients and help them realize them, may it be, spending a day playing their favourite board game or an evening walk in the lawns, to cooking their favourite dishes, or engaging them in singing or dancing. We try to add ‘Life to their days.’</p>
                </div>
                <div>
                     <div id="celebrating-carousel" class="relative w-full h-80 bg-gray-200 rounded-lg shadow-lg overflow-hidden">
                        <div class="carousel-item active"><img src="{{ url('images/art/art1.JPG') }}" alt="Celebrating Life 1" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/art/cl1.jpeg') }}" alt="Celebrating Life 2" class="absolute inset-0 w-full h-full object-cover"></div>
                        <div class="carousel-item"><img src="{{ url('images/art/cl2.jpeg') }}" alt="Celebrating Life 3" class="absolute inset-0 w-full h-full object-cover"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function createCarousel(carouselId) {
            const carousel = document.getElementById(carouselId);
            if (!carousel) return;
            const items = carousel.querySelectorAll('.carousel-item');
            let currentItem = 0;

            function showItem(index) {
                items.forEach((item, i) => {
                    item.classList.remove('active');
                    if (i === index) {
                        item.classList.add('active');
                    }
                });
            }

            function nextItem() {
                currentItem = (currentItem + 1) % items.length;
                showItem(currentItem);
            }

            showItem(currentItem);
            setInterval(nextItem, 1500); // Change image every 1.5 seconds
        }

        createCarousel('holistic-carousel');
        createCarousel('family-carousel');
        createCarousel('celebrating-carousel');
    });
</script>
