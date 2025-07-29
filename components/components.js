/* ======================================== */
/* COMPONENTS LOADER                       */
/* ======================================== */

class ComponentLoader {
    constructor() {
        this.components = {};
    }

    // Load a component from file
    async loadComponent(name, path) {
        try {
            const response = await fetch(path);
            if (!response.ok) {
                throw new Error(`Failed to load component: ${response.statusText}`);
            }
            const html = await response.text();
            this.components[name] = html;
            return html;
        } catch (error) {
            console.error(`Error loading component ${name}:`, error);
            return '';
        }
    }

    // Insert component into DOM
    insertComponent(name, targetSelector) {
        const target = document.querySelector(targetSelector);
        if (!target) {
            console.error(`Target element not found: ${targetSelector}`);
            return;
        }

        const component = this.components[name];
        if (component) {
            target.innerHTML = component;
        } else {
            console.error(`Component not loaded: ${name}`);
        }
    }

    // Load and insert component in one step
    async loadAndInsert(name, path, targetSelector) {
        await this.loadComponent(name, path);
        this.insertComponent(name, targetSelector);
    }

    // Initialize components for the page
    async init() {
        // Load header if header placeholder exists
        const headerPlaceholder = document.querySelector('[data-component="header"]');
        if (headerPlaceholder) {
            await this.loadAndInsert('header', '../components/header.php', '[data-component="header"]');
        }

        // Load footer if footer placeholder exists
        const footerPlaceholder = document.querySelector('[data-component="footer"]');
        if (footerPlaceholder) {
            await this.loadAndInsert('footer', '../components/footer.php', '[data-component="footer"]');
        }
    }
}

// Initialize component loader when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    const componentLoader = new ComponentLoader();
    componentLoader.init();
});

// Export for use in other scripts
window.ComponentLoader = ComponentLoader; 