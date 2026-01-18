<section class="top-banner">
  <!-- Header / Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <!-- <a class="navbar-brand fw-bold text-primary" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Ally VA - Virtual Assistant Services logo" class="me-2" />
      </a> -->

      @if(Auth::check())
        {{-- Logged in: open the public home page in new tab --}}
        <a href="{{ route('public.home') }}" target="_blank" rel="noopener noreferrer">
          <img src="{{ asset('images/logo.png') }}" alt="Ally VA - Virtual Assistant Services logo">
        </a>
      @else
        {{-- Not logged in: open home page in same tab --}}
        <a href="{{ route('public.home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Ally VA - Virtual Assistant Services logo">
        </a>
      @endif


      <div id="" class="d-block d-lg-none">

<!-- @if(
    Auth::check() &&
    !isset($adminView) && (
        request()->is('dashboard') ||
        request()->is('user/*') ||
        request()->is('admin') ||
        request()->is('admin/*') ||
        request()->is('admin/users/*/dashboard') ||
        request()->is('admin/users/*/dashboard*') ||
        (request()->is('blogs*') && !request()->is('blogs/show-detail/*'))
    )
)
          <button type="button" class="btn btn-primary px-4">
            <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Log Out
            </a>
          </button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        @else
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal">
            Login</button>
        @endif -->
  {{-- if user/admin logged in AND current page is home, hide button completely --}}
  
@if(Auth::check() && request()->is('home'))
    
@elseif(
    Auth::check() &&
    !request()->is('admin/users/*/dashboard') &&
    !isset($adminView) && (
        request()->is('dashboard') ||
        request()->is('user/*') ||
        request()->is('admin') ||
        request()->is('admin/*') ||
        (request()->is('blogs*') && !request()->is('blogs/show-detail/*'))
    )
)
    <button type="button" class="btn btn-primary px-4">
        <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Log Out
        </a>
    </button>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

@elseif(!Auth::check())
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal">
        Login
    </button>
@endif
      </div>


     

      <!-- Auth Modal -->
      <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered p-4 position-relative" style="margin-bottom: 50px">
          <div class="modal-content rounded-3 shadow position-relative">
            <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close">
              <i class="ri-close-circle-line fs-4 text-dark"></i>
            </button>
            <!-- Tabs -->
            <ul class="auth-tabs nav nav-tabs nav-justified border-0 mb-4">
              <li class="auth-item">
                <button class="auth-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#loginTab">
                  Login
                </button>
              </li>
              <li class="auth-item">
                <button class="auth-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signupTab">
                  Sign Up
                </button>
              </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
              <!-- Login Form -->
              <div class="tab-pane fade show active" id="loginTab">
                <form method="POST" action="{{ route('login') }}" class="vstack gap-3">
                  @csrf
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-user-fill"></i>
                    </span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                      value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-key-fill"></i>
                    </span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="current-password" placeholder="Password">
                    <input type="hidden" name="form_type" value="login">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <span class="input-group-text" onclick="togglePassword('password', this)" style="cursor: pointer">
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>
                  <div class="row">
                    <div class="col-xl-5 d-flex align-items-center">
                      <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label rem-text" for="remember">
                        {{ __('Remember Me') }}
                      </label> -->
                    </div>
                    <div class="col-xl-7 d-flex align-items-center justify-content-start justify-content-xl-end">

                      @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                        </a>
                      @endif
                    </div>


                  </div>
                  <button type="submit" class="btn btn-dark w-100">
                    Sign In
                  </button>
                </form>
              </div>

              <div class="tab-pane fade" id="signupTab">
                <form method="POST" action="{{ route('register') }}" class="vstack gap-3" id="signupForm" novalidate>
                  @csrf
                  <!-- Full Name -->
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-user-fill"></i>
                    </span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                      value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <!-- Email -->
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-mail-fill"></i>
                    </span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <!-- Phone -->
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-phone-fill"></i>
                    </span>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone"
                      name="phone" required />
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <!-- Password -->
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-key-fill"></i>
                    </span>
                    <input id="signupPassword" type="password"
                      class="form-control @error('password') is-invalid @enderror" name="password" required
                      autocomplete="new-password" placeholder="Password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <span class="input-group-text" onclick="togglePassword('signupPassword', this)"
                      style="cursor: pointer">
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>

                  <!-- Confirm Password -->
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-key-fill"></i>
                    </span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                      required autocomplete="new-password" placeholder="Confirm Password">
                    <span class="input-group-text" onclick="togglePassword('password-confirm', this)"
                      style="cursor: pointer">
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>
                  <input type="hidden" name="form_type" value="signup">

                  <!-- Google reCAPTCHA Checkbox -->
                  <!-- reCAPTCHA Wrapper -->
                  {{-- <div class="my-2 d-flex justify-content-center">
                    <div class="recaptcha-wrapper">
                      <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                    </div>
                  </div> --}}

                  <!-- Button -->
                  <button type="submit" class="btn btn-dark w-100">
                    Create Account
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- <ul class="navbar-nav ms-auto align-items-lg-center">
          @guest
            <li class="nav-item text-primary">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            <li class="nav-item">
              <a class="nav-link" href="/insights">Insights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item ms-lg-3 d-none d-lg-block">
              <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#authModal">
                Login
              </button>
            </li>
          @else
            @if(isset($adminView) && auth()->user()->hasRole('super_admin') && $adminView === true)
              <li class="nav-item text-primary">
                <a class="nav-link " href="{{ route('admin.users.dashboard', $userId) }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('users.tasks.index', $userId) }}">Task History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "
                  href="{{ route('users.userprofile.edit', ['user' => $userId, 'userprofile' => $userId]) }}">My Profile</a>

              </li>
            @else

              <li class="nav-item text-primary">
                <a class="nav-link " href="/home">Dashboard</a>
              </li>
              @if(!isset($adminView) && auth()->user()->hasRole('super_admin'))
                <li class="nav-item">
                  <a class="nav-link " href="{{ route('blogs.index') }}">Insights</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
                </li>
              @endif
              @role('user')
              <li class="nav-item">
                <a class="nav-link " href="{{ route('user.showTaskHistory', auth()->user()->id) }}">Task History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
              </li>
              @endrole

              <li class="nav-item ms-lg-3 d-none d-lg-block">
                <button type="button" class="btn btn-primary px-4">
                  <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Log Out</a>
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            @endif
          @endguest
          </li>
        </ul> -->

        <!-- <ul class="navbar-nav ms-auto align-items-lg-center">

          @if(
              request()->is('/') ||
              request()->is('home-page') ||
              request()->is('about-us') ||
              request()->is('services') ||
              request()->is('insights') ||
              request()->is('contact')
            )
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ url('home-page') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about-us') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/services') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/insights') }}">Insights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>

            @guest
              <li class="nav-item ms-lg-3 d-none d-lg-block">
                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#authModal">
                  Login
                </button>
              </li>
            @endguest
          @endif


          @if(isset($adminView) && $adminView === true && Auth::check() && auth()->user()->hasRole('super_admin'))
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ route('admin.users.dashboard', $userId) }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.tasks.index', $userId) }}">Task History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('users.userprofile.edit', ['user' => $userId, 'userprofile' => $userId]) }}">
                My Profile
              </a>
            </li>
            <li class="nav-item ms-lg-3 d-none d-lg-block">
              <button type="button" class="btn btn-primary px-4">
                <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Log Out
                </a>
              </button>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          @endif


          @if(
              Auth::check() &&
              !isset($adminView) && (
                request()->is('home') ||
                request()->is('user/*') ||
                request()->is('blogs*') ||
                request()->is('admin/*')
              )
            )
            @role('user')
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.showTaskHistory', auth()->user()->id) }}">Task History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
            </li>
            @endrole

            @if(auth()->user()->hasRole('super_admin'))
              <li class="nav-item text-primary">
                <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">Insights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
              </li>
            @endif

            <li class="nav-item ms-lg-3 d-none d-lg-block">
              <button type="button" class="btn btn-primary px-4">
                <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Log Out
                </a>
              </button>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          @endif

        </ul> -->
