<?php
/**
 * Reusable CTA Section Component
 * 
 * @param array $leftCard Array containing 'heading', 'description', 'buttonText', 'buttonLink', 'buttonClass'
 * @param array $rightCard Array containing 'heading', 'description', 'buttonText', 'buttonLink', 'buttonClass'
 * @param string $sectionClass Additional CSS classes for the section (optional)
 */

// Set default values if parameters are not provided
$leftCard = $leftCard ?? [
    'heading' => 'Any Questions?',
    'description' => 'Our team will be happy to answer any questions or provide further information.',
    'buttonText' => 'Call Us Now',
    'buttonLink' => '#',
    'buttonClass' => 'gx-cta-btn--blue'
];

$rightCard = $rightCard ?? [
    'heading' => 'Get Started',
    'description' => 'Ready to begin? Contact us to get started with your project.',
    'buttonText' => 'Contact Us',
    'buttonLink' => '#',
    'buttonClass' => 'gx-cta-btn--orange'
];

$sectionClass = $sectionClass ?? '';
?>

<!-- Dual CTA Section -->
<section class="gx-cta-section gx-section-common gx-section-common--white py-5 <?php echo $sectionClass; ?>">
    <div class="container">
        <div class="row">
            <!-- Left CTA Card -->
            <div class="col-lg-6 mb-4">
                <div class="gx-cta-card gx-cta-card--blue">
                    <div class="gx-cta-content">
                        <h3 class="gx-cta-heading"><?php echo htmlspecialchars($leftCard['heading']); ?></h3>
                        <p class="gx-cta-description">
                            <?php echo htmlspecialchars($leftCard['description']); ?>
                        </p>
                        <?php if (isset($leftCard['buttonLink']) && $leftCard['buttonLink'] !== '#') : ?>
                            <a href="<?php echo htmlspecialchars($leftCard['buttonLink']); ?>" class="gx-cta-btn <?php echo htmlspecialchars($leftCard['buttonClass']); ?>">
                                <?php echo htmlspecialchars($leftCard['buttonText']); ?>
                            </a>
                        <?php else : ?>
                            <button class="gx-cta-btn <?php echo htmlspecialchars($leftCard['buttonClass']); ?>">
                                <?php echo htmlspecialchars($leftCard['buttonText']); ?>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Right CTA Card -->
            <div class="col-lg-6 mb-4">
                <div class="gx-cta-card gx-cta-card--orange">
                    <div class="gx-cta-content">
                        <h3 class="gx-cta-heading"><?php echo htmlspecialchars($rightCard['heading']); ?></h3>
                        <p class="gx-cta-description">
                            <?php echo htmlspecialchars($rightCard['description']); ?>
                        </p>
                        <?php if (isset($rightCard['buttonLink']) && $rightCard['buttonLink'] !== '#') : ?>
                            <a href="<?php echo htmlspecialchars($rightCard['buttonLink']); ?>" class="gx-cta-btn <?php echo htmlspecialchars($rightCard['buttonClass']); ?>">
                                <?php echo htmlspecialchars($rightCard['buttonText']); ?>
                            </a>
                        <?php else : ?>
                            <button class="gx-cta-btn <?php echo htmlspecialchars($rightCard['buttonClass']); ?>">
                                <?php echo htmlspecialchars($rightCard['buttonText']); ?>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
