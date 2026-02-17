@extends('layouts.app')
@section('title', 'IT Support & Tech Assistance')
@section('canonical', 'https://allyva.com/it-solutions')

@section('meta_description', 'Keep your tech running smoothly with email setup, software troubleshooting, and secure cloud backup solutions.')

@section('meta_keywords', 'IT support, technical assistance, software setup, system security')

@section('og_url', 'https://allyva.com/it-solutions')
@section('og_title', 'Expert IT Solutions & Support | Ally VA')
@section('og_description', 'Professional IT support and technical solutions for $9/hr. Microsoft Certified expertise in troubleshooting, software setup, and systems optimization.')
@section('og_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('og_type', 'website')

@section('twitter_card', 'summary_large_image')
@section('twitter_title', 'Expert IT Solutions & Support | Ally VA')
@section('twitter_description', 'Professional IT support and technical solutions for $9/hr. Microsoft Certified expertise in troubleshooting, software setup, and systems optimization.')
@section('twitter_image', 'https://www.allyva.com/Ally-Virtual-Assistant.png')
@section('schema')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "IT Solutions & Technical Support",
  "description": "Comprehensive IT solutions by Ally VA. We provide remote technical assistance, including software installation, troubleshooting, cybersecurity audits, and cloud management to keep your business systems running smoothly.",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Ally VA",
    "url": "https://allyva.com",
    "areaServed": ["US", "AU", "GB", "CA", "NZ", "SG", "DE", "NL", "AE", "Worldwide"]
  },
  "url": "https://allyva.com/it-solutions",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "IT Solutions Service List",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Software installation",
          "description": "Remotely set up and configure essential business tools and applications to ensure they are ready for immediate use."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Basic troubleshooting",
          "description": "Identify and resolve common technical glitches and errors to minimize downtime and maintain productivity."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Email account setup",
          "description": "Configure professional email addresses and sync them across all your devices for seamless communication."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "System updates",
          "description": "Regularly manage software patches and operating system updates to keep your devices secure and efficient."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Password management",
          "description": "Help implement secure password storage solutions and recovery processes to protect your business accounts."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Cloud storage management",
          "description": "Organize and monitor files on platforms like Google Drive or Dropbox to ensure data is accessible and backed up."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Antivirus monitoring",
          "description": "Oversee security software to detect and remove threats before they can impact your critical business data."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Device synchronization",
          "description": "Ensure your files and apps are updated in real-time across your laptop, tablet, and mobile phone."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "App integration help",
          "description": "Connect your different business tools (like CRM and Email) so they share data and work together perfectly."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Cybersecurity audits",
          "description": "Review your digital habits and software settings to identify risks and suggest ways to strengthen your security."
        }
      }
    ]
  }
}
</script>

@endsection

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