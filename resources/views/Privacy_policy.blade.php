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
                        <h4>1. Information We Collect</h4>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Personal information such as name, email address, and phone number when you contact or
                                register.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Usage data including pages visited, browser type, and device information.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> Cookies and tracking technologies to enhance user experience.</li>
                        </ul>

                        <h4>2. How We Use Your Information</h4>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> To provide and improve our services.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> To communicate important updates or respond to inquiries.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> To analyze website performance and user behavior.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> To maintain security and prevent fraud.</li>
                        </ul>

                        <h4>3. Cookies</h4>
                        <p>
                            We use cookies to personalize your experience, analyze traffic, and improve functionality. You
                            can disable cookies through your browser settings at any time.
                        </p>

                        <h4>4. Data Protection</h4>
                        <p>
                            We implement strict security measures to protect your data from unauthorized access, alteration,
                            or disclosure. However, no method of transmission over the internet is 100% secure.
                        </p>

                        <h4>5. Third-Party Services</h4>
                        <p>
                            We may use third-party tools such as analytics or payment gateways that collect limited
                            information necessary for their functionality. These services operate under their own privacy
                            policies.
                        </p>

                        <h4>6. Your Rights</h4>
                        <ul>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> You may request access to your personal data.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> You may request correction or deletion of your data.</li>
                            <li><i class="ri-checkbox-circle-fill text-primary"></i> You may opt out of marketing communications at any time.</li>
                        </ul>

                        <h4>7. Changes to This Policy</h4>
                        <p>
                            We may update this Privacy Policy periodically. Any changes will be posted on this page with an
                            updated revision date.
                        </p>

                        <h4>8. Contact Us</h4>
                        <p>
                            If you have any questions regarding this Privacy Policy, please contact us through our website.
                        </p>

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