<?php
/**
 * Yash Computers - MacBooks & iMacs (Category Page)
 * Highly optimized for SEO, targeting Apple buyers and creative professionals in Hyderabad.
 */

// Define page-specific SEO variables
$page_title = "Refurbished Apple MacBooks & iMacs in Hyderabad | Yash Computers";
$page_description = "Buy certified refurbished Apple MacBook Air, MacBook Pro, iMac, and Mac Mini in Hyderabad. 100% genuine Apple devices with warranty starting from ₹14,999.";
$active_page = "macbooks";

// Include Header
include 'includes/header.php';
?>

<!-- Category Hero Section -->
<section class="about-hero" style="background: radial-gradient(circle at 50% 50%, rgba(255, 0, 60, 0.1) 0%, rgba(0, 0, 0, 0) 80%);">
    <div class="container" data-aos="zoom-in">
        <span class="badge badge-accent">Premium & Sleek</span>
        <h1>MacBooks & iMacs</h1>
        <p>Experience the premium performance and design of Apple MacBooks, iMacs, and Mac Minis. Ideal for iOS developers, UI/UX designers, and creative professionals.</p>
    </div>
</section>

<!-- Detailed Content Section -->
<section class="section">
    <div class="container">
        <div class="category-grid" style="grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 5rem;">
            <!-- Left: Info -->
            <div class="category-info" data-aos="fade-right">
                <span class="badge badge-primary">Premium Sourcing</span>
                <h2>Get the Apple Experience at a Fraction of the Cost</h2>
                <p class="category-description" style="margin-bottom: 1.5rem;">Apple MacBooks are globally renowned for their industry-leading build quality, stunning Retina displays, exceptional battery life, and powerful macOS operating system. However, buying a brand-new MacBook can be a massive financial investment, with prices starting over ₹80,000.</p>
                <p class="category-description" style="margin-bottom: 2rem;">At Yash Computers, we make premium Apple engineering affordable. We source certified refurbished MacBooks, iMacs, and Mac Minis from corporate leases and professional trade-ins. Every device undergoes rigorous hardware testing, diagnostic audits, and deep cleaning. Get a 100% genuine Apple experience **at up to 60% off retail prices**.</p>
                
                <div style="display: flex; gap: 1.25rem; flex-wrap: wrap;">
                    <a href="#lead-form-section" class="btn btn-primary btn-lg">
                        <i class="fab fa-whatsapp"></i> Request MacBook Catalog
                    </a>
                    <a href="tel:+918182830905" class="btn btn-outline btn-lg">
                        <i class="fas fa-phone-alt"></i> Call Executive
                    </a>
                </div>
            </div>
            
            <!-- Right: Image -->
            <div class="category-image-wrapper" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80" 
                     alt="Refurbished Apple MacBook Pro" 
                     class="category-image" 
                     style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-xl); border: 1px solid var(--border-color);"
                     width="550" 
                     height="400">
                <span class="category-tag">Starts From ₹14,999</span>
            </div>
        </div>

        <!-- Tech Specifications Grid -->
        <div class="section-header" data-aos="fade-up" style="margin-bottom: 3.5rem;">
            <span class="badge badge-primary">Quality Assurance</span>
            <h2>How We Audit Our Refurbished MacBooks & iMacs</h2>
            <p>Our Apple certified technicians perform specialized diagnostic checks to guarantee premium performance.</p>
        </div>

        <div class="services-grid" style="margin-bottom: 5rem;">
            <!-- Benefit 1 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fab fa-apple"></i>
                </div>
                <h3>Apple Silicon Diagnostics</h3>
                <p>We thoroughly test Apple M1, M2, and M3 chip models, running thermal stress tests and GPU diagnostics to ensure flawless computing speeds.</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Retina Display Audit</h3>
                <p>Screens are audited for color accuracy, brightness consistency, and dead pixels. We guarantee a pristine, beautiful viewing experience.</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-battery-full"></i>
                </div>
                <h3>Battery Cycle & Health Check</h3>
                <p>MacBook batteries are verified for low cycle counts and high health percentages. Any battery showing degraded performance is replaced.</p>
            </div>
        </div>

        <!-- Popular Models Table / Grid -->
        <div class="section-header" data-aos="fade-up" style="margin-bottom: 3.5rem;">
            <span class="badge badge-secondary">Top Sellers</span>
            <h2>Popular Apple Models</h2>
            <p>These are our highest-rated and most requested Apple devices for creative professionals, developers, and students.</p>
        </div>

        <div class="stores-grid" style="margin-bottom: 2rem;">
            <!-- Model 1 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="100">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?auto=format&fit=crop&w=600&q=80" alt="Apple MacBook Air A1466" class="store-img">
                    <span class="store-status" style="background-color: var(--primary-color);">Best Seller</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>Apple MacBook Air A1466</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Ultra-thin and lightweight. The perfect companion for students, writers, and daily office tasks. Unbeatable value.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fas fa-cpu"></i><p>Intel Core i5 Processor</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>8GB DDR3 RAM</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>128GB / 256GB SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>13.3" Sleek LED Display</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹19,999 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹55,000</span></span>
                        <a href="https://wa.me/918182830905?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20Apple%20MacBook%20Air%20A1466." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
                    </div>
                </div>
            </div>
            
            <!-- Model 2 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="200">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=600&q=80" alt="Apple MacBook Pro A1278" class="store-img">
                    <span class="store-status" style="background-color: var(--success);">Budget Pro</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>Apple MacBook Pro A1278</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">A durable, highly reliable MacBook Pro. Features a robust aluminum body, CD/DVD drive, and fully upgradable RAM/SSD.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fas fa-cpu"></i><p>Intel Core i5 Processor</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>8GB DDR3 RAM</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>256GB / 512GB SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>13.3" HD Glossy Display</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹14,999 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹42,000</span></span>
                        <a href="https://wa.me/918182830905?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20Apple%20MacBook%20Pro%20A1278." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
                    </div>
                </div>
            </div>
            
            <!-- Model 3 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="300">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?auto=format&fit=crop&w=600&q=80" alt="Apple MacBook Pro M1" class="store-img">
                    <span class="store-status" style="background-color: var(--secondary-color);">Extreme Power</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>Apple MacBook Pro M1</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Next-generation Apple Silicon. Incredible processing speed, 15+ hours battery life, and gorgeous Retina display.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fab fa-apple"></i><p>Apple M1 8-Core Chip</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>16GB Unified Memory</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>256GB / 512GB SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>13.3" Retina Display</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹49,999 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹1,19,999</span></span>
                        <a href="https://wa.me/918182830905?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20Apple%20MacBook%20Pro%20M1." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
                    </div>
                </div>
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
