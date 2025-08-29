<?php
/**
 * Reusable Results Section Component
 * 
 * @param array $products Array of product objects with 'mpn', 'brand', 'quantity', 'price' properties
 * @param array $pagination Array with 'currentPage', 'totalPages', 'showEllipsis' properties
 * @param string $sectionClass Additional CSS classes for the section (optional)
 */

// Set default values if parameters are not provided
$products = $products ?? [
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ],
    [
        'mpn' => 'RC0402FR-0788K7L',
        'brand' => 'Yageo',
        'quantity' => '1000000',
        'price' => '0.00008'
    ]
];

$pagination = $pagination ?? [
    'currentPage' => 1,
    'totalPages' => 24,
    'showEllipsis' => true
];

$sectionClass = $sectionClass ?? '';
?>

<!-- Results Table Section -->
<div class="gx-results-section <?php echo $sectionClass; ?>">
    <div class="gx-results-container">
        <!-- Table Header -->
        <div class="gx-table-header">
            <div class="gx-table-row">
                <div class="gx-table-cell gx-table-cell-thumbnail"></div>
                <div class="gx-table-cell gx-table-cell-mpn">MPN</div>
                <div class="gx-table-cell gx-table-cell-brand">Brand</div>
                <div class="gx-table-cell gx-table-cell-quantity">Quantity Available</div>
                <div class="gx-table-cell gx-table-cell-price">Price</div>
                <div class="gx-table-cell gx-table-cell-action">Action</div>
            </div>
        </div>

        <!-- Table Body -->
        <div class="gx-table-body">
            <?php foreach ($products as $index => $product) : ?>
                <!-- Product Row <?php echo $index + 1; ?> -->
                <div class="gx-table-row">
                    <div class="gx-table-cell gx-table-cell-thumbnail">
                        <img src="./assets/img/pn-listing/pn.png" alt="Product" class="gx-product-thumbnail">
                    </div>
                    <div class="gx-table-cell gx-table-cell-mpn"><?php echo htmlspecialchars($product['mpn']); ?></div>
                    <div class="gx-table-cell gx-table-cell-brand"><?php echo htmlspecialchars($product['brand']); ?></div>
                    <div class="gx-table-cell gx-table-cell-quantity"><?php echo htmlspecialchars($product['quantity']); ?></div>
                    <div class="gx-table-cell gx-table-cell-price"><?php echo htmlspecialchars($product['price']); ?></div>
                    <div class="gx-table-cell gx-table-cell-action">
                        <a href="./pn-detail.php" class="gx-view-button">View</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Pagination Section -->
    <div class="gx-pagination-section">
        <div class="gx-pagination-container">
            <div class="gx-pagination">
                <?php
                $currentPage = $pagination['currentPage'];
                $totalPages = $pagination['totalPages'];
                $showEllipsis = $pagination['showEllipsis'];
                
                // Show first few pages
                for ($i = 1; $i <= min(4, $totalPages); $i++) {
                    $activeClass = ($i == $currentPage) ? ' gx-pagination-item-active' : '';
                    echo '<span class="gx-pagination-item' . $activeClass . '">' . $i . '</span>';
                }
                
                // Show ellipsis if needed
                if ($showEllipsis && $totalPages > 4) {
                    echo '<span class="gx-pagination-ellipsis">...</span>';
                }
                
                // Show last page if different from the last shown page
                if ($totalPages > 4) {
                    echo '<span class="gx-pagination-item">' . $totalPages . '</span>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
