@extends('layouts.app')
@section('title', 'Privacy Policy & Terms | Ally VA')
@section('canonical', 'https://allyva.com/privacy')

@section('meta_description', 'Read Ally VA’s privacy policy and service terms. Learn how we protect your data, handle secure payments, and manage our site usage policies.')

@section('meta_keywords', 'Ally VA privacy policy, virtual assistant terms, data security, refund policy, secure payment, service agreement')

@section('og_url', 'https://allyva.com/privacy')
@section('og_title', 'Privacy Policy | Ally VA')
@section('og_description', 'Learn how Ally VA protects your data. Transparent information on how we handle and secure your personal and business information.')
@section('og_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Privacy Policy | Ally VA')
@section('twitter_description', 'Learn how Ally VA protects your data. Transparent information on how we handle and secure your personal and business information.')
@section('twitter_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy | Ally VA",
  "description": "The official privacy policy for Ally VA. This document outlines how we collect, use, and protect your personal data in compliance with global standards.",
  "publisher": {
    "@type": "Organization",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "logo": "https://allyva.com/images/Ally-VA.png",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/privacy-policy",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://allyva.com"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Privacy Policy",
        "item": "https://allyva.com/privacy-policy"
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
                <h1>Privacy Policy & Service Terms</h1>
                <p>At Ally VA, we prioritize your privacy. This policy outlines how we protect your data and details our
                    refund and usage terms to ensure a secure, reliable experience.</p>
            </div>
        </div>
    </section>


    <section class="service-div mt-3 mt-sm-5">
        <div class="container">
            <div class="privacy-wrapper">
                <div class="row ">
                    <div class="col-xl-12 ">
                        <h4> <i class="ri-survey-line"></i> Information Collection</h4>
                        <p>We collect information from you when you register on our site or fill out a form. This may
                            include your name, email address, or mobile number.
                        </p>

                        <h4> <i class="ri-service-line"></i> Use of Information</h4>
                        <p class="pb-3">We use your data to:</p>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Personalize your experience and respond to individual needs.

                            </li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Improve our website based on your feedback.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Enhance customer service and support.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Process transactions: Your information will not be sold or shared with third parties without your consent, except to deliver the requested product or service.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Send periodic emails: We use your email to provide updates and respond to inquiries.</li>
                        </ul>

                        <h4> <i class="ri-shield-user-line"></i> Data Protection</h4>
                        <p class="pb-3">We implement various security measures, including a secure server, to protect your personal data.</p>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Payment Security: We do not store credit card information; all transactions are processed securely via PayPal.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Third-Party Disclosure: We do not sell or trade your personally identifiable information. We may release data only to comply with the law, enforce site policies, or protect rights and safety.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Protected by reCAPTCHA: We use advanced bot detection to keep our service secure.</li>
                        </ul>
                        
                        <h4> <i class="ri-mastercard-line"></i> Terms & Conditions</h4>
                       <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Refunds: You may request a full refund (minus transaction fees) for unused hours within the first 5 days of your initial purchase.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Expiration: Unused hours expire after 90 days of inactivity.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Consent: By using our site, you consent to this policy.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Updates: Any changes to this policy will be posted on this page.</li>
                        </ul>
<!-- 
                        <p class="footer-note">
                            This document is provided for general informational purposes and may be customized according to
                            specific legal requirements.
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-3 mt-sm-5">
        <h2>Ready to reclaim your time and grow your business?</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection