@extends('layouts.app')
@section('title', 'eCommerce & Store Support')
@section('canonical', 'https://allyva.com/ecommerce-services')

@section('meta_description', 'Grow your online store with expert product listing updates, order processing, and responsive customer support.')

@section('meta_keywords', 'ecommerce support, product listing, order processing, inventory management')

@section('og_url', 'https://allyva.com/ecommerce-services')
@section('og_title', 'Expert eCommerce Management Services | Ally VA')
@section('og_description', 'Boost your online store with professional eCommerce support for $9/hr. Microsoft Certified expertise in product listing, inventory, and order management.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Expert eCommerce Management Services | Ally VA')
@section('twitter_description', 'Boost your online store with professional eCommerce support for $9/hr. Microsoft Certified expertise in product listing, inventory, and order management.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "eCommerce & Store Support",
  "description": "Full-service eCommerce support by Ally VA. We optimize product listings, manage inventory, and handle order processing to boost sales and buyer loyalty.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/ecommerce-services",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "eCommerce Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Product listing updates",
          "description": "Edit descriptions and images to keep your online store looking professional and attracting customers."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Inventory checks",
          "description": "Cross-reference physical stock with digital counts to ensure your website displays accurate totals."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Order processing",
          "description": "Manage the workflow from purchase to shipping to ensure customers receive their items on time."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Customer inquiries",
          "description": "Provide fast, helpful answers to buyer questions to increase trust and boost your sales conversion."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Sales data input",
          "description": "Record daily transaction details to help track your revenue and identify your best-selling items."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Basic storefront maintenance",
          "description": "Fix small site errors and update banners to keep your shopping experience smooth and modern."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Feedback handling",
          "description": "Respond to customer reviews and ratings to maintain a positive brand reputation and build loyalty."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Price monitoring",
          "description": "Keep an eye on competitor pricing to ensure your products remain attractive in the current market."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Stock level updates",
          "description": "Adjust availability in real-time to prevent overselling and manage customer expectations well."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Discount campaigns",
          "description": "Set up and monitor promotional codes or seasonal sales to drive traffic and increase total orders."
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
                <h1>eCommerce support</h1>
                <p>Grow your online store with our full-service support, covering product listings, order fulfillment, and customer care. We optimize your marketplace presence to boost sales and build buyer loyalty.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-amazon-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Product listing updates</h3>
                    <p>Edit descriptions and images to keep your online store looking professional and attracting customers.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Inventory checks</h3>
                    <p>Cross-reference physical stock with digital counts to ensure your website displays accurate totals.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-file-list-2-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Order processing</h3>
                    <p>Manage the workflow from purchase to shipping to ensure customers receive their items on time.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-shopping-cart-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-message-2-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Customer inquiries</h3>
                    <p>Provide fast, helpful answers to buyer questions to increase trust and boost your sales conversion.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-pie-chart-2-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Sales data input</h3>
                    <p>Record daily transaction details to help track your revenue and identify your best-selling items.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Basic storefront maintenance</h3>
                    <p>Fix small site errors and update banners to keep your shopping experience smooth and modern.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-store-3-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Feedback handling</h3>
                    <p>Respond to customer reviews and ratings to maintain a positive brand reputation and build loyalty.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-feedback-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-price-tag-3-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Price monitoring</h3>
                    <p>Keep an eye on competitor pricing to ensure your products remain attractive in the current market.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-bar-chart-box-ai-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Stock level updates</h3>
                    <p>Adjust availability in real-time to prevent overselling and manage customer expectations well.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Discount campaigns</h3>
                    <p>Set up and monitor promotional codes or seasonal sales to drive traffic and increase total orders.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-discount-percent-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection
