# Yash Computers Website

A highly modern, responsive, and SEO-optimized landing page website for **Yash Computers**, a trusted retailer of premium certified refurbished laptops and professional repair services.

---

## 🚀 Live Demo & Lead Generation Focus

The primary purpose of this website is to **generate high-quality sales leads**. It does not support e-commerce transactions. Instead, it guides users to contact Yash Computers via **WhatsApp** or **Direct Call** through multiple interactive touchpoints, floating action widgets, and conversion-focused lead capture forms.

---

## ✨ Key Features

- **High-Tech Dark Red Theme**: Built with a clean, high-contrast, professional dark mode aesthetic utilizing the modern `'Plus Jakarta Sans'` typeface and vibrant neon red accents, inspired by the official **Yash Computers** logo.
- **SEO-Friendly Architecture**: Features **five dedicated, SEO-optimized landing pages** for each category to maximize organic search traffic:
  - [Laptops for Coding & Developers](coding-laptops.php)
  - [Student Laptops](student-laptops.php)
  - [Apple Devices](apple-devices.php)
  - [Apple Ecosystem & Accessories](apple-accessories.php)
  - [Gaming & Workstation Laptops](gaming-workstations.php)
- **Interactive Category Tabs**: A dedicated section on the home page that displays the five categories with a dynamic "Know More" button redirecting to their respective SEO landing pages.
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

## Pages

| File | Purpose |
|------|---------|
| `index.php` | Home / landing |
| `our-laptops.php` | Laptop range (tabs) |
| `developer-laptops.php` | SEO — developer laptops |
| `student-laptops.php` | SEO — student laptops |
| `macbooks.php` | SEO — MacBooks & iMacs |
| `apple-accessories.php` | SEO — Apple accessories |
| `gaming-laptops.php` | SEO — gaming / workstations |
| `about.php` | About |
| `stores.php` | Store locations |
| `contact.php` | Contact + FAQ |

Nav label for the range page: **Our Laptops** (not “Explore Categories”).

Tabs (clear, non-duplicate):
1. Developer Laptops
2. Student Laptops
3. MacBooks & iMacs
4. Apple Accessories
5. Gaming Laptops

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
