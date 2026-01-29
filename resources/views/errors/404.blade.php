@extends('layouts.app')
@section('page not found', 'page not found')
@section('content')
    <section class="nopage-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <svg class="face-icon" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="45" stroke="#288feb" stroke-width="4" />
                        <circle cx="35" cy="40" r="4" fill="#288feb" />
                        <circle cx="65" cy="40" r="4" fill="#288feb" />
                        <line x1="35" y1="65" x2="65" y2="65" stroke="#288feb" stroke-width="4" stroke-linecap="round" />
                    </svg>

                    <h1>Oops! We couldn't find that page</h1>

                    <p>The link might be broken, or the page has moved.</p>
                    <div class="error-code">(Error 404)</div>

                    <a href="/" class="btn">Return to Ally Va Home »</a>
                </div>
            </div>
        </div>
    </section>

@endsection