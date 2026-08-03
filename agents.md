# Yash Computers - AI Agent Maintenance Guide

Welcome, AI Agent! This guide explains how to maintain, expand, and debug the **Yash Computers** codebase. Please follow these guidelines to preserve the project's design system, code quality, and performance.

---

## 1. Coding Standards & Best Practices

- **PHP Reusability**: Do not duplicate layouts. Use `include` or `require_once` for headers, footers, and page sections.
- **Dynamic SEO**: Every page must define `$page_title`, `$page_description`, and `$active_page` *before* including `includes/header.php`.
- **CSS Tokens**: Always use the CSS variables defined in `:root` inside `assets/css/style.css` for colors, shadows, borders, and transitions. Do not hardcode hex values.
- **Semantic HTML**: Use semantic tags like `<header>`, `<main>`, `<section>`, `<nav>`, and `<footer>`.
- **Accessibility (a11y)**: Ensure all images have descriptive `alt` tags and interactive elements have appropriate `aria-label` attributes.

---

## 2. How to Add a New Page

To add a new page (e.g., `services.php`):

1. Create the file in the root directory:
   ```php
   <?php
   // Define page-specific SEO variables
   $page_title = "Services | Yash Computers";
   $page_description = "Explore our professional repair and upgrade services.";
   $active_page = "services";

   // Include Header
   include 'includes/header.php';
   ?>

   <!-- Page Content Here -->
   <section class="section">
       <div class="container">
           <!-- Content -->
       </div>
   </section>

   <?php
   // Include Footer
   include 'includes/footer.php';
   ?>
   ```
2. Add the page link to the navigation menu in `includes/header.php` and `includes/footer.php`.
3. Add any custom styles to `assets/css/style.css` using existing CSS variables.

---

## 3. How to Add a New Category Tab

To add a new tab to the categories section in `sections/categories-tabs.php`:

1. Add a new `<button>` inside the `.tabs-nav` container:
   ```html
   <button class="tab-btn" data-tab="new-category-id">
       <i class="fas fa-icon-name"></i> New Category Label
   </button>
   ```
2. Add a corresponding `.tab-content` container inside `.tabs-content-container`:
   ```html
   <div class="tab-content" id="new-category-id">
       <div class="category-grid">
           <!-- Left: Info -->
           <div class="category-info">
               <span class="badge badge-primary">Badge Text</span>
               <h3>New Category Title</h3>
               <p class="category-description">Description text...</p>
               <!-- Features, Models, and CTA -->
           </div>
           <!-- Right: Image -->
           <div class="category-image-wrapper">
               <img src="https://images.unsplash.com/photo-..." alt="Alt Text" class="category-image" width="550" height="380">
               <span class="category-tag">Starts From ₹X,XXX</span>
           </div>
       </div>
   </div>
   ```
3. The JavaScript in `assets/js/main.js` automatically handles the active state switching and AOS refresh. No JS modifications are required!

---

## 4. How to Add a New Store Location

To add a new store location in `stores.php`:

1. Add a new `.store-card` inside the `.stores-grid` container:
   ```html
   <div class="store-card" data-aos="fade-up">
       <div class="store-img-wrapper">
           <img src="https://images.unsplash.com/photo-..." alt="Store Name" class="store-img" width="380" height="220">
           <span class="store-status">Active Store</span>
       </div>
       <div class="store-info">
           <h3>Store City / Area Name</h3>
           <div class="store-details">
               <div class="store-detail-item">
                   <i class="fas fa-map-marker-alt"></i>
                   <p>Full Address Here...</p>
               </div>
               <div class="store-detail-item">
                   <i class="fas fa-phone-alt"></i>
                   <p><a href="tel:+919885554431">+91 98855 54431</a></p>
               </div>
               <div class="store-detail-item">
                   <i class="fas fa-clock"></i>
                   <p>Working Hours...</p>
               </div>
           </div>
           <div class="store-actions">
               <a href="https://maps.google.com/?q=..." target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm">
                   <i class="fas fa-directions"></i> Directions
               </a>
               <a href="https://wa.me/919885554431?text=..." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm">
                   <i class="fab fa-whatsapp"></i> Chat Store
               </a>
           </div>
       </div>
   </div>
   ```

---

## 5. Contact Form & Lead Generation Maintenance

- **Form Validation**: Form validation is handled natively by HTML5 attributes (`required`, `type="tel"`, `pattern="[0-9]{10}"`).
- **Simulated Submissions**: Submissions are intercepted in `assets/js/main.js` to provide a modern, single-page app feel. If you integrate a real backend (e.g., database or email service), you can modify the `submit` event listener in `assets/js/main.js` to send a `fetch` request to a PHP processing script (e.g., `process-lead.php`).
- **WhatsApp Integration**: The phone number and pre-filled message text are defined in `assets/js/main.js` and `includes/whatsapp-call-widget.php`. If the business phone number changes, update it in:
  1. `includes/header.php` (header links)
  2. `includes/footer.php` (footer links)
  3. `includes/whatsapp-call-widget.php` (floating widget links)
  4. `assets/js/main.js` (form-to-whatsapp redirection)
  5. `stores.php` (individual store contact links)
  6. `contact.php` (sidebar links)
