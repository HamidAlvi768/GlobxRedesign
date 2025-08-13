/**
 * NavigationActiveHandler - Manages sticky navigation behavior
 * Now simplified to only handle sticky navigation since active states are managed by PHP
 */
class NavigationActiveHandler {
    constructor() {
        this.stickyNav = null;
        this.lastScrollTop = 0;
        this.scrollThreshold = 100;
        this.isStickyVisible = false;
        this.debugMode = false;
        
        this.init();
    }

    init() {
        try {
            this.setupStickyNavigation();
            this.setupScrollListener();
                
                if (this.debugMode) {
                    console.log('🎉 NavigationActiveHandler ready!');
                    console.log('Available methods:');
                    console.log('  - navActiveHandler.setDebugMode(true/false)');
                console.log('  - navActiveHandler.toggleStickyNav()');
                console.log('  - navActiveHandler.showStickyNav()');
                console.log('  - navActiveHandler.hideStickyNav()');
            }
        } catch (error) {
            console.error('❌ Error initializing NavigationActiveHandler:', error);
        }
    }
    
    setupStickyNavigation() {
        try {
            this.stickyNav = document.getElementById('gxStickyNav');
            if (!this.stickyNav) {
                if (this.debugMode) {
                    console.log('⚠️ Sticky navigation element not found');
                }
                return;
            }
            
            // Initially hide sticky nav
            this.hideStickyNav();
            
            if (this.debugMode) {
                console.log('✅ Sticky navigation setup complete');
            }
        } catch (error) {
            console.error('❌ Error setting up sticky navigation:', error);
        }
    }
    
    setupScrollListener() {
        try {
            window.addEventListener('scroll', () => {
                this.handleScroll();
            });
            
            if (this.debugMode) {
                console.log('✅ Scroll listener setup complete');
            }
        } catch (error) {
            console.error('❌ Error setting up scroll listener:', error);
        }
    }
    
    handleScroll() {
        try {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Show sticky nav when scrolling up and past threshold
            if (scrollTop > this.scrollThreshold && scrollTop < this.lastScrollTop) {
                if (!this.isStickyVisible) {
                    this.showStickyNav();
                }
            }
            // Hide sticky nav when scrolling down or at top
            else if (scrollTop <= this.scrollThreshold || scrollTop > this.lastScrollTop) {
                if (this.isStickyVisible) {
                    this.hideStickyNav();
                }
            }
            
            this.lastScrollTop = scrollTop;
        } catch (error) {
            console.error('❌ Error handling scroll:', error);
        }
    }
    
    showStickyNav() {
        try {
            if (this.stickyNav) {
                this.stickyNav.style.display = 'block';
                this.stickyNav.style.animation = 'slideDown 0.3s ease-out';
                this.isStickyVisible = true;
                
                if (this.debugMode) {
                    console.log('⬇️ Sticky navigation shown');
                }
            }
        } catch (error) {
            console.error('❌ Error showing sticky navigation:', error);
        }
    }
    
    hideStickyNav() {
        try {
            if (this.stickyNav) {
                this.stickyNav.style.animation = 'slideUp 0.3s ease-out';
                setTimeout(() => {
                    if (this.stickyNav) {
                        this.stickyNav.style.display = 'none';
                        this.isStickyVisible = false;
                    }
                }, 300);
                
                if (this.debugMode) {
                    console.log('⬆️ Sticky navigation hidden');
                }
            }
        } catch (error) {
            console.error('❌ Error hiding sticky navigation:', error);
        }
    }
    
    toggleStickyNav() {
        if (this.isStickyVisible) {
            this.hideStickyNav();
        } else {
            this.showStickyNav();
        }
    }
    
    setDebugMode(enabled) {
        this.debugMode = enabled;
        console.log(`🔧 NavigationActiveHandler debug mode: ${enabled ? 'ON' : 'OFF'}`);
    }
}

// Initialize the handler when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    try {
        window.navActiveHandler = new NavigationActiveHandler();
    } catch (error) {
        console.error('❌ NavigationActiveHandler global error:', error);
    }
}); 