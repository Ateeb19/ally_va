@extends('layouts.app')
@section('title', 'Expert Admin & Inbox Services')
@section('canonical', 'https://allyva.com/administrative-support')

@section('meta_description', 'Simplify your workday with pro admin support. We handle email, scheduling, and data entry so you can focus on growth.')

@section('meta_keywords', 'admin support, email management, virtual assistant, calendar scheduling')

@section('og_url', 'https://allyva.com/administrative-support')
@section('og_title', 'Expert Administrative Support Services | Ally VA')
@section('og_description', 'Streamline your workflow with professional administrative support for $9/hr. Microsoft Certified expertise in scheduling, email management, and operations.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Expert Administrative Support Services | Ally VA')
@section('twitter_description', 'Streamline your workflow with professional administrative support for $9/hr. Microsoft Certified expertise in scheduling, email management, and operations.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')

@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Administrative Assistant Services",
  "description": "Professional support handling essential business tasks from calendar management to lead prospecting, ensuring your business runs smoothly every day.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/administrative-support",
  "serviceType": "Virtual Administrative Support",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Administrative Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Email Management",
          "description": "Organize your inbox by sorting messages, flagging priorities, and responding to routine inquiries promptly."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Calendar Scheduling",
          "description": "Manage your time effectively by booking meetings, resolving conflicts, and setting automated reminders."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Data Entry",
          "description": "Accurately input sensitive information into spreadsheets or systems to maintain organized digital records."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Lead Prospecting",
          "description": "Identify potential clients and gather contact details to fuel your sales pipeline and business growth."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Document Formatting",
          "description": "Polish reports and letters to ensure professional layouts, consistent fonts, and error-free text."
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
                <h1>Administrative assistant services</h1>
                <p>We handle the business tasks that fill up your day, from managing your calendar to sorting through your
                    files. We make sure your business runs smoothly every day so you can focus on the work that really
                    matters.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-mail-unread-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Email management</h3>
                    <p>Organize your inbox by sorting messages, flagging priorities, and responding to routine inquiries
                        promptly.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Calendar scheduling</h3>
                    <p>Manage your time effectively by booking meetings, resolving conflicts, and setting automated
                        reminders.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-calendar-schedule-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Data entry</h3>
                    <p>Accurately input sensitive information into spreadsheets or systems to maintain organized digital
                        records.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-pages-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-folder-4-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>File organization</h3>
                    <p>Structure your digital folders and naming conventions to ensure every document is easy to find.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-file-info-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Research tasks</h3>
                    <p>Gather essential data, competitor insights, or market trends to help you make informed business
                        choices.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Lead prospecting</h3>
                    <p>Identify potential clients and gather contact details to fuel your sales pipeline and business
                        growth.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-user-search-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Meeting minutes</h3>
                    <p>Document key discussions, decisions, and action items during meetings for clear team follow-up.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-slideshow-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-file-text-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Document formatting</h3>
                    <p>Polish reports and letters to ensure professional layouts, consistent fonts, and error-free text.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-receipt-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Invoice processing</h3>
                    <p>Handle incoming bills and outgoing requests for payment to keep your accounts current and accurate.
                    </p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Database updates</h3>
                    <p>Keep your contact lists and internal records fresh by regularly verifying and adding new details.
                    </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-database-2-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection