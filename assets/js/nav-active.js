/**
 * Navigation Active State Handler
 * Highlights the active navigation menu item based on current page
 * Production-ready with comprehensive error handling and debugging
 */

class NavigationActiveHandler {
    constructor() {
        this.currentPage = null;
        this.navItems = [];
        this.debugMode = false; // Set to true for debugging
        this.init();
    }

    init() {
        try {
            this.currentPage = this.getCurrentPage();
            this.navItems = this.getNavigationItems();
            
            if (this.debugMode) {
                console.log('🔍 NavigationActiveHandler initialized:', {
                    currentPage: this.currentPage,
                    navItemsCount: this.navItems.length,
                    navItems: this.navItems.map(item => ({
                        text: item.textContent.trim(),
                        href: item.getAttribute('href'),
                        classes: item.className
                    }))
                });
            }
            
            if (this.currentPage && this.navItems.length > 0) {
                this.highlightActiveNav();
                this.addActiveStyles();
                this.setupMutationObserver();
                
                if (this.debugMode) {
                    console.log('🎉 NavigationActiveHandler ready!');
                    console.log('Available methods:');
                    console.log('  - navActiveHandler.setDebugMode(true/false)');
                    console.log('  - navActiveHandler.testNavigationMatching()');
                    console.log('  - navActiveHandler.clearAllActiveStates()');
                    console.log('  - navActiveHandler.refresh()');
                    console.log('  - navActiveHandler.getActiveNav()');
                }
            } else {
                if (this.debugMode) {
                    console.warn('⚠️ NavigationActiveHandler: Missing currentPage or navItems', {
                        currentPage: this.currentPage,
                        navItemsCount: this.navItems.length
                    });
                }
            }
        } catch (error) {
            console.error('❌ NavigationActiveHandler initialization error:', error);
        }
    }

    getCurrentPage() {
        try {
            // Get the current page filename
            const path = window.location.pathname;
            const filename = path.split('/').pop() || 'index.php';
            
            // Map page files to navigation items with fallbacks
            const pageMap = {
                'index.php': 'home',
                'about-us.php': 'company',
                'excess-stock.php': 'services',
                'old-market-industry.php': 'markets',
                'products.php': 'products',
                'sell-excess-stock.php': 'sell-excess',
                'contact.php': 'contact'
            };

            const pageIdentifier = pageMap[filename];
            
            if (this.debugMode) {
                console.log('📄 Page detection:', {
                    path: path,
                    filename: filename,
                    pageIdentifier: pageIdentifier
                });
            }

            return pageIdentifier || null;
        } catch (error) {
            console.error('❌ Error in getCurrentPage:', error);
            return null;
        }
    }

