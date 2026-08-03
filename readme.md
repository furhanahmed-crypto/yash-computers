# Yash Computers Website

A highly modern, responsive, and lead-optimized landing page website for **Yash Computers**, a trusted retailer of premium certified refurbished laptops and professional repair services.

---

## 🚀 Live Demo & Lead Generation Focus

The primary purpose of this website is to **generate high-quality sales leads**. It does not support e-commerce transactions. Instead, it guides users to contact Yash Computers via **WhatsApp** or **Direct Call** through multiple interactive touchpoints, floating action widgets, and conversion-focused lead capture forms.

---

## ✨ Key Features

- **Modern UI/UX**: Built with a clean, high-contrast, professional dark/light theme utilizing the modern `'Plus Jakarta Sans'` typeface.
- **Interactive Category Tabs**: A dedicated section that displays five distinct categories:
  - Laptops for Coding & Developers
  - Student Laptops
  - Apple Devices
  - Apple (Accessories & Ecosystem)
  - Gaming & Workstation Laptops
- **Floating Call & WhatsApp Action Buttons**: Fixed at the bottom-right corner of every page with attention-grabbing pulse animations.
- **Animate On Scroll (AOS)**: Fluid animations (fade, slide, zoom) as users explore the site.
- **Rigorous 50-Step Quality Process**: Transparently showcases the refurbishment process to build immediate brand trust.
- **Multilingual/Multi-city Stores**: Detailed store cards for Ameerpet (HQ), SR Nagar, and Tirupati branches with direct directions and WhatsApp chat links.
- **Interactive FAQ Accordion**: Answers common questions about refurbished laptops, warranty, and delivery.
- **Interactive Forms with WhatsApp Redirection**: Forms collect customer requirements and prompt them to instantly connect with a sales executive on WhatsApp with pre-filled details.

---

## 🛠️ Tech Stack

- **Backend**: PHP (Modular architecture using `includes` and `sections` folders)
- **Frontend**: HTML5, CSS3 (Custom design system with `:root` variables), JavaScript (Vanilla ES6)
- **Icons**: FontAwesome 6.4.0 (via CDN)
- **Animations**: AOS Animate On Scroll (via CDN)
- **Typography**: Google Fonts (Plus Jakarta Sans)

---

## 📂 Project Structure

```
yash-computers/
├── index.php                 # Home Page (Landing Page)
├── about.php                 # About Us Page (Story & Audit Process)
├── stores.php                # Stores Page (Physical Locations)
├── contact.php               # Contact Us Page (Form, Map, & FAQs)
├── design.md                 # Design & Architecture Document
├── agents.md                 # AI Agent Maintenance Guide
├── readme.md                 # This file
│
├── includes/                 # Reusable Global Layouts
│   ├── header.php            # SEO Meta, Navigation Bar, & CDNs
│   ├── footer.php            # Footer Columns, Copyright, & Scripts
│   └── whatsapp-call-widget.php # Fixed Floating Action Buttons
│
├── sections/                 # Reusable Page Sections
│   ├── hero.php              # Hero Banner with CTAs & Trust Badges
│   ├── stats.php             # Key Statistics & Achievements
│   ├── categories-tabs.php   # Interactive Category Tabs
│   ├── why-choose-us.php     # 50-Step Quality Process & Value Prop
│   ├── services.php          # Repair & Upgrade Services Grid
│   ├── testimonials.php      # Verified Google Reviews
│   ├── lead-form.php         # Main Lead Capture Form
│   └── cta-banner.php        # Call-To-Action Banner
│
└── assets/                   # Static Assets
    ├── css/
    │   └── style.css         # Main Stylesheet (Design System & Media Queries)
    ├── js/
    │   └── main.js           # Navigation, Tabs, FAQ, Form Handling, & AOS
    └── images/
        └── favicon.svg       # Custom SVG Favicon (Laptop + Code)
```

---

## ⚙️ Local Setup Instructions

### Prerequisites
To run this website locally, you need a local web server with PHP support installed.
- **Windows**: XAMPP, WampServer, or Laragon
- **macOS**: MAMP, Herd, or built-in PHP
- **Linux**: Apache/Nginx with PHP

### Steps to Run
1. Clone or copy this repository into your web server's root directory (e.g., `htdocs` for XAMPP, `www` for WampServer).
2. Start your local web server (Apache/PHP).
3. Open your web browser and navigate to:
   ```
   http://localhost/yash-computers/
   ```

### Quick Run (Command Line)
If you have PHP installed globally, you can run the built-in PHP development server directly from the project root:
1. Open your terminal in the project root folder.
2. Run the following command:
   ```bash
   php -S localhost:8000
   ```
3. Open your browser and go to:
   ```
   http://localhost:8000
   ```

---

## 📈 Lead Conversion Flow

1. **Visitor Lands**: User explores the modern, fast-loading landing page.
2. **Engagement**: User interacts with the categories tabs, reads testimonials, and learns about the 50-step quality audit.
3. **Action**: User clicks one of the many CTAs, the floating action buttons, or fills out a lead form.
4. **Form Submission**: User submits their name, phone, and requirements.
5. **WhatsApp Redirection**: The website displays a beautiful success message and prompts the user to connect on WhatsApp. If accepted, it opens WhatsApp with a pre-filled message containing their requirements, leading to an immediate, high-intent sales conversation.
