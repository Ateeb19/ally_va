@extends('layouts.app')
@section('title', 'Professional Graphic Design')
@section('canonical', 'https://allyva.com/graphic-design')

@section('meta_description', 'Elevate your brand with professional social media posts, logos, and marketing templates designed for impact.')

@section('meta_keywords', 'graphic design, logo design, brand identity, marketing visuals')

@section('og_url', 'https://allyva.com/graphic-design')
@section('og_title', 'Expert Graphic Design Services | Ally VA')
@section('og_description', 'Professional graphic design support for just $9/hr. Microsoft Certified expertise in creating impactful visuals for your brand and business marketing.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Expert Graphic Design Services | Ally VA')
@section('twitter_description', 'Professional graphic design support for just $9/hr. Microsoft Certified expertise in creating impactful visuals for your brand and business marketing.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Professional Graphic Design",
  "description": "Elevate your brand with professional visuals by Ally VA. From logo creation to marketing materials, we design eye-catching visuals that tell your story effectively and ensure you stand out in the marketplace.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/graphic-design",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Graphic Design Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Social media post design",
          "description": "Create eye-catching visuals specifically tailored for Instagram, Facebook, and LinkedIn feeds."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Logo design",
          "description": "Develop a unique and memorable visual symbol that represents your brand identity and values well."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Email banner creation",
          "description": "Design professional headers for your newsletters that grab attention and drive user clicks."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Presentation design",
          "description": "Build beautiful, clear slide decks that help you deliver your message effectively to audiences."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Flyer and handout design",
          "description": "Produce clean, attractive print materials for events or local marketing to attract customers."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Image resizing/editing",
          "description": "Adjust your photos for different platforms while enhancing colors and removing imperfections."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Brand color palette documentation",
          "description": "Define your official brand colors to ensure a consistent look across all your marketing."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Template creation",
          "description": "Build reusable layouts for documents and posts to save time while maintaining a unified style."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Website graphics",
          "description": "Craft custom icons and buttons that improve the visual appeal and usability of your web pages."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Business cards",
          "description": "Design professional cards that leave a lasting impression during your networking opportunities."
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
                <h1>Graphic design</h1>
                <p>Elevate your brand with professional visuals that capture attention. From logo creation to marketing
                    materials, our designs tell your story effectively and ensure you stand out in the marketplace.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-facebook-box-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Social media post design</h3>
                    <p>Create eye-catching visuals specifically tailored for Instagram, Facebook, and LinkedIn feeds.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Logo design</h3>
                    <p>Develop a unique and memorable visual symbol that represents your brand identity and values well.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-brush-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Email banner creation</h3>
                    <p>Design professional headers for your newsletters that grab attention and drive user clicks.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-file-image-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-quill-pen-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Presentation design</h3>
                    <p>Build beautiful, clear slide decks that help you deliver your message effectively to audiences.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-brush-3-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Flyer and handout design</h3>
                    <p>Produce clean, attractive print materials for events or local marketing to attract customers.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Image resizing/editing</h3>
                    <p>Adjust your photos for different platforms while enhancing colors and removing imperfections.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-crop-2-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Brand color palette documentation</h3>
                    <p>Define your official brand colors to ensure a consistent look across all your marketing.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-paint-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-clipboard-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Template creation</h3>
                    <p>Build reusable layouts for documents and posts to save time while maintaining a unified style.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-pages-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Website graphics</h3>
                    <p>Craft custom icons and buttons that improve the visual appeal and usability of your web pages.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Business cards</h3>
                    <p>Design professional cards that leave a lasting impression during your networking opportunities.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-id-card-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection