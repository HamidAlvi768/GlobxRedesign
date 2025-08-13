/**
 * Tab Animations Handler
 * Ensures reliable tab switch animations including the tabSwitchScale effect
 */
class TabAnimationsHandler {
    constructor() {
        this.currentActiveTab = null;
        this.animationDuration = 800; // 0.8s in milliseconds
        this.init();
    }

    init() {
        this.setupTabListeners();
        this.setupAnimationObservers();
    }

    setupTabListeners() {
        // Listen for tab changes
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('gx-tab-btn')) {
                this.handleTabSwitch(e.target);
            }
        });

        // Also listen for programmatic tab changes
        this.observeTabChanges();
    }

    handleTabSwitch(clickedTab) {
        // Find the tab pane that should become active
        const tabId = clickedTab.getAttribute('data-bs-target') || clickedTab.getAttribute('href');
        if (!tabId) return;

        const targetPane = document.querySelector(tabId);
        if (!targetPane) return;

        // Trigger the animation sequence
        this.triggerTabAnimation(targetPane);
    }

    triggerTabAnimation(targetPane) {
        // Find the illustration in the target pane
        const illustration = targetPane.querySelector('.gx-illustration-foreground-common');
        if (!illustration) return;

        // Add animation class
        illustration.classList.add('gx-animating');
        
        // Remove animation class after completion
        setTimeout(() => {
            illustration.classList.remove('gx-animating');
            illustration.classList.add('gx-animation-complete');
        }, this.animationDuration);

        // Clean up animation complete class after a delay
        setTimeout(() => {
            illustration.classList.remove('gx-animation-complete');
        }, this.animationDuration + 100);
    }

    observeTabChanges() {
        // Use MutationObserver to detect when tab-pane-active class changes
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    const target = mutation.target;
                    if (target.classList.contains('gx-tab-pane-active')) {
                        this.triggerTabAnimation(target);
                    }
                }
            });
        });

        // Observe all tab panes
        const tabPanes = document.querySelectorAll('.gx-tab-pane');
        tabPanes.forEach(pane => {
            observer.observe(pane, { attributes: true });
        });
    }

    setupAnimationObservers() {
        // Ensure animations work even if CSS fails
        document.addEventListener('DOMContentLoaded', () => {
            this.initializeExistingActiveTabs();
        });
    }

    initializeExistingActiveTabs() {
        // Find any already active tabs and ensure their animations are ready
        const activePanes = document.querySelectorAll('.gx-tab-pane-active');
        activePanes.forEach(pane => {
            const illustration = pane.querySelector('.gx-illustration-foreground-common');
            if (illustration) {
                illustration.classList.add('gx-animation-complete');
            }
        });
    }

    // Public method to manually trigger animation
    forceAnimation(tabPaneSelector) {
        const pane = document.querySelector(tabPaneSelector);
        if (pane) {
            this.triggerTabAnimation(pane);
        }
    }

    // Public method to check animation status
    getAnimationStatus(tabPaneSelector) {
        const pane = document.querySelector(tabPaneSelector);
        if (!pane) return 'not-found';
        
        const illustration = pane.querySelector('.gx-illustration-foreground-common');
        if (!illustration) return 'no-illustration';
        
        if (illustration.classList.contains('gx-animating')) return 'animating';
        if (illustration.classList.contains('gx-animation-complete')) return 'complete';
        return 'idle';
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.tabAnimationsHandler = new TabAnimationsHandler();
});

// Also initialize if DOM is already loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.tabAnimationsHandler = new TabAnimationsHandler();
    });
} else {
    window.tabAnimationsHandler = new TabAnimationsHandler();
}
