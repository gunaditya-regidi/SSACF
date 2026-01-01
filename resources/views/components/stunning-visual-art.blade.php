<section class="art-showcase">
   <video autoplay muted loop class="art-background-video">
        <source src="{{ asset('images/video/bgvideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video> 
    <div class="art-content">
        <h1 class="art-subheadline">Welcome To</h1>
        <h1 class="art-subheadline1">Sneha Sandhya</h1>
        <h1 class="art-subheadline2">AGE CARE FOUNDATION</h1>
        <div class="art-headline-wrapper">
            <h2 class="art-headline">
                <span>&#10022;</span> Where Care Comes First <span>&#10022;</span>
            </h2>
        </div>
        <div class="art-buttons">
            <a href="#" class="btn-upload-more">Our Services</a>
            <a href="#" class="btn-view-gallery">More Info &rarr;</a>
        </div>
    </div>
</section>

<section class="art-showcase-mobile">
    <video autoplay muted loop class="art-video-mobile">
        <source src="{{ asset('images/video/bgvideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="art-content-mobile">
        <h1 class="art-subheadline">Welcome To</h1>
        <h1 class="art-subheadline1">Sneha Sandhya</h1>
        <h1 class="art-subheadline2">AGE CARE FOUNDATION</h1>
        <div class="art-headline-wrapper">
            <h2 class="art-headline">
                <span>&#10022;</span> Where Care Comes First <span>&#10022;</span>
            </h2>
        </div>
        <div class="art-buttons">
            <a href="{{ route('services') }}" class="btn-upload-more">Our Services</a>
            <a href="{{ route('about') }}" class="btn-view-gallery">More Info &rarr;</a>
        </div>
    </div>
</section>
