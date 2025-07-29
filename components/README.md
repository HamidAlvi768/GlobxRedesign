# Components System

This folder contains reusable HTML components that can be included across multiple pages to maintain consistency and reduce code duplication.

## Available Components

### Header Component (`header.php`)
- **Location**: `components/header.php`
- **Contains**: Top bar with campaign message and main navigation bar
- **Usage**: Include on all pages that need the standard header

### Footer Component (`footer.php`)
- **Location**: `components/footer.php`
- **Contains**: Company information, contact details, legal links, and social media
- **Usage**: Include on all pages that need the standard footer

## How to Use

### 1. Add Component Placeholders
In your HTML page, add placeholder elements where you want the components to appear:

```html
<!-- Header Component Placeholder -->
<div data-component="header"></div>

<!-- Your page content here -->

<!-- Footer Component Placeholder -->
<div data-component="footer"></div>
```

### 2. Include the Component Loader
Add the component loader script to your page:

```html
<!-- Component Loader -->
<script src="./assets/js/components/components.js"></script>
```

### 3. The Component Loader Will Automatically:
- Detect placeholder elements with `data-component` attributes
- Load the corresponding component files
- Insert the component HTML into the placeholders

## File Structure

```
components/
├── header.php          # Header component (top bar + navbar)
├── footer.php          # Footer component (company info + links)
├── components.js        # Component loader script
└── README.md           # This documentation
```

## Component Loader Features

### Automatic Detection
The loader automatically detects and loads components based on `data-component` attributes:
- `data-component="header"` → loads `header.php`
- `data-component="footer"` → loads `footer.php`

### Error Handling
- Graceful error handling if component files are not found
- Console logging for debugging
- Fallback behavior if components fail to load

### Async Loading
- Components are loaded asynchronously
- No blocking of page rendering
- Components appear as soon as they're loaded

## Customization

### Adding New Components
1. Create a new HTML file in the `components/` folder
2. Add a placeholder with `data-component="your-component-name"`
3. Update the `components.js` file to handle the new component

### Modifying Existing Components
- Edit the component HTML files directly
- Changes will be reflected across all pages that use the component
- No need to update individual pages

## Benefits

1. **Consistency**: All pages use the same header and footer
2. **Maintainability**: Update once, applies everywhere
3. **DRY Principle**: Don't Repeat Yourself
4. **Performance**: Components are cached after first load
5. **Scalability**: Easy to add new components

## Browser Compatibility

The component system uses modern JavaScript features:
- `fetch()` API for loading components
- `async/await` for asynchronous operations
- ES6+ class syntax

Works in all modern browsers (Chrome, Firefox, Safari, Edge).

## Troubleshooting

### Components Not Loading
1. Check browser console for error messages
2. Verify file paths are correct
3. Ensure the component loader script is included
4. Check that placeholder elements have correct `data-component` attributes

### Path Issues
- Components use relative paths (`../components/`)
- Adjust paths based on your page's location in the file structure
- For pages in subdirectories, you may need to adjust the path in `components.js` 