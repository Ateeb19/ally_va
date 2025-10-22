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
    <section class="blog-details-wrapper mt-5">
      <div class="container">
          <div class="featured-article-blog-details">
            <div class="row g-5">
              <div class="col-md-6">
                <img src="{{ asset('storage/' . $blogDetail->photo) }}" class="img-fluid" alt="Featured">
              </div>
              <div class="col-md-6 w-full featured-article-one">
                <h3>{{ $blogDetail->title }}</h3>
                <p>{{ $blogDetail->sub_title }}</p>
          
              </div>
          
              <div class="col-xl-12">
                <div class="blog-para">
                	{!! $blogDetail->description !!}
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
@endsection