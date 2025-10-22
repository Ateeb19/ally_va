@extends('layouts.app')

@section('content')
    <section class="top-banner">
      <div class="inner-page-header">
        <div class="container">
          <h1>Insights That Work as Hard as You Do</h1>
          <p>
            Feeling overwhelmed by your endless to-do list? Your solution is
            closer than you think. These insights are your playbook for smart
            delegation—designed to help you reclaim time, simplify your
            workflow, and unlock the growth you’ve been working so hard for.
          </p>
        </div>
      </div>
    </section>

    <section class="blog-wrapper mt-5">
      <div class="container">
        <div class="row g-4">
          @php
              use App\Models\Blog;
              $blogs = Blog::where('status', 'active')->orderBy('id', 'desc')->get();
          @endphp

          @forelse($blogs as $blog)
              <div class="col-md-4 col-sm-6">
                  <div class="card article-card">
                      <div class="blog-category-boxes">
                          <img
                              src="{{ asset('storage/' . $blog->photo) }}"
                              class="card-img-top"
                              alt="Article"
                          />
                          <span class="blog-category">VirtualAssistant</span>
                      </div>
                      <div class="card-body">
                          <h6 class="card-title">
                              {{ $blog->title }}
                          </h6>
                          <p class="card-text">
                              {{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 100) }}
                          </p>
                          <a href="{{ route('blogs.blog-detail', $blog->id) }}" class="learn-more">
                              Learn More <i class="ri-arrow-right-line"></i>
                          </a>
                      </div>
                  </div>
              </div>
          @empty
              <div class="col-12 text-center py-5">
                  <h5 class="text-muted">No blogs available at the moment.</h5>
                  <p class="text-muted">Please check back later for the latest articles and updates.</p>
              </div>
          @endforelse
        </div>
        <nav aria-label=" mt-5">
          <div class="d-flex gap-2 align-items-center justify-content-center last-point-view mt-4">
            <button class="btn btn-sm btn-outline-secondary" style="background-color: #E3F1FE;color: black;"><i class="ri-arrow-left-double-line"></i></button>
            <button class="btn btn-sm btn-outline-secondary"  style="background-color: #E3F1FE;color: black;"><i class="ri-arrow-left-s-line"></i></button>
            <button class="btn btn-sm btn-outline-secondary active"  style="background-color: #E3F1FE;color: black;">1</button>
            <button class="btn btn-sm btn-outline-secondary" style="background-color: #E3F1FE;color: black;"><i class="ri-arrow-right-s-line"></i></button>
            <button class="btn btn-sm btn-outline-secondary" style="background-color: #E3F1FE;color: black;"><i class="ri-arrow-right-double-line"></i></button>
          </div>
        </nav>
      </div>
    </section>

    <div
      class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5"
    >
      <h2>Start Your Journey To More Free Time!</h2>
      <button>Let’s Get Started - Sign Up Now</button>
    </div>

@endsection