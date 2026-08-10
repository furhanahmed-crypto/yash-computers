<?php
/**
 * Yash Computers - Founder's Message Section
 */

$founder_message = array(
    'eyebrow'  => 'Founder\'s Message',
    'heading'  => 'High-End Computing Shouldn\'t Be a Luxury',
    'quote'    => 'I started Yash Computers in 2013 because I saw a real gap: students, freelancers, and small businesses were stuck choosing between overpriced new laptops and second-hand machines with hidden defects.',
    'message'  => 'I believed there was a third way — laptops that are rigorously inspected, genuinely certified, and priced fairly, so high-end computing didn\'t have to be a luxury. That belief is why every laptop we sell goes through our 50-step quality audit, covering everything from motherboard stress tests to battery health, before it\'s backed by our warranty. Twelve years and 35,000+ laptops later, that same principle still drives us — across our stores in Suchitra, Ameerpet, Kukatpally, and Vijayawada. We don\'t just hand over a laptop and walk away; our team stands behind every sale with lifetime support, honest upgrade advice, and repair services when you need them. Come talk to us about what you actually need, and we\'ll help you find it.',
    'name'     => 'Yashwanth',
    'role'     => 'Founder, Yash Computers',
    'amenities' => array(
        array(
            'title' => '50-Step Quality Audit',
            'text'  => 'Every laptop is rigorously inspected — from motherboard stress tests to battery health.',
        ),
        array(
            'title' => 'Fair Certified Pricing',
            'text'  => 'Genuinely certified machines priced fairly, so high-end computing isn\'t a luxury.',
        ),
        array(
            'title' => 'Lifetime Support',
            'text'  => 'Honest upgrade advice and repair services long after the sale.',
        ),
        array(
            'title' => 'Multi-City Stores',
            'text'  => 'Serving customers across Suchitra, Ameerpet, Kukatpally, and Vijayawada.',
        ),
    ),
);
?>
<section class="section founder-message-premium" id="founder-message">
    <div class="container">
        <div class="founder-message-grid" data-aos="fade-up">
            <div class="founder-media">
                <div class="founder-media-frame">
                    <img
                        src="assets/images/founders-image.jpg"
                        alt="<?php echo htmlspecialchars($founder_message['name']); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                    <div class="founder-media-overlay" aria-hidden="true"></div>
                </div>

                <div class="founder-floating-badge">
                    <span class="founder-badge-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </span>
                    <div class="founder-badge-text">
                        <strong><?php echo htmlspecialchars($founder_message['name']); ?></strong>
                        <span><?php echo htmlspecialchars($founder_message['role']); ?></span>
                    </div>
                </div>
            </div>

            <div class="founder-content">
                <span class="badge badge-primary"><?php echo htmlspecialchars($founder_message['eyebrow']); ?></span>
                <h2><?php echo htmlspecialchars($founder_message['heading']); ?></h2>
                <p class="founder-quote">&ldquo;<?php echo htmlspecialchars($founder_message['quote']); ?>&rdquo;</p>
                <p class="founder-lead"><?php echo htmlspecialchars($founder_message['message']); ?></p>

                <div class="founder-amenities">
                    <?php foreach ($founder_message['amenities'] as $index => $amenity) {
                        $theme = '';
                        if ($index === 0) $theme = 'card-theme--green';
                        elseif ($index === 1) $theme = 'card-theme--blue';
                        elseif ($index === 2) $theme = 'card-theme--gold';
                        elseif ($index === 3) $theme = 'card-theme--purple';
                    ?>
                    <article class="founder-amenity <?php echo $theme; ?>">
                        <div class="founder-amenity-icon" aria-hidden="true">
                            <?php if ($index === 0) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <?php } elseif ($index === 1) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <?php } elseif ($index === 2) { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            <?php } else { ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php } ?>
                        </div>
                        <div>
                            <h3><?php echo htmlspecialchars($amenity['title']); ?></h3>
                            <p><?php echo htmlspecialchars($amenity['text']); ?></p>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
