
# Blueprint

## Overview

This project is a full-stack web application for Sneha Sandhya Age Care Foundation, built with Laravel. The application provides information about the foundation's services, mission, and team. It also includes a blog, a gallery, and a donation page.

## Design and Features

*   **Homepage:** A visually appealing homepage with a video background, information about services, and a call to action for donations.
*   **Services Pages:** Dedicated pages for each of the foundation's services, including Palliative Care, Geriatric Care, and more.
*   **Blog:** A blog to share news and updates.
*   **Gallery:** A gallery to showcase photos and videos.
*   **About Us:** Pages detailing the foundation's mission, team, and journey.
*   **Contact Page:** A contact form for users to get in touch.
*   **Donation Page:** A page to facilitate donations.

## Current Task: Re-enable Video Background

### Plan

1.  **DONE** Update the `stunning-visual-art.blade.php` component to use the `asset()` helper and point to the video in the `public` directory.
2.  **DONE** Uncomment the video sections for both mobile and desktop views.
3.  **DONE** Run `npm run build` to apply the changes.

### Implemented Changes

*   Updated `resources/views/components/stunning-visual-art.blade.php` to correctly reference the video file from the `public` directory.
*   Re-enabled the video background feature for both desktop and mobile views.
