<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Website Builder - Component-Based Design System</title>
    <style>
        /* Step 1: Global Styles & Variables */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            /* Colors */
            --primary-color: #667eea;
            --primary-dark: #5a6fd8;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --text-light: #a0aec0;
            --bg-primary: #ffffff;
            --bg-secondary: #f7fafc;
            --bg-dark: #1a202c;
            --border-light: #e2e8f0;
            --success: #48bb78;
            --warning: #ed8936;
            --error: #f56565;

            /* Typography */
            --font-primary: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-mono: 'Fira Code', 'Monaco', 'Consolas', monospace;
            --font-size-xs: 0.75rem;
            --font-size-sm: 0.875rem;
            --font-size-base: 1rem;
            --font-size-lg: 1.125rem;
            --font-size-xl: 1.25rem;
            --font-size-2xl: 1.5rem;
            --font-size-3xl: 1.875rem;
            --font-size-4xl: 2.25rem;
            --font-size-5xl: 3rem;

            /* Spacing */
            --space-xs: 0.25rem;
            --space-sm: 0.5rem;
            --space-md: 1rem;
            --space-lg: 1.5rem;
            --space-xl: 2rem;
            --space-2xl: 3rem;
            --space-3xl: 4rem;
            --space-4xl: 6rem;

            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);

            /* Borders */
            --border-radius-sm: 0.125rem;
            --border-radius-md: 0.375rem;
            --border-radius-lg: 0.5rem;
            --border-radius-xl: 0.75rem;
            --border-radius-2xl: 1rem;
            --border-radius-full: 9999px;

            /* Transitions */
            --transition-fast: 0.15s ease-out;
            --transition-base: 0.3s ease-out;
            --transition-slow: 0.5s ease-out;
        }

        /* Global Element Styles */
        body {
            font-family: var(--font-primary);
            font-size: var(--font-size-base);
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--bg-primary);
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: var(--space-md);
        }

        h1 { font-size: var(--font-size-4xl); }
        h2 { font-size: var(--font-size-3xl); }
        h3 { font-size: var(--font-size-2xl); }
        h4 { font-size: var(--font-size-xl); }
        h5 { font-size: var(--font-size-lg); }
        h6 { font-size: var(--font-size-base); }

        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color var(--transition-fast);
        }

        a:hover {
            color: var(--primary-dark);
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-lg);
        }

        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }

        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .flex-wrap { flex-wrap: wrap; }
        .items-center { align-items: center; }
        .items-start { align-items: flex-start; }
        .items-end { align-items: flex-end; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .justify-around { justify-content: space-around; }
        .gap-sm { gap: var(--space-sm); }
        .gap-md { gap: var(--space-md); }
        .gap-lg { gap: var(--space-lg); }
        .gap-xl { gap: var(--space-xl); }

        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, 1fr); }
        .grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
        .grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
        .grid-cols-4 { grid-template-columns: repeat(4, 1fr); }

        .p-sm { padding: var(--space-sm); }
        .p-md { padding: var(--space-md); }
        .p-lg { padding: var(--space-lg); }
        .p-xl { padding: var(--space-xl); }
        .p-2xl { padding: var(--space-2xl); }
        .p-3xl { padding: var(--space-3xl); }

        .m-sm { margin: var(--space-sm); }
        .m-md { margin: var(--space-md); }
        .m-lg { margin: var(--space-lg); }
        .m-xl { margin: var(--space-xl); }
        .m-2xl { margin: var(--space-2xl); }

        .mt-sm { margin-top: var(--space-sm); }
        .mt-md { margin-top: var(--space-md); }
        .mt-lg { margin-top: var(--space-lg); }
        .mt-xl { margin-top: var(--space-xl); }
        .mt-2xl { margin-top: var(--space-2xl); }

        .mb-sm { margin-bottom: var(--space-sm); }
        .mb-md { margin-bottom: var(--space-md); }
        .mb-lg { margin-bottom: var(--space-lg); }
        .mb-xl { margin-bottom: var(--space-xl); }
        .mb-2xl { margin-bottom: var(--space-2xl); }

        .rounded-sm { border-radius: var(--border-radius-sm); }
        .rounded-md { border-radius: var(--border-radius-md); }
        .rounded-lg { border-radius: var(--border-radius-lg); }
        .rounded-xl { border-radius: var(--border-radius-xl); }
        .rounded-2xl { border-radius: var(--border-radius-2xl); }
        .rounded-full { border-radius: var(--border-radius-full); }

        .shadow-sm { box-shadow: var(--shadow-sm); }
        .shadow-md { box-shadow: var(--shadow-md); }
        .shadow-lg { box-shadow: var(--shadow-lg); }
        .shadow-xl { box-shadow: var(--shadow-xl); }

        .bg-primary { background-color: var(--bg-primary); }
        .bg-secondary { background-color: var(--bg-secondary); }
        .bg-dark { background-color: var(--bg-dark); }

        .text-primary { color: var(--text-primary); }
        .text-secondary { color: var(--text-secondary); }
        .text-light { color: var(--text-light); }
        .text-white { color: white; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-sm);
            padding: var(--space-sm) var(--space-lg);
            border: none;
            border-radius: var(--border-radius-md);
            font-weight: 500;
            font-size: var(--font-size-base);
            cursor: pointer;
            transition: all var(--transition-fast);
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary-color));
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            border: 1px solid var(--border-light);
        }

        .btn-secondary:hover {
            background-color: var(--bg-primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .card {
            background: var(--bg-primary);
            border-radius: var(--border-radius-lg);
            padding: var(--space-xl);
            box-shadow: var(--shadow-md);
            transition: transform var(--transition-base), box-shadow var(--transition-base);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Step 2: Component Styles */
        .site-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-light);
            position: sticky;
            top: 0;
            z-index: 100;
            transition: all var(--transition-base);
        }

        .site-header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--space-md) var(--space-lg);
        }

        .site-header .logo {
            font-size: var(--font-size-xl);
            font-weight: 700;
            color: var(--primary-color);
        }

        .site-header nav {
            display: flex;
            gap: var(--space-xl);
        }

        .site-header nav a {
            color: var(--text-primary);
            font-weight: 500;
            transition: color var(--transition-fast);
        }

        .site-header nav a:hover {
            color: var(--primary-color);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: var(--space-4xl) 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-section .container {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: var(--font-size-5xl);
            margin-bottom: var(--space-lg);
        }

        .hero-section p {
            font-size: var(--font-size-xl);
            margin-bottom: var(--space-2xl);
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--space-xl);
            margin-top: var(--space-2xl);
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius-lg);
            padding: var(--space-xl);
            text-align: center;
            transition: transform var(--transition-base);
        }

        .feature-card:hover {
            transform: translateY(-4px);
        }

        .feature-card .icon {
            font-size: var(--font-size-3xl);
            margin-bottom: var(--space-md);
        }

        .steps-section {
            padding: var(--space-4xl) 0;
            background: var(--bg-secondary);
        }

        .step-card {
            background: var(--bg-primary);
            border-radius: var(--border-radius-lg);
            padding: var(--space-xl);
            margin-bottom: var(--space-xl);
            position: relative;
            border-left: 4px solid var(--primary-color);
        }

        .step-card .step-number {
            position: absolute;
            top: -10px;
            left: -15px;
            background: var(--primary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: var(--font-size-sm);
        }

        .code-example {
            background: var(--bg-dark);
            color: #f7fafc;
            padding: var(--space-lg);
            border-radius: var(--border-radius-md);
            margin: var(--space-md) 0;
            font-family: var(--font-mono);
            font-size: var(--font-size-sm);
            line-height: 1.5;
            overflow-x: auto;
        }

        .code-example .comment {
            color: #68d391;
        }

        .code-example .keyword {
            color: #f093fb;
        }

        .code-example .string {
            color: #fbb6ce;
        }

        .demo-switcher {
            margin: var(--space-xl) 0;
            text-align: center;
        }

        .demo-switcher button {
            background: none;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: var(--space-sm) var(--space-lg);
            margin: 0 var(--space-sm);
            border-radius: var(--border-radius-md);
            cursor: pointer;
            font-weight: 500;
            transition: all var(--transition-fast);
        }

        .demo-switcher button.active {
            background: var(--primary-color);
            color: white;
        }

        .demo-switcher button:hover {
            background: var(--primary-color);
            color: white;
        }

        .demo-area {
            border: 2px dashed var(--border-light);
            padding: var(--space-2xl);
            margin: var(--space-xl) 0;
            border-radius: var(--border-radius-lg);
            background: var(--bg-secondary);
        }

        .component-showcase {
            padding: var(--space-4xl) 0;
        }

        .testimonial-card {
            background: var(--bg-primary);
            border-radius: var(--border-radius-lg);
            padding: var(--space-xl);
            text-align: center;
            box-shadow: var(--shadow-md);
        }

        .testimonial-card .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto var(--space-md);
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: var(--font-size-lg);
        }

        .site-footer {
            background: var(--bg-dark);
            color: white;
            padding: var(--space-3xl) 0 var(--space-xl);
        }

        .site-footer .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--space-2xl);
        }

        .site-footer h4 {
            margin-bottom: var(--space-md);
        }

        .site-footer a {
            color: var(--text-light);
            display: block;
            margin-bottom: var(--space-sm);
        }

        .site-footer a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #2d3748;
            margin-top: var(--space-2xl);
            padding-top: var(--space-xl);
            text-align: center;
            color: var(--text-light);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .site-header nav {
                display: none;
            }
            
            .hero-section h1 {
                font-size: var(--font-size-3xl);
            }
            
            .feature-grid {
                grid-template-columns: 1fr;
            }
            
            .grid-cols-2,
            .grid-cols-3,
            .grid-cols-4 {
                grid-template-columns: 1fr;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity var(--transition-slow), transform var(--transition-slow);
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity var(--transition-slow), transform var(--transition-slow);
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity var(--transition-slow), transform var(--transition-slow);
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <!-- Step 2: Reusable Components -->
    
    <!-- Header Component -->
    <header class="site-header">
        <div class="container">
            <div class="logo">🚀 SmartBuild</div>
            <nav>
                <a href="#home">Home</a>
                <a href="#features">Features</a>
                <a href="#steps">Steps</a>
                <a href="#demo">Demo</a>
                <a href="#components">Components</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section Component -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="fade-in">The Smart Way to Build Websites</h1>
            <p class="fade-in">Master component-based development with design systems, reusable UI components, and scalable architecture patterns.</p>
            <div class="flex justify-center gap-md">
                <a href="#steps" class="btn btn-primary">Get Started</a>
                <a href="#demo" class="btn btn-secondary">View Demo</a>
            </div>
            
            <div class="feature-grid">
                <div class="feature-card fade-in">
                    <div class="icon">🎨</div>
                    <h3>Design Systems</h3>
                    <p>Create consistent, maintainable designs with reusable components and variables.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="icon">⚡</div>
                    <h3>Component-Based</h3>
                    <p>Build once, use everywhere. Modular components that scale with your project.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="icon">🔧</div>
                    <h3>Developer-Friendly</h3>
                    <p>From vanilla HTML/CSS to modern frameworks like Svelte and React.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section id="steps" class="steps-section">
        <div class="container">
            <h2 class="text-center mb-2xl gradient-text">Step-by-Step Guide</h2>
            
            <div class="step-card slide-in-left">
                <div class="step-number">0</div>
                <h3>Design Your Website First</h3>
                <p>Before writing code, create a solid design foundation. Identify reusable components and establish your design system.</p>
                <div class="code-example">
<span class="comment">// Design considerations:</span>
<span class="keyword">const</span> designSystem = {
  colors: { primary: <span class="string">'#667eea'</span>, secondary: <span class="string">'#764ba2'</span> },
  typography: { heading: <span class="string">'Inter'</span>, body: <span class="string">'Inter'</span> },
  spacing: { sm: <span class="string">'0.5rem'</span>, md: <span class="string">'1rem'</span>, lg: <span class="string">'1.5rem'</span> },
  components: [<span class="string">'Header'</span>, <span class="string">'Hero'</span>, <span class="string">'Card'</span>, <span class="string">'Footer'</span>]
};
                </div>
            </div>

            <div class="step-card slide-in-right">
                <div class="step-number">1</div>
                <h3>Set Up Global Styles & Variables</h3>
                <p>Create a foundation with CSS variables, utility classes, and global styles for consistency.</p>
                <div class="code-example">
<span class="comment">/* CSS Variables for consistency */</span>
:root {
  <span class="keyword">--primary-color</span>: <span class="string">#667eea</span>;
  <span class="keyword">--space-md</span>: <span class="string">1rem</span>;
  <span class="keyword">--font-primary</span>: <span class="string">'Inter', sans-serif</span>;
}

<span class="comment">/* Utility Classes */</span>
.container { max-width: 1200px; margin: 0 auto; }
.btn { padding: var(--space-sm) var(--space-lg); }
                </div>
            </div>

            <div class="step-card slide-in-left">
                <div class="step-number">2</div>
                <h3>Create Reusable Components</h3>
                <p>Build modular components that can be used across your entire website. Start with vanilla solutions, then scale with frameworks.</p>
                <div class="code-example">
<span class="comment">// Vanilla Web Component</span>
<span class="keyword">class</span> HeaderComponent <span class="keyword">extends</span> HTMLElement {
  connectedCallback() {
    <span class="keyword">this</span>.innerHTML = `
      &lt;header class="site-header"&gt;
        &lt;div class="container"&gt;
          &lt;div class="logo"&gt;${<span class="keyword">this</span>.getAttribute(<span class="string">'logo'</span>)}&lt;/div&gt;
          &lt;nav&gt;${<span class="keyword">this</span>.getAttribute(<span class="string">'nav'</span>)}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/header&gt;
    `;
  }
}

customElements.define(<span class="string">'site-header'</span>, HeaderComponent);
                </div>
            </div>

            <div class="step-card slide-in-right">
                <div class="step-number">3</div>
                <h3>Use and Maintain Components</h3>
                <p>Implement your components across pages and maintain them from a single source of truth.</p>
                <div class="code-example">
<span class="comment">&lt;!-- Usage across multiple pages --&gt;</span>
&lt;site-header logo="🚀 SmartBuild" nav="Home|Features|Demo"&gt;&lt;/site-header&gt;
&lt;hero-section title="Welcome" subtitle="Build smart websites"&gt;&lt;/hero-section&gt;
&lt;card-grid items="3"&gt;&lt;/card-grid&gt;
&lt;site-footer&gt;&lt;/site-footer&gt;
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="component-showcase">
        <div class="container">
            <h2 class="text-center mb-2xl gradient-text">Interactive Demo</h2>
            <p class="text-center text-secondary mb-xl">Switch between vanilla and framework approaches to see the difference.</p>
            
            <div class="demo-switcher">
                <button id="vanilla-btn" class="active">Vanilla Components</button>
                <button id="framework-btn">Framework Components</button>
            </div>

            <div class="demo-area">
                <div id="vanilla-demo">
                    <h3>Vanilla Web Components Demo</h3>
                    <p>These components are built with native Web Components API:</p>
                    <demo-card 
                        title="Vanilla Component" 
                        content="This card is created using vanilla JavaScript and Web Components. It's lightweight and doesn't require any framework."
                        icon="🌟">
                    </demo-card>
                </div>

                <div id="framework-demo" style="display: none;">
                    <h3>Framework Components Demo</h3>
                    <p>These components simulate a framework-based approach:</p>
                    <div class="card">
                        <div class="flex items-center gap-md mb-md">
                            <span style="font-size: 2rem;">⚡</span>
                            <h4>Framework Component</h4>
                        </div>
                        <p>This card demonstrates how framework components would work with reactive data binding and state management.</p>
                        <div class="mt-md">
                            <button class="btn btn-primary" onclick="updateFrameworkDemo()">Update State</button>
                            <span id="framework-state" class="ml-md">State: 0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Components Showcase -->
    <section id="components" class="bg-secondary p-4xl">
        <div class="container">
            <h2 class="text-center mb-2xl gradient-text">Component Library</h2>
            <p class="text-center text-secondary mb-xl">Explore our collection of reusable components built with the design system.</p>
            
            <div class="grid grid-cols-3 gap-xl">
                <!-- Card Components -->
                <div class="card fade-in">
                    <h4>💳 Cards</h4>
                    <p>Flexible card components for displaying content with consistent styling and hover effects.</p>
                    <div class="mt-md">
                        <span class="btn btn-secondary" style="font-size: 0.875rem;">View Code</span>
                    </div>
                </div>

                <!-- Button Components -->
                <div class="card fade-in">
                    <h4>🔘 Buttons</h4>
                    <p>Various button styles with consistent spacing, colors, and interactive states.</p>
                    <div class="mt-md flex gap-sm">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-secondary">Secondary</button>
                    </div>
                </div>

                <!-- Typography Components -->
                <div class="card fade-in">
                    <h4>📝 Typography</h4>
                    <p>Consistent typography system with predefined sizes, weights, and spacing.</p>
                    <div class="mt-md">
                        <h5>Heading Example</h5>
                        <p class="text-secondary">Body text example</p>
                    </div>
                </div>

                <!-- Grid Components -->
                <div class="card fade-in">
                    <h4>📊 Grid System</h4>
                    <p>Responsive grid system with utility classes for flexible layouts.</p>
                    <div class="mt-md">
                        <div class="grid grid-cols-2 gap-sm">
                            <div class="bg-secondary p-sm rounded-md text-center">Col 1</div>
                            <div class="bg-secondary p-sm rounded-md text-center">Col 2</div>
                        </div>
                    </div>
                </div>

                <!-- Form Components -->
                <div class="card fade-in">
                    <h4>📝 Forms</h4>
                    <p>Styled form elements with consistent design and validation states.</p>
                    <div class="mt-md">
                        <input type="text" placeholder="Enter text..." style="width: 100%; padding: 0.5rem; border: 1px solid var(--border-light); border-radius: var(--border-radius-md); font-family: var(--font-primary);">
                    </div>
                </div>

                <!-- Navigation Components -->
                <div class="card fade-in">
                    <h4>🧭 Navigation</h4>
                    <p>Flexible navigation components for headers, sidebars, and breadcrumbs.</p>
                    <div class="mt-md">
                        <nav class="flex gap-md">
                            <a href="#" class="text-primary">Home</a>
                            <a href="#" class="text-secondary">About</a>
                            <a href="#" class="text-secondary">Contact</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="mt-4xl">
                <h3 class="text-center mb-2xl">What Developers Say</h3>
                <div class="grid grid-cols-2 gap-xl">
                    <div class="testimonial-card fade-in">
                        <div class="avatar">JS</div>
                        <p class="mb-md">"This component-based approach transformed how I build websites. The consistency and maintainability are incredible."</p>
                        <p class="text-secondary">- Jane Smith, Frontend Developer</p>
                    </div>
                    <div class="testimonial-card fade-in">
                        <div class="avatar">MD</div>
                        <p class="mb-md">"Starting with vanilla components and scaling to frameworks is the perfect learning path. Highly recommended!"</p>
                        <p class="text-secondary">- Mike Davis, Full Stack Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg text-white p-4xl text-center">
        <div class="container">
            <h2 class="mb-lg">Ready to Build Smart?</h2>
            <p class="mb-2xl text-lg">Start creating scalable, maintainable websites with our component-based approach.</p>
            <div class="flex justify-center gap-md">
                <a href="#steps" class="btn" style="background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.3);">View Guide</a>
                <a href="#demo" class="btn" style="background: white; color: var(--primary-color);">Try Demo</a>
            </div>
        </div>
    </section>

    <!-- Footer Component -->
    <footer class="site-footer">
        <div class="container">
            <div>
                <h4>🚀 SmartBuild</h4>
                <p class="text-light">Building the future of web development with smart, component-based solutions.</p>
            </div>
            <div>
                <h4>Resources</h4>
                <a href="#steps">Step-by-Step Guide</a>
                <a href="#demo">Interactive Demo</a>
                <a href="#components">Component Library</a>
                <a href="#">Documentation</a>
            </div>
            <div>
                <h4>Community</h4>
                <a href="#">GitHub</a>
                <a href="#">Discord</a>
                <a href="#">Twitter</a>
                <a href="#">Blog</a>
            </div>
            <div>
                <h4>Support</h4>
                <a href="#">Help Center</a>
                <a href="#">Contact</a>
                <a href="#">Bug Reports</a>
                <a href="#">Feature Requests</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 SmartBuild. Built with love using component-based architecture.</p>
        </div>
    </footer>

    <!-- Custom Web Components -->
    <script>
        // Step 2: Creating Reusable Components with Vanilla JavaScript
        
        // Demo Card Component
        class DemoCard extends HTMLElement {
            connectedCallback() {
                const title = this.getAttribute('title') || 'Default Title';
                const content = this.getAttribute('content') || 'Default content';
                const icon = this.getAttribute('icon') || '📦';
                
                this.innerHTML = `
                    <div class="card" style="margin: 1rem 0;">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <span style="font-size: 2rem;">${icon}</span>
                            <h4>${title}</h4>
                        </div>
                        <p>${content}</p>
                        <div style="margin-top: 1rem;">
                            <button class="btn btn-primary" onclick="this.parentElement.parentElement.updateContent()">
                                Update Content
                            </button>
                        </div>
                    </div>
                `;
            }
            
            updateContent() {
                const contentP = this.querySelector('p');
                const randomMessages = [
                    'Content updated dynamically!',
                    'This demonstrates component reactivity.',
                    'Vanilla components can be interactive too!',
                    'Building smart websites, one component at a time.'
                ];
                contentP.textContent = randomMessages[Math.floor(Math.random() * randomMessages.length)];
            }
        }

        customElements.define('demo-card', DemoCard);

        // Demo switching functionality
        let frameworkState = 0;
        
        document.getElementById('vanilla-btn').addEventListener('click', function() {
            document.getElementById('vanilla-demo').style.display = 'block';
            document.getElementById('framework-demo').style.display = 'none';
            this.classList.add('active');
            document.getElementById('framework-btn').classList.remove('active');
        });
        
        document.getElementById('framework-btn').addEventListener('click', function() {
            document.getElementById('vanilla-demo').style.display = 'none';
            document.getElementById('framework-demo').style.display = 'block';
            this.classList.add('active');
            document.getElementById('vanilla-btn').classList.remove('active');
        });
        
        function updateFrameworkDemo() {
            frameworkState++;
            document.getElementById('framework-state').textContent = `State: ${frameworkState}`;
        }

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        let lastScrollY = window.scrollY;
        
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.site-header');
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
            
            lastScrollY = currentScrollY;
        });

        // Component usage examples for educational purposes
        console.log(`
🚀 SmartBuild - Component-Based Website Building

This demo showcases the step-by-step approach to building websites:

Step 0: Design First
- Created a consistent design system with variables
- Identified reusable components (Header, Hero, Cards, Footer)
- Established patterns for spacing, colors, and typography

Step 1: Global Styles & Variables
- CSS custom properties for consistency
- Utility classes for common patterns
- Global element styling using variables

Step 2: Reusable Components
- Custom Web Components (vanilla approach)
- Framework-style components (simulated)
- Modular, maintainable code structure

Step 3: Implementation & Maintenance
- Components used across multiple sections
- Single source of truth for updates
- Scalable architecture

Key Benefits:
✅ Consistency across the entire site
✅ Maintainable and scalable codebase
✅ Reusable components save development time
✅ Easy to update and modify
✅ Framework-agnostic approach

Try interacting with the components above to see them in action!
        `);
    </script>
</body>
</html>