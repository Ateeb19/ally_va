@extends('layouts.app')
@section('title', 'Website Management & Maintenance')
@section('canonical', 'https://allyva.com/essential-seo')

@section('meta_description', 'Ensure your site is fast and secure with professional design updates, hosting management, and daily backups.')

@section('meta_keywords', 'website management, site maintenance, performance optimization, web design')

@section('og_url', 'https://allyva.com/essential-seo')
@section('og_title', 'Essential SEO Services | Ally VA')
@section('og_description', 'Optimize your online presence with professional SEO support for $9/hr. Microsoft Certified expertise in keywords, visibility, and search ranking.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Essential SEO Services | Ally VA')
@section('twitter_description', 'Optimize your online presence with professional SEO support for $9/hr. Microsoft Certified expertise in keywords, visibility, and search ranking.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Essential SEO Services",
  "description": "Comprehensive search engine optimization support by Ally VA. We improve your visibility through professional keyword research, on-page optimization, and local SEO updates to drive organic traffic.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/essential-seo",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "SEO Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Keyword research",
          "description": "Identify the specific terms your customers search for to help your site rank higher on Google."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Title tag optimization",
          "description": "Craft search-friendly headlines for your web pages to improve visibility and click-through rates."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Internal link building",
          "description": "Connect your related pages together to help visitors navigate and boost your overall SEO score."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Broken link finding",
          "description": "Scan your website for dead links to ensure a smooth user experience and maintain search rankings."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "URL clean-up",
          "description": "Create short, descriptive web addresses that are easy for both users and search engines to understand."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Search volume analysis",
          "description": "Measure how often specific terms are searched to prioritize the most valuable content ideas."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Content readability checks",
          "description": "Ensure your text is easy to scan and understand, which keeps visitors on your site much longer."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Google My Business updates",
          "description": "Keep your local listing current with new photos, hours, and posts to attract nearby clients."
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
                <h1>Essential SEO</h1>
                <p>Improve your search rankings and get discovered by the right customers. We focus on keyword research,
                    meta updates, and link building to drive organic traffic and ensure your website is fully optimized for
                    modern search.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-seo-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Keyword research</h3>
                    <p>Identify the specific terms your customers search for to help your site rank higher on Google.</p>
                </div>
            </div>


            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Title tag optimization</h3>
                    <p>Craft search-friendly headlines for your web pages to improve visibility and click-through rates.</p>
                    </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-bookmark-2-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Internal link building</h3>
                    <p>Connect your related pages together to help visitors navigate and boost your overall SEO score.
                    </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-link"></i>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-icons">
                    <i class="ri-link-unlink-m"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Broken link finding</h3>
                    <p>Scan your website for dead links to ensure a smooth user experience and maintain search rankings.
                    </p>
                </div>
            </div>

            <div class="new-feature-box white yellow-border">
                <div class="new-feature-icons">
                    <i class="ri-global-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>URL clean-up</h3>
                    <p>Create short, descriptive web addresses that are easy for both users and search engines to
                        understand.</p>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-title">
                    <h3>Search volume analysis</h3>
                    <p>Measure how often specific terms are searched to prioritize the most valuable content ideas.</p>
                </div>
                <div class="new-feature-icons green">
                    <i class="ri-file-search-fill"></i>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-title">
                    <h3>Content readability checks</h3>
                    <p>Ensure your text is easy to scan and understand, which keeps visitors on your site much longer.
                    </p>
                </div>
                <div class="new-feature-icons red">
                    <i class="ri-article-fill"></i>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-icons">
                    <i class="ri-map-pin-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Google My Business updates</h3>
                    <p>Keep your local listing current with new photos, hours, and posts to attract nearby clients.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>


@endsection