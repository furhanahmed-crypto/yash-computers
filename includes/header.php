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
    $page_description = "Buy high-quality certified refurbished laptops in Hyderabad starting from ₹6,500. Dell, HP, Lenovo, and Apple MacBooks with 1-year warranty and 50-step quality checks.";
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
    
    <!-- Apply theme before paint (URL ?theme= overrides localStorage) -->
    <script>
        (function () {
            try {
                var params = new URLSearchParams(window.location.search);
                var fromUrl = (params.get('theme') || '').toLowerCase();
                var theme = (fromUrl === 'dark' || fromUrl === 'light')
                    ? fromUrl
                    : (localStorage.getItem('yc-theme') || 'light');

                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }

                if (fromUrl === 'dark' || fromUrl === 'light') {
                    localStorage.setItem('yc-theme', theme);
                }
            } catch (e) {}
        })();
    </script>
    
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
    
    <!-- Favicon (Google Search uses 48px+ square icons from rel="icon") -->
    <link rel="icon" href="/favicon.ico" sizes="48x48">
    <link rel="icon" type="image/png" sizes="48x48" href="/assets/images/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    
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
                    <img src="assets/images/logo-nav.png" alt="Yash Computers" class="logo-img" width="40" height="40">
                    <span>Yash<span>Computers</span></span>
                </a>
                
                <!-- Navigation Menu -->
                <nav class="nav-menu" id="navMenu">
                    <a href="index.php" class="nav-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>">Home</a>
                    <a href="our-laptops.php" class="nav-link <?php echo ($active_page === 'our-laptops') ? 'active' : ''; ?>">Our Laptops</a>
                    <a href="about.php" class="nav-link <?php echo ($active_page === 'about') ? 'active' : ''; ?>">About Us</a>
                    <a href="stores.php" class="nav-link <?php echo ($active_page === 'stores') ? 'active' : ''; ?>">Stores</a>
                    <a href="contact.php" class="nav-link <?php echo ($active_page === 'contact') ? 'active' : ''; ?>">Contact Us</a>
                </nav>
                
                <!-- Theme Toggle + Desktop CTA -->
                <div class="nav-actions">
                    <button type="button" class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode" title="Toggle theme">
                        <i class="fas fa-moon icon-moon" aria-hidden="true"></i>
                        <i class="fas fa-sun icon-sun" aria-hidden="true"></i>
                    </button>
                    <div class="nav-cta">
                        <a href="tel:+918121830905" class="btn btn-outline btn-sm">
                            <i class="fas fa-phone-alt"></i> +91 81218 30905
                        </a>
                    </div>
                    <!-- Mobile Menu Toggle -->
                    <div class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
