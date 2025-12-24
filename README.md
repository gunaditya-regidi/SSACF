# Sneha Sandhya Age Care Foundation Website

## Overview

This project is to create a compelling and professional website for the Sneha Sandhya Age Care Foundation, a Registered Charitable Trust established in 2012. The website will serve as the central digital hub for the foundation, clearly communicating its mission, services, impact, and core values to attract donors, recruit volunteers, and provide essential information to the community.

## Mission

To provide high-quality Geriatric, Palliative, and Dementia care to underprivileged elders and individuals suffering from life-limiting illnesses. The foundation is dedicated to delivering care that improves the quality of life, ensuring every individual is treated with dignity and respect.

## Services

The foundation provides a comprehensive range of services, including:

*   **Geriatric & Dementia Care:** Specialized care for the elderly, including those with dementia.
*   **Palliative Care:** In-patient and outreach services to lessen the pain and suffering of those with life-limiting illnesses like cancer.
*   **Outreach Programs:** Delivering care directly to elders in the community and in old age homes.
*   **Community Participation:** Engaging a large group of committed and trained volunteers.
*   **Capacity Building:** Educating, training, and promoting similar services through advocacy and partnerships.

## Core Values

The foundation operates on a set of core values that guide every aspect of its work:

*   **Patient First:** The patient and their family are the top priority.
*   **Compassion:** Operating with compassion in all dealings.
*   **Community:** Building strong, lasting partnerships.
*   **Empowerment:** Providing information and resources to help individuals advocate for themselves.
*   **Equity:** Paying careful attention to and addressing disparities in healthcare.
*   **Integrity:** Conducting all work with honesty, dependability, and humility.
*   **Dignity:** Treating every individual with respect.
*   **Quality and Excellence:** Continuously improving the quality of services for all.
*   **Sustainability:** Keeping sustainability and environmental protection in mind.

## Design & Features

The design will be professional, compassionate, and trustworthy, using a clean layout and a color palette that inspires confidence (e.g., blues, whites, and warm grays).

*   **Splash Screen:**
    *   A full-screen splash screen with a fade-in logo of two hands meeting.
    *   The splash screen gracefully fades out to reveal the main website.
*   **Header:**
    *   **Logo & Name:** Prominently feature the "Sneha Sandhya Age Care Foundation" name and a "two hands meeting" logo. The logo is significantly larger for better visibility.
    *   **Navigation:** "About Us" (dropdown), "Our Approach", "Our Services" (dropdown), "Gallery", "News and Events", "Contact Us".
    *   **Primary CTA:** A clear and accessible "Support Us" button.
    *   **Favicon:** The "two hands meeting" logo is used as the browser tab icon.
*   **Hero Section:**
    *   **Headline:** A powerful, mission-oriented headline, such as "Dignity, Comfort, and Compassionate Care for Every Senior."
    *   **Subheading:** A summary of the foundation's mission.
    *   **Visuals:** Emotive and authentic imagery of seniors and caregivers.
*   **Our Services Section:**
    *   A dedicated section with a three-column layout to showcase the core services: Palliative Care, Geriatric Care, and Dementia Care.
    *   Each service is presented in a card with a unique SVG icon, title, description, and a "Learn More" link.
*   **Core Values Section:**
    *   A section to highlight the foundation's guiding principles.
    *   A nine-column grid layout to display each of the nine core values.
    *   Each value is presented in a card with a unique SVG icon and title.
*   **Get Involved Section:**
    *   A section with a three-column layout to showcase how users can get involved: Donate, Volunteer, and Partner.
    *   Each call-to-action is presented in a card with a unique SVG icon, title, description, and a clear button.
*   **Interactive Elements:**
    *   Buttons and interactive elements feature a "glow" effect on hover to provide visual feedback and a modern feel.
*   **Footer:**
    *   A comprehensive footer with quick links, contact information, and social media icons.

## Completed Tasks

### Implement "Our Services" Section

1.  **Create Blade Components:** Created `our-services.blade.php` and `service-card.blade.php` for a modular and maintainable structure.
2.  **Add to Homepage:** Integrated the `<x-our-services />` component into the `welcome.blade.php` file.
3.  **Style Service Cards:** Added custom styles to `resources/css/app.css` for a visually appealing three-column layout with hover effects.
4.  **Add Placeholder Icons:** Created empty icon files in `public/images/icons` for each service.
5.  **Update `blueprint.md`:** Documented the new "Our Services" section.

### Implement "Core Values" Section

1.  **Create Blade Components:** Created `core-values.blade.php` and `value-card.blade.php` for a modular and maintainable structure.
2.  **Add to Homepage:** Integrated the `<x-core-values />` component into the `welcome.blade.php` file.
3.  **Style Value Cards:** Added custom styles to `resources/css/app.css` for a visually appealing nine-column layout with hover effects.
4.  **Add Placeholder Icons:** Created empty icon files in `public/images/icons` for each core value.
5.  **Update `blueprint.md`:** Documented the new "Core Values" section.

### Implement "Get Involved" Section

1.  **Create Blade Components:** Created `get-involved.blade.php` and `cta-card.blade.php` for a modular and maintainable structure.
2.  **Add to Homepage:** Integrated the `<x-get-involved />` component into the `welcome.blade.php` file.
3.  **Style CTA Cards:** Added custom styles to `resources/css/app.css` for a visually appealing three-column layout with hover effects.
4.  **Add Placeholder Icons:** Created empty icon files in `public/images/icons` for each call-to-action.
5.  **Update `blueprint.md`:** Documented the new "Get Involved" section.

### Icon & Styling Polish

1.  **Replace Placeholders with SVGs:** Replaced all placeholder `.png` icons with SVG icons for better scalability and performance.
2.  **Standardize Icon Styles:** Applied consistent sizing and color to all icons directly within the Blade components for uniformity.
3.  **Add "Glow" Effect:** Enhanced user interaction by adding a "glow" effect to buttons on hover using CSS box-shadow properties.
4.  **Update `blueprint.md`:** Documented the icon and styling enhancements.

### Fix Missing Footer

1.  **Create Footer Component:** Created a `footer.blade.php` file in `resources/views/components` to define the site's footer.
2.  **Include in Layout:** Ensured the `<x-footer />` component is included in the main `welcome.blade.php` layout file.
3.  **Style Footer:** Confirmed that the necessary footer styles were already present in `resources/css/app.css`.
4.  **Update `blueprint.md`:** Documented the fix for the missing footer.
