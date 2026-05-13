<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>section is expired</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Your CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link rel="icon" type="image/png" href="images/ally-va-favicon.png" /> -->
    <link rel="icon" type="image/png" href="{{ asset('images/ally-va-favicon.png') }}">
    <!-- Bootstrap & Swiper (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="nopage-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <svg class="face-icon" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="45" stroke="#288feb" stroke-width="4" />
                        <circle cx="35" cy="40" r="4" fill="#288feb" />
                        <circle cx="65" cy="40" r="4" fill="#288feb" />
                        <line x1="35" y1="65" x2="65" y2="65" stroke="#288feb" stroke-width="4"
                            stroke-linecap="round" />
                    </svg>

                    <h1>Oops! Your session has expired</h1>

                    <p>To keep your information secure, this page timed out after a period of inactivity.</p>
                    <div class="error-code">(Error 419)</div>

                    <a href="/" class="btn">Return to Ally Va Home »</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>