@extends('layouts.app')
@section('title', 'Expert Admin & Inbox Services')

@section('meta_description', 'Simplify your workday with pro admin support. We handle email, scheduling, and data entry so you can focus on growth.')

@section('meta_keywords', 'admin support, email management, virtual assistant, calendar scheduling')
@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Administrative assistant services</h1>
                <p>We handle the business tasks that fill up your day, from managing your calendar to sorting through your files. We make sure your business runs smoothly every day so you can focus on the work that really matters.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-mail-unread-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Email management</h3>
                    <p>Organize your inbox by sorting messages, flagging priorities, and responding to routine inquiries promptly.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Calendar scheduling</h3>
                    <p>Manage your time effectively by booking meetings, resolving conflicts, and setting automated reminders.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-calendar-schedule-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Data entry</h3>
                    <p>Accurately input sensitive information into spreadsheets or systems to maintain organized digital records.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-pages-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-folder-4-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>File organization</h3>
                    <p>Structure your digital folders and naming conventions to ensure every document is easy to find.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-file-info-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Research tasks</h3>
                    <p>Gather essential data, competitor insights, or market trends to help you make informed business choices.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Lead prospecting</h3>
                    <p>Identify potential clients and gather contact details to fuel your sales pipeline and business growth.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-user-search-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Meeting minutes</h3>
                    <p>Document key discussions, decisions, and action items during meetings for clear team follow-up.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-slideshow-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-file-text-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Document formatting</h3>
                    <p>Polish reports and letters to ensure professional layouts, consistent fonts, and error-free text.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-receipt-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Invoice processing</h3>
                    <p>Handle incoming bills and outgoing requests for payment to keep your accounts current and accurate.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Database updates</h3>
                    <p>Keep your contact lists and internal records fresh by regularly verifying and adding new details. </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-database-2-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button>Let’s Get Started - Sign Up Now</button>
    </div>

@endsection
