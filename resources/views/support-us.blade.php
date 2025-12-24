<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Support Us - Age Care Foundation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon"/>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .foco {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .approach-card {
            background: linear-gradient(135deg, #016aba, #002379);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            color: #fff;
            padding: 2rem;
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
            color: #000;
            max-width: 600px;
            margin: 0.5rem auto 0;
        }
        .get-involved-section {
            max-width: 1100px;
            margin: 4rem auto;
        }
        .cards-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        @media (min-width: 768px) {
            .cards-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        .involved-card .card-icon {
            font-size: 40px;
            margin: 0 auto 1.5rem;
        }
        .involved-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        .involved-card p {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            min-height: 50px;
        }
        
        .involved-card .card-btn {
            display: inline-block;
            color: white;
            padding: 0.6rem 2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: transform 0.2s;
            cursor: pointer;
        }
        .involved-card .card-btn:hover {
            transform: scale(1.05);
        }
        .btn-volunteer { background: linear-gradient(to right, #3b82f6, #60a5fa); }
        .btn-donate { background: linear-gradient(to right, #8b5cf6, #a78bfa); }
        .btn-partner { background: linear-gradient(to right, #ec4899, #f472b6); }

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

        .support-details-section h2 {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 2.5rem;
        }
        
        .payment-method h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .payment-method p {
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }
       
        .tax-benefits-section {
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 3rem;
        }
        .tax-benefits-section h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        .tax-benefits-section p {
            font-size: 0.95rem;
        }
        .pad{
            padding: 6rem 2rem;
        }
        
        /* Modal Styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 700px;
            border-radius: 10px;
            position: relative;
        }
        
        .modal-content-pdf {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 900px;
            height: 80vh;
            border-radius: 10px;
            position: relative;
        }

        .close-btn {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .qr-code-container img {
            height: 150px;
            width: auto;
            margin: 1rem auto 0;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <x-header />

    <main style="background-image: url('/images/topper/mmm.jpg'); background-size: cover; background-position: center; padding-bottom: 3rem;">
        <div class="support-us-container">
            <div class="support-us-header">
                <h1 class="foco">Support Sneha Sandhya<span class="icon">❤️</span>Age Care Foundation</h1>
                <p>Your contribution can make a significant impact on the lives of seniors. Discover how you can help.</p>
            </div>

            <div class="pad">
                <div class="cards-container">
                    <div class="approach-card involved-card text-center">
                        <i class="fas fa-hands-helping card-icon"></i>
                        <h3 class="text-white">Volunteer With Us</h3>
                        <p class="text-white">Your time and skills can make a huge difference in the lives of our seniors. Join our dedicated team.</p>
                        <a id="volunteer-btn" class="card-btn btn-volunteer">Apply Now</a>
                    </div>
                    <div class="approach-card involved-card text-center">
                        <i class="fas fa-hand-holding-heart card-icon"></i>
                        <h3 class="text-white">Donate To Our Cause</h3>
                        <p class="text-white">Every contribution helps us provide essential care and create a nurturing, safe environment for residents.</p>
                        <a href="#donation-section" class="card-btn btn-donate">Donate Now</a>
                    </div>
                    <div class="approach-card involved-card text-center">
                        <i class="fas fa-handshake card-icon"></i>
                        <h3 class="text-white">Become a Sustaining Member</h3>
                        <p class="text-white">We collaborate with organizations to enhance our services. Let's work together for a better future.</p>
                        <a id="partner-btn" class="card-btn btn-partner">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Donation Section -->
            <div id="donation-section" class="form-card max-w-6xl mx-auto">
                <h2 class="text-black">Make a Donation</h2>
                <p class="text-center text-gray-600 mb-8">After donating, please fill out the remittance form for our records and future communications.</p>
                <div id="donation-form-container" class="grid md:grid-cols-2 gap-12">
                    <!-- Left Side: Donor Remittance Form -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Donor Remittance Form</h3>
                        <form id="donation-form" action="#" method="POST">
                            <div class="form-grid">
                                <div class="form-group">
                                    <input type="email" id="donor-email" name="donor-email" placeholder="Email *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="donor-name" name="donor-name" placeholder="Name *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="donor-address" name="donor-address" placeholder="Address (Optional)">
                                </div>
                                 <div class="form-group">
                                    <input type="text" id="donor-pan" name="donor-pan" placeholder="PAN NUMBER *" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" id="donor-phone" name="donor-phone" placeholder="Mobile Number *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="transaction-id" name="transaction-id" placeholder="Remittance Ref. No / Transaction ID *" required>
                                </div>
                                 <div class="form-group">
                                    <input type="text" id="donor-amount" name="donor-amount" placeholder="Donation Amount Rs. *" required>
                                </div>
                            </div>
                            <div class="submit-btn-container">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Right Side: Donation Details -->
                    <div class="approach-card p-6">
                        <h3 class="text-white text-xl font-semibold mb-4">Donation Details</h3>
                        <p class="text-sm">Donations may be remitted by RTGS/NEFT/IMPS</p>
                        <div class="payment-method mt-4">
                            <img src="{{ asset('images/services/kvb.png') }}" alt="Karur Vysya Bank Logo" class="h-12 mb-2">
                            <h3 class="text-white">Favoring: Sneha Sandhya Age Care Foundation</h3>
                            <p><strong>Account No:</strong> 4842135000003091</p>
                            <p><strong>IFSC Code:</strong> KVBL0004842</p>
                            <p><strong>Bank:</strong> Karur Vysya Bank, Seethammadhara Branch</p>
                            <p>Visakhapatnam-530013</p>
                            <p>Andhra Pradesh, India</p>
                        </div>
                        <div class="payment-method mt-6">
                            <img src="{{ asset('images/services/sbi.jpg') }}" alt="SBI Logo" class="h-12 mb-2">
                             <p><strong>OR</strong></p>
                            <p><strong>Account No:</strong> 37707311727</p>
                            <p><strong>IFSC Code:</strong> SBIN0015380</p>
                            <p><strong>Bank:</strong> State Bank of India, Kohinoor-Visakha Branch</p>
                            <p>Pandurangapuram, Visakhapatnam-530003</p>
                            <p>Andhra Pradesh, India</p>
                        </div>
                        <div class="payment-method mt-6">
                            <p>Demand Draft or Cheque may be drawn in favour of:</p>
                            <p><strong>Sneha Sandhya Age Care Foundation</strong></p>
                        </div>
                        <div class="qr-code-container text-center">
                            <p class="text-white">Please pay through the QR below.</p>
                            <img src="{{ asset('images/services/qr.jpg') }}" alt="Donation QR Code">
                        </div>
                         <div class="tax-benefits-section">
                            <h3 class="text-white">Tax Benefits</h3>
                            <p>Donations to Sneha Sandhya Age Care Foundation are eligible for tax exemption under Section 80G and 12A of the Income Tax Act. Tax exemption certificates will be provided for all donations.</p>
                        </div>
                    </div>
                </div>
                 <div id="donation-success-message" class="hidden text-center p-4 bg-green-100 text-green-800 rounded-lg">
                    <svg class="inline-block w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Thanks for the donation, you will receive a email confirmation shortly.
                </div>
            </div>

        </div>
    </main>
    
    <!-- Volunteer Modal -->
    <div id="volunteer-modal" class="modal">
        <div class="modal-content">
            <span id="close-volunteer" class="close-btn">&times;</span>
            <div id="volunteer-form-container" >
                <h2 class="text-black">Become a Volunteer</h2>
                <form id="volunteer-form" action="#" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>
                         <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="interest" name="interest" placeholder="Area of Interest (e.g., companionship, activities)" required>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="skills" name="skills" rows="5" placeholder="Tell us about your skills & availability" required></textarea>
                        </div>
                    </div>
                    <div class="submit-btn-container">
                        <button type="submit" class="submit-btn">Submit Application</button>
                    </div>
                </form>
            </div>
            <div id="volunteer-success-message" class="hidden text-center p-4 bg-green-100 text-green-800 rounded-lg">
                 <svg class="inline-block w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Thanks for your Interest in becoming a volunteer we will get back to you in 2 Working days.
            </div>
        </div>
    </div>

    <!-- Partner Modal -->
    <div id="partner-modal" class="modal">
        <div class="modal-content-pdf">
            <span id="close-partner" class="close-btn">&times;</span>
            <iframe src="{{ asset('acfdata/sustain.pdf') }}" width="100%" height="100%" style="border:none;"></iframe>
        </div>
    </div>


    <x-footer />

    <script>
        // Get modals
        var volunteerModal = document.getElementById("volunteer-modal");
        var partnerModal = document.getElementById("partner-modal");

        // Get buttons that open the modals
        var volunteerBtn = document.getElementById("volunteer-btn");
        var partnerBtn = document.getElementById("partner-btn");

        // Get the <span> elements that close the modals
        var closeVolunteer = document.getElementById("close-volunteer");
        var closePartner = document.getElementById("close-partner");

        // When the user clicks the button, open the modal 
        volunteerBtn.onclick = function() {
            volunteerModal.style.display = "block";
        }
        partnerBtn.onclick = function() {
            partnerModal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeVolunteer.onclick = function() {
            volunteerModal.style.display = "none";
        }
        closePartner.onclick = function() {
            partnerModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == volunteerModal) {
                volunteerModal.style.display = "none";
            }
            if (event.target == partnerModal) {
                partnerModal.style.display = "none";
            }
        }

        // Handle Volunteer Form Submission
        const volunteerForm = document.getElementById('volunteer-form');
        const volunteerFormContainer = document.getElementById('volunteer-form-container');
        const volunteerSuccessMessage = document.getElementById('volunteer-success-message');

        volunteerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            volunteerFormContainer.style.display = 'none';
            volunteerSuccessMessage.style.display = 'block';
        });

        // Handle Donation Form Submission
        const donationForm = document.getElementById('donation-form');
        const donationFormContainer = document.getElementById('donation-form-container');
        const donationSuccessMessage = document.getElementById('donation-success-message');

        donationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            donationFormContainer.style.display = 'none';
            donationSuccessMessage.style.display = 'block';
        });
    </script>
</body>
</html>