    getNavigationItems() {
        try {
            // Get all navigation links from both primary and sticky nav
            const primaryNavLinks = document.querySelectorAll('.gx-nav-links .nav-link');
            const stickyNavLinks = document.querySelectorAll('#gxStickyNav .gx-nav-links .nav-link');
            
            // Combine and create a Map for proper deduplication based on href
            const navMap = new Map();
            
            // Process primary navigation first
            primaryNavLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && href !== '#') {
                    navMap.set(href, link);
                }
            });
            
            // Process sticky navigation (sticky nav takes precedence for duplicates)
            stickyNavLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && href !== '#') {
                    navMap.set(href, link);
                }
            });
            
            // Convert Map values to array
            const uniqueLinks = Array.from(navMap.values());
            
            if (this.debugMode) {
                console.log('🔗 Navigation items found:', {
                    primaryNavCount: primaryNavLinks.length,
                    stickyNavCount: stickyNavLinks.length,
                    totalUnique: uniqueLinks.length,
                    uniqueHrefs: Array.from(navMap.keys())
                });
            }
            
            return uniqueLinks;
        } catch (error) {
            console.error('❌ Error in getNavigationItems:', error);
            return [];
        }
    }

    highlightActiveNav() {
        try {
            let activeFound = false;
            let activeItems = [];
            
            // First pass: identify all potential active items
            this.navItems.forEach((navItem, index) => {
                const link = navItem.getAttribute('href');
                const text = navItem.textContent.trim();
                
                // Remove any existing active classes
                navItem.classList.remove('active', 'gx-nav-active');
                
                // Check if this nav item matches the current page
                if (this.isActiveNavItem(link, text)) {
                    activeItems.push({ navItem, link, text, index });
                }
            });
            
            // Validation: ensure only one item is active
            if (activeItems.length > 1) {
                if (this.debugMode) {
                    console.warn('⚠️ Multiple active items found, selecting the most appropriate one:', 
                        activeItems.map(item => ({ text: item.text, link: item.link }))
                    );
                }
                
                // Select the most appropriate active item based on priority
                const selectedItem = this.selectBestActiveItem(activeItems);
                activeItems = [selectedItem];
            }
            
            // Apply active state to the selected item(s)
            activeItems.forEach(({ navItem, link, text }) => {
                navItem.classList.add('active', 'gx-nav-active');
                activeFound = true;
                
                // Also add active class to parent li element
                const parentLi = navItem.closest('.nav-item');
                if (parentLi) {
                    parentLi.classList.add('active', 'gx-nav-active');
                }
                
                if (this.debugMode) {
                    console.log(`✅ Active nav item set: "${text}" (${link})`);
                }
            });
            
            if (!activeFound && this.debugMode) {
                console.warn('⚠️ No active navigation item found for current page:', this.currentPage);
            }
            
        } catch (error) {
            console.error('❌ Error in highlightActiveNav:', error);
        }
    }

    selectBestActiveItem(activeItems) {
        // Priority-based selection for multiple matches
        // Priority 1: Exact href match
        const exactHrefMatch = activeItems.find(item => {
            const linkPath = item.link.replace('./', '').replace('.php', '');
            const pageMap = {
                'about-us': 'company',
                'excess-stock': 'services',
                'old-market-industry': 'markets',
                'products': 'products',
                'sell-excess-stock': 'sell-excess',
                'contact': 'contact'
            };
            return pageMap[linkPath] === this.currentPage;
        });
        
        if (exactHrefMatch) {
            if (this.debugMode) {
                console.log('🎯 Selected exact href match:', exactHrefMatch.text);
            }
            return exactHrefMatch;
        }
        
        // Priority 2: First text match (fallback)
        if (this.debugMode) {
            console.log('🎯 Selected first text match:', activeItems[0].text);
        }
        return activeItems[0];
    }

    isActiveNavItem(link, text) {
        if (!this.currentPage || !link || !text) return false;

        try {
            // Normalize text for comparison
            const normalizedText = text.toLowerCase().trim();
            
            // Enhanced matching logic
            const matchResult = this.matchNavigationItem(link, normalizedText);
            
            if (this.debugMode && this.currentPage === 'services') {
                console.log('🔍 Services matching debug:', {
                    link: link,
                    text: text,
                    normalizedText: normalizedText,
                    currentPage: this.currentPage,
                    matchResult: matchResult
                });
            }
            
            return matchResult;
            
        } catch (error) {
            console.error('❌ Error in isActiveNavItem:', error);
            return false;
        }
    }

    matchNavigationItem(link, normalizedText) {
        // Comprehensive and strict matching strategy
        const strategies = [
            // Strategy 1: Exact href to page mapping (most reliable)
            () => {
                const linkPath = link.replace('./', '').replace('.php', '');
                const pageMap = {
                    'about-us': 'company',
                    'excess-stock': 'services',
                    'old-market-industry': 'markets',
                    'products': 'products',
                    'sell-excess-stock': 'sell-excess',
                    'contact': 'contact'
                };
                
                const expectedPage = pageMap[linkPath];
                return expectedPage === this.currentPage;
            },
            
            // Strategy 2: Text content exact matching (fallback)
            () => {
                const textMap = {
                    'company': ['company'],
                    'services': ['services'],
                    'markets': ['markets', 'markets & ind'],
                    'products': ['products'],
                    'sell-excess': ['sell excess stock'],
                    'contact': ['contact']
                };
                
                const targetTexts = textMap[this.currentPage];
                if (targetTexts) {
                    // Use exact text matching instead of includes to prevent false positives
                    return targetTexts.some(target => {
                        const targetLower = target.toLowerCase();
                        const textLower = normalizedText;
                        
                        // Exact match or starts with (for cases like "Markets & Ind")
                        return textLower === targetLower || textLower.startsWith(targetLower);
                    });
                }
                return false;
            }
        ];
        
        // Try each strategy until one succeeds
        for (let i = 0; i < strategies.length; i++) {
            try {
                const strategy = strategies[i];
                if (strategy()) {
                    if (this.debugMode) {
                        console.log(`✅ Strategy ${i + 1} succeeded for:`, {
                            link: link,
                            text: normalizedText,
                            currentPage: this.currentPage
                        });
                    }
                    return true;
                }
            } catch (error) {
                if (this.debugMode) {
                    console.warn(`⚠️ Strategy ${i + 1} failed:`, error);
                }
            }
        }
        
        if (this.debugMode) {
            console.log(`❌ No strategy succeeded for:`, {
                link: link,
                text: normalizedText,
                currentPage: this.currentPage
            });
        }
        
        return false;
    }

    addActiveStyles() {
        try {
            // Remove any existing styles to prevent duplicates
            const existingStyle = document.getElementById('gx-nav-active-styles');
            if (existingStyle) {
                existingStyle.remove();
            }
            
            // Create new style element
            const style = document.createElement('style');
            style.id = 'gx-nav-active-styles';
            style.textContent = this.getActiveStylesCSS();
            
            document.head.appendChild(style);
            
            if (this.debugMode) {
                console.log('🎨 Active navigation styles applied');
            }
            
        } catch (error) {
            console.error('❌ Error in addActiveStyles:', error);
        }
    }

    getActiveStylesCSS() {
        return `
            /* Active Navigation Styles */
            .gx-nav-links .nav-link.active,
            .gx-nav-links .nav-item.active .nav-link {
                color: var(--primary, #007bff) !important;
                position: relative;
                transition: all 0.3s ease;
            }

            .gx-nav-links .nav-link.active::after,
            .gx-nav-links .nav-item.active .nav-link::after {
                display: none;
                content: '';
                position: absolute;
                bottom: -8px;
                left: 50%;
                transform: translateX(-50%);
                width: 6px;
                height: 6px;
                background: var(--primary, #007bff);
                border-radius: 50%;
                opacity: 1;
                transition: all 0.3s ease;
                
            }

            .gx-nav-links .nav-link.active .gx-chevron svg,
            .gx-nav-links .nav-item.active .nav-link .gx-chevron svg {
                color: var(--primary, #007bff) !important;
                transform: rotate(180deg);
                transition: transform 0.3s ease;
            }

            /* Hover effects for active items */
            .gx-nav-links .nav-link.active:hover,
            .gx-nav-links .nav-item.active .nav-link:hover {
                color: hsla(199, 74%, 51%, 1) !important;
            }

            .gx-nav-links .nav-link.active:hover::after,
            .gx-nav-links .nav-item.active .nav-link:hover::after {
                background: var(--primary-dark, #0056b3);
                transform: translateX(-50%) scale(1.2);
            }

            /* Mobile active state */
            @media (max-width: 991.98px) {
                .gx-nav-links .nav-link.active::after,
                .gx-nav-links .nav-item.active .nav-link::after {
                    bottom: -4px;
                    width: 4px;
                    height: 4px;
                }
            }

            /* Sticky nav active state */
            #gxStickyNav .gx-nav-links .nav-link.active,
            #gxStickyNav .gx-nav-links .nav-item.active .nav-link {
                color: var(--primary, #007bff) !important;
            }

            #gxStickyNav .gx-nav-links .nav-link.active::after,
            #gxStickyNav .gx-nav-links .nav-item.active .nav-link::after {
                background: var(--primary, #007bff);
            }

            /* Search nav active state */
            .search-navbar .gx-nav-links .nav-link.active,
            .search-navbar .gx-nav-links .nav-item.active .nav-link {
                color: var(--primary, #007bff) !important;
            }

            .search-navbar .gx-nav-links .nav-link.active::after,
            .search-navbar .gx-nav-links .nav-item.active .nav-link::after {
                background: var(--primary, #007bff);
                display: none;
            }
        `;
    }

    setupMutationObserver() {
        try {
            // Watch for DOM changes that might affect navigation
            const observer = new MutationObserver((mutations) => {
                let shouldRefresh = false;
                
                mutations.forEach((mutation) => {
                    if (mutation.type === 'childList' && 
                        (mutation.target.classList.contains('gx-nav-links') || 
                         mutation.target.id === 'gxStickyNav')) {
                        shouldRefresh = true;
                    }
                });
                
                if (shouldRefresh) {
                    setTimeout(() => {
                        this.refresh();
                    }, 100);
                }
            });
            
            // Observe navigation containers
            const navContainers = document.querySelectorAll('.gx-nav-links, #gxStickyNav');
            navContainers.forEach(container => {
                observer.observe(container, {
                    childList: true,
                    subtree: true
                });
            });
            
        } catch (error) {
            if (this.debugMode) {
                console.warn('⚠️ MutationObserver setup failed:', error);
            }
        }
    }

    // Public method to manually set active state
    setActiveNav(navText) {
        try {
            this.navItems.forEach(navItem => {
                navItem.classList.remove('active', 'gx-nav-active');
                const parentLi = navItem.closest('.nav-item');
                if (parentLi) {
                    parentLi.classList.remove('active', 'gx-nav-active');
                }
            });

            const targetNav = this.navItems.find(navItem => 
                navItem.textContent.trim().toLowerCase().includes(navText.toLowerCase())
            );

            if (targetNav) {
                targetNav.classList.add('active', 'gx-nav-active');
                const parentLi = targetNav.closest('.nav-item');
                if (parentLi) {
                    parentLi.classList.add('active', 'gx-nav-active');
                }
                
                if (this.debugMode) {
                    console.log(`✅ Manually set active nav: "${navText}"`);
                }
            }
        } catch (error) {
            console.error('❌ Error in setActiveNav:', error);
        }
    }

    // Public method to get current active nav
    getActiveNav() {
        try {
            const activeNav = document.querySelector('.gx-nav-links .nav-link.active');
            return activeNav ? activeNav.textContent.trim() : null;
        } catch (error) {
            console.error('❌ Error in getActiveNav:', error);
            return null;
        }
    }

    // Public method to clear all active states
    clearAllActiveStates() {
        try {
            let clearedCount = 0;
            
            this.navItems.forEach(navItem => {
                if (navItem.classList.contains('active') || navItem.classList.contains('gx-nav-active')) {
                    navItem.classList.remove('active', 'gx-nav-active');
                    clearedCount++;
                }
                
                const parentLi = navItem.closest('.nav-item');
                if (parentLi && (parentLi.classList.contains('active') || parentLi.classList.contains('gx-nav-active'))) {
                    parentLi.classList.remove('active', 'gx-nav-active');
                }
            });
            
            if (this.debugMode) {
                console.log(`🧹 Cleared ${clearedCount} active navigation states`);
            }
            
            return clearedCount;
        } catch (error) {
            console.error('❌ Error in clearAllActiveStates:', error);
            return 0;
        }
    }

    // Public method to refresh active state
    refresh() {
        try {
            if (this.debugMode) {
                console.log('🔄 Refreshing navigation active state...');
            }
            
            // Clear all existing active states first
            this.clearAllActiveStates();
            
            // Re-evaluate and apply active states
            this.currentPage = this.getCurrentPage();
            this.navItems = this.getNavigationItems();
            this.highlightActiveNav();
            
            if (this.debugMode) {
                console.log('✅ Navigation refresh complete');
                console.log('Current active nav:', this.getActiveNav());
            }
        } catch (error) {
            console.error('❌ Error in refresh:', error);
        }
    }

    // Public method to test navigation matching logic
    testNavigationMatching() {
        if (!this.debugMode) {
            console.log('🔧 Enable debug mode first: navActiveHandler.setDebugMode(true)');
            return;
        }
        
        console.log('🧪 Testing Navigation Matching Logic');
        console.log('=====================================');
        console.log('Current Page:', this.currentPage);
        console.log('Navigation Items:', this.navItems.length);
        
        this.navItems.forEach((navItem, index) => {
            const link = navItem.getAttribute('href');
            const text = navItem.textContent.trim();
            const normalizedText = text.toLowerCase().trim();
            
            console.log(`\n🔍 Testing Item ${index + 1}: "${text}"`);
            console.log('  Href:', link);
            console.log('  Normalized Text:', normalizedText);
            
            // Test Strategy 1: Exact href mapping
            const linkPath = link.replace('./', '').replace('.php', '');
            const pageMap = {
                'about-us': 'company',
                'excess-stock': 'services',
                'old-market-industry': 'markets',
                'products': 'products',
                'sell-excess-stock': 'sell-excess',
                'contact': 'contact'
            };
            const expectedPage = pageMap[linkPath];
            const strategy1Result = expectedPage === this.currentPage;
            
            console.log('  Strategy 1 (Exact Href):', strategy1Result);
            console.log('    Link Path:', linkPath);
            console.log('    Expected Page:', expectedPage);
            console.log('    Current Page:', this.currentPage);
            
            // Test Strategy 2: Text content matching
            const textMap = {
                'company': ['company'],
                'services': ['services'],
                'markets': ['markets', 'markets & ind'],
                'products': ['products'],
                'sell-excess': ['sell excess stock'],
                'contact': ['contact']
            };
            const targetTexts = textMap[this.currentPage];
            let strategy2Result = false;
            
            if (targetTexts) {
                strategy2Result = targetTexts.some(target => {
                    const targetLower = target.toLowerCase();
                    return normalizedText === targetLower || normalizedText.startsWith(targetLower);
                });
            }
            
            console.log('  Strategy 2 (Text Content):', strategy2Result);
            console.log('    Target Texts:', targetTexts);
            console.log('    Text Match:', strategy2Result);
            
            // Final result
            const finalResult = strategy1Result || strategy2Result;
            console.log('  Final Result:', finalResult ? '✅ ACTIVE' : '❌ INACTIVE');
            
            if (finalResult) {
                console.log('  🎯 This item will be marked as active!');
            }
        });
        
        console.log('\n=====================================');
        console.log('🧪 Navigation Matching Test Complete');
    }

    // Public method to enable/disable debug mode
    setDebugMode(enabled) {
        this.debugMode = enabled;
        console.log(`🔧 NavigationActiveHandler debug mode: ${enabled ? 'ON' : 'OFF'}`);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.navActiveHandler = new NavigationActiveHandler();
});

// Also initialize if DOM is already loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.navActiveHandler = new NavigationActiveHandler();
    });
} else {
    window.navActiveHandler = new NavigationActiveHandler();
}

// Global error handler for navigation
window.addEventListener('error', (event) => {
    if (event.message.includes('NavigationActiveHandler')) {
        console.error('❌ NavigationActiveHandler global error:', event.error);
    }
}); 