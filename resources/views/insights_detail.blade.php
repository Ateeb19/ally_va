@extends('layouts.app')
@section('title', 'Business Insights & VA Tips | Ally VA')

@section('meta_description', 'Explore Ally VA Insights for tips, hacks, and strategies that help entrepreneurs streamline tasks, boost efficiency, and grow confidently.')

@section('meta_keywords', 'Business tips, productivity blog, VA insights, efficiency strategies, scaling a business, administrative advice')
@section('content')
	<section class="top-banner">
      <div class="inner-page-header">
        <div class="container">
          <h1>Insights that work as hard as you do</h1>
          <p>
            Feeling overwhelmed by your to do list? The right support is closer than you think. These insights help you delegate smarter, save time, simplify your workflow, and focus on growing your business.
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
