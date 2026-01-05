@extends('layouts.app')

@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Simple Pricing. Dedicated Service</h1>
                <p>No subscriptions. No hidden fees. Just one flexible hourly block to
                    unlock reliable one-on-one virtual assistance. Start with 10
                    hours—use them anytime within 3 months. Quality over quantity,
                    always.Only pay for actual working hours—every minute goes toward
                    getting things done.</p>
            </div>
        </div>
    </section>


    <section class="service-div mt-5 pt-5">
        <div class="container d-flex justify-content-center align-items-center">
            <!-- <div class="row w-100 d-flex align-items-center justify-content-center"> -->
            <div class="pricing-content d-flex align-items-center gap-5">
                <div class="pricing-left-text">
                    <span class="vertical-line"></span>
                    <h3>
                        One Price,<br />
                        no surprises.
                    </h3>
                </div>
            </div>

            <!-- Pricing Card -->
            <div class="pricing-card-wrapper">
                <div class="pricing-card-back"></div>

                <div class="pricing-card">
                    <p class="plan-title">THE ALLYVA PLAN</p>

                    <h2 class="price">$9 <span>/hour</span></h2>

                    <ul class="features">
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Trusted Since 2012
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Flat Hourly Rate—Pay
                            Only for Time Used
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Direct, Hassle-Free
                            Communication
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Same-Day Turnaround
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Scale Without Full-Time
                            Hiring
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Track Hours with Your
                            Private Dashboard
                        </li>
                        <li>
                            <i class="ri-checkbox-circle-fill"></i> Weekly Task Report
                        </li>
                    </ul>

                    <button class="btn-price">Buy Now</button>
                </div>
            </div>

            <!-- </div> -->
        </div>
    </section>

    <section class="faq-wrapper w-100 mt-5 pt-4 mb-5">
        <div class="container d-flex flex-column align-items-center justify-content-start text-center">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Who typically benefits from your services?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Entrepreneurs, small business owners, and busy
                                        professionals—anyone who needs help with daily operations
                                        but doesn’t want to hire a full-time employee.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Do I get a dedicated assistant?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Why hiring an Overseas VA is a smart choice?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Entrepreneurs, small business owners, and busy
                                        professionals—anyone who needs help with daily operations
                                        but doesn’t want to hire a full-time employee.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        How long does it take to complete a task? 
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
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

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Ready To Reclaim Your Time And Grow Your Business?</h2>
        <button>Let’s Get Started - Sign Up Now</button>
    </div>

@endsection