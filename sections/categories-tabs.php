<?php
/**
 * Yash Computers - Categories Tabs Section
 * Displays category tabs and dynamically switches content with a modern layout.
 * Includes "Know More" buttons redirecting to dedicated category pages for SEO.
 */
?>
<section class="section categories-tabs-section" id="categories-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="badge badge-secondary">Explore Categories</span>
            <h2>Find the Perfect Match for Your Needs</h2>
            <p>Browse our curated categories of certified refurbished laptops and devices, tailored for professionals, students, creators, and gamers.</p>
        </div>
        
        <!-- Tab Navigation Buttons -->
        <div class="tabs-nav" data-aos="fade-up" data-aos-delay="100">
            <button class="tab-btn active" data-tab="coding-laptops">
                <i class="fas fa-code"></i> Coding & Developers
            </button>
            <button class="tab-btn" data-tab="student-laptops">
                <i class="fas fa-user-graduate"></i> Student Laptops
            </button>
            <button class="tab-btn" data-tab="apple-devices">
                <i class="fab fa-apple"></i> Apple Devices
            </button>
            <button class="tab-btn" data-tab="apple-ecosystem">
                <i class="fas fa-tablet-alt"></i> Apple
            </button>
            <button class="tab-btn" data-tab="gaming-workstations">
                <i class="fas fa-gamepad"></i> Gaming & Workstations
            </button>
        </div>
        
        <!-- Tab Contents -->
        <div class="tabs-content-container">
            
            <!-- Tab 1: Laptops for Coding & Developers -->
            <div class="tab-content active" id="coding-laptops">
                <div class="category-grid">
                    <!-- Left: Info -->
                    <div class="category-info" data-aos="fade-right">
                        <span class="badge badge-primary">Power & Performance</span>
                        <h3>Laptops for Coding & Developers</h3>
                        <p class="category-description">Engineered for software developers, web designers, and IT professionals who require fast compiling, heavy multitasking, and seamless virtualization capabilities.</p>
                        
                        <div class="category-features">
                            <div class="category-feature-item">
                                <i class="fas fa-microchip"></i>
                                <div class="category-feature-text">
                                    High-End Processors
                                    <span>Intel Core i7 or AMD Ryzen 7</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-memory"></i>
                                <div class="category-feature-text">
                                    Up to 32GB RAM
                                    <span>DDR4/DDR5 high-speed memory</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-hdd"></i>
                                <div class="category-feature-text">
                                    Lightning Fast Storage
                                    <span>512GB / 1TB NVMe PCIe SSD</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-terminal"></i>
                                <div class="category-feature-text">
                                    Linux & Docker Ready
                                    <span>Fully compatible with dev tools</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <strong style="display: block; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--text-light);">Popular Models:</strong>
                            <p style="font-size: 0.9375rem; color: var(--text-secondary);">Lenovo ThinkPad T490, Dell Latitude 5490 (i7), HP EliteBook 840 G6</p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="coding-laptops.php" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i> Know More
                            </a>
                            <a href="#lead-form-section" class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Get Developer Pricing
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="category-image-wrapper" data-aos="fade-left">
                        <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?auto=format&fit=crop&w=800&q=80" 
                             alt="Laptops for Coding & Developers" 
                             class="category-image" 
                             width="550" 
                             height="380">
                        <span class="category-tag">Starts From ₹17,999</span>
                    </div>
                </div>
            </div>
            
            <!-- Tab 2: Student Laptops -->
            <div class="tab-content" id="student-laptops">
                <div class="category-grid">
                    <!-- Left: Info -->
                    <div class="category-info">
                        <span class="badge badge-secondary">Affordable & Reliable</span>
                        <h3>Student Laptops</h3>
                        <p class="category-description">Perfect for online classes, assignments, research, and project work. These laptops offer the perfect balance of durability, long battery life, and budget-friendly pricing.</p>
                        
                        <div class="category-features">
                            <div class="category-feature-item">
                                <i class="fas fa-wallet"></i>
                                <div class="category-feature-text">
                                    Budget Friendly
                                    <span>Pocket-friendly options for students</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-battery-full"></i>
                                <div class="category-feature-text">
                                    Long Battery Life
                                    <span>6+ Hours backup for long lectures</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-feather-alt"></i>
                                <div class="category-feature-text">
                                    Lightweight & Portable
                                    <span>Easy to carry in backpacks</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-camera"></i>
                                <div class="category-feature-text">
                                    HD Webcam & Mic
                                    <span>Optimized for Zoom & MS Teams</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <strong style="display: block; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--text-light);">Popular Models:</strong>
                            <p style="font-size: 0.9375rem; color: var(--text-secondary);">Dell Latitude 3480, HP Notebook 240 G6, Lenovo ThinkPad L480</p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="student-laptops.php" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i> Know More
                            </a>
                            <a href="#lead-form-section" class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Get Student Discount
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="category-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?auto=format&fit=crop&w=800&q=80" 
                             alt="Student Laptops" 
                             class="category-image" 
                             width="550" 
                             height="380">
                        <span class="category-tag">Starts From ₹10,000</span>
                    </div>
                </div>
            </div>
            
            <!-- Tab 3: Apple Devices -->
            <div class="tab-content" id="apple-devices">
                <div class="category-grid">
                    <!-- Left: Info -->
                    <div class="category-info">
                        <span class="badge badge-accent">Premium & Sleek</span>
                        <h3>Apple Devices</h3>
                        <p class="category-description">Experience the premium performance and design of Apple MacBooks, iMacs, and Mac Minis. Ideal for iOS developers, UI/UX designers, and creative professionals.</p>
                        
                        <div class="category-features">
                            <div class="category-feature-item">
                                <i class="fab fa-apple"></i>
                                <div class="category-feature-text">
                                    Apple Silicon Chips
                                    <span>M1, M2, and M3 Chip models available</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-eye"></i>
                                <div class="category-feature-text">
                                    Retina Display
                                    <span>Stunning color accuracy and brightness</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-wind"></i>
                                <div class="category-feature-text">
                                    Silent & Fast
                                    <span>Thermal efficiency and high performance</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-shield-virus"></i>
                                <div class="category-feature-text">
                                    Secure macOS
                                    <span>Latest macOS compatibility and security</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <strong style="display: block; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--text-light);">Popular Models:</strong>
                            <p style="font-size: 0.9375rem; color: var(--text-secondary);">MacBook Air A1466, MacBook Pro M1 (16GB RAM), Mac Mini M1</p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="apple-devices.php" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i> Know More
                            </a>
                            <a href="#lead-form-section" class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Request MacBook Catalog
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="category-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80" 
                             alt="Apple Devices" 
                             class="category-image" 
                             width="550" 
                             height="380">
                        <span class="category-tag">Starts From ₹14,999</span>
                    </div>
                </div>
            </div>
            
            <!-- Tab 4: Apple (Ecosystem & Accessories) -->
            <div class="tab-content" id="apple-ecosystem">
                <div class="category-grid">
                    <!-- Left: Info -->
                    <div class="category-info">
                        <span class="badge badge-primary">Genuine Accessories</span>
                        <h3>Apple Ecosystem & Accessories</h3>
                        <p class="category-description">Complete your Apple setup with certified refurbished Apple accessories and devices. We supply genuine Apple Magic Mice, Keyboards, iPads, and other peripherals at unbeatable prices.</p>
                        
                        <div class="category-features">
                            <div class="category-feature-item">
                                <i class="fas fa-mouse"></i>
                                <div class="category-feature-text">
                                    Apple Magic Mouse
                                    <span>Wireless Bluetooth mouse for Mac</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-keyboard"></i>
                                <div class="category-feature-text">
                                    Magic Keyboard
                                    <span>Sleek, rechargeable typing experience</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-tablet-alt"></i>
                                <div class="category-feature-text">
                                    Apple iPads
                                    <span>Refurbished iPads for sketching & reading</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-check-double"></i>
                                <div class="category-feature-text">
                                    100% Genuine
                                    <span>Every accessory is verified authentic</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <strong style="display: block; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--text-light);">Popular Items:</strong>
                            <p style="font-size: 0.9375rem; color: var(--text-secondary);">Apple Magic Mouse (A1657), Apple Magic Keyboard, iPad Air 4th Gen</p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="apple-accessories.php" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i> Know More
                            </a>
                            <a href="#lead-form-section" class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Inquire Accessories
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="category-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?auto=format&fit=crop&w=800&q=80" 
                             alt="Apple Accessories" 
                             class="category-image" 
                             width="550" 
                             height="380">
                        <span class="category-tag">Starts From ₹3,000</span>
                    </div>
                </div>
            </div>
            
            <!-- Tab 5: Gaming & Workstation Laptops -->
            <div class="tab-content" id="gaming-workstations">
                <div class="category-grid">
                    <!-- Left: Info -->
                    <div class="category-info">
                        <span class="badge badge-accent">Extreme Power</span>
                        <h3>Gaming & Workstation Laptops</h3>
                        <p class="category-description">Heavy-duty machines equipped with dedicated graphics cards, designed for high-end gaming, 3D rendering, video editing, CAD modeling, and data science applications.</p>
                        
                        <div class="category-features">
                            <div class="category-feature-item">
                                <i class="fas fa-microchip"></i>
                                <div class="category-feature-text">
                                    Dedicated GPU
                                    <span>NVIDIA GeForce RTX / Quadro Graphics</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-fan"></i>
                                <div class="category-feature-text">
                                    Advanced Cooling
                                    <span>Dual-fan thermal systems for heavy loads</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-tv"></i>
                                <div class="category-feature-text">
                                    High Refresh Rate
                                    <span>120Hz / 144Hz smooth displays</span>
                                </div>
                            </div>
                            <div class="category-feature-item">
                                <i class="fas fa-server"></i>
                                <div class="category-feature-text">
                                    Workstation Reliability
                                    <span>Intel Xeon / Core i9 processing power</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <strong style="display: block; margin-bottom: 0.5rem; font-size: 0.9375rem; color: var(--text-light);">Popular Models:</strong>
                            <p style="font-size: 0.9375rem; color: var(--text-secondary);">Dell Precision 5810, HP ZBook Studio, Lenovo Legion, Dell G15</p>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="gaming-workstations.php" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i> Know More
                            </a>
                            <a href="#lead-form-section" class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Get Custom Quote
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right: Image -->
                    <div class="category-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1603481588273-2f908a9a7a1b?auto=format&fit=crop&w=800&q=80" 
                             alt="Gaming & Workstation Laptops" 
                             class="category-image" 
                             width="550" 
                             height="380">
                        <span class="category-tag">Starts From ₹25,000</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
