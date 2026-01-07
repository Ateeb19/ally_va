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

                    <button class="btn-price" data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
                </div>
            </div>

            <!-- </div> -->
        </div>
    </section>

    <section class="faq-wrapper w-100 mt-5 pt-4 mb-5">
        <div class="container d-flex flex-column align-items-center justify-content-start text-center">
            <h2 class="support-title text-center">
                Common Questions
            </h2>
            <p class="support-sub text-center">
                We’ve answered the most frequently asked questions below to help you feel confident choosing the right support for your business.
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
                                        How does the hourly plan work?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Start with a 10 hour block. Use your hours whenever you need them, they won’t expire for 90 days. Only pay for the time spent working on tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        What are your payment options?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Payments are processed securely through PayPal, ensuring ease and reliability
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
                                        Do You Offer a Free Trial?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Short answer: No, and here’s why. <br /> <br />

A quick task isn’t the best way to judge long term value. A 60 minute trial won’t reveal how a virtual assistant thinks, adapts, or supports your business over time. <br /> <br />

Ally VA is built for more than task taking. It’s about partnership, reclaiming time, reducing stress, and helping your business move forward. That kind of impact takes more than a coffee break to demonstrate. <br /> <br />

Instead of a trial, there’s a low commitment starting point. Just 10 hours, valid for 3 months. No subscriptions. No pressure. Just focused, reliable assistance when it matters most.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Is there a refund policy?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Absolutely, unused hours can be refunded within 5 days of purchase if you’re not satisfied. But once you experience the ease of having a dedicated virtual assistant, you might just wonder how you ever managed without one.
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
        <h2>Need something different? We’re just a message away</h2>
        <a href='/contact'><button>Talk to Us</button></a>
    </div>

@endsection