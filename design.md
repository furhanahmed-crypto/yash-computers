# Yash Computers - Design & Architecture Document

This document outlines the design system, architectural decisions, and lead generation strategy implemented for the **Yash Computers** website.

---

## 1. Design System & CSS Tokens

The website uses a highly modern, high-tech, and futuristic dark-red theme built with CSS custom properties (`:root` tokens) in `assets/css/style.css`. This is inspired by the sleek black and red **Yash Computers** logo.

### Color Palette
- **Primary Color (Neon Red)**: `#ff003c` (represents energy, technology, and high-performance computing).
- **Secondary Color (Neon Pinkish Red)**: `#ff3366` (used for gradients and secondary highlights).
- **Accent Color (Amber/Orange)**: `#f59e0b` (used strictly for ratings, stars, and critical alerts).
- **Background Primary (Obsidian Black)**: `#09090b` (gives a premium, high-tech dark mode aesthetic).
- **Background Secondary (Dark Charcoal)**: `#121215` (used for card backgrounds and secondary sections).
- **Background Tertiary (Medium Charcoal)**: `#1a1a22` (used for active states and input backgrounds).
- **Text Primary (Silver-White)**: `#f4f4f5` (ensures high legibility and a sleek look on dark backgrounds).
- **Text Secondary (Zinc Gray)**: `#a1a1aa` (used for paragraph descriptions and body text).
- **WhatsApp Green**: `#25d366` (official WhatsApp brand color for floating action buttons).
- **Phone Blue**: `#3b82f6` (official direct call color for floating action buttons).

### Typography
- **Font Family**: `'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif` (a highly legible, modern geometric sans-serif font optimized for digital screens).
- **Font Weights**: 300 (Light), 400 (Regular), 500 (Medium), 600 (Semi-Bold), 700 (Bold), 800 (Extra-Bold).

### Borders & Shadows (Futuristic Glassmorphism)
- **Borders**: Elements use translucent white borders (`rgba(255, 255, 255, 0.08)`) that transition to a glowing neon red border (`rgba(255, 0, 60, 0.35)`) on hover.
- **Shadows**:
  - `var(--shadow-glow)`: Subtle neon red glow (`0 0 25px rgba(255, 0, 60, 0.25)`).
  - `var(--shadow-glow-strong)`: Intense neon red glow (`0 0 35px rgba(255, 0, 60, 0.45)`).
- **Glassmorphism**: Cards use a semi-transparent background (`rgba(18, 18, 22, 0.5)`) with a blur filter (`backdrop-filter: blur(12px)`) for a modern, premium feel.

---

## 2. File & Directory Structure

The project follows a highly modular, clean PHP structure to ensure code reusability, separation of concerns, and ease of maintenance.

```
yash-computers/
├── index.php                 # Home Page (Landing Page)
├── about.php                 # About Us Page (Story & Audit Process)
├── stores.php                # Stores Page (Physical Locations)
├── contact.php               # Contact Us Page (Form, Map, & FAQs)
│
├── coding-laptops.php        # Category Page: Laptops for Coding & Developers
├── student-laptops.php       # Category Page: Student Laptops
├── apple-devices.php         # Category Page: Apple MacBooks & iMacs
├── apple-accessories.php     # Category Page: Apple Peripherals & Ecosystem
├── gaming-workstations.php   # Category Page: Gaming & Workstation Laptops
│
├── design.md                 # Design & Architecture Document
├── agents.md                 # AI Agent Maintenance Guide
├── readme.md                 # Project Setup & Overview
│
├── includes/                 # Reusable Global Layouts
│   ├── header.php            # SEO Meta, Navigation Bar, & CDNs
│   ├── footer.php            # Footer Columns, Copyright, & Scripts
│   └── whatsapp-call-widget.php # Fixed Floating Action Buttons
│
├── sections/                 # Reusable Page Sections
│   ├── hero.php              # Hero Banner with CTAs & Trust Badges
│   ├── stats.php             # Key Statistics & Achievements
│   ├── categories-tabs.php   # Interactive Category Tabs with "Know More" buttons
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

## 3. SEO-Friendly Architecture

To maximize organic search traffic and search engine rankings, the website features **dedicated, SEO-optimized landing pages** for each product category:

1. **Coding & Developers (`coding-laptops.php`)**: Targets keywords like "refurbished laptops for developers", "programming laptops second hand", and "used coding laptops hyderabad".
2. **Student Laptops (`student-laptops.php`)**: Targets keywords like "affordable student laptops", "second hand laptops for college", and "budget refurbished laptops hyderabad".
3. **Apple Devices (`apple-devices.php`)**: Targets keywords like "refurbished macbook pro hyderabad", "second hand macbook air", and "used apple laptops".
4. **Apple Accessories (`apple-accessories.php`)**: Targets keywords like "refurbished apple magic mouse", "used magic keyboard", and "genuine apple accessories hyderabad".
5. **Gaming & Workstations (`gaming-workstations.php`)**: Targets keywords like "refurbished gaming laptops", "used mobile workstations", and "second hand dell precision hyderabad".

### Key SEO Elements Implemented:
- **Dynamic Title & Meta Tags**: Every page sets unique, high-intent titles and meta descriptions before including the header.
- **Internal Linking Footer**: The footer has been updated to link directly to all five category pages, passing SEO authority (link juice) across the entire site.
- **"Know More" Buttons**: The interactive tabs section on the home page includes a prominent "Know More" button for each category, guiding users and search crawlers to the dedicated landing pages.
- **Sleek Map & Dark Mode**: The contact page features a dark-mode-themed embedded Google Map to match the high-tech aesthetic while providing local SEO value.

---

## 4. Lead Generation Strategy

Since the website does not support direct e-commerce purchases, the entire user experience is engineered to guide visitors toward contacting Yash Computers via **WhatsApp** or **Direct Call**.

### Key Lead Capture Mechanisms:
1. **Floating Action Buttons**: Fixed at the bottom-right corner of every page, featuring a direct call button and a WhatsApp chat button. Both buttons have pulse animations and hover tooltips.
2. **Interactive Lead Forms**: Located at the bottom of every page, collecting the user's name, phone number (WhatsApp), requirement, and budget.
3. **Instant WhatsApp Redirection**: Upon submitting any form, the user is prompted to instantly connect with a sales executive on WhatsApp with pre-filled details.
4. **Contextual Section CTAs**: Every category tab and page has a dedicated CTA button that anchors the user directly to the lead form or opens WhatsApp.
