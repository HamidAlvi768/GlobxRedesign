/**
 * Anchor Navigation Handler
 * Ensures proper anchor navigation works across the site
 * Handles both direct anchor links and programmatic navigation
 */

class AnchorNavigation {
    constructor() {
        this.init();
    }

    init() {
        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setupAnchorNavigation());
        } else {
            this.setupAnchorNavigation();
        }
    }

    setupAnchorNavigation() {
        // Handle anchor links in navigation
        this.handleNavigationAnchors();
        
        // Handle direct anchor navigation (when page loads with hash)
        this.handleDirectAnchorNavigation();
        
        // Handle programmatic anchor navigation
        this.handleProgrammaticNavigation();
        
        // Ensure smooth scrolling behavior
        this.setupSmoothScrolling();
    }

    handleNavigationAnchors() {
        // Find all navigation links that contain anchor references
        const navLinks = document.querySelectorAll('a[href*="#"]');
        
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                
                // Check if this is an anchor link to the same page
                if (href.includes('#') && (href.startsWith('#') || href.includes(window.location.pathname))) {
                    e.preventDefault();
                    this.scrollToAnchor(href);
                }
            });
        });
    }

    handleDirectAnchorNavigation() {
        // Check if page loaded with a hash in URL
        if (window.location.hash) {
            // Small delay to ensure all content is loaded
            setTimeout(() => {
                this.scrollToAnchor(window.location.hash);
            }, 100);
        }
    }

    handleProgrammaticNavigation() {
        // Listen for hash changes (when navigating via browser back/forward)
        window.addEventListener('hashchange', () => {
            if (window.location.hash) {
                this.scrollToAnchor(window.location.hash);
            }
        });
    }

    scrollToAnchor(href) {
        // Extract the anchor ID from the href
        let anchorId = '';
        
        if (href.startsWith('#')) {
            anchorId = href;
        } else if (href.includes('#')) {
            anchorId = '#' + href.split('#')[1];
        }

        if (!anchorId) return;

        // Find the target element
        const targetElement = document.querySelector(anchorId);
        
        if (targetElement) {
            // Calculate offset for fixed header if it exists
            const headerHeight = this.getHeaderHeight();
            const targetPosition = targetElement.offsetTop - headerHeight - 20; // 20px buffer
            
            // Smooth scroll to target
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
            
            // Update URL hash without triggering scroll
            this.updateHashWithoutScroll(anchorId);
            
            // Add visual feedback
            this.addVisualFeedback(targetElement);
        } else {
            console.warn(`Anchor target not found: ${anchorId}`);
        }
    }

    getHeaderHeight() {
        // Get the height of any fixed headers
        const fixedHeader = document.querySelector('.gx-navbar--application');
        if (fixedHeader) {
            const rect = fixedHeader.getBoundingClientRect();
            return rect.height;
        }
        return 0;
    }

    updateHashWithoutScroll(hash) {
        // Update URL hash without triggering scroll
        const currentHash = window.location.hash;
        if (currentHash !== hash) {
            // Temporarily remove scroll event listeners
            const originalScrollBehavior = document.documentElement.style.scrollBehavior;
            document.documentElement.style.scrollBehavior = 'auto';
            
            // Update hash
            window.location.hash = hash;
            
            // Restore scroll behavior
            setTimeout(() => {
                document.documentElement.style.scrollBehavior = originalScrollBehavior;
            }, 100);
        }
    }

    addVisualFeedback(targetElement) {
        // Add a subtle highlight effect to the target section
        targetElement.classList.add('gx-anchor-highlight');
        
        // Remove the highlight after animation
        setTimeout(() => {
            targetElement.classList.remove('gx-anchor-highlight');
        }, 2000);
    }

    setupSmoothScrolling() {
        // Ensure smooth scrolling is enabled
        if ('scrollBehavior' in document.documentElement.style) {
            document.documentElement.style.scrollBehavior = 'smooth';
        }
    }

    // Public method for external use
    navigateToAnchor(anchorId) {
        this.scrollToAnchor(anchorId);
    }
}

// Initialize anchor navigation
const anchorNavigation = new AnchorNavigation();

// Make it globally available
window.anchorNavigation = anchorNavigation;
