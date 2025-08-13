# GLOBX Project Infrastructure Documentation

## 🏗️ Project Architecture Overview

The GLOBX project follows a modular, component-based architecture with clear separation of concerns, ensuring maintainability, scalability, and performance optimization.

## 📁 File Structure Pattern

The project maintains a consistent file organization pattern:

```
project-root/
├── css/
│   ├── base.css
│   ├── shared-utilities.css
│   ├── js-controller.css
│   └── [page-name].css
├── js/
│   ├── js-controller.js
│   ├── nav-active.js
│   ├── scroll-reveal.js
│   ├── hero-owl-carousel.js
│   └── [page-name].js
├── includes/
│   ├── transparent_nav.php
│   ├── search_nav.php
│   └── nav.php
└── [page-name].php
```

## 🎨 CSS Architecture & Design System

### CSS File Organization

| File | Purpose |
|------|---------|
| `base.css` | Global variables, reset, typography, utility classes |
| `shared-utilities.css` | Common components (buttons, forms, navigation) |
| `js-controller.css` | JavaScript control interface styles |
| `[page-name].css` | Page-specific styles following naming convention |

### Design System Features

- **CSS Custom Properties**: Comprehensive variable system for colors, spacing, fonts
- **Responsive Breakpoints**: Mobile-first approach with Bootstrap 5 grid
- **Component Classes**: `.gx-[component-name]` naming convention
- **Animation System**: Scroll-triggered reveals, hover effects, transitions
- **Utility Classes**: Spacing, colors, typography helpers

### Color Palette

The project uses a standardized color palette defined through CSS custom properties for consistency across all components.

## ⚡ JavaScript Architecture

### JavaScript Organization

| File | Purpose |
|------|---------|
| `js-controller.js` | Central JavaScript control system |
| `nav-active.js` | Navigation state management |
| `scroll-reveal.js` | Intersection Observer-based animations |
| `hero-owl-carousel.js` | Carousel management |
| `[page-name].js` | Page-specific functionality |

### Key JavaScript Patterns

- **ES6 Classes**: Modern JavaScript with proper encapsulation
- **Event Delegation**: Efficient event handling
- **Intersection Observer**: Performance-optimized scroll animations
- **Modular Functions**: Clear separation of concerns
- **Error Handling**: Comprehensive error checking and fallbacks

## 🔧 PHP Architecture & Includes

### Include Pattern

The project uses a flexible navigation system:

| Include File | Usage |
|--------------|-------|
| `transparent_nav.php` | Hero pages with transparent background |
| `search_nav.php` | Search-enabled pages |
| `nav.php` | Standard navigation |

### Navigation Features

- **Active State Management**: PHP-based navigation highlighting
- **Contextual Navigation**: Different nav types for different page contexts

## 📱 Responsive Design System

### Breakpoint Strategy

The project implements a mobile-first responsive approach with standardized breakpoints.

### Grid System

- **Bootstrap 5**: Primary grid system
- **CSS Grid**: Custom layouts where needed
- **Flexbox**: Component-level layouts
- **Responsive Images**: WebP format with fallbacks

## 🎭 Animation & Interaction System

### Animation Types

- **Scroll Reveals**: `.gx-reveal-section`, `.gx-reveal-slide-left/right`
- **Hover Effects**: Transform, shadow, color transitions
- **Carousel Animations**: Owl Carousel with custom configurations
- **Loading States**: Skeleton screens, progressive enhancement

### Performance Features

- **Intersection Observer**: Efficient scroll detection
- **CSS Transforms**: Hardware-accelerated animations
- **Lazy Loading**: Images and content loading
- **Debounced Events**: Optimized resize and scroll handlers

## 🔌 External Dependencies

### Core Libraries

| Library | Version | Purpose |
|---------|---------|---------|
| Bootstrap | 5.3.2 | CSS framework and components |
| jQuery | 3.7.1 | DOM manipulation and carousel support |
| Owl Carousel | 2.3.4 | Carousel functionality |
| Font Awesome | 6.4.0 | Icon system |

### CDN Strategy

- **Cloudflare CDN**: Reliable, fast content delivery
- **Version Pinning**: Specific versions for stability
- **Fallback Handling**: Graceful degradation

## 📋 Page Structure Patterns

### Standard Page Layout

Every page follows a consistent structure with standardized section classes.

### Section Classes

| Class | Purpose |
|-------|---------|
| `.gx-section-common` | Standard section styling |
| `.gx-section-common--white` | White background variant |
| `.gx-reveal-section` | Scroll-triggered animations |
| `.gx-reveal-content` | Animated content wrapper |

## 🎯 Key Development Principles

- **Consistency**: Standardized naming, structure, and patterns
- **Modularity**: Reusable components and clear separation
- **Performance**: Optimized animations, lazy loading, efficient JavaScript
- **Accessibility**: Semantic HTML, ARIA labels, keyboard navigation
- **Maintainability**: Clear file organization, documented patterns
- **Scalability**: Component-based architecture for easy expansion

## 🚀 New Page Development Guide

When creating a new page, follow these established patterns:

### File Naming Convention

```
[page-name].php    // Main page file
[page-name].css    // Page-specific styles
[page-name].js     // Page-specific JavaScript
```

### Development Checklist

- [ ] **File Naming**: Follow `[page-name]` convention
- [ ] **CSS Structure**: Import shared utilities, add page-specific styles
- [ ] **JavaScript**: Follow modular function pattern with proper error handling
- [ ] **HTML**: Use standard section classes and reveal animations
- [ ] **Navigation**: Choose appropriate nav type and ensure active states
- [ ] **Responsiveness**: Mobile-first approach with proper breakpoints
- [ ] **Performance**: Optimize images, use lazy loading, efficient animations

### Standard Page Template

```php
<?php
// Include appropriate navigation
include 'includes/nav.php'; // or transparent_nav.php or search_nav.php
?>

<main>
    <section class="gx-section-common gx-reveal-section">
        <div class="container">
            <div class="gx-reveal-content">
                <!-- Page content here -->
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
```

### CSS Template

```css
/* Import shared utilities */
@import url('shared-utilities.css');

/* Page-specific styles */
.page-specific-class {
    /* Your styles here */
}
```

### JavaScript Template

```javascript
// Page-specific functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize page-specific features
    initPageFeatures();
});

function initPageFeatures() {
    // Implementation with error handling
    try {
        // Your code here
    } catch (error) {
        console.error('Page initialization error:', error);
    }
}
```

## 📚 Additional Resources

This infrastructure provides a solid foundation for creating new pages that seamlessly integrate with the existing system while maintaining consistency and performance standards.

For questions or contributions, please refer to the project's development guidelines and maintain the established patterns outlined in this documentation.