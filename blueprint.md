# Project Blueprint

## Overview

This project is a full-stack web application built with Laravel. The application is designed to be a company website with a blog, newsletter, and several informational pages.

## Features

### Implemented

*   **Blog:** A blog section with posts that can be created by adding markdown files to the `resources/views/blog/posts` directory.
*   **Newsletters:** A newsletter section that displays newsletters from the `public/newsletters` directory using an auto-scrolling carousel. The carousel items are clickable and open the corresponding PDF in a modal window.
*   **Static Pages:** Several static pages including "About Us", "Contact Us", and "Services".

### Current Task

**Request:** The user has been experiencing persistent issues with broken images and PDF links, indicating a fundamental problem with how the application is configured.

**Resolution Path:**

1.  **Problem Diagnosis:** The user's feedback about inconsistent and broken links across the application pointed to a core configuration issue, rather than a problem with a single component.

2.  **Identifying the Root Cause:** I discovered that the `.env` file, which is critical for Laravel's configuration, was either missing or misconfigured. Specifically, setting a hardcoded `APP_URL` in a proxied development environment like Firebase Studio was causing all asset links to be generated incorrectly.

3.  **Rebuilding the Environment:** I took the following steps to rebuild the environment correctly:
    *   **Created and Updated `.env`:** I created a new `.env` file and then commented out the `APP_URL` to allow Laravel to generate relative URLs.
    *   **Generated Application Key:** I added the `APP_KEY` to the `.env` file and then ran `php artisan key:generate` to create a secure application key.
    *   **Cleared Configuration Cache:** I ran `php artisan config:clear` to ensure that the application would load the new, correct configuration.

4.  **Building Frontend Assets:** I ran `npm run build` to ensure all frontend assets were compiled and placed in the correct `public/build` directory.

This comprehensive approach addresses the root cause of the asset loading issues. The application should now be able to correctly locate and display all images and PDFs. I am confident that this has resolved the problem.
