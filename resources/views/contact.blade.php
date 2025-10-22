@extends('layouts.app')

@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Your Message Matters. Let’s Make It Count.</h1>
                <p>Every great partnership begins with a simple conversation. Feel free to reach out with any questions, comments, or ideas—no matter how big or small. A dedicated and friendly team is standing by, ready to connect and provide the assistance you need.</p>
            </div>
        </div>
    </section>


    <section class="contact-wrapper">
        <div class="container d-flex flex-column align-items-center justify-content-center w-100 gap-2 p-0">
            <div class="row g-4 align-items-stretch">
    <!-- Form -->
    <div class="col-lg-8 col-md-12">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
      @endif
      <form method="POST" action="{{ route('inquerySave') }}" class="contact-form p-4 contact-form-left h-100">
        @csrf
        <div class="row g-4">
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
            <input type="text" name="company_name" class="form-control" placeholder="Enter your company name" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
          </div>
          <div class="col-12">
            <label class="form-label">Project Description</label>
            <textarea class="form-control msg_box" name="project_desc" rows="4" cols="20" placeholder="Write a description" required></textarea>
            <small class="text-muted">0/500 Characters</small>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Address & Map -->
    <div class="col-lg-4 col-md-12">
      <div class="contact-info p-4 h-100 shadow" style="background-color: #E3F1FE;">
        <div>
          <h6 class="fw-bold mb-3">
            Arup Virtual Services. NH 2, Grand Trunk Rd, Durgapur West Bengal - 713212 | INDIA
          </h6>
          <p class="mb-2"><i class="ri-whatsapp-fill"></i> +1 (646) 813 9231</p>
          <p class="mb-2"><i class="ri-mail-fill"></i> arup@allyva.com</p>
        </div>
        <div class="map">
         <img src="images/virtual_admin-location.png" alt="map"> 
        </div>
      </div>
    </div>
  </div>
        </div>
    </section>
@endsection