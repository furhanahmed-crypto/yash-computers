<?php
/**
 * Yash Computers - Common Footer Include
 * Handles footer columns, copyright, floating lead widgets, and JavaScript libraries.
 */
?>
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Column 1: Brand & About -->
                <div class="footer-col footer-about">
                    <a href="index.php" class="logo" style="margin-bottom: 1.5rem;">
                        <img src="assets/images/logo-nav.png" alt="Yash Computers" class="logo-img" width="40" height="40">
                        <span>Yash<span>Computers</span></span>
                    </a>
                    <p>Yash Computers is India's trusted destination for high-quality certified refurbished laptops and professional repair services. Setting the gold standard in refurbishment since 2013.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://whatsapp.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <!-- Column 2: Quick Links -->
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php" class="footer-link"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="our-laptops.php" class="footer-link"><i class="fas fa-chevron-right"></i> Our Laptops</a></li>
                        <li><a href="about.php" class="footer-link"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="stores.php" class="footer-link"><i class="fas fa-chevron-right"></i> Our Stores</a></li>
                        <li><a href="contact.php" class="footer-link"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Categories -->
                <div class="footer-col">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><a href="developer-laptops.php" class="footer-link"><i class="fas fa-chevron-right"></i> Developer Laptops</a></li>
                        <li><a href="student-laptops.php" class="footer-link"><i class="fas fa-chevron-right"></i> Student Laptops</a></li>
                        <li><a href="macbooks.php" class="footer-link"><i class="fas fa-chevron-right"></i> MacBooks &amp; iMacs</a></li>
                        <li><a href="apple-accessories.php" class="footer-link"><i class="fas fa-chevron-right"></i> Apple Accessories</a></li>
                        <li><a href="gaming-laptops.php" class="footer-link"><i class="fas fa-chevron-right"></i> Gaming Laptops</a></li>
                    </ul>
                </div>
                
                <!-- Column 4: Contact Info -->
                <div class="footer-col">
                    <h3>Contact</h3>
                    <div class="footer-contact-info">
                        <div class="footer-contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>
                                <strong>Stores:</strong>
                                Suchitra · Ameerpet · Kukatpally · Vijayawada
                            </span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>
                                <strong>Branch phones:</strong><br>
                                Suchitra: <a href="tel:+918121830905" style="color: var(--text-muted);">8121830905</a><br>
                                Kukatpally: <a href="tel:+919963540040" style="color: var(--text-muted);">9963540040</a><br>
                                Ameerpet: <a href="tel:+918247788615" style="color: var(--text-muted);">8247788615</a><br>
                                Vijayawada: <a href="tel:+919989658327" style="color: var(--text-muted);">9989658327</a>
                            </span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>
                                <strong>Email:</strong>
                                <a href="mailto:Yashcomputersofficialid@gmail.com" style="color: var(--text-muted);">Yashcomputersofficialid@gmail.com</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Yash Computers. All Rights Reserved. Designed for high performance lead generation.</p>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    <a href="#" class="footer-bottom-link">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp and Call Action Buttons Widget -->
    <?php include 'includes/whatsapp-call-widget.php'; ?>

    <!-- AOS Animation Library JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <!-- Custom Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
