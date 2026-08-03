# Yash Computers - AI Agent Maintenance Guide

Welcome, AI Agent! This guide explains how to maintain, expand, and debug the **Yash Computers** codebase. Please follow these guidelines to preserve the project's high-tech dark-red theme, code quality, and performance.

---

## 1. Coding Standards & Best Practices

- **PHP Reusability**: Do not duplicate layouts. Use `include` or `require_once` for headers, footers, and page sections.
- **Dynamic SEO**: Every page must define `$page_title`, `$page_description`, and `$active_page` *before* including `includes/header.php`.
- **CSS Tokens**: Always use the CSS variables defined in `:root` inside `assets/css/style.css` for colors, shadows, borders, and transitions. Do not hardcode hex values.
- **Semantic HTML**: Use semantic tags like `<header>`, `<main>`, `<section>`, `<nav>`, and `<footer>`.
- **Accessibility (a11y)**: Ensure all images have descriptive `alt` tags and interactive elements have appropriate `aria-label` attributes.

---

## 2. How to Add a New Category Page

To add a new category page (e.g., `creator-laptops.php`):

1. Create the file in the root directory:
   ```php
   <?php
   // Define page-specific SEO variables
   $page_title = "Refurbished Laptops for Content Creators in Hyderabad | Yash Computers";
   $page_description = "Buy certified refurbished laptops for video editing, graphic design, and content creation in Hyderabad. 1-year warranty.";
   $active_page = "creator-laptops";

   // Include Header
   include 'includes/header.php';
   ?>

   <!-- Page Content Here -->
   <section class="about-hero" style="background: radial-gradient(circle at 50% 50%, rgba(255, 0, 60, 0.1) 0%, rgba(0, 0, 0, 0) 80%);">
       <div class="container">
           <span class="badge badge-accent">Creative Power</span>
           <h1>Laptops for Content Creators</h1>
           <p>Engineered for video editors, graphic designers, and digital creators...</p>
       </div>
   </section>

   <!-- Detailed Content & Spec Grid -->

   <!-- Include Lead Form Section -->
   <?php include 'sections/lead-form.php'; ?>

   <?php
   // Include Footer
   include 'includes/footer.php';
   ?>
   ```
2. Add the category link to the "Categories" column in `includes/footer.php`.
3. Add a corresponding tab button and content panel in `sections/categories-tabs.php`.

---

## 3. Contact Form & Lead Generation Maintenance

- **Form Validation**: Form validation is handled natively by HTML5 attributes (`required`, `type="tel"`, `pattern="[0-9]{10}"`).
- **Simulated Submissions**: Submissions are intercepted in `assets/js/main.js` to provide a modern, single-page app feel. If you integrate a real backend (e.g., database or email service), you can modify the `submit` event listener in `assets/js/main.js` to send a `fetch` request to a PHP processing script (e.g., `process-lead.php`).
- **WhatsApp Integration**: The phone number and pre-filled message text are defined in `assets/js/main.js` and `includes/whatsapp-call-widget.php`. If the business phone number changes, update it in:
  1. `includes/header.php` (header links)
  2. `includes/footer.php` (footer links)
  3. `includes/whatsapp-call-widget.php` (floating widget links)
  4. `assets/js/main.js` (form-to-whatsapp redirection)
  5. `stores.php` (individual store contact links)
  6. `contact.php` (sidebar links)
  7. Every category page (e.g., `coding-laptops.php`, etc.)
