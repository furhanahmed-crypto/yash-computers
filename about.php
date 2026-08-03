<?php
/**
 * Yash Computers - About Us Page
 * Explains the brand story, vision, mission, and the rigorous 50-step quality audit process.
 */

// Define page-specific SEO variables
$page_title = "About Us | Yash Computers | Legacy of Trust Since 2009";
$page_description = "Learn about Yash Computers, Hyderabad's leading refurbished laptop store. Discover our mission, vision, and our industry-leading 50-step quality audit process.";
$active_page = "about";

// Include Header
include 'includes/header.php';
?>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="container" data-aos="zoom-in">
        <span class="badge badge-primary">Our Story</span>
        <h1>Crafting Excellence Since 2009</h1>
        <p>Yash Computers is Hyderabad's largest and most trusted destination for certified refurbished laptops and professional IT services.</p>
    </div>
</section>

<!-- Our Story Section -->
<section class="section">
    <div class="container">
        <div class="about-story-grid">
            <!-- Left: Content -->
            <div class="about-story-content" data-aos="fade-right">
                <span class="badge badge-secondary">A Legacy of Trust</span>
                <h2>How We Redefined Refurbishment</h2>
                <p>Founded in 2009, Yash Computers started with a simple but powerful idea: high-end computing power shouldn't be a luxury. We noticed that students, freelancers, and small businesses were forced to buy low-quality new laptops or take huge risks buying second-hand devices with hidden defects.</p>
                <p>We set out to create a third option — **Certified Refurbished Laptops**. By combining rigorous engineering standards with top-grade corporate-imported laptops, we created a way for customers to save up to 60% while getting a machine that performs exactly like new.</p>
                <p>Today, with over 10,000+ laptops sold and a 4.8-star Google rating, we continue to serve Hyderabad with unmatched quality, transparent pricing, and industry-leading after-sales support.</p>
            </div>
            
            <!-- Right: Image -->
            <div class="about-story-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" 
                     alt="Yash Computers Team Working on Laptops" 
                     style="width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-xl);"
                     width="550" 
                     height="400">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="section section-bg">
    <div class="container">
        <div class="vision-mission-grid">
            <!-- Vision Card -->
            <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Our Vision</h3>
                <p>To bridge the digital divide by making high-end computing accessible to every student, professional, and business in India, while promoting environmental sustainability through the reuse and extension of technology lifecycles.</p>
            </div>
            
            <!-- Mission Card -->
            <div class="vision-mission-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Our Mission</h3>
                <p>To set the absolute gold standard in computer refurbishment. We achieve this by enforcing a strict 50-step quality audit, providing genuine warranty protection, and offering reliable, transparent, and prompt after-sales customer support.</p>
            </div>
        </div>
    </div>
</section>

<!-- The 50-Step Quality Audit Process -->
<section class="section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="badge badge-accent">Quality Control</span>
            <h2>Our Rigorous 50-Step Quality Audit</h2>
            <p>Every laptop we sell undergoes a comprehensive 50-step inspection by our senior hardware engineers. Here is how we guarantee a like-new experience:</p>
        </div>
        
        <!-- Audit Steps Grid -->
        <div class="audit-steps-grid">
            <!-- Step 1 -->
            <div class="audit-step-card" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">01</div>
                <i class="fas fa-microchip"></i>
                <h3>Hardware Diagnostics</h3>
                <p>We run advanced stress tests on the motherboard, CPU, and RAM to ensure peak performance under heavy computing loads.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="audit-step-card" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">02</div>
                <i class="fas fa-battery-three-quarters"></i>
                <h3>Battery & Power Audit</h3>
                <p>Batteries are tested for health and charging cycles. Any battery with health below 80% is replaced with a brand-new one.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="audit-step-card" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">03</div>
                <i class="fas fa-desktop"></i>
                <h3>Display & Input Check</h3>
                <p>Screens are checked for dead pixels or scratches. Every single keyboard key and trackpad gesture is individually tested for responsiveness.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="audit-step-card" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">04</div>
                <i class="fas fa-laptop-house"></i>
                <h3>OS & Thermal Tuning</h3>
                <p>We replace the thermal paste, clean internal fans, and install a fresh, genuine operating system with all necessary drivers pre-configured.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include Lead Form Section -->
<?php include 'sections/lead-form.php'; ?>

<?php
// Include Footer
include 'includes/footer.php';
?>
