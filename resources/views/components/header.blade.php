<header class="bg-[linear-gradient(145deg,_#231249,_#3a1a63,_#8a2f7c,_#c95c82)]">
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logos/log.png') }}" class="lonav" alt="Age Care Foundation">
            </a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links" id="nav-links">
        <li><a href="{{ url('/') }}" class="nav-item">Home</a></li>
            <li class="dropdown">
                <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about', 'our-team', 'our-journey') ? 'active' : '' }}">About Us <span class="dropdown-caret">▼</span></a>
                <div class="dropdown-content">
                <a href="{{ route('our-facilities') }}">Our Facility</a> 
                    <a href="{{ route('our-team') }}">Our Team</a>
                   <a href="{{ route('our-journey') }}">Our Journey</a>
                </div>
            </li>
             <li class="dropdown">
                <a href="{{ route('services') }}" class="nav-item {{ request()->routeIs('services', 'palliative-care', 'geriatric-care', 'dementia-care', 'transitional-care', 'respite-care', 'rehabilitative-care', 'hospice-care', 'home-care', 'outreach-geriatric-care', 'advocacy-and-training') ? 'active' : '' }}">Our Services <span class="dropdown-caret">▼</span></a>
                {{-- This is the dropdown that will now be two columns --}}
                <div class="dropdown-content services-dropdown">
                    <a href="{{ route('palliative-care') }}">Palliative Care</a>
                    <a href="{{ route('geriatric-care') }}">Geriatric Care</a>
                    <a href="{{ route('dementia-care') }}">Dementia Care</a>
                    <a href="{{ route('transitional-care') }}">Transitional Care</a>
                    <a href="{{ route('respite-care') }}">Respite Care</a>
                    <a href="{{ route('rehabilitative-care') }}">Rehabilitative Care</a>
                    <a href="{{ route('hospice-care') }}">Hospice Care</a>
                    <a href="{{ route('home-care') }}">Home Care</a>
                    <a href="{{ route('outreach-geriatric-care') }}">Outreach Geriatric Care</a>
                    <a href="{{ route('advocacy-and-training') }}">Advocacy & Training</a>
                </div>
            </li>
            <li><a href="{{ route('our-approach') }}" class="nav-item {{ request()->routeIs('our-approach') ? 'active' : '' }}">Our Approach</a></li>
            <li><a href="{{ route('gallery') }}" class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
            <li><a href="{{ route('news-and-events') }}" class="nav-item {{ request()->routeIs('blog', 'blog.show') ? 'active' : '' }}">Resources</a></li>
            <li><a href="{{ route('contact') }}" class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
            <li><a href="{{ route('support-us') }}" class="nav-cta">Support Us</a></li>
        </ul>
    </nav>
</header>

<script>
$(document).ready(function() {
    const $mobileMenu = $('#mobile-menu');
    const $navLinks = $('#nav-links');
    const $dropdowns = $('.dropdown');

    // Toggle mobile menu
    $mobileMenu.on('click', function() {
        $navLinks.toggleClass('active');
        // Close any open dropdowns when closing the main menu
        if (!$navLinks.hasClass('active')) {
            $dropdowns.removeClass('open');
        }
    });

    // Handle dropdown behavior
    $dropdowns.each(function() {
        const $this = $(this);
        const $link = $this.children('a');

        $link.on('click', function(e) {
            // Check if we are in mobile view
            if (window.matchMedia('(max-width: 768px)').matches) {
                // If the dropdown is already open, let the link work
                if ($this.hasClass('open')) {
                    return;
                }
                // Otherwise, prevent default, close others, and open this one
                e.preventDefault();
                $dropdowns.removeClass('open');
                $this.addClass('open');
            }
        });

        // On desktop, we still want hover behavior, so we disable mobile clicks
        $this.on('mouseenter', function() {
            if (!window.matchMedia('(max-width: 768px)').matches) {
                $dropdowns.removeClass('open');
                $(this).addClass('open');
            }
        }).on('mouseleave', function() {
            if (!window.matchMedia('(max-width: 768px)').matches) {
                $(this).removeClass('open');
            }
        });
    });

    // Close mobile menu when clicking outside of it
    $(document).on('click', function(e) {
        if ($navLinks.hasClass('active') && !$navLinks.is(e.target) && $navLinks.has(e.target).length === 0 && !$mobileMenu.is(e.target) && $mobileMenu.has(e.target).length === 0) {
            $navLinks.removeClass('active');
            $dropdowns.removeClass('open');
        }
    });
});
</script>
