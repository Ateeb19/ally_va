@extends('layouts.app')
@section('title', 'CRM & Bookkeeping Services')
@section('canonical', 'https://allyva.com/crm-bookkeeping')

@section('meta_description', 'Keep your finances and client data organized with precise expense tracking, invoicing, and CRM data entry.')

@section('meta_keywords', 'bookkeeping services, CRM management, invoice generation, expense tracking')

@section('og_url', 'https://allyva.com/crm-bookkeeping')
@section('og_title', 'CRM Management & Bookkeeping Services | Ally VA')
@section('og_description', 'Professional CRM and bookkeeping support for $9/hr. Microsoft Certified expert helping you maintain organized records and customer relationships.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'CRM Management & Bookkeeping Services | Ally VA')
@section('twitter_description', 'Professional CRM and bookkeeping support for $9/hr. Microsoft Certified expert helping you maintain organized records and customer relationships.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "CRM & Bookkeeping Services",
  "description": "Professional CRM and bookkeeping support by Ally VA. We keep your finances accurate and your client records organized with detailed invoicing, expense tracking, and financial reporting.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/crm-bookkeeping",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "CRM and Bookkeeping Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "CRM Data Entry",
          "description": "Update client profiles and interaction history to ensure your sales team has the latest information."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Expense Categorization",
          "description": "Sort your business spending into the correct tax categories for easier financial management."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Invoice Generation",
          "description": "Create and send professional billing statements to your clients to ensure you get paid on time."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Client Profile Updates",
          "description": "Keep track of address changes and preferences to provide a personalized service experience."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Receipt Organization",
          "description": "Digitally archive your proofs of purchase to make tax season stress-free and fully compliant."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Sales Report Preparation",
          "description": "Compile transaction data into clear summaries to show your monthly growth and revenue trends."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Payment Follow-ups",
          "description": "Send polite reminders to clients with overdue balances to maintain a healthy business cash flow."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Vendor Bill Recording",
          "description": "Log every supplier invoice into your system to track liabilities and manage your budget well."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Budget Tracking",
          "description": "Compare actual spending against your financial goals to help you stay profitable and controlled."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Financial Reporting",
          "description": "Generate balance sheets and P&L statements to give you a clear view of your company's finances."
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
                <h1>CRM & bookkeeping</h1>
                <p>Keep your finances accurate and your client records perfectly organized. We manage your invoices, track expenses, and provide clear financial reports to help you make informed growth decisions.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-database-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>CRM data entry</h3>
                    <p>Update client profiles and interaction history to ensure your sales team has the latest information.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Expense categorization</h3>
                    <p>Sort your business spending into the correct tax categories for easier financial management.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-wallet-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Invoice generation</h3>
                    <p>Create and send professional billing statements to your clients to ensure you get paid on time.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-receipt-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-profile-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Client profile updates</h3>
                    <p>Keep track of address changes and preferences to provide a personalized service experience.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-bill-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Receipt organization</h3>
                    <p>Digitally archive your proofs of purchase to make tax season stress-free and fully compliant.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Sales report preparation</h3>
                    <p>Compile transaction data into clear summaries to show your monthly growth and revenue trends.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-file-chart-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Payment follow-ups</h3>
                    <p>Send polite reminders to clients with overdue balances to maintain a healthy business cash flow.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-customer-service-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-folder-cloud-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Vendor bill recording</h3>
                    <p>Log every supplier invoice into your system to track liabilities and manage your budget well.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-currency-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Budget tracking</h3>
                    <p>Compare actual spending against your financial goals to help you stay profitable and controlled.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Financial reporting</h3>
                    <p>Generate balance sheets and P&L statements to give you a clear view of your company's finances.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-folder-chart-2-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection
