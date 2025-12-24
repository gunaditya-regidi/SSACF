<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & Events - Age Care Foundation</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/images/logos/logo.png') }}" type="image/x-icon"/>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script src="https://cdn.tailwindcss.com"></script>
   
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .foco {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .content-box {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.79), rgba(24, 9, 120, 0.82));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border-radius: 15px;
            color: #fff;
        }
        .blog-section {
            padding: 2rem 1rem;
            margin: 0;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .blog-post-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }

        .blog-post-card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .blog-post-card h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1a202c;
            padding: 1.5rem 1.5rem 0 1.5rem;
        }

        .blog-post-card p {
            font-size: 1rem;
            color: #4a5568;
            line-height: 1.6;
            padding: 1rem 1.5rem;
            flex-grow: 1;
        }
        
        .blog-post-card a {
            display: block;
            padding: 1rem 1.5rem;
            background: #0046d9;
            color: #fff;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .blog-post-card a:hover {
            background-color: #0036a8;
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            main {
                padding: 2rem 1rem;
            }
            .text-center.mb-16 {
                margin-bottom: 4rem;
            }
            .blog-section {
                padding: 2rem 1rem;
                margin: 0;
            }
            .foco {
                font-size: 3rem !important;
            }
            .blog-grid {
                grid-template-columns: 1fr;
            }
            h1.text-4xl.sm:text-6xl {
                font-size: 2.5rem !important;
            }
        }
    </style>
</head>
<body class="font-sans antialiased">

<x-header />

<main>



    @if (!empty($posts))
        <section class="blog-section">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold tracking-tight text-center mb-12 sm:text-5xl" style="color: #000000;">Latest Activities & Events</h1>
                <div class="blog-grid">
                    @foreach ($posts as $post)
                        <article class="blog-post-card">
                            @if($post['image'])
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="blog-post-card-image">
                            @endif
                            <h2>{{ $post['title'] }}</h2>
                            <p>{{ Str::limit(strip_tags($post['content']), 150) }}</p>
                            <a href="{{ route('blog.show', $post['slug']) }}">Learn More</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    
    <x-news-carousel />
</main>

<x-footer />
<div id="pdf-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="relative bg-white rounded-lg shadow-xl w-11/12 md:w-3/4 lg:w-1/2">
        <div class="p-4 border-b">
            <h3 id="pdf-title" class="text-lg font-semibold text-center"></h3>
        </div>
        <div class="p-4">
            <iframe id="pdf-iframe" src="" width="100%" height="500px" frameborder="0"></iframe>
        </div>
        <button id="close-modal-button" class="absolute top-1/2 -right-12 transform -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pdfModal = document.getElementById('pdf-modal');
        const pdfTitle = document.getElementById('pdf-title');
        const pdfIframe = document.getElementById('pdf-iframe');
        const closeModalButton = document.getElementById('close-modal-button');

        document.querySelectorAll('a[data-pdf-src]').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const pdfSrc = this.getAttribute('data-pdf-src');
                const title = this.getAttribute('data-title');
                pdfTitle.textContent = title;
                pdfIframe.setAttribute('src', pdfSrc);
                pdfModal.classList.remove('hidden');
            });
        });

        closeModalButton.addEventListener('click', function () {
            pdfModal.classList.add('hidden');
            pdfIframe.setAttribute('src', '');
        });
    });
</script>

</body>
</html>
