@extends('layouts.app')

@section('title', 'About Ally VA | 15 Years of Expert Virtual Support')
@section('canonical', 'https://allyva.com/about')

@section('meta_description', 'Save 20+ hours a week. Discover how our extensive administrative background provides the efficient support your business needs to grow.')

@section('meta_keywords', 'experienced virtual assistant, virtual admin assistant, ally virtual assistant, About Ally VA')

@section('og_url', 'https://allyva.com/about')
@section('og_title', 'About Ally VA | Expert Microsoft Certified Virtual Assistant')
@section('og_description', 'Meet Arup Seth, founder of Ally VA. Microsoft Certified with 15+ years of experience providing smart, dependable admin support for $9/hr.')
@section('og_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'profile')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'About Ally VA | Expert Microsoft Certified Virtual Assistant')
@section('twitter_description', 'Meet Arup Seth, founder of Ally VA. Microsoft Certified with 15+ years of experience providing smart, dependable admin support for $9/hr.')
@section('twitter_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')

@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "mainEntity": {
    "@type": "Person",
    "name": "Arup Seth",
    "jobTitle": "Virtual Assistant & Microsoft Certified Professional",
    "description": "Arup Seth is a Microsoft Certified professional with over 15 years of experience as a Virtual Assistant, helping entrepreneurs and small businesses worldwide manage operations with clarity and efficiency.",
    "url": "https://allyva.com/about",
    "image": "https://allyva.com/images/Arup-Seth.webp",
    "sameAs": [
      "https://www.linkedin.com/in/arupseth"
    ],
    "worksFor": {
      "@type": "Organization",
      "name": "Ally VA",
      "logo": "https://allyva.com/images/Ally-VA.png",
      "url": "https://allyva.com",
      "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
    },
    "knowsAbout": [
      "Virtual Administrative Support",
      "Operations Oversight",
      "eCommerce Management",
      "CRM Management",
      "Project Coordination",
      "Business Process Management"
    ],
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "name": "Microsoft Certified Professional",
      "credentialCategory": "Certification",
      "image": "https://allyva.com/images/Credentials-ArupSeth-Microsoft.webp"
    }
  },
  "description": "Meet Arup Seth, the founder of Ally VA. With 15+ years of experience and Microsoft Certification, Arup provides smart, dependable virtual assistant support to help businesses grow.",
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
        "name": "About",
        "item": "https://allyva.com/about"
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
        <h1>From assistant to ally</h1>
        <p>
          We mix sharp business know-how with strong tech skills to give you way more than just basic help. Whether it's day-to-day stuff or bigger projects, we handle every detail carefully so your business can really grow.
        </p>
      </div>
    </div>
  </section>

  <section class="intro-wrapper">
    <div class="container">
      <div class="row gy-3">
        <div class="col-xl-6 order-2 order-xl-1">
          <div class="about-img-wrapper">
            <img src="images/Arup-Seth.webp" alt="Arup Seth working as a virtual assistant on a laptop at a bright, modern desk" />
          </div>
        </div>
        <div class="col-xl-6 order-1 order-xl-2">
          <div class="intro-desc">
            <h2 class="support-title">Meet Arup: the journey</h2>
            <p>
              Hello, I’m Arup Seth, a

              <!-- Button trigger modal -->
              <button type="button" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Microsoft Certified 
              </button>

              <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="images/Credentials-ArupSeth-Microsoft.webp"
                      alt="Microsoft Certified Professional Credential - Arup Seth" class="img-fluid" />
                  </div>

                </div>
              </div>
            </div>


            <!-- <button type="button" id="certificate_btn">Microsoft Certified Professional</button> with over 15 years in the IT -->
            professional with over 15 years of experience as a Virtual Assistant. Over the years, I’ve worked with entrepreneurs,
            professionals, and small to mid sized companies across a wide range of industries, helping them manage their
            businesses more efficiently and with greater clarity.
            </p>
            <!-- <p class="mt-2">From handling day to day operations and administrative support to project coordination and process management, I focus on keeping systems organized and tasks on track. I believe in clear communication, strong attention to detail, and dependable support, allowing my clients to save valuable time, reduce workload stress, and stay focused on growth with confidence and peace of mind.</p> -->
            <div class="mt-3">
              <p>From handling day to day operations and administrative support to project coordination and process
                management, I focus on keeping systems organized and tasks on track. I believe in clear communication,
                strong attention to detail, and dependable support, allowing my clients to save valuable time, reduce
                workload stress, and stay focused on growth with confidence and peace of mind. Flexible support options
                ensure you get exactly the help you need, when you need it.</p>
            </div>

            <div>
              <a href="https://www.linkedin.com/in/arupseth" target="_blank"><img src="images/linkedin-badge-300x100.png"
                  alt="linkeninProf"></a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-features">
    <div class="container">
      <!-- Section Heading -->
      <div class="mb-5">
        <h2 class="support-title text-center">Why ally va is different</h2>
        <p class="support-sub text-center">
          Ally VA brings together business sense and tech fluency to deliver support that's both smart and dependable. It’s not just about tasks, it’s about making operations smoother, faster, and easier.
        </p>
      </div>

      <div class="row gx-4 gy-4">
        <!-- Left Side: 4 Service Boxes -->
        <div class="col-xl-6">
          <div class="boxes-number-1">
            <!-- Box 1 -->
            <div class="">
              <div class="about-box shadow p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="icon-box">
                    <img src="images/aboutimages/fluent_cube-quick-16-filled.svg" alt="" />
                  </div>
                  <h5 class="mb-0">Quick Turnaround</h5>
                </div>
                <p>
                  Tasks are handled promptly, keeping your operations smooth and momentum strong
                </p>
              </div>
            </div>

            <!-- Box 2 -->
            <div class="">
              <div class="about-box shadow p-4 h-100">
                <div class="d-flex align-items-center jus gap-3 mb-2">
                  <div class="icon-box">
                    <img src="images/aboutimages/qlementine-icons_executable-16.svg" alt="" />
                  </div>
                  <h5 class="mb-0">Flawless Execution</h5>
                </div>
                <p>
                  Every detail matters. Expect thorough execution and high quality results every time.
                </p>
              </div>
            </div>

            <!-- Box 3 -->
            <div class="">
              <div class="about-box shadow p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="icon-box">
                    <img src="images/aboutimages/Group.svg" alt="" />
                  </div>
                  <h5 class="mb-0">Anytime Access</h5>
                </div>
                <p>
                  Stay connected and in control. Reach out anytime. Support is always within reach.
                </p>
              </div>
            </div>

            <!-- Box 4 -->
            <div class="">
              <div class="about-box shadow p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-2">
                  <div class="icon-box">
                    <img src="images/aboutimages/Vector.svg" alt="" />
                  </div>
                  <h5 class="mb-0">Proactive Support</h5>
                </div>
                <p>
                  Anticipating needs, suggesting improvements, and keeping your workflow ahead.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
          <div class="why-ally-img-wrap">
            <img src="images/why_ally_va.webp" alt="A clean, minimalist home office setup" class="object-fit-cover" />
          </div>
        </div>


      </div>
    </div>

    <!-- Right Side: Full Image -->
  </section>


  <section class="pt-5">
    <div class="container text-center">
      <h2 class="support-title">Feedback that fuels us</h3>
        <p class="support-sub">Every review helps us improve and serve you better.</p>

        <!-- Swiper Container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/mr.png" alt="Close up portrait of the reviewer" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Marina Renaud
                        <img src="https://flagcdn.com/w20/us.png" class="ms-2" alt="usa" />
                      </h6>
                      <small class="text-muted">CEO, NG Corp</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Arup and his team provided excellent, prompt work. They are professional and reliable. Highly recommend them for top tier VA services! 5 star always.
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/am.png" alt="Verified reviewer profile photo" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Angus Munro
                        <img src="https://flagcdn.com/w20/au.png" class="ms-2" alt="australia" />
                      </h6>
                      <small class="text-muted">Psychologist Sydney</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Excellent work. Prompt and perfect. Arup was professional, efficient, and exceeded all expectations. Highly recommended for great service!
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/rw.png" alt="Smiling business professional headshot" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Rebecca Wade
                        <img src="https://flagcdn.com/w20/gb.png" class="ms-2" alt="uk" />
                      </h6>
                      <small class="text-muted">Founder, Purple Dog</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Arup is polite, helpful, detail-oriented, and very responsive. We now have real-time insights that have improved our operational efficiency by 40%.
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/anm.png" alt="Client testimonial profile image" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Anika Malone
                        <img src="https://flagcdn.com/w20/us.png" class="ms-2" alt="usa" />
                      </h6>
                      <small class="text-muted">Founder, Starr Publishing</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Arup goes above and beyond, consistently delivering A+ work. He anticipates needs to help my business run smoothly. I'm so glad he’s with us!
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/ev.png" alt="Professional headshot of a satisfied client" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Eric Verdi
                        <img src="https://flagcdn.com/w20/us.png" class="ms-2" alt="usa" />
                      </h6>
                      <small class="text-muted">CEO, Impact Estate</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Arup was always available to answer any questions about the project & delivered top notch service and a great finished product. He is a gem!
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/kc.png" alt="Professional client photo for service feedback" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Kevin Canty
                        <img src="https://flagcdn.com/w20/us.png" class="ms-2" alt="usa" />
                      </h6>
                      <small class="text-muted">Owner, LT Fintech</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  Outstanding responsiveness. Arup is very capable & attuned to the specifics of all tasks. One of the best virtual assistants I've worked with.
                </p>
              </div>
            </div>

            <!-- <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/Ellipse 1 (1).svg" alt="" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Sarah Johnson
                        <img src="https://flagcdn.com/w20/in.png" class="ms-2" alt="India" />
                      </h6>
                      <small class="text-muted">CEO, TechCorp Solutions</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  The BI Solution Transformed Our Decision-Making Process. We
                  Now Have Real-Time Insights That Have Improved Our Operational
                  Efficiency By 40%.
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/Ellipse 1 (1).svg" alt="" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Sarah Johnson
                        <img src="https://flagcdn.com/w20/in.png" class="ms-2" alt="India" />
                      </h6>
                      <small class="text-muted">CEO, TechCorp Solutions</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  The BI Solution Transformed Our Decision-Making Process. We
                  Now Have Real-Time Insights That Have Improved Our Operational
                  Efficiency By 40%.
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/Ellipse 1 (1).svg" alt="" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Sarah Johnson
                        <img src="https://flagcdn.com/w20/in.png" class="ms-2" alt="India" />
                      </h6>
                      <small class="text-muted">CEO, TechCorp Solutions</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  The BI Solution Transformed Our Decision-Making Process. We
                  Now Have Real-Time Insights That Have Improved Our Operational
                  Efficiency By 40%.
                </p>
              </div>
            </div> -->

            <!-- <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded p-4 text-start">
                <div class="top-header" style="display: flex; justify-content: space-between; align-items: start;">
                  <div class="d-flex align-items-center mb-3">
                    <img src="images/aboutimages/Ellipse 1 (1).svg" alt="" class="rounded-circle me-3" width="50"
                      height="50" />
                    <div>
                      <h6 class="mb-0 fw-semibold">
                        Sarah Johnson
                        <img src="https://flagcdn.com/w20/in.png" class="ms-2" alt="India" />
                      </h6>
                      <small class="text-muted">CEO, TechCorp Solutions</small>
                    </div>
                  </div>

                  <div class="text-warning mb-2">★★★★★</div>
                </div>

                <p class="mt-2">
                  The BI Solution Transformed Our Decision-Making Process. We
                  Now Have Real-Time Insights That Have Improved Our Operational
                  Efficiency By 40%.
                </p>
              </div>
            </div> -->


          </div>
          <!-- Custom Navigation -->
          <div class="d-flex justify-content-center gap-3 mt-4">
            <div class="button-prev custom-nav">
              <i class="bi bi-arrow-left-circle"></i>
            </div>
            <div class="button-next custom-nav">
              <i class="bi bi-arrow-right-circle"></i>
            </div>
          </div>
        </div>
    </div>
  </section>


  <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
    <h2>Grow your team as per your need!</h2>
    <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
  </div>
@endsection
