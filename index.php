<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A complete SEO-optimized demo page showcasing proper heading structure, semantic HTML, and best practices for search engine visibility.">
    <meta name="keywords" content="SEO, HTML structure, semantic markup, headings, meta tags">
    <meta name="author" content="SEO Demo">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://example.com/seo-demo">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Optimal SEO Structure Demo">
    <meta property="og:description" content="A complete SEO-optimized demo page showcasing proper heading structure, semantic HTML, and best practices.">
    <meta property="og:image" content="https://example.com/images/seo-og.jpg">
    <meta property="og:url" content="https://example.com/seo-demo">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimal SEO Structure Demo">
    <meta name="twitter:description" content="A complete SEO-optimized demo page showcasing proper heading structure, semantic HTML, and best practices.">
    <meta name="twitter:image" content="https://example.com/images/seo-twitter.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%234a90e2'/%3E%3Ctext x='50' y='67' font-size='50' text-anchor='middle' fill='white' font-family='Arial'%3ESEO%3C/text%3E%3C/svg%3E">
    
    <!-- External Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Structured Data (JSON-LD) for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Optimal SEO Structure Demo",
        "description": "A complete SEO-optimized demo page showcasing proper heading structure, semantic HTML, and best practices.",
        "url": "https://example.com/seo-demo",
        "author": {
            "@type": "Organization",
            "name": "SEO Demo"
        },
        "mainEntity": {
            "@type": "Article",
            "headline": "Optimal SEO Structure Demo",
            "description": "A complete SEO-optimized demo page showcasing proper heading structure, semantic HTML, and best practices.",
            "author": {
                "@type": "Organization",
                "name": "SEO Demo"
            }
        }
    }
    </script>
</head>
<body>
    <!-- Skip Navigation Link for Accessibility (SEO best practice) -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Header with semantic header element -->
    <header class="site-header" role="banner">
        <div class="container header-container">
            <!-- Logo / Site Name -->
            <div class="logo">
                <a href="/" aria-label="SEO Demo Home">
                    <span class="logo-icon">🔍</span>
                    <span class="logo-text">SEO Demo</span>
                </a>
            </div>
            
            <!-- Primary Navigation -->
            <nav class="main-nav" role="navigation" aria-label="Primary navigation">
                <ul>
                    <li><a href="#main-content" aria-current="page">Home</a></li>
                    <li><a href="#headings-section">Headings</a></li>
                    <li><a href="#images-section">Images</a></li>
                    <li><a href="#semantic-section">Semantic</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main id="main-content" class="main-content" role="main">
        <div class="container">
            <!-- H1 - The most important heading on the page (only one per page) -->
            <h1>Optimal SEO Structure Demo</h1>
            
            <p class="intro-text">
                This page demonstrates the optimal HTML structure for SEO compliance. Every element is carefully placed 
                to maximize search engine visibility, semantic clarity, and accessibility. Below you'll find examples 
                of proper heading hierarchy, image optimization, semantic HTML5 elements, and structured data.
            </p>

            <!-- Article element for self-contained content -->
            <article class="content-article">
                
                <!-- Section: Heading Hierarchy -->
                <section id="headings-section" class="content-section" aria-labelledby="headings-heading">
                    <h2 id="headings-heading">Proper Heading Hierarchy</h2>
                    <p>
                        A logical heading structure (H1 → H2 → H3 → H4) helps search engines understand the content 
                        hierarchy and improves accessibility for screen readers. Each heading should describe the 
                        content that follows it.
                    </p>
                    
                    <!-- H3 examples under the H2 -->
                    <h3>Why Heading Order Matters</h3>
                    <p>
                        Search engines use headings to understand the topical structure of a page. Using headings 
                        in order (without skipping levels) creates a clear outline that improves SEO.
                    </p>
                    
                    <h3>Common Heading Mistakes</h3>
                    <p>
                        Using multiple H1 tags, skipping heading levels, and using headings purely for styling 
                        are common mistakes that can hurt SEO performance.
                    </p>
                    
                    <!-- H4 example under an H3 -->
                    <h4>Best Practice: One H1 Per Page</h4>
                    <p>
                        Each page should have exactly one H1 tag that describes the main topic of the page. 
                        This helps search engines identify the primary focus of your content.
                    </p>
                    
                    <h4>Best Practice: Sequential Order</h4>
                    <p>
                        Always follow the natural hierarchy: H1 → H2 → H3 → H4, and so on. Never skip levels 
                        (e.g., jumping from H2 to H4) as this confuses both users and search engines.
                    </p>
                </section>

                <!-- Section: Image Optimization -->
                <section id="images-section" class="content-section" aria-labelledby="images-heading">
                    <h2 id="images-heading">Image Optimization for SEO</h2>
                    <p>
                        Images should have descriptive alt text, proper file names, and appropriate dimensions. 
                        The <code>alt</code> attribute is required for accessibility and helps search engines 
                        understand image content.
                    </p>
                    
                    <h3>Example Images</h3>
                    
                    <div class="image-grid">
                        <!-- Image 1: SEO-friendly with descriptive alt -->
                        <figure class="image-figure">
                            <img 
                                src="https://picsum.photos/seed/seo1/400/250" 
                                alt="A clean, modern workspace with a laptop displaying SEO analytics data and a cup of coffee"
                                width="400" 
                                height="250"
                                loading="lazy"
                                class="demo-image"
                            >
                            <figcaption>Good: Descriptive alt text describing the image content</figcaption>
                        </figure>
                        
                        <!-- Image 2: Another example -->
                        <figure class="image-figure">
                            <img 
                                src="https://picsum.photos/seed/seo2/400/250" 
                                alt="A team of professionals collaborating around a table with charts and graphs showing upward trends"
                                width="400" 
                                height="250"
                                loading="lazy"
                                class="demo-image"
                            >
                            <figcaption>Good: Alt text provides context for search engines</figcaption>
                        </figure>
                        
                        <!-- Image 3: Example with dimensions -->
                        <figure class="image-figure">
                            <img 
                                src="https://picsum.photos/seed/seo3/400/250" 
                                alt="A magnifying glass over a document with SEO keywords highlighted in yellow"
                                width="400" 
                                height="250"
                                loading="lazy"
                                class="demo-image"
                            >
                            <figcaption>Good: Image dimensions specified to prevent layout shift</figcaption>
                        </figure>
                    </div>
                    
                    <h3>Image SEO Best Practices</h3>
                    <ul class="best-practices-list">
                        <li>Use descriptive, keyword-rich file names (e.g., <code>seo-heading-structure.png</code>)</li>
                        <li>Always include descriptive <code>alt</code> text</li>
                        <li>Specify <code>width</code> and <code>height</code> attributes to prevent layout shift</li>
                        <li>Use <code>loading="lazy"</code> for images below the fold</li>
                        <li>Compress images for fast page load times</li>
                        <li>Use modern formats like WebP when possible</li>
                    </ul>
                </section>

                <!-- Section: Semantic HTML -->
                <section id="semantic-section" class="content-section" aria-labelledby="semantic-heading">
                    <h2 id="semantic-heading">Semantic HTML Elements</h2>
                    <p>
                        Semantic HTML elements like <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, 
                        <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code>, 
                        <code>&lt;aside&gt;</code>, and <code>&lt;footer&gt;</code> help search engines understand 
                        the structure and importance of different content areas.
                    </p>
                    
                    <h3>Key Semantic Elements Used</h3>
                    <ul class="best-practices-list">
                        <li><strong>&lt;header&gt;</strong> — Contains introductory content, navigation, and logo</li>
                        <li><strong>&lt;nav&gt;</strong> — Contains the primary navigation links</li>
                        <li><strong>&lt;main&gt;</strong> — Contains the primary content of the page (only one per page)</li>
                        <li><strong>&lt;article&gt;</strong> — Contains self-contained, reusable content</li>
                        <li><strong>&lt;section&gt;</strong> — Groups related content under a heading</li>
                        <li><strong>&lt;aside&gt;</strong> — Contains content tangentially related to the main content</li>
                        <li><strong>&lt;footer&gt;</strong> — Contains footer information like copyright and links</li>
                        <li><strong>&lt;figure&gt;</strong> and <strong>&lt;figcaption&gt;</strong> — Associates images with captions</li>
                    </ul>
                </section>
            </article>
            
            <!-- Aside for complementary content -->
            <aside class="sidebar" role="complementary" aria-labelledby="sidebar-heading">
                <h2 id="sidebar-heading">SEO Quick Tips</h2>
                <ul class="tips-list">
                    <li>Keep title tags under 60 characters</li>
                    <li>Write meta descriptions between 150-160 characters</li>
                    <li>Use one H1 per page</li>
                    <li>Include internal and external links</li>
                    <li>Optimize page load speed</li>
                    <li>Use HTTPS</li>
                    <li>Make your site mobile-friendly</li>
                    <li>Add structured data (Schema.org)</li>
                </ul>
            </aside>
        </div>
    </main>

    <!-- Footer with semantic footer element -->
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h2 class="footer-heading">SEO Demo</h2>
                    <p>A demonstration of optimal HTML structure for SEO compliance.</p>
                </div>
                <div class="footer-section">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul>
                        <li><a href="#headings-section">Headings</a></li>
                        <li><a href="#images-section">Images</a></li>
                        <li><a href="#semantic-section">Semantic HTML</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h2 class="footer-heading">Resources</h2>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs" target="_blank" rel="noopener noreferrer">Google Search Central</a></li>
                        <li><a href="https://schema.org/" target="_blank" rel="noopener noreferrer">Schema.org</a></li>
                        <li><a href="https://web.dev/" target="_blank" rel="noopener noreferrer">web.dev</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SEO Demo. All rights reserved.</p>
                <p class="footer-note">This page is for demonstration purposes only.</p>
            </div>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="script.js"></script>
</body>
</html>