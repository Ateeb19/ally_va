<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ALLY VA</title>

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
    <!-- Bootstrap & Swiper (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @stack('styles')
    <script>
        let inactivityTime = 0;
        const maxInactivityMinutes = 45;

        function resetTimer() {
            inactivityTime = 0;
        }

        // Reset on any user activity
        window.onload = resetTimer;
        document.onmousemove = resetTimer;
        document.onkeypress = resetTimer;
        document.onscroll = resetTimer;
        document.onclick = resetTimer;

        // Count idle time every minute
        setInterval(() => {
            inactivityTime++;
            if (inactivityTime >= maxInactivityMinutes) {
                console.log("Auto logout due to inactivity");
                const logoutForm = document.getElementById('logout-form');
                if (logoutForm) logoutForm.submit();
            }
        }, 60000); // every minute
    </script>
</head>

<body>
    <div id="top-banner">
        <!-- Include header -->
        @include('layouts.header')

        <main>
            @yield('content')
        </main>
        @guest
            <!-- Include footer -->
            @include('layouts.footer')
        @endguest
    </div>
    @stack('script')
    <!-- Bootstrap & Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Your JS -->
    <script src="{{ asset('js/main.js') }}?v={{ time() }}" defer></script>
    <script src="{{ asset('js/script.js') }}?v={{ time() }}" defer></script>
    {{--
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            @if ($errors->any())
                var authModal = new bootstrap.Modal(document.getElementById('authModal'));
                authModal.show();
            @endif
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".button-next", // <- FIXED
                prevEl: ".button-prev", // <- FIXED
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
            },
        });
    </script>
    <script>
        // Toggle Password
        function togglePassword(inputId, el) {
            const input = document.getElementById(inputId);
            const icon = el.querySelector("i");
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("ri-eye-off-fill");
                icon.classList.add("ri-eye-fill");
            } else {
                input.type = "password";
                icon.classList.remove("ri-eye-fill");
                icon.classList.add("ri-eye-off-fill");
            }
        }

        // Form Validation
        document
            .getElementById("signupForm")
            .addEventListener("submit", function (e) {


                const pass = document.getElementById("signupPassword").value;
                const confirmPass = document.getElementById("password-confirm").value;
                //   const recaptcha = grecaptcha.getResponse();

                if (pass !== confirmPass) {
                    e.preventDefault();
                    alert("❌ Passwords do not match!");
                    return;
                }

                //   if (!recaptcha) {
                //     alert("❌ Please verify that you are not a robot.");
                //     return;
                //   }

                //   alert("✅ Account Created Successfully!");
                // yaha par aap backend ko form data bhejoge
                return true;
            });
    </script>
    <script>
        // Fill color update
        const range = document.getElementById("hoursRange");
        const priceEl = document.getElementById("totalPrice");
        const priceInput = document.getElementById("TotalAmount");

        if (range && priceEl && priceInput) { // check all elements exist
            function updateRangeBackground() {
                const value =
                    ((range.value - range.min) / (range.max - range.min)) * 100;
                range.style.setProperty("--value", value + "%");

                @if(isset($userHour))
                    @if(isset($userHour->hour_price))
                        const hourPrice = {{ $userHour->hour_price }};
                    @else
                        const hourPrice = 9;
                    @endif
                @else
                        const hourPrice = 9; // fallback if not available
                    @endif
                // Example price calculation (15 USD/hr)
                const total = range.value * hourPrice;
                priceEl.textContent = "$" + total;
                priceInput.value = total;
            }

            range.addEventListener("input", updateRangeBackground);
            updateRangeBackground();
        }
    </script>
</body>

</html>

{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}