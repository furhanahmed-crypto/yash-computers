<?php
/**
 * Yash Computers - Store Locations Page
 * Displays various physical store locations with contact details, maps, and hours.
 */

// Define page-specific SEO variables
$page_title = "Our Store Locations | Yash Computers | Hyderabad, Tirupati";
$page_description = "Visit Yash Computers stores in Ameerpet, SR Nagar, and Tirupati. Touch, feel, and test our wide range of refurbished laptops before you purchase.";
$active_page = "stores";

// Include Header
include 'includes/header.php';
?>

<!-- Stores Hero Section -->
<section class="about-hero">
    <div class="container" data-aos="zoom-in">
        <span class="badge badge-primary">Our Stores</span>
        <h1>Visit Our Stores</h1>
        <p>Yash Computers has multiple physical stores across Telangana and Andhra Pradesh. Stop by to test and verify your laptop before making a decision!</p>
    </div>
</section>

<!-- Stores Grid Section -->
<section class="section">
    <div class="container">
        <div class="stores-grid">
            
            <!-- Store 1: Ameerpet (Head Office) -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="100">
                <div class="store-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80" 
                         alt="Yash Computers Ameerpet Store" 
                         class="store-img"
                         width="380" 
                         height="220">
                    <span class="store-status">Main Branch</span>
                </div>
                <div class="store-info">
                    <h3>Ameerpet Store (HQ)</h3>
                    <div class="store-details">
                        <div class="store-detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Siri Towers, Plot No 402, Meghamala Apartment Road, beside Aster Prime Hospital, Ameerpet, Hyderabad, Telangana—500038</p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+919885554431">+91 98855 54431</a></p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-clock"></i>
                            <p>10:00 AM - 9:00 PM (Mon - Sat)<br>11:00 AM - 6:00 PM (Sun)</p>
                        </div>
                    </div>
                    <div class="store-actions">
                        <a href="https://maps.google.com/?q=Siri+Towers+Ameerpet+Hyderabad" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-outline btn-sm">
                            <i class="fas fa-directions"></i> Directions
                        </a>
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20want%20to%20visit%20your%20Ameerpet%20store." 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-sm">
                            <i class="fab fa-whatsapp"></i> Chat Store
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Store 2: SR Nagar Store -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="200">
                <div class="store-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=600&q=80" 
                         alt="Yash Computers SR Nagar Store" 
                         class="store-img"
                         width="380" 
                         height="220">
                    <span class="store-status" style="background-color: var(--secondary-color);">Active Store</span>
                </div>
                <div class="store-info">
                    <h3>SR Nagar Store</h3>
                    <div class="store-details">
                        <div class="store-detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Shop No. 12, Ground Floor, Sai Complex, Near Metro Station, SR Nagar, Hyderabad, Telangana—500038</p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+919885554431">+91 98855 54431</a></p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-clock"></i>
                            <p>10:00 AM - 8:30 PM (Mon - Sat)<br>Closed on Sunday</p>
                        </div>
                    </div>
                    <div class="store-actions">
                        <a href="https://maps.google.com/?q=SR+Nagar+Hyderabad" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-outline btn-sm">
                            <i class="fas fa-directions"></i> Directions
                        </a>
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20I%20want%20to%20visit%20your%20SR%20Nagar%20store." 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-sm">
                            <i class="fab fa-whatsapp"></i> Chat Store
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Store 3: Tirupati Store -->
            <div class="store-card" data-aos="fade-up" data-aos-delay="300">
                <div class="store-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=600&q=80" 
                         alt="Yash Computers Tirupati Store" 
                         class="store-img"
                         width="380" 
                         height="220">
                    <span class="store-status" style="background-color: var(--accent-color); color: var(--text-primary);">Opening Soon!</span>
                </div>
                <div class="store-info">
                    <h3>Tirupati Store</h3>
                    <div class="store-details">
                        <div class="store-detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Opposite RTC Bus Stand, Tirumala Bypass Road, Tirupati, Andhra Pradesh—517501</p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:+919885554431">+91 98855 54431</a></p>
                        </div>
                        <div class="store-detail-item">
                            <i class="fas fa-clock"></i>
                            <p>Grand Opening: Dec 2025<br>Stay tuned for massive launch offers!</p>
                        </div>
                    </div>
                    <div class="store-actions" style="grid-template-columns: 1fr;">
                        <a href="https://wa.me/919885554431?text=Hi%20Yash%20Computers%2C%20notify%20me%20when%20your%20Tirupati%20store%20opens." 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-accent btn-sm"
                           style="width: 100%;">
                            <i class="fas fa-bell"></i> Notify Me on Launch
                        </a>
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