@php
  use App\Models\Blog;
@endphp

        <ul class="navbar-nav ms-auto align-items-lg-center">

          {{-- 🌐 Public Navbar: visible on public pages --}}
          @if(
              request()->is('/') ||
              request()->is('home') ||
              request()->is('about') ||
              request()->is('services') ||
              request()->is('pricing') ||
              request()->is('insights') ||
              request()->is('contact') ||
              request()->is('website-development') ||
              request()->is('administrative-Support') ||
              request()->is('operations-oversight') ||
              request()->is('ecommerce-services') ||
              request()->is('crm-bookkeeping') ||
              request()->is('social-media-management') ||
              request()->is('essential-seo') ||
              request()->is('graphic-design') ||
              request()->is('it-solutions') ||
              request()->is('privacy-policy') ||
              request()->is('login') ||
              request()->is('inquerySave') ||
              request()->is('blogs/*') ||
              request()->is('password/reset') ||
              request()->is('password/reset/*') ||
              (
                 request()->segment(1) &&
        Blog::where('slug', request()->segment(1))->exists()
              )
              )
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/services') }}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/insights') }}">Insights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>

            @guest
              <li class="nav-item ms-lg-3 d-none d-lg-block">
                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#authModal">
                  Login
                </button>
              </li>
            @endguest
          @endif


          @if(isset($adminView) && $adminView === true && Auth::check() && auth()->user()->hasRole('super_admin'))
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ route('admin.users.dashboard', $userId) }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.tasks.index', $userId) }}">Task History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ route('users.userprofile.edit', ['user' => $userId, 'userprofile' => $userId]) }}">
                My Profile
              </a>
            </li>
            <!-- <li class="nav-item ms-lg-3 d-none d-lg-block">
                                                          @if(!(Auth::check() && Auth::user()->is_admin && request()->routeIs('admin.users.dashboard')))
                                                            <button type="button" class="btn btn-primary px-4">
                                                              <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                Log Out
                                                              </a>
                                                            </button>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                              @csrf
                                                            </form>
                                                          @endif
                                                        </li> -->
            <li class="nav-item ms-lg-3 d-none d-lg-block">
              @if(!((isset($adminView) && $adminView === true) && auth()->user()->hasRole('super_admin')))
                <button type="button" class="btn btn-primary px-4">
                  <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                  </a>
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              @endif
            </li>


          @endif


          {{-- 🧑‍💼 Logged-in user / admin dashboard navbar --}}
          @if(
              Auth::check() &&
              !isset($adminView) && (
                request()->is('dashboard') ||
                request()->is('user/*') ||
                (request()->is('blogs*') && !request()->is('blogs/*')) ||
                request()->is('admin/*')
              )
            )
            {{-- Normal user --}}
            @role('user')
            <li class="nav-item text-primary">
              <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.showTaskHistory', auth()->user()->id) }}">Task History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
            </li>
            @endrole

            {{-- Super Admin (own dashboard) --}}
            @if(auth()->user()->hasRole('super_admin'))
              <li class="nav-item text-primary">
                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">Insights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.edit', auth()->user()->id) }}">My Profile</a>
              </li>
            @endif

            {{-- Logout --}}
            <li class="nav-item ms-lg-3 d-none d-lg-block">
              <button type="button" class="btn btn-primary px-4">
                <a class="text-white px-6" style="text-decoration: none" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Log Out
                </a>
              </button>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          @endif

        </ul>

      </div>
      <!-- </div> -->
    </div>
  </nav>
  <!-- @guest

  @else
    @if(!isset($adminView) && auth()->user()->hasRole('super_admin'))
      <div class="inner-page-header">
        <div class="container">
          <div class="top-view">
            <h1 class="fw-bold">Welcome! Admin</h1>
          </div>
        </div>
      </div>
    @endif
    @role('user')
    @if(Auth::check())
      @php
        $userRemainHours = \App\Models\UserHour::where('user_id', Auth::id())->first();
      @endphp

      <div class="inner-page-header">
        <div class="container">
          <div class="top-view">
            <h1 class="fw-bold">
              Remaining Hours:
              {{ ($userRemainHours && $userRemainHours->hours != 0) ? str_pad($userRemainHours->hours, 2, '0', STR_PAD_LEFT) : '00' }}
              hr
              {{ ($userRemainHours && $userRemainHours->minutes != 0) ? str_pad($userRemainHours->minutes, 2, '0', STR_PAD_LEFT) : '00' }}
              min
            </h1>
          </div>
        </div>
      </div>
    @endif
    @endrole
    @if(isset($adminView) && auth()->user()->hasRole('super_admin') && $adminView === true)
      @php
        $userRemainHours = \App\Models\UserHour::where('user_id', $userId)->first();
      @endphp
      <div class="inner-page-header">
        <div class="container">
          <div class="top-view">
            <h1 class="fw-bold">
              Remaining Hours:
              {{ ($userRemainHours && $userRemainHours->hours != 0) ? str_pad($userRemainHours->hours, 2, '0', STR_PAD_LEFT) : '00' }}
              hr
              {{ ($userRemainHours && $userRemainHours->minutes != 0) ? str_pad($userRemainHours->minutes, 2, '0', STR_PAD_LEFT) : '00' }}
              min
            </h1>
          </div>
        </div>
      </div>
    @endif
  @endguest -->

@php
  $publicPages = [
    '', 'home', 'about', 'services', 'pricing',
    'insights', 'contact', 'login', 'inquerySave'
  ];

  $currentPath = Request::path(); // e.g. "qqqqqq"
  $isSingleSlugBlog =
      !in_array($currentPath, $publicPages) &&
      !Request::is('admin*') &&
      !Request::is('user*') &&
      !Request::is('dashboard') &&
      substr_count($currentPath, '/') === 0;
@endphp
  @guest

  @else
    @php
      // Define the routes where the section should be hidden
      $hiddenRoutes = ['home', 'about', 'services', 'pricing', 'insights', 'contact', 'inquerySave'];
    @endphp

    {{-- Show this section only if the current route is NOT in the hidden list --}}
     @if(!in_array(Request::path(), $hiddenRoutes) && !$isSingleSlugBlog)
      @if(!isset($adminView) && auth()->user()->hasRole('super_admin') && !Request::is('blogs/*'))
        <div class="inner-page-header">
          <div class="container">
            <div class="top-view admin-view">
              <h1 class="fw-bold">ॐ गं गणपतये नमः</h1>
            </div>
          </div>
        </div>
      @endif

      @role('user')
      @if(Auth::check())
        @php
          $userRemainHours = \App\Models\UserHour::where('user_id', Auth::id())->first();
        @endphp

        <div class="inner-page-header">
          <div class="container">
            <div class="top-view">
              <!-- <h1 class="fw-bold">
                Remaining Hours:
                {{ ($userRemainHours && $userRemainHours->hours != 0) ? str_pad($userRemainHours->hours, 2, '0', STR_PAD_LEFT) : '00' }}
                hr
                {{ ($userRemainHours && $userRemainHours->minutes != 0) ? str_pad($userRemainHours->minutes, 2, '0', STR_PAD_LEFT) : '00' }}
                min
              </h1> -->
                            <h1 class="fw-bold">
    Remaining Hours:
    {{ $userRemainHours->hours ?? 0 }} hr
    {{ $userRemainHours->minutes ?? 0}} min
