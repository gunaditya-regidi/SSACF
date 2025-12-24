import './bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// Import Slick Carousel
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import 'slick-carousel';

$(document).ready(function(){
    // Splash Screen
    setTimeout(function () {
        const splashScreen = document.getElementById('splash-screen');
        if (splashScreen) {
            $(splashScreen).fadeOut(800, function() {
                $(this).addClass('hidden');
            });
        }
    }, 4000);

    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');
    if (mobileMenu && navLinks) {
        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
    }

    // Dropdown Toggle for Mobile
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const dropdownToggle = dropdown.querySelector('a');
        if (dropdownToggle) {
            dropdownToggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 768 && dropdown.querySelector('.dropdown-content')) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        }
    });

    // Our Services Tabs
    $('.tab-button').on('click', function() {
        var tabName = $(this).data('tab');
        $('.tab-content').hide();
        $('.tab-button').removeClass('active');
        $('#' + tabName).show();
        $(this).addClass('active');
    });

    if ($('.tab-button').length) {
        $('.tab-button:first').click();
    }

    // Image Carousel
    if ($('.image-carousel').length > 0) {
        $('.image-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    // Newsletter Carousel
    if ($('.newsletter-carousel').length > 0) {
        $('.newsletter-carousel').slick({
            slidesToShow: 10,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: false,
            infinite: true,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 8
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 6
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    }

    // Lightbox with description
    if ($('.image-carousel img').length > 0) {
        const lightbox = $('<div id="lightbox"></div>');
        const lightboxContent = $('<div class="lightbox-content"></div>');
        const lightboxImg = $('<img>');
        const lightboxDescription = $('<p></p>');
        const close = $('<span>&times;</span>');

        lightbox.append(close);
        lightboxContent.append(lightboxImg).append(lightboxDescription);
        lightbox.append(lightboxContent);
        $('body').append(lightbox);

        $('.image-carousel img').click(function(){
            const src = $(this).attr('src');
            const description = $(this).data('description');
            lightboxImg.attr('src', src);
            lightboxDescription.text(description);
            lightbox.fadeIn();
        });

        close.click(function(){
            lightbox.fadeOut();
        });

        lightbox.click(function(e){
            if(e.target.id === 'lightbox'){
                lightbox.fadeOut();
            }
        });
    }

    // PDF Modal for Newsletters
    const pdfModal = $('#pdf-modal');
    const pdfIframe = $('#pdf-iframe');
    const pdfTitle = $('#pdf-title');
    const closeModalButton = $('#close-modal-button');

    $(document).on('click', '.open-modal-button', function(e) {
        e.preventDefault();
        const url = $(this).data('url');
        const title = $(this).data('title');
        
        pdfIframe.attr('src', url);
        pdfTitle.text(title);
        pdfModal.removeClass('hidden');
    });

    function closeModal() {
        pdfModal.addClass('hidden');
        pdfIframe.attr('src', ''); // Stop PDF loading
    }

    closeModalButton.on('click', closeModal);
    pdfModal.on('click', function(e) {
        if (e.target.id === 'pdf-modal') {
            closeModal();
        }
    });
});
