<section class="top-banner">
<!-- Header / Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fw-bold text-primary" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-2" />
      </a>

      <div id="" class="d-block d-lg-none">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#authModal" >
                Login</button>
      </div>

      <!-- Auth Modal -->
      <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered p-4 position-relative" style="margin-bottom: 50px" >
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
                <button class="auth-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signupTab" >
                  Sign Up
                </button>
              </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
            <!-- Login Form -->
              <div class="tab-pane fade show active" id="loginTab">
                <form  method="POST" action="{{ route('login') }}" class="vstack gap-3">
                  @csrf
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ri-user-fill"></i>
                    </span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <span class="input-group-text" onclick="togglePassword('password', this)" style="cursor: pointer" >
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>
                  <div class="row">
                    <div class="col-xl-5 d-flex align-items-center">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label rem-text" for="remember">
                      {{ __('Remember Me') }}
                    </label>
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
                <form  method="POST" action="{{ route('register') }}" class="vstack gap-3" id="signupForm">
                  @csrf
                  <!-- Full Name -->
                  <div class="input-group">
                    <span class="input-group-text" >
                      <i class="ri-user-fill"></i >
                    </span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

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
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <!-- Phone -->
                  <div class="input-group">
                    <span class="input-group-text" >
                      <i class="ri-phone-fill"></i>
                    </span>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" name="phone" required />
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
                    <input id="signupPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <span class="input-group-text" onclick="togglePassword('signupPassword', this)" style="cursor: pointer" >
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>

                  <!-- Confirm Password -->
                  <div class="input-group">
                    <span class="input-group-text" >
                      <i class="ri-key-fill"></i>
                    </span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <span class="input-group-text" onclick="togglePassword('password-confirm', this)" style="cursor: pointer" >
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>

                  <!-- Google reCAPTCHA Checkbox -->
                  <!-- reCAPTCHA Wrapper -->
                  {{-- <div class="my-2 d-flex justify-content-center">
                    <div class="recaptcha-wrapper">
                      <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" ></div>
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
        <ul class="navbar-nav ms-auto align-items-lg-center">
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
                <a class="nav-link " href="{{ route('users.userprofile.edit', ['user' => $userId, 'userprofile' => $userId]) }}">My Profile</a>

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
        </ul>
        </div>
        <!-- </div> -->
      </div>
  </nav>
  @guest

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
                        Remaining Hours: {{ $userRemainHours ? $userRemainHours->hours : '00' }} hr 
                        {{ $userRemainHours ? $userRemainHours->minutes : '00' }} min
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
                        Remaining Hours: {{ $userRemainHours ? $userRemainHours->hours : '00' }} hr 
                        {{ $userRemainHours ? $userRemainHours->minutes : '00' }} min
                    </h1>
                </div>
            </div>
        </div>
    @endif
  @endguest
</section>