@extends('layouts.app')

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
                <span>- Flat $9/hr</span>
              </h1>
              <h2>No Subscriptions or Hidden Fees</h2>
              <p>
                By managing your daily administrative tasks, your time and
                energy are freed up to focus on what matters most.
              </p>
              <div
                class="hero-buttons d-flex flex-wrap gap-3 mt-4 justify-content-lg-start"
              >
                <a class="btn btn-primary px-4" href="#"
                  >Let’s Get Started - Sign Up Now</a
                >
                <!-- <a href="#" class="btn btn-outline-primary">Plans & Pricing</a> -->
              </div>
            </div>

            <!-- Right Image -->
            <div class="col-xl-6 text-center text-lg-end">
              <img
                src="images/Ally_Virtual_Assistant (1).webp"
                alt="Hero Image"
                class="hero-img"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="support-wrapper">
      <div class="container">
        <h2 class="support-title text-center">
          The Support You Need to Thrive
        </h2>
        <p class="support-sub text-center">
          A Virtual Administrative Assistant handles your routine tasks and
          personal responsibilities, helping you streamline daily operations so
          you can concentrate on growing your business and reaching your goals.
        </p>

        <div class="row g-6">
          <!-- LEFT COLUMN -->
          <div class="col-md-6 support-col left">
            <div class="support-item">
              <span class="marker"></span>
              <div class="support-icon">
                <!-- icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M4 4h10v16H4zM14 8h6v2h-6zM14 12h6v2h-6zM14 16h6v2h-6z"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div>
                <h5>Admin Services</h5>
                <p>
                  Daily tasks are managed, leaving you free to focus on
                  strategy.
                </p>
              </div>
            </div>

            <div class="support-item">
              <span class="marker"></span>
              <div class="support-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M12 3v3M12 18v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M3 12h3M18 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <circle
                    cx="12"
                    cy="12"
                    r="3"
                    stroke="#111"
                    stroke-width="1.5"
                  />
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
                  <path
                    d="M6 6h12l-1 7H7L6 6zM7 16h10l1 2H6l1-2z"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
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
                  <rect
                    x="4"
                    y="6"
                    width="16"
                    height="12"
                    rx="2"
                    stroke="#111"
                    stroke-width="1.5"
                  />
                  <path
                    d="M8 10h8M8 13h5"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
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
                  <path
                    d="M9 2h6v2h3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3V2z"
                    stroke="#111"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="12"
                    cy="13"
                    r="2"
                    stroke="#111"
                    stroke-width="1.5"
                  />
                  <path
                    d="M12 10v1M12 15v1M9.9 11l.7.7M14.1 15l.7.7M9.9 15l.7-.7M14.1 11l.7-.7"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
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
                  <rect
                    x="4"
                    y="3"
                    width="16"
                    height="18"
                    rx="2"
                    stroke="#111"
                    stroke-width="1.5"
                  />
                  <path
                    d="M8 3v18M16 10a2 2 0 0 0-2-2h-1a2 2 0 0 0 0 4h1a2 2 0 0 1 0 4h-1a2 2 0 0 1-2-2"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
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
                  <path
                    d="M3 10v4h4l5 3V7L7 10H3z"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16 9a3 3 0 0 1 0 6M19 7a6 6 0 0 1 0 10"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
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
                  <rect
                    x="3"
                    y="4"
                    width="18"
                    height="16"
                    rx="2"
                    stroke="#111"
                    stroke-width="1.5"
                  />
                  <path
                    d="M3 8h18"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="M15 14l-4 4 1 2 2-1 4-4-3-3z"
                    stroke="#111"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
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
        <div
          class="row d-flex align-items-center justify-content-between"
        >
          <div class="col-xl-9 col-12">
            <h2>Efficiency Delivered Reclaimed</h2>
            <p>
              From admin support to digital execution, every service lightens
              your workload and keeps your business running smoothly. Take a
              closer look at the full lineup to discover how Ally VA helps your
              business.
            </p>
          </div>
          <div class="col-xl-3 col-12 justify-content-end">
            <button class="btn-secondary">Explore All Services</button>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits-section">
      <h2 class="support-title text-center">
        Your Life, Simplified in 3 Steps
      </h2>
      <div class="row justify-content-center align-items-center mt-5">
        <!-- Step 1 -->
        <div
          class="col-12 col-lg-3 d-flex flex-column align-items-center position-relative mb-4 mb-lg-0"
        >
          <div
            class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px"
          >
            <!-- Replace with actual <img src="..." /> if needed -->
            <!-- <img
              src="https://img.icons8.com/ios-filled/50/033D98/user.png"
              width="26"
              height="26"
            /> -->
            <i
              class="ri-user-2-fill"
              style="color: #288feb; font-size: 26px"
            ></i>
          </div>
          <h3>Sign Up</h3>
          <p>
            It’s an easy process that takes a minute.
          </p>

          <!-- Horizontal line -->
          <div
            class="hor-line d-none d-lg-block"
            style="
              height: 2px;
              background: linear-gradient(to right, #e5eaf1, #2563eb);
            "
          ></div>
        </div>

        <!-- Step 2 -->
        <div
          class="col-12 col-lg-3 d-flex flex-column align-items-center position-relative mb-4 mb-lg-0"
        >
          <div
            class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px"
          >
            <!-- <img
              src="https://img.icons8.com/ios-filled/50/033D98/compass--v1.png"
              width="26"
              height="26"
            /> -->
            <i
              class="ri-compass-3-fill"
              style="color: #288feb; font-size: 26px"
            ></i>
          </div>
          <h3>Let’s Talk</h3>
          <p>
            A conversation to understand the needs.
          </p>

          <!-- Horizontal line -->
          <div
            class="hor-line d-none d-lg-block"
            style="
              height: 2px;
              background: linear-gradient(to left, #e5eaf1, #2563eb);
            "
          ></div>
        </div>

        <!-- Step 3 -->
        <div class="col-12 col-lg-3 d-flex flex-column align-items-center">
          <div
            class="rounded-circle bg-opacity-10 d-flex align-items-center justify-content-center mb-3 icon-bg"
            style="width: 56px; height: 56px"
          >
            <!-- <img
              src="https://img.icons8.com/ios-filled/50/033D98/box.png"
              width="26"
              height="26"
            /> -->
            <i
              class="ri-archive-fill"
              style="color: #288feb; font-size: 26px"
            ></i>
          </div>
          <h3>Submit Your Task</h3>
          <p>
            Just send tasks and consider them done.
          </p>
        </div>
      </div>
    </section>

    <section class="more-wrapper w-100">
      <div class="container d-flex align-items-center justify-content-center">
        <div
          class="col-xl-9 d-flex flex-column align-items-start justify-content-start gap-2"
        >
          <h2><span>15 Years </span>Since We Help You To Grow Your Business</h2>
          <p>
            For over a decade and a half, we've stood beside entrepreneurs,
            visionaries, and changemakers — streamlining operations, simplifying
            systems, and helping businesses scale with confidence. This
            milestone reflects years of trust, transformation, and goals turned
            into reality.
          </p>
          <!-- <button>More About Us →</button> -->
          <div class="d-flex align-items-center gap-2">
            <!-- Button -->
            <button class="">More About Us →</button>

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
            <img
              src="images/imageedit_1_8388489819 (1).png"
              alt="more-wrap-image"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="faq-wrapper w-100 mt-3 mb-5">
      <div
        class="container d-flex flex-column align-items-center justify-content-start text-center"
      >
        <h2 class="support-title text-center">
          Frequently Asked Questions
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
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      Who typically benefits from your services?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      Do I get a dedicated assistant?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      Is the $9/hour rate the same for all tasks? 
                    </button>
                  </h2>
                  <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingseven">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseseven"
                      aria-expanded="false"
                      aria-controls="flush-collapseseven"
                    >
                      Do I get a dedicated assistant?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseseven"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingseven"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour"
                      aria-expanded="false"
                      aria-controls="flush-collapseFour"
                    >
                      Why hiring an Overseas VA is a smart choice?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive"
                      aria-expanded="false"
                      aria-controls="flush-collapseFive"
                    >
                      How long does it take to complete a task? 
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseSix"
                      aria-expanded="false"
                      aria-controls="flush-collapseSix"
                    >
                      How can I track the hours I’ve used? 
                    </button>
                  </h2>
                  <div
                    id="flush-collapseSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingeight">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseeight"
                      aria-expanded="false"
                      aria-controls="flush-collapseeight"
                    >
                      Do I get a dedicated assistant?
                    </button>
                  </h2>
                  <div
                    id="flush-collapseeight"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingeight"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      Entrepreneurs, small business owners, and busy
                      professionals—anyone who needs help with daily operations
                      but doesn’t want to hire a full-time employee.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div
      class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques"
    >
      <h2>Still Have Questions? Help Is Just a Message Away.</h2>
      <button>Contact Anytime</button>
    </div>
@endsection