</h1>

            </div>
          </div>
        </div>
      @endif
      @endrole

      @if(isset($adminView) && auth()->user()->hasRole('super_admin') && $adminView === true)
        @php
          $userRemainHours = \App\Models\UserHour::where('user_id', $userId)->first();
        @endphp
        <div class="inner-page-header">
          <div class="container">
            <div class="top-view">
              <!-- <h1 class="fw-bold">
                Remaining Hours:
                {{ ($userRemainHours && $userRemainHours->hours != 0) ? str_pad($userRemainHours->hours, 2, '0', STR_PAD_LEFT) : '00' }}
                hr
                {{ ($userRemainHours && $userRemainHours->minutes != 0) ? str_pad($userRemainHours->minutes, 2, '0', STR_PAD_LEFT) : '00' }}
                min
              </h1> -->
                            <h1 class="fw-bold">
    Remaining Hours:
    {{ $userRemainHours->hours ?? 0 }} hr
    {{ $userRemainHours->minutes ?? 0}} min
</h1>
            </div>
          </div>
        </div>
      @endif
    @endif
  @endguest

</section>

<script>
  document.getElementById("signupForm").addEventListener("submit", function (e) {
    let password = document.getElementById("signupPassword").value.trim();
    let confirmPassword = document.getElementById("password-confirm").value.trim();

    // remove previous error if exists
    let oldError = document.getElementById("passwordError");
    if (oldError) oldError.remove();

    if (password !== confirmPassword) {
      e.preventDefault(); // stop submit

      let div = document.createElement("div");
      div.id = "passwordError";
      div.classList.add("text-danger", "mt-1"); // Bootstrap style
      div.innerHTML = "⚠ Password and Confirm Password do not match.";

      document.getElementById("password-confirm")
        .closest(".input-group")
        .after(div);
    }
  });
</script>
<!-- 
<script>
  document.addEventListener("DOMContentLoaded", function () {
    @if ($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('password'))
      // Open modal automatically (if it closes after form)
      var myModal = new bootstrap.Modal(document.getElementById('authModal'));
      myModal.show();

      // Switch tab to Sign Up
      document.getElementById('signup-tab').click();
    @endif
});
</script> -->
<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {

    @if ($errors->any())
      var myModal = new bootstrap.Modal(document.getElementById('authModal'));
      myModal.show();

      // If signup-specific fields have errors → activate signup tab
      @if ($errors->has('name') || $errors->has('phone') || $errors->has('password_confirmation'))
        document.getElementById('signup-tab').click();
      @else
        // Otherwise assume errors belong to login form → activate login tab
        document.getElementById('login-tab').click();
      @endif
    @endif

});
</script> -->

<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    @if ($errors->any())
      var myModal = new bootstrap.Modal(document.getElementById('authModal'));
      myModal.show();

      let formType = "{{ old('form_type') }}";

      if (formType === "signup") {
        document.getElementById('signup-tab').click();
      } else {
        document.getElementById('login-tab').click();
      }
    @endif
});
</script> -->

<!-- @if ($errors->any())
<script>
document.addEventListener("DOMContentLoaded", function () {
    var authModal = new bootstrap.Modal(document.getElementById('authModal'));
    authModal.show();

    let formType = "{{ old('form_type') }}";

    if (formType === "signup") {
        document.getElementById('signup-tab').click();
    } else {
        document.getElementById('login-tab').click();
    }
});
</script>
@endif -->

@if ($errors->any())
  <script>
    document.addEventListener("DOMContentLoaded", function () {

      if (window.location.pathname.startsWith("/password/reset")) {
        return;
      }

      var authModal = new bootstrap.Modal(document.getElementById('authModal'));
      authModal.show();

      let formType = "{{ old('form_type') }}";
      if (formType === "signup") {
        document.getElementById('signup-tab').click();
      } else {
        document.getElementById('login-tab').click();
      }
    });
  </script>
@endif
