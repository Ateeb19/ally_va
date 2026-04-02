@extends('layouts.app')
@section('canonical', 'https://allyva.com/')
@section('og_url', 'https://allyva.com/')
@section('og_title', 'Ally VA | Your Remote Business Partner')
@section('og_description', 'Microsoft Certified Virtual Assistant with 15+ years of experience. Simplify your life with expert admin support for just $9/hr.')
@section('og_image', 'https://allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Ally VA | Your Remote Business Partner')
@section('twitter_description', 'Microsoft Certified Virtual Assistant with 15+ years of experience. Simplify your life with expert admin support for just $9/hr.')
@section('twitter_image', 'https://allyva.com/Ally-Virtual-Assistant.png')

@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Virtual Assistant Services",
  "description": "Professional virtual assistant services by Arup Seth, a Microsoft Certified Professional with over 15 years of experience.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "logo": "https://allyva.com/Ally-VA.png",
    "image": "https://allyva.com/Ally-Virtual-Assistant.png",
    "telephone": "+91-9163329207",
    "url": "https://allyva.com",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "IN"
    }
  },
  "areaServed": [
    { "@type": "Country", "name": "United States" },
    { "@type": "Country", "name": "Australia" },
        { "@type": "Country", "name": "United Kingdom" },
    { "@type": "Country", "name": "Canada" },
    { "@type": "Country", "name": "New Zealand" },
    { "@type": "Country", "name": "Singapore" },
    { "@type": "Country", "name": "Germany" },
    { "@type": "Country", "name": "Netherlands" },
    { "@type": "Country", "name": "United Arab Emirates" },
    { "@type": "Place", "name": "Worldwide" }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Ally VA Service Portfolio",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Email & Inbox Management" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Calendar & Appointment Scheduling" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "eCommerce & Store Management" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "CRM Management & Data Entry" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Day-to-Day Business Operations" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Administrative Support" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Social Media Scheduling & Management" }
      },
      {
        "@type": "Offer",
        "itemOffered": { "@type": "Service", "name": "Lead Generation & Internet Research" }
      }
    ]
  }
}
</script>
@endsection

