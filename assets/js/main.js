/**
 * Yash Computers - Main JavaScript
 * Handles interactive elements, mobile navigation, tab switching, FAQ accordion,
 * form submissions, and AOS animation initialization.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Animate On Scroll (AOS)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
            delay: 100
        });
    }

    // Sticky Header Effect
    const header = document.querySelector('.header');
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Run once on load

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            navMenu.classList.toggle('active');
            
            // Toggle icon class between hamburger and close
            const icon = menuToggle.querySelector('i');
            if (icon) {
                if (navMenu.classList.contains('active')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    icon.className = 'fas fa-bars';
                }
            }
        });

        // Close menu when clicking a link
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    icon.className = 'fas fa-bars';
                }
            });
        });
    }

    // Category Tabs Switching
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    if (tabButtons.length > 0 && tabContents.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetTab = button.getAttribute('data-tab');

                // Remove active class from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                // Add active class to current button and target content
                button.classList.add('active');
                const activeContent = document.getElementById(targetTab);
                if (activeContent) {
                    activeContent.classList.add('active');
                    
                    // Re-trigger AOS animations inside the active tab
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                }
            });
        });
    }

    // FAQ Accordion
    const faqQuestions = document.querySelectorAll('.faq-question');

    if (faqQuestions.length > 0) {
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const isActive = item.classList.contains('active');

                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(faqItem => {
                    faqItem.classList.remove('active');
                    const answer = faqItem.querySelector('.faq-answer');
                    if (answer) {
                        answer.style.maxHeight = null;
                    }
                });

                // If the clicked item wasn't active, open it
                if (!isActive) {
                    item.classList.add('active');
                    const answer = item.querySelector('.faq-answer');
                    if (answer) {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                }
            });
        });
    }

    // Lead Capture Form Submission (Simulated with beautiful feedback)
    const leadForms = document.querySelectorAll('.lead-form, .contact-form');

    leadForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Submit';

            if (submitBtn) {
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            }

            // Collect form data
            const formData = new FormData(form);
            const name = formData.get('name') || '';
            const phone = formData.get('phone') || '';
            const email = formData.get('email') || '';
            const requirement = formData.get('requirement') || '';
            const message = formData.get('message') || '';

            // Simulate API call
            setTimeout(() => {
                // Hide loading state and show success message
                if (submitBtn) {
                    submitBtn.innerHTML = '<i class="fas fa-check"></i> Success!';
                    submitBtn.style.backgroundColor = 'var(--success)';
                }

                // Create a beautiful floating notification or inline success banner
                const successBanner = document.createElement('div');
                successBanner.className = 'form-success-banner';
                successBanner.style.cssText = `
                    background-color: rgba(16, 185, 129, 0.1);
                    border: 1px solid var(--success);
                    color: #065f46;
                    padding: 1.25rem;
                    border-radius: var(--radius-md);
                    margin-top: 1.5rem;
                    font-weight: 600;
                    text-align: center;
                    animation: fadeIn 0.5s ease;
                `;
                successBanner.innerHTML = `
                    <i class="fas fa-check-circle" style="color: var(--success); font-size: 1.5rem; margin-bottom: 0.5rem; display: block;"></i>
                    Thank you, ${name}! Your inquiry has been received.<br>
                    <span style="font-weight: 500; font-size: 0.875rem; color: var(--text-secondary);">
                        Our team will contact you within 30 minutes.
                    </span>
                `;

                // Remove existing success banner if any
                const existingBanner = form.querySelector('.form-success-banner');
                if (existingBanner) {
                    existingBanner.remove();
                }

                form.appendChild(successBanner);

                // Reset form fields
                form.reset();

                // Reset button after 3 seconds
                setTimeout(() => {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                        submitBtn.style.backgroundColor = '';
                    }
                }, 4000);

                // Construct WhatsApp message if user wants to instantly chat
                const whatsappText = encodeURIComponent(`Hi Yash Computers, I just submitted an inquiry on your website.\n\nName: ${name}\nPhone: ${phone}\nRequirement: ${requirement}\nMessage: ${message}`);
                const whatsappUrl = `https://wa.me/919885554431?text=${whatsappText}`;
                
                // Ask user if they want to chat on WhatsApp immediately
                setTimeout(() => {
                    if (confirm("Would you like to connect with our sales executive instantly on WhatsApp for a faster response?")) {
                        window.open(whatsappUrl, '_blank');
                    }
                }, 1000);

            }, 1500);
        });
    });
});
