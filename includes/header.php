<?php
/**
 * Yash Computers - Common Header Include
 * Handles SEO meta tags, external CSS libraries, and responsive navigation.
 */

// Set default page variables if not defined in the page
if (!isset($page_title)) {
    $page_title = "Yash Computers | Best Refurbished Laptops in Hyderabad";
}
if (!isset($page_description)) {
    $page_description = "Buy high-quality certified refurbished laptops in Hyderabad starting from ₹3,999. Dell, HP, Lenovo, and Apple MacBooks with 1-year warranty and 50-step quality checks.";
}
if (!isset($active_page)) {
    $active_page = "home";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="refurbished laptops hyderabad, second hand laptops, used macbook hyderabad, dell latitude refurbished, hp elitebook used, lenovo thinkpad second hand, laptop repair hyderabad, yash computers">
    <link rel="canonical" href="https://yashcomputers.com/<?php echo ($active_page === 'home') ? '' : $active_page . '.php'; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="https://yashcomputers.com/assets/images/og-image.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    
    <!-- FontAwesome Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="nav-container">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <i class="fas fa-laptop-code"></i>
                    <span>Yash<span>Computers</span></span>
                </a>
                
                <!-- Navigation Menu -->
                <nav class="nav-menu" id="navMenu">
                    <a href="index.php" class="nav-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>">Home</a>
                    <a href="about.php" class="nav-link <?php echo ($active_page === 'about') ? 'active' : ''; ?>">About Us</a>
                    <a href="stores.php" class="nav-link <?php echo ($active_page === 'stores') ? 'active' : ''; ?>">Stores</a>
                    <a href="contact.php" class="nav-link <?php echo ($active_page === 'contact') ? 'active' : ''; ?>">Contact Us</a>
                    
                    <!-- Mobile CTA Button -->
                    <a href="contact.php#lead-form-section" class="btn btn-primary btn-sm mobile-only-btn">Get Free Quote</a>
                </nav>
                
                <!-- Desktop CTA Buttons -->
                <div class="nav-cta">
                    <a href="tel:+919885554431" class="btn btn-outline btn-sm">
                        <i class="fas fa-phone-alt"></i> +91 98855 54431
                    </a>
                    <a href="contact.php#lead-form-section" class="btn btn-primary btn-sm">Get Free Quote</a>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <div class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
