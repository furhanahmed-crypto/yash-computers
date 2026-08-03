# Yash Computers - Design & Architecture Document

This document outlines the design system, architectural decisions, and lead generation strategy implemented for the **Yash Computers** website.

---

## 1. Design System & CSS Tokens

The website uses a modern, clean, and professional design system built with CSS custom properties (`:root` tokens) in `assets/css/style.css`. This ensures high maintainability and consistent branding across all pages.

### Color Palette
- **Primary Color (Deep Blue)**: `#1e3a8a` (represents trust, reliability, and corporate professionalism).
- **Secondary Color (Electric Cyan)**: `#0ea5e9` (represents technology, speed, and modern innovation).
- **Accent Color (Amber/Orange)**: `#f59e0b` (used for high-visibility CTAs, pricing badges, and ratings).
- **Dark Backgrounds**: `#0f172a` (Slate 900) and `#1e293b` (Slate 800) for premium, high-contrast sections.
- **Light Backgrounds**: `#ffffff` and `#f8fafc` (Slate 50) for clean, readable content areas.
- **WhatsApp Green**: `#25d366` (official WhatsApp brand color for floating action buttons).
- **Phone Blue**: `#3b82f6` (official direct call color for floating action buttons).

### Typography
- **Font Family**: `'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif` (a highly legible, modern geometric sans-serif font optimized for digital screens).
- **Font Weights**: 300 (Light), 400 (Regular), 500 (Medium), 600 (Semi-Bold), 700 (Bold), 800 (Extra-Bold).

### Borders & Shadows
- **Border Radius**:
  - `var(--radius-sm)`: `0.375rem` (small buttons, labels)
  - `var(--radius-md)`: `0.5rem` (form controls, standard buttons)
  - `var(--radius-lg)`: `1rem` (cards, images)
  - `var(--radius-xl)`: `1.5rem` (large containers, forms)
  - `var(--radius-full)`: `9999px` (badges, pills, floating buttons)
- **Shadows**:
  - `var(--shadow-sm)`: Subtle shadow for small elements.
  - `var(--shadow-md)`: Standard card and button shadow.
  - `var(--shadow-lg)`: Hover state elevations.
  - `var(--shadow-xl)`: Deep shadow for hero elements and forms.
  - `var(--shadow-glow)`: Subtle cyan glow for tech elements.

---

## 2. File & Directory Structure

The project follows a highly modular, clean PHP structure to ensure code reusability, separation of concerns, and ease of maintenance.

```
yash-computers/
├── index.php                 # Home Page (Landing Page)
├── about.php                 # About Us Page (Story & Audit Process)
├── stores.php                # Stores Page (Physical Locations)
├── contact.php               # Contact Us Page (Form, Map, & FAQs)
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

## 3. Lead Generation Strategy

Since the website does not support direct e-commerce purchases, the entire user experience is engineered to guide visitors toward contacting Yash Computers via **WhatsApp** or **Direct Call**.

### Key Lead Capture Mechanisms:
1. **Floating Action Buttons**: Fixed at the bottom-right corner of every page, featuring a direct call button and a WhatsApp chat button. Both buttons have pulse animations and hover tooltips to draw attention without being intrusive.
2. **Interactive Lead Forms**: Located at the bottom of the Home, About, and Stores pages, and prominently featured on the Contact page. The forms collect the user's name, phone number (WhatsApp), requirement, and budget.
3. **Instant WhatsApp Redirection**: Upon submitting any form, the user is greeted with a beautiful success banner and a modal prompt asking if they want to connect with a sales executive instantly on WhatsApp. If they click "Yes," they are redirected to a pre-filled WhatsApp message containing their form details.
4. **Contextual Section CTAs**: Every category tab (Coding, Student, Apple, Gaming) has a dedicated CTA button (e.g., "Get Student Discount" or "Request MacBook Catalog") that anchors the user directly to the lead form or opens WhatsApp.

---

## 4. Modern UI & Micro-Interactions

To represent a modern, high-tech brand, the website incorporates several subtle micro-interactions and animations:
- **Animate On Scroll (AOS)**: Elements fade, slide, and zoom smoothly as the user scrolls down the page.
- **Sticky Blur Header**: The navigation bar features a modern `backdrop-filter: blur()` effect that becomes solid and compact upon scrolling.
- **Interactive Tabs**: Category tabs switch instantly with a smooth fade-in and slide-up animation.
- **FAQ Accordion**: FAQ answers expand and collapse with smooth height transitions and rotating chevron indicators.
- **Card Hover Elevations**: Service, store, and testimonial cards lift slightly and gain a deeper shadow when hovered.
- **Form Focus Glow**: Input fields glow with a soft cyan border and shadow when focused.
