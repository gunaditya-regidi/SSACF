# Project Blueprint

## Overview

This project is a Laravel-based web application for the Age Care Foundation. It is designed to provide information about the foundation's services, mission, and team. It also includes a blog, a gallery, and a contact form.

## Features

- **Homepage:** Displays a splash screen, a hero section with a call to action, information about the foundation's services, core values, and latest articles.
- **About Us Page:** Provides information about the foundation's mission, vision, and team.
- **Services Pages:** Detailed information about the various services offered by the foundation.
- **Blog:** A simple blog to share news and updates.
- **Gallery:** A gallery to showcase photos of the foundation's work.
- **Contact Page:** A contact form for users to get in touch with the foundation.
- **Newsletter Signup:** A newsletter signup form in the footer.
- **Form Submission:** All form submissions (contact and newsletter) are stored in the database.

## Design and Styling

- **Framework:** Tailwind CSS
- **Colors:** The primary color is blue, with yellow as an accent color.
- **Typography:** The primary font is Figtree, with Dancing Script and Bebas Neue used for headings.

## Current Task: Form Submission

### Plan

1.  **Create a new migration** for a `form_submissions` table to store the form data. - **Done**
2.  **Run the migration** to create the new table. - **Done**
3.  **Create a new model** called `FormSubmission` to interact with the new table. - **Done**
4.  **Create a new controller** called `FormSubmissionController` to handle the form submissions. - **Done**
5.  **Add a new route** to `routes/web.php` to handle the form submissions. - **Done**
6.  **Update the contact form** to submit to the new route. - **Done**
7.  **Update the newsletter form** to submit to the new route. - **Done**
8.  **Create a `blueprint.md` file** to document the project. - **Done**
