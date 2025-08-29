<?php
/**
 * Reusable Excess Stock Hero Section Component
 * 
 * @param string $title Main heading text
 * @param string|array $description Description text (can be string or array of paragraphs)
 * @param array $ctaButtons Array of CTA button objects with 'text', 'link', 'class', 'anchorTarget' properties
 * @param string $sectionClass Additional CSS classes for the section (optional)
 */

// Set default values if parameters are not provided
$title = $heroTitle ?? 'Worth Your Excess Stock';
$description = $heroDescription ?? 'Welcome to the GREENCHIPS Partner Portal. Europe\'s leading AI powered market place for high quality electronic excess stock parts.';
$ctaButtons = $heroCtaButtons ?? [
    [
        'text' => 'Start Now',
        'link' => '#',
        'class' => 'gx-btn-primary',
        'anchorTarget' => null
    ],
    [
        'text' => 'Contact Us',
        'link' => './contact.php',
        'class' => 'gx-save-globe-btn',
        'anchorTarget' => null
    ]
];
$sectionClass = $sectionClass ?? '';
?>

<!-- Excess Stock Hero Section -->
<section class="gx-sell-excess-hero position-relative d-flex align-items-center <?php echo $sectionClass; ?>">
  <!-- Background Image & Overlay -->
  <div class="gx-sell-excess-bg"></div>
  <div class="gx-sell-excess-overlay"></div>

  <!-- Central Hero Content -->
  <div class="container gx-sell-excess-content position-relative z-2">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center">
        <!-- Main Heading -->
        <h1 class="gx-sell-excess-title mb-4"><?php echo htmlspecialchars($title); ?></h1>

        <!-- Descriptive Text -->
        <?php if (is_array($description)) : ?>
          <div class="gx-sell-excess-subtext mb-5">
            <?php foreach ($description as $paragraph) : ?>
              <p><?php echo htmlspecialchars($paragraph); ?></p>
            <?php endforeach; ?>
          </div>
        <?php else : ?>
          <p class="gx-sell-excess-subtext mb-5">
            <?php echo htmlspecialchars($description); ?>
          </p>
        <?php endif; ?>

        <!-- Call-to-Action Buttons -->
        <div class="gx-sell-excess-cta d-flex justify-content-center flex-wrap">
          <?php foreach ($ctaButtons as $button) : ?>
            <?php 
            $anchorAttr = $button['anchorTarget'] ? ' data-anchor-target="' . htmlspecialchars($button['anchorTarget']) . '"' : '';
            ?>
            <a href="<?php echo htmlspecialchars($button['link']); ?>" class="btn <?php echo htmlspecialchars($button['class']); ?> px-4 py-2 rounded"<?php echo $anchorAttr; ?>>
              <?php echo htmlspecialchars($button['text']); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
