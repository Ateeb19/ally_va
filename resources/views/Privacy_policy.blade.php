@extends('layouts.app')
@section('title', 'Privacy Policy & Terms | AllyVA')

@section('meta_description', 'Read AllyVA’s privacy policy and service terms. Learn how we protect your data, handle secure payments, and manage our site usage policies.')

@section('meta_keywords', 'AllyVA privacy policy, virtual assistant terms, data security, refund policy, secure payment, service agreement')
@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Privacy Policy & Service Terms</h1>
                <p>At AllyVA, we prioritize your privacy. This policy outlines how we protect your data and details our
                    refund and usage terms to ensure a secure, reliable experience.</p>
            </div>
        </div>
    </section>


    <section class="service-div mt-5">
        <div class="container">
            <div class="privacy-wrapper">
                <div class="row ">
                    <div class="col-xl-12 ">
                        <h4> <i class="ri-news-fill"></i> Information Collection</h4>
                        <p>We collect information from you when you register on our site or fill out a form. This may
                            include your name, email address, or mobile number.
                        </p>

                        <h4> <i class="ri-file-info-fill"></i> Use of Information</h4>
                        <p class="pb-3">We use your data to:</p>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Personalize your experience and respond to individual needs.

                            </li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Improve our website based on your feedback.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Enhance customer service and support.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Process transactions: Your information will not be sold or shared with third parties without your consent, except to deliver the requested product or service.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Send periodic emails: We use your email to provide updates and respond to inquiries.</li>
                        </ul>

                        <h4> <i class="ri-hard-drive-2-fill"></i> Data Protection</h4>
                        <p class="pb-3">We implement various security measures, including a secure server, to protect your personal data.</p>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Payment Security: We do not store credit card information; all transactions are processed securely via PayPal.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Third-Party Disclosure: We do not sell or trade your personally identifiable information. We may release data only to comply with the law, enforce site policies, or protect rights and safety.</li>
                        </ul>
                        
                        <h4> <i class="ri-survey-fill"></i> Terms & Conditions</h4>
                       <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Refunds: You may request a full refund (minus transaction fees) for unused hours within the first 5 days of your initial purchase.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Expiration: Unused hours expire after 90 days of inactivity.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Consent: By using our site, you consent to this policy.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Updates: Any changes to this policy will be posted on this page.</li>
                        </ul>

                        <p class="footer-note">
                            This document is provided for general informational purposes and may be customized according to
                            specific legal requirements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Ready to reclaim your time and grow your business?</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection