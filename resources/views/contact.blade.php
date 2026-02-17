@extends('layouts.app')
@section('title', 'Contact Ally Virtual Assistant | Get in Touch Today')
@section('canonical', 'https://allyva.com/contact')

@section('og_url', 'https://allyva.com/contact')
@section('og_title', 'Contact Ally VA | Hire a Microsoft Certified Virtual Assistant')
@section('og_description', 'Get in touch for expert admin, CRM, and eCommerce support starting at $9/hr. Let’s discuss how Ally VA can simplify your business operations.')
@section('og_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Contact Ally VA | Hire a Microsoft Certified Virtual Assistant')
@section('twitter_description', 'Get in touch for expert admin, CRM, and eCommerce support starting at $9/hr. Let’s discuss how Ally VA can simplify your business operations.')
@section('twitter_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')




@section('meta_description', 'Reach out to Ally VA for reliable virtual assistant support. Connect with us easily to streamline tasks, boost productivity, and grow your business.')

@section('meta_keywords', 'Contact Ally VA, hire a Virtual Assistant, book a VA discovery call, admin support inquiry, business help contact')

@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Ally VA",
  "description": "Get in touch with Arup Seth at Ally VA. Reach out via email or phone to discuss how we can support your business growth.",
  "url": "https://allyva.com/contact",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "image": "https://allyva.com/Ally-Virtual-Assistant.png",
    "logo": "https://allyva.com/Ally-VA.png",
    "telephone": "+91-9163329207",
    "email": "arup@allyva.com",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"],
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "IN"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-9163329207",
      "contactType": "customer service",
      "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"],
      "availableLanguage": "English"
    }
  }
}
</script>

@endsection


@section('content')
  <section class="top-banner">
    <div class="inner-page-header">
      <div class="container">
        <h1>Your message matters. Let’s make it count.</h1>
        <p>Every great partnership begins with a simple conversation. Feel free to reach out with any questions, comments,
          or ideas. Our dedicated team is ready to connect and provide the support you need.</p>
      </div>
    </div>
  </section>


  <section class="contact-wrapper">
    <div class="container d-flex flex-column align-items-center justify-content-center w-100 gap-2">
      <div class="row g-4 align-items-stretch">
        <!-- Form -->
        <div class="col-lg-8 col-md-12">

          <form method="POST" action="{{ route('inquerySave') }}" class="contact-form p-4 contact-form-left h-100"
            id="contactForm">
            @csrf
            <div class="row g-4 mb-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Enter your company name"
                  required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
              </div>
              <div class="col-12">
                <label class="form-label">Project Description</label>
                <textarea class="form-control msg_box" name="project_desc" rows="4" cols="20"
                  placeholder="Write a description" required></textarea>
                <small class="text-muted">0/500 Characters</small>
              </div>
              <input type="hidden" name="g-recaptcha-response" id="contact-recaptcha">
              <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
              </div>
            </div>
            @if(session()->has('message'))
              <div class="alert alert-success">
                {{ session()->get('message') }}
              </div>
            @endif
          </form>
          <script>
            document.getElementById("contactForm").addEventListener("submit", function (e) {
              e.preventDefault();

              grecaptcha.execute("{{ config('recaptcha.site_key') }}", { action: 'contact' })
                .then(function (token) {
                  document.getElementById("contact-recaptcha").value = token;
                  e.target.submit();
                });
            });
          </script>
        </div>

        <!-- Address & Map -->
        <div class="col-lg-4 col-md-12">
          <div class="contact-info p-4 h-100 shadow" style="background-color: #E3F1FE;">
            <div>
              <h6 class="fw-bold mb-3">
                Arup Virtual Services. NH 2, Grand Trunk Rd, Durgapur West Bengal - 713212 | INDIA
              </h6>
              <p class="mb-2"><a
                  href="https://wa.me/+919163329207?text=Hello%20Arup!%20I%20am%20interested%20in%20your%20services."
                  target="_blank"><i class="ri-whatsapp-fill"></i> (+91) 91633 29207</a></p>
              <p class="mb-2"><a href="mailto: arup@allyva.com" target="_blank"><i class="ri-mail-fill"></i>
                  arup@allyva.com</a></p>
            </div>
            <div class="map">
              <img src="images/virtual_admin-location.png" alt="Global map highlighting India">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection