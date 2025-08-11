/**
 * JavaScript Controller for GlobX Website
 * Provides functionality to stop/start all JavaScript features
 */

class JSController {
    constructor() {
        this.isActive = true;
        this.originalEventListeners = new Map();
        this.originalFunctions = new Map();
        this.animationFrames = [];
        this.intervals = [];
        this.timeouts = [];
        this.stoppedElements = new Set();
        
        this.init();
    }

    init() {
        // Store original functions before overriding
        this.storeOriginalFunctions();
        
        // Create and add the control button
        this.createControlButton();
        
        // Add keyboard shortcut (Ctrl + Shift + J)
        this.addKeyboardShortcut();
        
        // Add status indicator
        this.createStatusIndicator();
        
        // Log initialization
        console.log('🟢 JavaScript Controller initialized');
    }

    storeOriginalFunctions() {
        // Store original setTimeout and setInterval
        this.originalFunctions.set('setTimeout', window.setTimeout);
        this.originalFunctions.set('setInterval', window.setInterval);
        this.originalFunctions.set('requestAnimationFrame', window.requestAnimationFrame);
        this.originalFunctions.set('addEventListener', window.addEventListener);
        this.originalFunctions.set('removeEventListener', window.removeEventListener);
    }

    createControlButton() {
        // Create button container
        const buttonContainer = document.createElement('div');
        buttonContainer.className = 'gx-js-control-container';
        buttonContainer.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            font-family: 'Poppins', sans-serif;
        `;

        // Create the control button
        const controlButton = document.createElement('button');
        controlButton.className = 'gx-js-control-btn';
        controlButton.innerHTML = '🔄 JS';
        controlButton.title = 'Click to stop/start JavaScript (Ctrl+Shift+J)';
        controlButton.style.cssText = `
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            min-width: 60px;
            text-align: center;
        `;

        // Add hover effects
        controlButton.addEventListener('mouseenter', () => {
            if (this.isActive) {
                controlButton.style.transform = 'scale(1.1)';
                controlButton.style.boxShadow = '0 6px 20px rgba(0,0,0,0.3)';
            }
        });

        controlButton.addEventListener('mouseleave', () => {
            if (this.isActive) {
                controlButton.style.transform = 'scale(1)';
                controlButton.style.boxShadow = '0 4px 15px rgba(0,0,0,0.2)';
            }
        });

        // Add click functionality
        controlButton.addEventListener('click', () => {
            this.toggleJavaScript();
        });

        // Add button to container
        buttonContainer.appendChild(controlButton);
        
        // Add to body
        document.body.appendChild(buttonContainer);
        
        // Store reference
        this.controlButton = controlButton;
        this.buttonContainer = buttonContainer;
    }

    createStatusIndicator() {
        // Create status indicator
        const statusIndicator = document.createElement('div');
        statusIndicator.className = 'gx-js-status-indicator';
        statusIndicator.style.cssText = `
            position: fixed;
            top: 70px;
            right: 20px;
            z-index: 9998;
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            color: #666;
            background: rgba(255,255,255,0.9);
            padding: 4px 8px;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        `;
        
        this.updateStatusIndicator();
        document.body.appendChild(statusIndicator);
        this.statusIndicator = statusIndicator;
    }

    updateStatusIndicator() {
        if (this.statusIndicator) {
            this.statusIndicator.innerHTML = `JS: ${this.isActive ? '🟢 Active' : '🔴 Stopped'}`;
            this.statusIndicator.style.color = this.isActive ? '#27ae60' : '#e74c3c';
        }
    }

    addKeyboardShortcut() {
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.shiftKey && e.key === 'J') {
                e.preventDefault();
                this.toggleJavaScript();
            }
        });
    }

    toggleJavaScript() {
        if (this.isActive) {
            this.stopJavaScript();
        } else {
            this.startJavaScript();
        }
    }

    stopJavaScript() {
        this.isActive = false;
        
        // Update button appearance
        this.controlButton.innerHTML = '⏸️ JS';
        this.controlButton.style.background = 'linear-gradient(135deg, #95a5a6, #7f8c8d)';
        this.controlButton.title = 'JavaScript stopped. Click to restart.';
        this.controlButton.classList.add('js-stopped');
        
        // Stop all animations
        this.stopAllAnimations();
        
        // Stop all intervals and timeouts
        this.stopAllTimers();
        
        // Disable event listeners
        this.disableEventListeners();
        
        // Update status
        this.updateStatusIndicator();
        
        // Show notification
        this.showNotification('JavaScript stopped', 'All JS features have been disabled');
        
        console.log('🔴 JavaScript stopped by user');
    }

    startJavaScript() {
        this.isActive = true;
        
        // Update button appearance
        this.controlButton.innerHTML = '🔄 JS';
        this.controlButton.style.background = 'linear-gradient(135deg, #ff6b6b, #ee5a24)';
        this.controlButton.title = 'Click to stop/start JavaScript (Ctrl+Shift+J)';
        this.controlButton.classList.remove('js-stopped');
        
        // Restore event listeners
        this.restoreEventListeners();
        
        // Update status
        this.updateStatusIndicator();
        
        // Show notification
        this.showNotification('JavaScript started', 'All JS features have been re-enabled');
        
        console.log('🟢 JavaScript started by user');
    }

    stopAllAnimations() {
        // Stop CSS animations
        const elements = document.querySelectorAll('*');
        elements.forEach(el => {
            if (el.style.animation) {
                el.style.animationPlayState = 'paused';
                this.stoppedElements.add(el);
            }
            if (el.style.transition) {
                el.style.transition = 'none';
                this.stoppedElements.add(el);
            }
        });

        // Stop requestAnimationFrame
        this.animationFrames.forEach(id => {
            if (this.originalFunctions.get('cancelAnimationFrame')) {
                this.originalFunctions.get('cancelAnimationFrame').call(window, id);
            }
        });
        this.animationFrames = [];
    }

    stopAllTimers() {
        // Clear all intervals
        this.intervals.forEach(id => {
            if (this.originalFunctions.get('clearInterval')) {
                this.originalFunctions.get('clearInterval').call(window, id);
            }
        });
        this.intervals = [];

        // Clear all timeouts
        this.timeouts.forEach(id => {
            if (this.originalFunctions.get('clearTimeout')) {
                this.originalFunctions.get('clearTimeout').call(window, id);
            }
        });
        this.timeouts = [];
    }

    disableEventListeners() {
        // Override addEventListener to prevent new listeners
        window.addEventListener = (type, listener, options) => {
            if (this.isActive) {
                return this.originalFunctions.get('addEventListener').call(window, type, listener, options);
            }
            return false;
        };

        // Override setTimeout and setInterval
        window.setTimeout = (callback, delay, ...args) => {
            if (this.isActive) {
                const id = this.originalFunctions.get('setTimeout').call(window, callback, delay, ...args);
                this.timeouts.push(id);
                return id;
            }
            return null;
        };

        window.setInterval = (callback, delay, ...args) => {
            if (this.isActive) {
                const id = this.originalFunctions.get('setInterval').call(window, callback, delay, ...args);
                this.intervals.push(id);
                return id;
            }
            return null;
        };

        window.requestAnimationFrame = (callback) => {
            if (this.isActive) {
                const id = this.originalFunctions.get('requestAnimationFrame').call(window, callback);
                this.animationFrames.push(id);
                return id;
            }
            return null;
        };
    }

    restoreEventListeners() {
        // Restore original functions
        window.addEventListener = this.originalFunctions.get('addEventListener');
        window.setTimeout = this.originalFunctions.get('setTimeout');
        window.setInterval = this.originalFunctions.get('setInterval');
        window.requestAnimationFrame = this.originalFunctions.get('requestAnimationFrame');
        
        // Restore animations
        this.stoppedElements.forEach(el => {
            if (el.style.animation) {
                el.style.animationPlayState = 'running';
            }
            if (el.style.transition) {
                el.style.transition = '';
            }
        });
        this.stoppedElements.clear();
    }

    showNotification(title, message) {
        // Create notification
        const notification = document.createElement('div');
        notification.className = `gx-js-notification ${this.isActive ? 'js-started' : 'js-stopped'}`;
        notification.style.cssText = `
            position: fixed;
            top: 80px;
            right: 20px;
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            z-index: 10000;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            max-width: 300px;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;

        notification.innerHTML = `
            <div style="font-weight: 600; margin-bottom: 5px;">${title}</div>
            <div style="opacity: 0.9;">${message}</div>
        `;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);

        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    // Public method to check if JS is active
    isJavaScriptActive() {
        return this.isActive;
    }

    // Public method to force stop
    forceStop() {
        if (this.isActive) {
            this.stopJavaScript();
        }
    }

    // Public method to force start
    forceStart() {
        if (!this.isActive) {
            this.startJavaScript();
        }
    }

    // Method to get current status
    getStatus() {
        return {
            isActive: this.isActive,
            activeTimers: this.timeouts.length + this.intervals.length,
            activeAnimations: this.animationFrames.length,
            stoppedElements: this.stoppedElements.size
        };
    }
}

// Initialize the controller when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.jsController = new JSController();
});

// Also initialize if DOM is already loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.jsController = new JSController();
    });
} else {
    window.jsController = new JSController();
} 