@section('content')
  <section class="top-banner">
    <!-- Hero Section -->

    <div class="hero-wrapper">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Text -->
          <div class="col-xl-6 text-center text-lg-start">
            <!-- <p class="text-uppercase text-primary fw-bold mb-2">Fully Managed</p> -->
            <h1>
              Simplify Your Life with a Virtual Assistant
              <span>- Flat <span class = "doller-icon">$</span>9/hr</span>
            </h1>
            <h2>No Subscriptions or Hidden Fees</h2>
            <p>
              Let us handle your daily administrative tasks so you can focus your time and energy on what matters most to
              you.
            </p>
            <div class="hero-buttons button-hover d-flex flex-wrap gap-3 mt-4 justify-content-lg-start">
              <a class="btn btn-primary px-4" href="#" data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get
                Started - Sign Up Now</a>
              <!-- <a href="#" class="btn btn-outline-primary">Plans & Pricing</a> -->
            </div>
          </div>

          <!-- Right Image -->
          <div class="col-xl-6 text-center text-lg-end">
            <img src="images/Ally-Virtual-Assistant.webp"
              alt="A virtual assistant managing business tasks and streamlining operations on a laptop."
              class="hero-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="support-wrapper">
    <div class="container">
      <h2 class="support-title text-center">
        The support you need to thrive
      </h2>
      <p class="support-sub text-center">
        A Virtual Administrative Assistant handles your routine tasks and
        personal responsibilities, helping you streamline daily operations so
        you can concentrate on growing your business and reaching your goals.
      </p>

      <div class="row">
        <!-- LEFT COLUMN -->
        <div class="col-md-6 support-col left">
          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <!-- icon -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M2 4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4zM8 22h8M12 16v6"
                  stroke="#111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <h5>Admin Services</h5>
              <p>
                We manage your daily tasks so you’re free to focus on strategy.
              </p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M6 8V6a6 6 0 0 1 12 0v2M4 8h16v12H4zM9 12v2M15 12v2" stroke="#111" stroke-width="1.5"
                  stroke-linecap="round" />
                <circle cx="12" cy="12" r="3" stroke="#111" stroke-width="1.5" />
              </svg>
            </div>
            <div>
              <h5>eCommerce Support</h5>
              <p>
                Manage your online store, from product listings to customer
                service.
              </p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3V2z" stroke="#111"
                  stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <h5>Social Media</h5>
              <p>Elevate your brand with an engaging online presence.</p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <!-- <rect
                      x="4"
                      y="6"
                      width="16"
                      height="12"
                      rx="2"
                      stroke="#111"
                      stroke-width="1.5"
                    /> -->
                <path d="M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5zM2 2l5 5" stroke="#111"
                  stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div>
              <h5>Graphic Design</h5>
              <p>
                Get stunning visuals for your brand, from logos to social
                media posts.
              </p>
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-md-6 support-col right">
          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <!-- <path
                      d="M9 2h6v2h3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3V2z"
                      stroke="#111"
                      stroke-width="1.5"
                    /> -->
                <circle cx="12" cy="13" r="2" stroke="#111" stroke-width="1.5" />
                <path d="M12 3a9 9 0 1 1 0 18 9 9 0 0 1 0-18M12 3v9l6 6M12 12h9" stroke="#111" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </div>
            <div>
              <h5>Business Operations</h5>
              <p>Streamline your workflows and improve your efficiency.</p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <rect x="4" y="3" width="16" height="18" rx="2" stroke="#111" stroke-width="1.5" />
                <path d="M8 3v18M16 10a2 2 0 0 0-2-2h-1a2 2 0 0 0 0 4h1a2 2 0 0 1 0 4h-1a2 2 0 0 1-2-2" stroke="#111"
                  stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div>
              <h5>CRM & Bookkeeping</h5>
              <p>
                Keep your finances and client relationships organized and
                up-to-date.
              </p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M3 10h4l7-5v14l-7-5H3zM18 8c1.5 1.5 1.5 6.5 0 8" stroke="#111" stroke-width="1.5"
                  stroke-linejoin="round" />

              </svg>
            </div>
            <div>
              <h5>Digital Marketing</h5>
              <p>
                Making online visibility easy to focus on scaling your
                business.
              </p>
            </div>
          </div>

          <div class="support-item">
            <span class="marker"></span>
            <div class="support-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <rect x="3" y="4" width="18" height="16" rx="2" stroke="#111" stroke-width="1.5" />
                <path d="M3 8h18" stroke="#111" stroke-width="1.5" stroke-linecap="round" />
                <path d="M15 14l-4 4 1 2 2-1 4-4-3-3z" stroke="#111" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <h5>Website Design</h5>
              <p>
                Launch a professional, high-performing website for your
                business.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="efficiency-wrapper mb-5">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-xl-9 col-12">
          <h2>Your time, reclaimed</h2>
          <p>
            From admin support to digital execution, every service lightens
            your workload and keeps your business running smoothly. Take a
            closer look at the full lineup to discover how Ally VA helps your
            business.
          </p>
        </div>
        <div class="col-xl-3 col-12 justify-content-end button-hover" >
          <a href="/services" >Explore All Services</a>
        </div>
      </div>
    </div>
  </section>

  <section class=" benefits-section">
    <div class="container">
      <h2 class="support-title text-center">
        Your life, simplified in 3 steps
      </h2>
      <div class="row justify-content-center align-items-center mt-5">
        <!-- Step 1 -->
        <div class="col-12 col-lg-3 d-flex flex-column align-items-center position-relative mb-4 mb-lg-0">
          <div class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px">
            <!-- Replace with actual <img src="..." /> if needed -->
            <!-- <img
                src="https://img.icons8.com/ios-filled/50/033D98/user.png"
                width="26"
                height="26"
              /> -->
            <i class="ri-user-2-fill" style="color: #288feb; font-size: 26px"></i>
          </div>
          <h3>Sign Up</h3>
          <p>
            It’s an easy process that takes a minute.
          </p>

          <!-- Horizontal line -->
          <div class="hor-line d-none d-lg-block" style="
                height: 2px;
                background: linear-gradient(to right, #e5eaf1, #2563eb);
              "></div>
        </div>

        <!-- Step 2 -->
        <div class="col-12 col-lg-3 d-flex flex-column align-items-center position-relative mb-4 mb-lg-0">
          <div class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px">
            <!-- <img
                src="https://img.icons8.com/ios-filled/50/033D98/compass--v1.png"
                width="26"
                height="26"
              /> -->
            <i class="ri-compass-3-fill" style="color: #288feb; font-size: 26px"></i>
          </div>
          <h3>Let’s Talk</h3>
          <p>
            A conversation to understand the needs.
          </p>

          <!-- Horizontal line -->
          <div class="hor-line d-none d-lg-block" style="
                height: 2px;
                background: linear-gradient(to left, #e5eaf1, #2563eb);
              "></div>
        </div>

        <!-- Step 3 -->
        <div class="col-12 col-lg-3 d-flex flex-column align-items-center">
          <div class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px">
            <!-- <img
                src="https://img.icons8.com/ios-filled/50/033D98/box.png"
                width="26"
                height="26"
              /> -->
            <i class="ri-archive-fill" style="color: #288feb; font-size: 26px"></i>
          </div>
          <h3>Submit Your Task</h3>
          <p>
            Just send tasks and consider them done.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="more-wrapper w-100">
    <div class="container d-flex align-items-center justify-content-center">
      <div class="col-xl-9 d-flex flex-column align-items-start justify-content-start gap-2">
        <h2><span>15 Years </span>since we help you to grow your business</h2>
        <p>
          For over a decade and a half, we've been working with entrepreneurs, professionals, and businesses of all sizes,
          sorting out operations, simplifying systems, and helping them grow. This milestone is all about the trust we've
          built, the transformations we've achieved together, and turning big goals into reality.
        </p>
        <!-- <button>More About Us →</button> -->
        <div class="d-flex align-items-center gap-2">
          <!-- Button -->
          <a href="/about"><button class="">More About Us →</button></a>

          <!-- Customers Info -->
          <div class="d-flex text-black px-2 py-2 rounded-3 gap-3">
            <!-- First Block -->
            <div class="text-center">
              <h4 class="mb-0 fw-bold">30+</h4>
              <small>Company</small>
            </div>

            <div class="vr bg-light"></div>
            <!-- Vertical line -->

            <!-- Second Block -->
            <div class="text-center">
              <h4 class="mb-0 fw-bold">20K+</h4>
              <small>Hours Worked</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="more-wrap">
          <img src="images/Executive-VA.webp"
            alt="A executive VA providing expert support to help scale your business." />
        </div>
      </div>
    </div>
  </section>

  <section class="faq-wrapper w-100 mt-3 mb-5">
    <div class="container d-flex flex-column align-items-center justify-content-start text-center">
      <h2 class="support-title text-center">
        Frequently asked questions
      </h2>
      <p class="support-sub text-center">
        Ally VA focuses on quality, not quantity. A limited number of clients
        ensures each task gets the attention it deserves. No generic service.
        Each task is handled with care and precision, ensuring satisfaction.
      </p>
      <div class="faq-div w-100 d-flex flex-column gap-5">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="row">
            <div class="col-xl-6">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What makes Ally VA unique?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Ally VA focuses on quality, not quantity. A limited number
                    of clients ensures each task gets the attention it
                    deserves. No generic service. Each task is handled with
                    care and precision, ensuring satisfaction.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Do I get a dedicated assistant?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Yes, a single assistant handles all tasks for consistency
                    and quality every time.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Who typically benefits from your services?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Entrepreneurs, small business owners, and busy
                    professionals anyone who needs help with daily operations
                    but doesn’t want to hire a full-time employee.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingseven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                    Is the $9/hour rate the same for all tasks?
                  </button>
                </h2>
                <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Absolutely. One flat rate for any task you need.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Why hiring an overseas VA is a smart choice?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    You receive the same high-quality talent at a far more
                    reasonable price.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    How do I communicate with my assistant?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    You’ll have direct access via email, chat, or whichever
                    works best for you.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    How long does it take to complete a task?
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    The response time for a standard task is 4-8 hours, though
                    clients often receive responses even sooner.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingeight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                    How can I track the hours I’ve used?
                  </button>
                </h2>
                <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    You can easily track the hours charged through our portal,
                    with 1 point representing up to 20 minutes of task time.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques">
    <h2>Still have questions? Help is just a message away</h2>
    <a href="/contact"><button>Contact Anytime</button></a>
  </div>
@endsection