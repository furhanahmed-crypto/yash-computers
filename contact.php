<?php
/**
 * Yash Computers - Contact Us Page
 * Renders contact details, an interactive contact form, an embedded Google Map,
 * and a frequently asked questions (FAQ) accordion.
 */

// Define page-specific SEO variables
$page_title = "Contact Us | Yash Computers | Best Refurbished Laptops Hyderabad";
$page_description = "Get in touch with Yash Computers. Call or WhatsApp +91 98855 54431, visit our stores in Hyderabad, or fill out our contact form for an instant quote.";
$active_page = "contact";

// Include Header
include 'includes/header.php';
?>

<!-- Contact Hero Section -->
<section class="about-hero">
    <div class="container" data-aos="zoom-in">
        <span class="badge badge-primary">Get In Touch</span>
        <h1>We'd Love to Hear From You</h1>
        <p>Have questions about our inventory, warranty, or services? Our team of laptop experts is ready to assist you. Contact us today!</p>
    </div>
</section>

<!-- Contact Info & Form Section -->
<section class="section" id="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Left Side: Contact Info Sidebar -->
            <div class="contact-info-sidebar" data-aos="fade-right">
                <!-- Card 1: Call Us -->
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-card-details">
                        <h4>Call Us Directly</h4>
                        <p>Speak with our sales executive instantly:</p>
                        <p><a href="tel:+919885554431" style="font-weight: 700; color: var(--primary-color);">+91 98855 54431</a></p>
                    </div>
                </div>
                
                <!-- Card 2: WhatsApp Chat -->
                <div class="contact-card" style="border-left-color: var(--whatsapp);">
                    <div class="contact-card-icon" style="background-color: rgba(37, 211, 102, 0.08);">
                        <i class="fab fa-whatsapp" style="color: var(--whatsapp);"></i>
                    </div>
                    <div class="contact-card-details">
                        <h4>WhatsApp Chat</h4>
                        <p>Chat with us for catalog & pictures:</p>
                        <p><a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20want%20to%20see%20the%20latest%20laptop%20catalog." 
                              target="_blank" 
                              rel="noopener noreferrer" 
                              style="font-weight: 700; color: var(--whatsapp);">+91 98855 54431</a></p>
                    </div>
                </div>
                
                <!-- Card 3: Email Us -->
                <div class="contact-card" style="border-left-color: var(--secondary-color);">
                    <div class="contact-card-icon" style="background-color: rgba(14, 165, 233, 0.08);">
                        <i class="fas fa-envelope" style="color: var(--secondary-color);"></i>
                    </div>
                    <div class="contact-card-details">
                        <h4>Email Support</h4>
                        <p>For corporate and bulk inquiries:</p>
                        <p><a href="mailto:yashcomputershyd@gmail.com" style="font-weight: 700; color: var(--secondary-color);">yashcomputershyd@gmail.com</a></p>
                    </div>
                </div>
                
                <!-- Card 4: Head Office -->
                <div class="contact-card" style="border-left-color: var(--accent-color);">
                    <div class="contact-card-icon" style="background-color: rgba(245, 158, 11, 0.08);">
                        <i class="fas fa-map-marker-alt" style="color: var(--accent-color);"></i>
                    </div>
                    <div class="contact-card-details">
                        <h4>Head Office</h4>
                        <p>Siri Towers, Plot No 402, Meghamala Apartment Road, beside Aster Prime Hospital, Ameerpet, Hyderabad, Telangana—500038</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Interactive Form -->
            <div class="contact-form-wrapper" id="lead-form-section" data-aos="fade-left">
                <h2>Send Us a Message</h2>
                <p>Fill out the form below, and our team will get back to you with personalized laptop recommendations and pricing within 30 minutes.</p>
                
                <form class="contact-form" method="POST" action="">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="contact-name" class="form-label">Full Name *</label>
                        <input type="text" id="contact-name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="contact-phone" class="form-label">Phone Number (WhatsApp) *</label>
                            <input type="tel" id="contact-phone" name="phone" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                        </div>
                        
                        <!-- Email -->
                        <div class="form-group">
                            <label for="contact-email" class="form-label">Email Address (Optional)</label>
                            <input type="email" id="contact-email" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                    </div>
                    
                    <!-- Requirement -->
                    <div class="form-group">
                        <label for="contact-requirement" class="form-label">What are you looking for? *</label>
                        <select id="contact-requirement" name="requirement" class="form-control" required>
                            <option value="" disabled selected>Select your requirement</option>
                            <option value="Coding & Development">Laptops for Coding & Developers</option>
                            <option value="Student Laptop">Student Laptops (Budget Friendly)</option>
                            <option value="Apple MacBook">Apple MacBooks & iMacs</option>
                            <option value="Apple Accessories">Apple Accessories (Magic Mouse, Keyboard)</option>
                            <option value="Gaming & Workstation">Gaming & Workstation Laptops</option>
                            <option value="Laptop Repair / Upgrade">Laptop Repair or RAM/SSD Upgrade</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div class="form-group">
                        <label for="contact-message" class="form-label">Your Message / Budget / Laptop Specs</label>
                        <textarea id="contact-message" name="message" class="form-control" placeholder="Tell us about the processor, RAM, storage, or budget you have in mind..."></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 1rem;">
                        <i class="fas fa-paper-plane"></i> Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Google Map Section -->
<section class="section contact-map-section">
    <div class="container" data-aos="zoom-in">
        <div class="map-container">
            <!-- Embedded Google Map pointing to Ameerpet, Hyderabad -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.827223971481!2d78.44190807596856!3d17.432098201111663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90cf6592d319%3A0x6b77227e4624dfdf!2sAster%20Prime%20Hospital!5e0!3m2!1sen!2sin!4v1691060000000!5m2!1sen!2sin" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Yash Computers Head Office Location Map"></iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section" id="faq-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="badge badge-primary">FAQ</span>
            <h2>Frequently Asked Questions</h2>
            <p>Have questions about refurbished laptops, warranty, or services? Find quick answers below.</p>
        </div>
        
        <!-- FAQ Accordion Grid -->
        <div class="faq-grid" data-aos="fade-up" data-aos-delay="100">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <div class="faq-question">
                    What is a refurbished laptop?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    A refurbished laptop is a pre-owned, corporate-lease-returned device that has been professionally audited, cleaned, repaired, and restored to full working condition. Unlike typical second-hand laptops, our refurbished laptops undergo a strict 50-step quality check, battery health verification, full internal cleaning, and thermal paste replacement. They perform exactly like new but cost up to 60% less!
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="faq-item">
                <div class="faq-question">
                    Are refurbished laptops reliable?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, absolutely! Our laptops are sourced from premium corporate leases (which are built to much higher hardware standards than consumer-grade laptops). Because we test every single component — including motherboard stability, SSD speeds, RAM, keyboard, ports, and battery health — they are highly reliable. We are so confident in their quality that we back every purchase with a 1-year warranty.
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="faq-item">
                <div class="faq-question">
                    Do you provide a warranty on your laptops?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, all our refurbished laptops include a minimum 6-month to 1-year hardware warranty. This covers the motherboard, display, keyboard, and battery. If you face any hardware issues during the warranty period, we will repair or replace the component free of charge. We also offer a 15-day hassle-free replacement warranty.
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="faq-item">
                <div class="faq-question">
                    What brands and models are available?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    We offer a wide range of premium business-class laptops from leading global brands including Dell (Latitude, Precision), HP (EliteBook, ProBook), Lenovo (ThinkPad T-series, L-series), and Apple (MacBook Air, MacBook Pro). Our inventory is updated weekly with fresh imports.
                </div>
            </div>
            
            <!-- FAQ 5 -->
            <div class="faq-item">
                <div class="faq-question">
                    Do you deliver across India, and is Cash on Delivery (COD) available?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, we provide safe, secure, and fast delivery across India. Every laptop is packed in multi-layered bubble wrap and heavy-duty boxes to prevent shipping damage. Cash on Delivery (COD) and easy EMI options through Bajaj Finserv are available for customers in Hyderabad and surrounding cities.
                </div>
            </div>
            
            <!-- FAQ 6 -->
            <div class="faq-item">
                <div class="faq-question">
                    Can I upgrade the RAM or SSD before buying?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes! We offer fully customizable configurations. You can choose to upgrade the RAM (from 8GB to 16GB or 32GB) and the SSD storage (from 256GB to 512GB or 1TB NVMe) according to your specific coding, gaming, or office requirements. Our engineers will install the upgrades and test them before delivering the laptop to you.
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include Footer
include 'includes/footer.php';
?>
