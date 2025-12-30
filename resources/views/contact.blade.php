@extends('layouts.app')

@section('title', 'Contact Us - Age Care Foundation')

@push('styles')
<style>
    .foco {
        background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
        -webkit-background-clip: text;
        background-clip: text;
        color: blue;
    }
    .support-us-container {
        font-family: 'Figtree', sans-serif;
    }
    .support-us-header {
        text-align: center;
        padding: 4rem 1rem 2rem;
    }
    .support-us-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        display: inline-flex;
        align-items: center;
    }
    .support-us-header h1 .icon {
        font-size: 1.5rem;
        margin: 0 0.5rem;
    }
    .support-us-header p {
        font-size: 1.1rem;
        color: #fff;
        max-width: 600px;
        margin: 0.5rem auto 0;
    }
    .main-content-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        max-width: 1100px;
        margin: 2rem auto;
        padding: 0 1rem;
    }
    @media (min-width: 1024px) {
        .main-content-grid {
            grid-template-columns: 1fr 1fr;
        }
    }
    .contact-info-card {
        background: url('{{ asset('images/background/cont.png') }}') center center/cover no-repeat;
        color: #0a009c;
        padding: 2rem;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 350px;
    }
    .contact-info-card h2 {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .contact-info-card p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
        max-width: 300px;
    }
    .contact-info-card .info-item {
        display: flex;
        align-items: flex-start; /* Changed for better alignment with multi-line text */
        margin-bottom: 1rem;
        font-size: 0.9rem;
    }
    .contact-info-card .info-item svg {
        width: 20px;
        height: 20px;
        margin-right: 0.75rem;
        flex-shrink: 0; /* Prevent icon from shrinking */
        margin-top: 3px; /* Adjust icon position */
    }
    .map-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    .map-card iframe {
        width: 100%;
        height: 100%;
        min-height: 350px;
        border: none;
    }
    .form-card {
        background-color: #ffffff;
        padding: 2.5rem;
        border-radius: 15px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        margin: 3rem auto;
    }

    .form-card h2 {
        color: #1f2937;
        text-align: center;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 2.5rem;
    }
    .form-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    @media (min-width: 768px) {
        .form-grid { grid-template-columns: 1fr 1fr; }
        .form-group.full-width { grid-column: 1 / -1; }
    }
    .form-group input, .form-group textarea {
        width: 100%;
        border: none;
        border-bottom: 1px solid #d2d6dc;
        padding: 0.75rem 0.25rem;
        font-size: 1rem;
        transition: border-color 0.3s;
        background: transparent;
        color: #333;
    }
    .form-group input::placeholder, .form-group textarea::placeholder {
        color: #9ca3af;
    }
    .form-group input:focus, .form-group textarea:focus {
        border-bottom-color: #3b82f6;
        outline: none;
    }
    .submit-btn-container { text-align: center; margin-top: 1.5rem; }
    .submit-btn {
        background: linear-gradient(to right, #3b82f6, #60a5fa);
        color: white;
        padding: 0.8rem 3rem;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .submit-btn:hover { transform: scale(1.05); }
    .txt{
        color: #000000;
    }
</style>
@endpush

@section('content')
<main style="background-image: url('{{ asset('images/topper/mmm.jpg') }}'); background-size: cover; background-position: center; padding-bottom: 3rem;">
    <div class="support-us-container">
        <div class="support-us-header">
            <h1 class="text-3xl font-extrabold text-blue-900 sm:text-4xl tracking-tight">For enquiries, support, or assistance, please reach out to Age Care Foundation</h1>
       </div>

        <div class="main-content-grid">
            <div class="contact-info-card">
                <h2>Contact Us</h2>
                <div class="info-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    <div>
                        <strong>Helpline Nos:</strong><br>
                        <span>+91 89 85 95 2000</span><br>
                        <span>+91 89 85 95 3000</span>
                    </div>
                </div>
                <div class="info-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    <div>
                        <strong>Home Care:</strong><br>
                        <span>+91 85 00 00 5611</span>
                    </div>
                </div>
                <div class="info-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <div>
                        <strong>Regd.Office:</strong><br>
                        <span>#9-41-31/1, Pithapuram Colony,<br>Opp. Maddilapalem Bus Complex<br>Visakhapatnam-530 003</span>
                    </div>
                </div>
                <div class="info-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    <div>
                        <strong>Geriatric & Palliative Care Hospital:</strong><br>
                        <span>Premises No.153 Part<br>IIM-Visakhapatnam Road, Gambheeram,<br>Visakhapatnam-530 052</span>
                    </div>
                </div>
            </div>
            <div class="map-card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1181.9904122546277!2d83.37084447410545!3d17.880038351311505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395974d7ecb56f%3A0xc4115c733eb64220!2sAge%20Care%20Foundation%20-%20Hospital!5e1!3m2!1sen!2sin!4v1764493340813!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div id="contact-form-container" class="form-card max-w-4xl mx-auto">
            <h2>Get In Touch</h2>
            <form id="contact-form" action="#" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group full-width">
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group full-width">
                        <textarea id="message" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                </div>
                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">Send Message</button>
                </div>
            </form>
        </div>
         <div id="contact-success-message" class="hidden text-center p-4 bg-green-100 text-green-800 rounded-lg max-w-4xl mx-auto">
            <svg class="inline-block w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Thanks for contacting us, our team will reach out in 2 working days.
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    // Handle Contact Form Submission
    const contactForm = document.getElementById('contact-form');
    const contactFormContainer = document.getElementById('contact-form-container');
    const contactSuccessMessage = document.getElementById('contact-success-message');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        contactFormContainer.style.display = 'none';
        contactSuccessMessage.style.display = 'block';
    });
</script>
@endpush
