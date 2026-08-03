<?php
/**
 * Yash Computers - Laptops for Coding & Developers (Category Page)
 * Highly optimized for SEO, targeting developers and IT professionals in Hyderabad.
 */

// Define page-specific SEO variables
$page_title = "Refurbished Laptops for Coding & Developers in Hyderabad | Yash Computers";
$page_description = "Buy high-performance certified refurbished laptops for coding, software development, and programming in Hyderabad. Sourced from corporate leases with a 1-year warranty.";
$active_page = "coding-laptops";

// Include Header
include 'includes/header.php';
?>

<!-- Category Hero Section -->
<section class="about-hero" style="background: radial-gradient(circle at 50% 50%, rgba(255, 0, 60, 0.1) 0%, rgba(0, 0, 0, 0) 80%);">
    <div class="container" data-aos="zoom-in">
        <span class="badge badge-primary">Power & Performance</span>
        <h1>Laptops for Coding & Developers</h1>
        <p>Engineered for software developers, web designers, and IT professionals who require fast compiling, heavy multitasking, and seamless virtualization capabilities.</p>
    </div>
</section>

<!-- Detailed Content Section -->
<section class="section">
    <div class="container">
        <div class="category-grid" style="grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 5rem;">
            <!-- Left: Info -->
            <div class="category-info" data-aos="fade-right">
                <span class="badge badge-secondary">Developer Specifications</span>
                <h2>Why Developers Choose Our Refurbished Laptops</h2>
                <p class="category-description" style="margin-bottom: 1.5rem;">As a software engineer, your laptop is your primary tool. You need a machine that can run Docker containers, compile code quickly, handle virtual machines, and keep up with multiple browser tabs. Buying a brand-new high-end developer laptop can cost upwards of ₹80,000.</p>
                <p class="category-description" style="margin-bottom: 2rem;">At Yash Computers, we supply premium corporate-lease-returned business laptops (like the legendary Lenovo ThinkPad and Dell Latitude series) at **50% to 60% off retail prices**. These laptops are built with high-grade components that offer superior durability and thermal performance compared to standard consumer laptops.</p>
                
                <div style="display: flex; gap: 1.25rem; flex-wrap: wrap;">
                    <a href="#lead-form-section" class="btn btn-primary btn-lg">
                        <i class="fab fa-whatsapp"></i> Get Developer Catalog
                    </a>
                    <a href="tel:+919885554431" class="btn btn-outline btn-lg">
                        <i class="fas fa-phone-alt"></i> Call Executive
                    </a>
                </div>
            </div>
            
            <!-- Right: Image -->
            <div class="category-image-wrapper" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?auto=format&fit=crop&w=800&q=80" 
                     alt="Developer Coding on Refurbished Laptop" 
                     class="category-image" 
                     style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-xl); border: 1px solid var(--border-color);"
                     width="550" 
                     height="400">
                <span class="category-tag">Starts From ₹17,999</span>
            </div>
        </div>

        <!-- Tech Specifications Grid -->
        <div class="section-header" data-aos="fade-up" style="margin-bottom: 3.5rem;">
            <span class="badge badge-primary">Optimized Specs</span>
            <h2>Recommended Developer Specifications</h2>
            <p>We customize and upgrade every laptop to meet your exact coding and development requirements.</p>
        </div>

        <div class="services-grid" style="margin-bottom: 5rem;">
            <!-- Spec 1 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3>High-End Processors</h3>
                <p>Equipped with Intel Core i5/i7 (8th Gen and above) or AMD Ryzen 5/7 processors. Fast clock speeds and multi-core performance for seamless code compiling.</p>
            </div>
            
            <!-- Spec 2 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-memory"></i>
                </div>
                <h3>Up to 32GB RAM</h3>
                <p>Multitask effortlessly. Run VS Code, Android Studio, Docker, and Chrome simultaneously with high-speed 16GB or 32GB DDR4 RAM configurations.</p>
            </div>
            
            <!-- Spec 3 -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-hdd"></i>
                </div>
                <h3>NVMe PCIe SSDs</h3>
                <p>Boot up in seconds and load projects instantly. We only use high-speed 256GB, 512GB, or 1TB NVMe Solid State Drives with 100% health scores.</p>
            </div>
        </div>

        <!-- Popular Models Table / Grid -->
        <div class="section-header" data-aos="fade-up" style="margin-bottom: 3.5rem;">
            <span class="badge badge-secondary">Top Sellers</span>
            <h2>Popular Developer Models</h2>
            <p>These are our highest-rated and most requested laptops for software engineering and web development.</p>
        </div>

        <div class="stores-grid" style="margin-bottom: 2rem;">
            <!-- Model 1 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="100">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?auto=format&fit=crop&w=600&q=80" alt="Lenovo ThinkPad T490" class="store-img">
                    <span class="store-status" style="background-color: var(--primary-color);">Best Seller</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>Lenovo ThinkPad T490</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">The ultimate programmer's laptop. Legendary tactile keyboard, military-grade durability, and exceptional battery life.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fas fa-cpu"></i><p>Intel Core i5 / i7 8th Gen</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>16GB DDR4 RAM (Upgradable)</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>512GB NVMe PCIe SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>14" Full HD IPS Display</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹19,999 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹45,000</span></span>
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20Lenovo%20ThinkPad%20T490." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
                    </div>
                </div>
            </div>
            
            <!-- Model 2 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="200">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?auto=format&fit=crop&w=600&q=80" alt="Dell Latitude 5490" class="store-img">
                    <span class="store-status" style="background-color: var(--success);">Highly Reliable</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>Dell Latitude 5490</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">A premium business-class workhorse. Sleek professional design, robust port selection, and outstanding multitasking speed.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fas fa-cpu"></i><p>Intel Core i5 8th Gen</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>8GB / 16GB DDR4 RAM</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>256GB / 512GB NVMe SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>14" Full HD Anti-Glare</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹17,999 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹38,000</span></span>
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20Dell%20Latitude%205490." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
                    </div>
                </div>
            </div>
            
            <!-- Model 3 -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="300">
                <div class="store-img-wrapper" style="height: 200px;">
                    <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?auto=format&fit=crop&w=600&q=80" alt="HP EliteBook 840 G6" class="store-img">
                    <span class="store-status" style="background-color: var(--secondary-color);">Premium Slim</span>
                </div>
                <div class="store-info" style="padding: 1.75rem;">
                    <h3>HP EliteBook 840 G6</h3>
                    <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 1.25rem;">Ultra-slim aluminum chassis. Premium aesthetic, high-security features, and stunning bright display for long coding hours.</p>
                    <div class="store-details" style="gap: 0.75rem; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        <div class="store-detail-item"><i class="fas fa-cpu"></i><p>Intel Core i5 / i7 8th Gen</p></div>
                        <div class="store-detail-item"><i class="fas fa-memory"></i><p>16GB DDR4 RAM (Upgradable)</p></div>
                        <div class="store-detail-item"><i class="fas fa-hdd"></i><p>512GB NVMe PCIe SSD</p></div>
                        <div class="store-detail-item"><i class="fas fa-desktop"></i><p>14" Full HD IPS Display</p></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.25rem; font-weight: 800; color: var(--primary-color);">₹21,499 <span style="font-size: 0.8125rem; font-weight: 500; color: var(--text-muted); text-decoration: line-through;">₹48,000</span></span>
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20am%20interested%20in%20HP%20EliteBook%20840%20G6." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm"><i class="fab fa-whatsapp"></i> Buy</a>
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
