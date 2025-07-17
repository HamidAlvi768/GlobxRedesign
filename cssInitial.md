The best way to set up CSS for a new project is to start with a "boilerplate" file that handles browser inconsistencies and sets up foundational rules for your design system.

Initially, your main CSS file should include four key things:

A CSS Reset to create a consistent base across all browsers.

The universal box-sizing rule to make layouts more intuitive.

CSS Custom Properties (variables) in the :root for colors, fonts, and spacing.

Base styles for the body element to set default typography and colors.

## 1. CSS Reset & Box-Sizing ⚙️
Browsers have different default styles for elements like headings (<h1>), paragraphs (<p>), and lists (<ul>). A CSS Reset removes these defaults so you start from a clean, predictable slate.

The most important rule is setting box-sizing: border-box. This tells the browser to include padding and border in the element's total width and height, which makes creating layouts much easier.

Here's a simple, modern reset you can use:

CSS

/* 1. A Modern CSS Reset & Box-Sizing */
*, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
## 2. Global Variables (:root) 🎨
Using CSS Custom Properties (variables) is crucial for keeping your design consistent. Define them in the :root pseudo-class so they are available globally. This makes it incredibly easy to update a color or font size across your entire website by changing just one line of code.


CSS

/* 2. Define Global Variables */
:root {
  /* Colors */
  --clr-primary: #005f73;
  --clr-accent: #e9d8a6;
  --clr-light: #f8f9fa;
  --clr-dark: #212529;
  --clr-text: #343a40;

  /* Fonts */
  --font-primary: 'Helvetica', 'Arial', sans-serif;
  --font-headings: 'Georgia', serif;

  /* Spacing */
  --spacing-1: 0.25rem; /* 4px */
  --spacing-2: 0.5rem;  /* 8px */
  --spacing-3: 1rem;    /* 16px */
  --spacing-4: 2rem;    /* 32px */
}
## 3. Base Body and Typography Styles ✍️
Next, set the default styles for the <body> tag. This is where you'll apply your global variables to define the project's default font, text color, and background color. Setting a line-height here improves readability across the site.

CSS

/* 3. Set Base Body Styles */
body {
  font-family: var(--font-primary);
  color: var(--clr-text);
  background-color: var(--clr-light);
  line-height: 1.6;
}

/* Optional: Set different font for headings */
h1, h2, h3 {
  font-family: var(--font-headings);
  color: var(--clr-primary);
}
## Complete Starter style.css
Here is a complete, ready-to-use CSS file that combines all the initial setup steps. You can copy and paste this into your project's style.css file as a starting point.

CSS

/* ======================================== */
/* INITIAL SETUP               */
/* ======================================== */

/* 1. A Modern CSS Reset & Box-Sizing
/* ---------------------------------------- */
*, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* 2. Define Global Variables
/* ---------------------------------------- */
:root {
  /* Colors */
  --clr-primary: #005f73;
  --clr-accent: #e9d8a6;
  --clr-light: #f8f9fa;
  --clr-dark: #212529;
  --clr-text: #343a40;

  /* Fonts */
  --font-primary: 'Helvetica', 'Arial', sans-serif;
  --font-headings: 'Georgia', serif;

  /* Spacing (based on 1rem = 16px) */
  --spacing-1: 0.25rem; /* 4px */
  --spacing-2: 0.5rem;  /* 8px */
  --spacing-3: 1rem;    /* 16px */
  --spacing-4: 2rem;    /* 32px */
  --spacing-5: 4rem;    /* 64px */
}

/* 3. Set Base Body & Typography Styles
/* ---------------------------------------- */
body {
  font-family: var(--font-primary);
  color: var(--clr-text);
  background-color: var(--clr-light);
  line-height: 1.6;
}

img, picture, video, canvas, svg {
  display: block;
  max-width: 100%;
}

h1, h2, h3, h4, h5, h6 {
  font-family: var(--font-headings);
  color: var(--clr-primary);
  line-height: 1.2;
  margin-bottom: var(--spacing-2);
}


/* ======================================== */
/* START YOUR STYLES            */
/* ======================================== */

/* e.g., .container, .header, .btn, etc. */
