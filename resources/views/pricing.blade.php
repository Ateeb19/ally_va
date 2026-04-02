@extends('layouts.app')
@section('title', 'Virtual Assistant Pricing | $9 Per Hour')
@section('canonical', 'https://allyva.com/pricing')

@section('meta_description', 'Affordable Virtual Admin Assistant for businesses: $9 per hour, with no monthly contracts or recurring fees. One simple hourly rate covers all your tasks.')

@section('meta_keywords', 'Affordable Virtual Assistant, No contract VA, Hourly VA services')

@section('og_url', 'https://allyva.com/pricing')
@section('og_title', 'Affordable Virtual Assistant Pricing | Ally VA')
@section('og_description', 'Get expert Microsoft Certified support for just $9/hr. Transparent, affordable pricing for professional admin, CRM, and eCommerce management.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Affordable Virtual Assistant Pricing | Ally VA')
@section('twitter_description', 'Get expert Microsoft Certified support for just $9/hr. Transparent, affordable pricing for professional admin, CRM, and eCommerce management.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Pricing | Ally VA",
  "url": "https://allyva.com/pricing",
  "mainEntity": [
    {
      "@type": "Service",
      "name": "Ally VA Virtual Assistant Services",
      "description": "Premium virtual assistant support starting with a 10-hour block.",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Ally VA",
        "url": "https://allyva.com",
        "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
      },
      "offers": {
        "@type": "Offer",
        "name": "Ally VA Hourly Plan",
        "description": "Flat hourly rate of $9. Start with a 10-hour block valid for 3 months.",
        "price": "9.00",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "9.00",
          "priceCurrency": "USD",
          "unitText": "hour"
        }
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does the hourly plan work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Start with a 10-hour block. Use your hours whenever you need them—they won’t expire for 90 days. Only pay for the time spent working on tasks."
          }
        },
        {
          "@type": "Question",
          "name": "What are your payment options?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Payments are processed securely through PayPal, ensuring ease and reliability."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer a free trial?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Instead of a trial, we offer a low-commitment starting point of just 10 hours, valid for 3 months. This allows you to experience the true value of a partnership without the pressure of a subscription."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a refund policy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, unused hours can be refunded within 5 days of purchase if you’re not satisfied."
          }
        }
      ]
    }
  ]
}
</script>

@endsection

@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Simple pricing. Dedicated service</h1>
                <p>No subscriptions. No hidden fees. Just one flexible hourly block to unlock reliable one on one virtual assistance. Start with 10 hours, use them anytime within 3 months. Pay only for the time worked.</p>
            </div>
        </div>
    </section>


    <section class="service-div pt-4 pt-md-5 mt-3 mt-md-5">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-5">
          <!-- Left Text -->
          <div class="col-lg-5 col-md-5 col-12 text-md-start">
            <div class="pricing-left-text">
              <span class="vertical-line"></span>
              <h3 class="mb-0">
                One Price,<br />
                no surprises.
              </h3>
            </div>
          </div>

          <!-- Pricing Card -->
          <div class="col-lg-5 col-md-6 col-12">
            <div class="pricing-card-wrapper">
              <div class="pricing-card-back"></div>

              <div class="pricing-card">
                <!-- <p class="plan-title">THE ALLYVA PLAN</p>
                <h2 class="price"><span class = "doller-icon">$</span>9 <span>/hour</span></h2> -->
                <img src="images/va-pricing.webp" class="pricing-image mb-3" alt="Virtual Assistant $9 per hour" data-bs-toggle="modal" data-bs-target="#authModal"/>

                <ul class="features">
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Trusted since 2012
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Flat hourly rate—pay only for time used
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Direct, hassle free communication
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Same day turnaround
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Scale without full-time hiring
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Track hours with your private dashboard
                  </li>
                  <li>
                    <i class="ri-checkbox-circle-fill"></i> Weekly task report
                  </li>
                </ul>

                <button class="btn-price w-100"  data-bs-toggle="modal" data-bs-target="#authModal">
                  Let’s Get Started - Sign Up Now
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-wrapper w-100 mt-5 pt-4 mb-5">
        <div class="container d-flex flex-column align-items-center justify-content-start text-center">
            <h2 class="support-title text-center">
                Common Questions
            </h2>
            <p class="support-sub text-center">
                Here are the most frequently asked questions below to help you feel confident choosing the right support for your business.
            </p>
            <div class="faq-div w-100 d-flex flex-column gap-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        How does the hourly plan work?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Start with a 10 hour block. Use your hours whenever you need them, they won’t expire for 90 days. Only pay for the time spent working on tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        What are your payment options?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Payments are processed securely through PayPal, ensuring ease and reliability
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-xl-6">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Do you offer a free trial?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Short answer: No, and here’s why. <br /> <br />

A quick task isn’t the best way to judge long term value. A 60 minute trial won’t reveal how a virtual assistant thinks, adapts, or supports your business over time. <br /> <br />

Ally VA is built for more than task taking. It’s about partnership, reclaiming time, reducing stress, and helping your business move forward. That kind of impact takes more than a coffee break to demonstrate. <br /> <br />

Instead of a trial, there’s a low commitment starting point. Just 10 hours, valid for 3 months. No subscriptions. No pressure. Just focused, reliable assistance when it matters most.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Is there a refund policy?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Absolutely, unused hours can be refunded within 5 days of purchase if you’re not satisfied. But once you experience the ease of having a dedicated virtual assistant, you might just wonder how you ever managed without one.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Need something different or a custom plan?</h2>
        <a href='/contact'><button>Connect with Us</button></a>
    </div>

@endsection
