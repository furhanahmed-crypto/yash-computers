<?php
/**
 * Yash Computers - Home Page
 * Renders the landing page with hero banner, categories, stats, services, and lead capture.
 */

// Define page-specific SEO variables
$page_title = "Yash Computers | Certified Refurbished Laptops Hyderabad | Starting ₹3,999";
$page_description = "Buy premium refurbished laptops in Hyderabad starting from ₹3,999. Certified Dell, HP, Lenovo, and Apple MacBooks with a 1-year warranty and a 50-step quality check.";
$active_page = "home";

// Include Header
include 'includes/header.php';

// Include Hero Section
include 'sections/hero.php';

// Include Stats Section
include 'sections/stats.php';

// Include Categories Tabs Section
include 'sections/categories-tabs.php';

// Include Why Choose Us Section
include 'sections/why-choose-us.php';

// Include Services Section
include 'sections/services.php';

// Include Testimonials Section
include 'sections/testimonials.php';

// Include Lead Capture Form Section
include 'sections/lead-form.php';

// Include Footer
include 'includes/footer.php';
