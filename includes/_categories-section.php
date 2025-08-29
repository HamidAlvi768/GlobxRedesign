<?php
/**
 * Reusable Categories Section Component
 * @param string $sectionClass Additional CSS classes for the section (optional)
 * @param string $title The title for the categories section (default: "Search by Categories")
 * @param string $cardClass Additional CSS classes for the card (optional)
 */
$sectionClass = $sectionClass ?? '';
$title = $title ?? 'Search by Categories';
$cardClass = $cardClass ?? '';

// Define all your categories in one place
$categories = [
    ['image' => 'diodes.png', 'alt' => 'Diodes', 'label' => 'diodes'],
    ['image' => 'mpu_mcu.png', 'alt' => 'MPU/MCU', 'label' => 'mpu/mcu'],
    ['image' => 'powerics.png', 'alt' => 'Power ICs', 'label' => 'powerics'],
    ['image' => 'resistors.png', 'alt' => 'Resistors', 'label' => 'resistors'],
    ['image' => 'capacitors.png', 'alt' => 'Capacitors', 'label' => 'capacitors'],
    ['image' => 'connectors.png', 'alt' => 'Connectors', 'label' => 'connectors'],
    ['image' => 'inductors.png', 'alt' => 'Inductors', 'label' => 'inductors'],
    ['image' => 'switches.png', 'alt' => 'Switches', 'label' => 'switches'],
    ['image' => 'fuses.png', 'alt' => 'Fuses', 'label' => 'fuses'],
    ['image' => 'transistor.png', 'alt' => 'Transistors', 'label' => 'transistors'],
    ['image' => 'crys_reso.png', 'alt' => 'Crystal Resonators', 'label' => 'crystals'],
    ['image' => 'optoelectr.png', 'alt' => 'Optoelectronics', 'label' => 'optoelectronics'],
    ['image' => 'sens_trans.png', 'alt' => 'Sensors & Transducers', 'label' => 'sensors'],
    ['image' => 'amplifiers.png', 'alt' => 'Amplifiers', 'label' => 'amplifiers'],
    ['image' => 'regulators.png', 'alt' => 'Regulators', 'label' => 'regulators'],
    ['image' => 'pmic.png', 'alt' => 'PMIC', 'label' => 'pmic'],
    ['image' => 'logic_ics.png', 'alt' => 'Logic ICs', 'label' => 'logic ics'],
    ['image' => 'memory_ics.png', 'alt' => 'Memory ICs', 'label' => 'memory ics'],
    ['image' => 'interface.png', 'alt' => 'Interface', 'label' => 'interface'],
    ['image' => 'converters.png', 'alt' => 'Converters', 'label' => 'converters'],
    ['image' => 'psu.png', 'alt' => 'Power Supply Units', 'label' => 'psu'],
    ['image' => 'lcc.png', 'alt' => 'LCC', 'label' => 'lcc'],
    ['image' => 'memory.png', 'alt' => 'Memory', 'label' => 'memory'],
    ['image' => 'other_semi.png', 'alt' => 'Other Semiconductors', 'label' => 'other semi'],
    // Add new categories here...
];

// Configuration for the layout
$items_per_row = 4;
$items_per_slide = 12; // 3 rows of 4 items

// Use array_chunk to automatically group categories into slides
$slides = array_chunk($categories, $items_per_slide);
?>

<div class="gx-sidebar-card shadow <?php echo $cardClass; ?>">
  <div class="gx-sidebar-title text-center mb-4"><?php echo htmlspecialchars($title); ?></div>
  <div class="gx-sidebar-carousel owl-carousel owl-theme">

    <?php foreach ($slides as $slide_items): ?>
        <div class="gx-sidebar-slide">
            <div class="gx-sidebar-grid mb-4">
                <?php
                // Chunk the items for this slide into rows
                $rows = array_chunk($slide_items, $items_per_row);
                foreach ($rows as $row_items):
                ?>
                    <div class="gx-sidebar-row">
                        <?php foreach ($row_items as $item): ?>
                            <div class="gx-sidebar-cell">
                                <div class="gx-sidebar-icon">
                                    <img src="./assets/img/main/<?php echo htmlspecialchars($item['image']); ?>"
                                         alt="<?php echo htmlspecialchars($item['alt']); ?>"
                                         width="60"
                                         height="60" />
                                </div>
                                <div class="gx-sidebar-label"><?php echo htmlspecialchars($item['label']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

  </div>
  <div class="gx-sidebar-pagination d-flex justify-content-center align-items-center">
    <?php for ($i = 0; $i < count($slides); $i++): ?>
        <span class="gx-dot" data-slide="<?php echo $i; ?>"></span>
    <?php endfor; ?>
  </div>
</div>
