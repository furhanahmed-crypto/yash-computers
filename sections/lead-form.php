<?php
/**
 * Yash Computers - Lead Capture Form Section
 * Renders a high-converting lead capture form to generate sales inquiries.
 */
?>
<section class="section lead-section" id="lead-form-section">
    <div class="container">
        <div class="lead-grid">
            <!-- Left: Content & Trust Bullets -->
            <div class="lead-content" data-aos="fade-right">
                <span class="badge badge-accent">Get Free Consultation</span>
                <h2>Ready to Find Your Perfect Laptop?</h2>
                <p>Don't get overwhelmed by specs. Tell us your requirements and budget, and our computer experts will handpick the best options for you. No commitment, just expert advice.</p>
                
                <div class="lead-features">
                    <!-- Feature 1 -->
                    <div class="lead-feature-item">
                        <i class="fas fa-phone-volume"></i>
                        <span>Instant Callback within 30 Minutes</span>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="lead-feature-item">
                        <i class="fas fa-truck"></i>
                        <span>Free Doorstep Delivery in Hyderabad</span>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="lead-feature-item">
                        <i class="fas fa-tools"></i>
                        <span>Custom RAM & SSD Upgrades Available</span>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="lead-feature-item">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Bajaj EMI & Cash on Delivery Available</span>
                    </div>
                </div>
            </div>
            
            <!-- Right: Interactive Form -->
            <div class="lead-form-wrapper" data-aos="fade-left">
                <h3>Get a Free Quote & Catalog</h3>
                <p>Fill out the form below to receive our latest inventory catalog and pricing instantly.</p>
                
                <form class="lead-form" method="POST" action="">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="lead-name" class="form-label">Full Name *</label>
                        <input type="text" id="lead-name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    
                    <!-- Phone -->
                    <div class="form-group">
                        <label for="lead-phone" class="form-label">Phone Number (WhatsApp) *</label>
                        <input type="tel" id="lead-phone" name="phone" class="form-control" placeholder="Enter 10-digit mobile number" pattern="[0-9]{10}" required>
                    </div>
                    
                    <!-- Requirement -->
                    <div class="form-group">
                        <label for="lead-requirement" class="form-label">What are you looking for? *</label>
                        <select id="lead-requirement" name="requirement" class="form-control" required>
                            <option value="" disabled selected>Select your requirement</option>
                            <option value="Developer Laptops">Developer Laptops</option>
                            <option value="Student Laptops">Student Laptops</option>
                            <option value="MacBooks & iMacs">MacBooks &amp; iMacs</option>
                            <option value="Apple Accessories">Apple Accessories</option>
                            <option value="Gaming Laptops">Gaming &amp; Workstation Laptops</option>
                            <option value="Laptop Repair">Laptop Repair or Upgrade</option>
                        </select>
                    </div>
                    
                    <!-- Message / Budget -->
                    <div class="form-group">
                        <label for="lead-message" class="form-label">Your Budget & Special Requirements (Optional)</label>
                        <textarea id="lead-message" name="message" class="form-control" placeholder="E.g., Budget around ₹15,000, need i5 processor with 8GB RAM..."></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 1rem;">
                        <i class="fas fa-paper-plane"></i> Get Catalog & Pricing
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
