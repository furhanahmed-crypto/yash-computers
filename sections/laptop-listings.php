<?php
/**
 * Featured Laptop Listings
 * Card grid of configured refurbished laptops with Call & Book CTAs.
 */

$laptop_listings = [
    [
        'name'  => 'Dell Precision 7550',
        'image' => 'Dell-Precision-7550.jpg',
        'price' => 39999,
        'specs' => [
            'Intel Core i7 / 10th Gen',
            '16GB RAM (upgradable up to 128GB)',
            '512GB SSD (upgradable up to 4TB)',
            'NVIDIA Quadro T2000 graphics',
        ],
    ],
    [
        'name'  => 'Dell Latitude 5410',
        'image' => 'Dell-Latitude-5410.jpg',
        'price' => 29799,
        'specs' => [
            'Intel Core i7 / 10th Gen',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
            'Intel integrated graphics',
        ],
    ],
    [
        'name'  => 'HP ProBook 645 G4',
        'image' => 'Hp-probook-645g4.jpg',
        'price' => 18799,
        'specs' => [
            'AMD Ryzen 5 Pro',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
        ],
    ],
    [
        'name'  => 'Acer TravelMate 2410',
        'image' => 'Acer-Travelmate-2410.jpg',
        'price' => 21799,
        'specs' => [
            'Intel Core i5 / 8th Gen',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
            'Intel integrated graphics',
        ],
    ],
    [
        'name'  => 'HP 240 G7',
        'image' => 'Hp-240-G7.jpg',
        'price' => 22799,
        'specs' => [
            'Intel Core i5 / 8th Gen',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
            'Intel integrated graphics',
        ],
    ],
    [
        'name'  => 'Lenovo ThinkPad T495',
        'image' => 'Lenovo-Thinkpad-T495.jpg',
        'price' => 21799,
        'specs' => [
            'AMD Ryzen 5 Pro',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
        ],
    ],
    [
        'name'  => 'Lenovo ThinkPad T480',
        'image' => 'Lenovo-Thinkpad-480.jpg',
        'price' => 24799,
        'specs' => [
            'Intel Core i7 / 8th Gen',
            '8GB RAM (upgradable up to 32GB)',
            '256GB SSD (upgradable up to 2TB)',
            'Intel integrated graphics',
        ],
    ],
    [
        'name'  => 'Lenovo ThinkPad T30',
        'image' => 'Lenovo-Thinkpad-T30.jpg',
        'price' => 12799,
        'specs' => [
            'Intel Core i5 / 3rd Gen',
            '8GB RAM',
            '500GB HDD',
        ],
    ],
    [
        'name'  => 'Acer Chromebook NL400',
        'image' => 'Acer-Chrome-book-NL400.jpg',
        'price' => 6799,
        'specs' => [
            'Intel Celeron processor',
            '4GB RAM',
            '16GB SSD',
            'Chrome OS',
        ],
    ],
    [
        'name'  => 'Avita NU14A',
        'image' => 'Avita-NU14A.jpg',
        'price' => 14799,
        'specs' => [
            'Intel Celeron processor',
            '4GB RAM',
            '128GB SSD',
        ],
    ],
];
?>
<section class="section section-bg laptop-listings-section" id="laptop-listings">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="badge badge-primary">Ready to Book</span>
            <h2>Laptops Available Now</h2>
            <p>Certified refurbished machines with clear configs and transparent pricing. Call to reserve the model you want.</p>
        </div>

        <div class="laptop-listings-grid">
            <?php foreach ($laptop_listings as $index => $laptop):
                $price_label = '₹' . number_format($laptop['price']);
                $delay = min(($index % 3) * 100, 200);
                $wa_text = rawurlencode('Hi Yash Computers, I want to Call & Book: ' . $laptop['name'] . ' (' . $price_label . ').');
            ?>
            <article class="laptop-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <div class="laptop-card-media">
                    <img
                        src="assets/images/laptops/<?php echo htmlspecialchars($laptop['image']); ?>"
                        alt="<?php echo htmlspecialchars($laptop['name']); ?>"
                        class="laptop-card-img"
                        width="600"
                        height="400"
                        loading="lazy"
                    >
                    <span class="laptop-card-price"><?php echo $price_label; ?></span>
                </div>

                <div class="laptop-card-body">
                    <h3 class="laptop-card-title"><?php echo htmlspecialchars($laptop['name']); ?></h3>
                    <ul class="laptop-card-specs">
                        <?php foreach ($laptop['specs'] as $spec): ?>
                        <li>
                            <i class="fas fa-check" aria-hidden="true"></i>
                            <span><?php echo htmlspecialchars($spec); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="laptop-card-actions">
                        <a href="tel:+918121830905" class="btn btn-primary laptop-card-cta">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i> Call &amp; Book
                        </a>
                        <a
                            href="https://wa.me/918121830905?text=<?php echo $wa_text; ?>"
                            class="btn btn-outline laptop-card-wa"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="WhatsApp to book <?php echo htmlspecialchars($laptop['name']); ?>"
                        >
                            <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
