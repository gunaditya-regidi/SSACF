{{-- resources/views/components/.blade.php --}}
<section class="">
    <div class="-overlay"></div>
    
    <!-- Floating Image Decorations -->
    <div class="floating-decorations">
        <div class="float-card float-card-1">
            <div class="card-shape shape-circle">
                <span class="diamond-accent"></span>
            </div>
            <img src="{{ url('images/icons/community.png') }}">
        </div>
        
        <div class="float-card float-card-2">
            <div class="card-shape shape-hexagon"></div>
            <img src="{{ url('images/icons/compassion.png') }}">
        </div>
        
        <div class="float-card float-card-3">
            <div class="card-shape shape-diamond">
                <span class="diamond-accent"></span>
            </div>
            <img src="{{ url('images/icons/dignity.png') }}" alt="Smiling elder">
        </div>
        
        <div class="float-card float-card-4">
            <div class="card-shape shape-rounded"></div>
            <img src="{{ url('images/icons/empowerment.png') }}" alt="Community event">
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="-content">
        <div class="container">
            <div class="content-wrapper">
                <!-- Highlight Badge -->
                <div class="highlight-badge" data-aos="fade-down">
                    <span class="badge-text">Integrated Center for Geriatric and Palliative Care</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="-heading" data-aos="fade-up" data-aos-delay="200">
                    Sneha Sandhya</br>AGE CARE FOUNDATION
                </h1>
                
                <!-- Description -->
                <div class="-description" data-aos="fade-up" data-aos-delay="400">
                    <p>
                        Sneha Sandhya Age Care Foundation is a registered charitable trust providing quality 
                        <strong>Geriatric, Palliative, and Dementia care</strong> to </br> underprivileged elders 
                        & individuals suffering from life-limiting illnesses. </br>
                        Based in India & Accessible to communities everywhere.
                    </p>
                </div>
                
                <!-- Call to Action Buttons -->
                <div class="-cta" data-aos="fade-up" data-aos-delay="600">
                    <a href="{{ route('about') }}" class="cta-btn cta-primary">
                        Learn About Us
                    </a>
                    <a href="{{ route('contact') }}" class="cta-btn cta-secondary">
                        Get in Touch
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="trust-indicators" data-aos="fade-up" data-aos-delay="800">
                    <div class="trust-item">
                        <div class="trust-number count-up" data-target="500">0+</div>
                        <div class="trust-label">Elders Served</div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-number count-up" data-target="13">0+</div>
                        <div class="trust-label">Years of Service</div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-number count-up" data-target="100">0+</div>
                        <div class="trust-label">Active Volunteers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
