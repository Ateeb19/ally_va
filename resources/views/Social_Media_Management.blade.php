@extends('layouts.app')
@section('title', 'Social Media & Marketing')

@section('meta_description', 'Boost your brand's online presence with strategic content scheduling, caption writing, and active engagement.')

@section('meta_keywords', 'social media marketing, content scheduling, digital marketing, brand growth')
@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Social media & digital marketing</h1>
                <p>Grow your online presence with strategic content and active engagement. We handle post scheduling, caption writing, and community moderation, making sure your brand stays relevant and connected with your target audience</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-calendar-schedule-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Content scheduling</h3>
                    <p>Plan and automate your social posts across platforms to maintain a consistent online presence.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Caption writing</h3>
                    <p>Craft engaging and persuasive text for your posts that encourages followers to like and comment.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-pencil-fil"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Image sourcing</h3>
                    <p>Find high-quality, relevant photos and graphics that align perfectly with your brand's visual style.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-file-image-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-question-answer-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Comment moderation</h3>
                    <p>Monitor and respond to public feedback to build a community and keep your pages professional.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-chat-3-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Direct message replies</h3>
                    <p>Answer private inquiries quickly to provide great service and capture potential sales leads.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Profile optimization</h3>
                    <p>Update bios and links to ensure your social pages are searchable and look highly professional.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-profile-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Hashtag research</h3>
                    <p>Find the best trending tags to increase your content's reach and attract a wider target audience.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-hashta"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-google-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Basic ad setup</h3>
                    <p>Launch simple social media advertisements to promote specific products or increase brand awareness.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-dashboard-3-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Performance reporting</h3>
                    <p>Analyze likes, shares, and clicks to show you which types of content your audience loves most.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Email marketing</h3>
                    <p>Design and send newsletters to your subscriber list to keep them engaged with your latest news.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-mail-send-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection
