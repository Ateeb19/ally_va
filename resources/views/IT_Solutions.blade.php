@extends('layouts.app')
@section('title', 'IT Support & Tech Assistance')

@section('meta_description', 'Keep your tech running smoothly with email setup, software troubleshooting, and secure cloud backup solutions.')

@section('meta_keywords', 'IT support, technical assistance, software setup, system security')
@section('content')
    <section class="top-banner">
        <div class="inner-page-header">
            <div class="container">
                <h1>Online tech support</h1>
                <p>Protect your digital assets and keep your tech running smoothly. From software setup and email
                    configuration to virus removal and system audits, we provide the technical expertise needed to minimize
                    downtime and risk.</p>
            </div>
        </div>
    </section>


    <section class="feature-single-page">
        <div class="container mt-5 new-feature-boxes">
            <!-- Row 1 -->
            <div class="new-feature-box red">
                <div class="new-feature-icons">
                    <i class="ri-mail-settings-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Email configuration support</h3>
                    <p>Set up and troubleshoot your business email accounts on all your favorite devices.</p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>Software & app setup</h3>
                    <p>Install and configure the latest tools and applications to ensure your team works efficiently.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-install-fill"></i>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>Virus / Malware / Spyware issues</h3>
                    <p>Scan and clean your systems to protect your business data from harmful digital threats.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-virus-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons">
                    <i class="ri-cloud-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Cloud backup</h3>
                    <p>Set up automated systems to save your files online, ensuring you never lose important work data.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="new-feature-box blue-light">
                <div class="new-feature-icons">
                    <i class="ri-settings-5-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>Troubleshooting</h3>
                    <p>Identify and solve common hardware or software problems to minimize your business downtime.</p>
                </div>
            </div>

            <div class="new-feature-box blue-dark ">
                <div class="new-feature-title">
                    <h3>Software assistance</h3>
                    <p>Provide guidance on how to use specific programs to help your team work faster and smarter.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-apps-fill"></i>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="new-feature-box white yellow-border">
                <div class="new-feature-title">
                    <h3>User training</h3>
                    <p>Teach your staff how to use new technology and follow security protocols to stay safe and productive.
                    </p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-presentation-fill"></i>
                </div>
            </div>

            <div class="new-feature-box green ">
                <div class="new-feature-icons green">
                    <i class="ri-webcam-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>CCTV monitoring</h3>
                    <p>Oversee your security camera feeds to ensure your physical premises remain safe and protected.</p>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="new-feature-box ">
                <div class="new-feature-icons red">
                    <i class="ri-sidebar-unfold-fill"></i>
                </div>
                <div class="new-feature-title">
                    <h3>System audits</h3>
                    <p>Review your hardware and software performance to identify any necessary upgrades or security gaps.
                    </p>
                </div>
            </div>

            <div class="new-feature-box yellow ">
                <div class="new-feature-title">
                    <h3>File management</h3>
                    <p>Organize and secure your digital assets to prevent data loss and improve team collaboration.</p>
                </div>
                <div class="new-feature-icons">
                    <i class="ri-file-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex flex-column w-100 align-items-center justify-content-center text-center gap-4 have-ques mt-5">
        <h2>Free up your time and hire your assistant</h2>
        <button data-bs-toggle="modal" data-bs-target="#authModal">Let’s Get Started - Sign Up Now</button>
    </div>

@endsection