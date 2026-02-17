@extends('layouts.app')
@section('title', 'Website Management & Maintenance')
@section('canonical', 'https://allyva.com/website-development')

@section('meta_description', 'Ensure your site is fast and secure with professional design updates, hosting management, and daily backups.')

@section('meta_keywords', 'website management, site maintenance, performance optimization, web design')

@section('og_url', 'https://allyva.com/website-development')
@section('og_title', 'Expert Website Development Services | Ally VA')
@section('og_description', 'Professional web development and maintenance for $9/hr. Microsoft Certified expertise in building and optimizing functional, responsive business websites.')
@section('og_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Expert Website Development Services | Ally VA')
@section('twitter_description', 'Professional web development and maintenance for $9/hr. Microsoft Certified expertise in building and optimizing functional, responsive business websites.')
@section('twitter_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Website Design & Management",
  "description": "Professional website design and technical management by Ally VA. We build modern layouts and handle ongoing maintenance, including security backups, performance optimization, and content updates.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/website-development",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Website Development Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Website design",
          "description": "Create a clean, modern layout that reflects your brand and provides a great experience for users."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Domain & hosting management",
          "description": "Handle the technical side of your web address and server to keep your site live 24/7."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Content updates",
          "description": "Regularly refresh your text, images, and blog posts to keep your website relevant and engaging."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Form creation",
          "description": "Build contact or lead-capture forms to make it easy for potential clients to get in touch with you."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Performance optimization",
          "description": "Improve your site's loading speed to reduce bounce rates and keep your visitors happy."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Basic bug fixing",
          "description": "Quickly resolve minor technical glitches and display issues to maintain a professional site."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Backup management",
          "description": "Schedule regular saves of your website data to ensure you can recover quickly if an error occurs."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Analytics setup",
          "description": "Install tracking tools to see how many people visit your site and which pages they view most."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Landing page creation",
          "description": "Design specific pages for your marketing campaigns to increase your lead and sale conversions."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Link checking",
          "description": "Regularly test all buttons and menus to ensure every part of your website works exactly as intended."
        }
      }
    ]
  }
}
</script>

@endsection

@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Website design & management</h1>
                <p>We create beautiful website designs and keep them secure, fast, and fully updated for a great visitor
                    experience. From visual layouts to technical maintenance, we handle it all while you focus on your
                    brand.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class=" ri-pages-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Website design</h3>
                    <p>Create a clean, modern layout that reflects your brand and provides a great experience for users.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Domain & hosting management</h3>
                    <p>Handle the technical side of your web address and server to keep your site live 24/7.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-global-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Content updates</h3>
                    <p>Regularly refresh your text, images, and blog posts to keep your website relevant and engaging.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-article-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-news-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Form creation</h3>
                    <p>Build contact or lead-capture forms to make it easy for potential clients to get in touch with you.
                    </p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-seo-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Performance optimization</h3>
                    <p>Improve your site's loading speed to reduce bounce rates and keep your visitors happy.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Basic bug fixing</h3>
                    <p>Quickly resolve minor technical glitches and display issues to maintain a professional site.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-bug-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Backup management</h3>
                    <p>Schedule regular saves of your website data to ensure you can recover quickly if an error occurs.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-save-2-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-file-chart-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Analytics setup</h3>
                    <p>Install tracking tools to see how many people visit your site and which pages they view most.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-html5-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Landing page creation</h3>
                    <p>Design specific pages for your marketing campaigns to increase your lead and sale conversions.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Link checking</h3>
                    <p>Regularly test all buttons and menus to ensure every part of your website works exactly as intended.
                    </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-svelte-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection