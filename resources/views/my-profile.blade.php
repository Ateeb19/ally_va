@extends('layouts.app')
@section('title', 'Ally VA')
@section('content')
  <section class="admin-profile-wrapper mt-3 mb-5">
    <div class="container">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
      @endif
      @if(session()->has('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}
        </div>
      @endif
      <form method="POST" action="{{ route('user.update', $user->id)}}" id="updateUserForm">
        @csrf
        @method('PUT')
        <div class="admin-prof-wrap">
          <div class="row g-4">
            <div class="col-xl-6">
              <!-- Left Side -->
              <div class="form-left">
                <h2 class="support-title">Personal Information</h2>

                <div class="form-group">
                  <label class="form-label">Full Name</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-user-3-line"></i></span>
                    <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" required
                      value='{{ $user->name }}' maxlength="100" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Email Address</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-mail-fill"></i></span>
                    <input type="email" class="form-control" placeholder="E-mail" name="email" required
                      value='{{ $user->email }}' readonly />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-phone-line"></i></span>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"
                      value='{{ $user->phone }}' maxlength="100" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">WhatsApp Number</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-whatsapp-line"></i></span>
                    <input type="text" class="form-control" name="whatsapp_no" placeholder="Enter WhatsApp Number"
                      value='{{ $user->whatsapp_no }}' maxlength="100" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">City</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-building-line"></i></span>
                    <input type="text" name="city" class="form-control" placeholder="Enter City" value='{{ $user->city }}'
                      maxlength="100" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Country</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-global-line"></i></span>
                    <input type="text" name="country" class="form-control" placeholder="Enter Country"
                      value='{{ $user->country }}' maxlength="100" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="form-right">
                <h2>Password Change</h2>

                <div class="form-group">
                  <label class="form-label">Old Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-key-fill"></i></span>
                    <input type="password" class="form-control" placeholder="Enter old password" id="old_password"
                      name="old_password" />
                    <span class="input-group-text" onclick="togglePassword('old_password', this)" style="cursor: pointer">
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">New Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-key-fill"></i></span>
                    <input type="password" class="form-control" placeholder="Enter new password" id="new_password"
                      name="new_password" />
                    <span class="input-group-text" onclick="togglePassword('new_password', this)" style="cursor: pointer">
                      <i class="ri-eye-off-fill"></i>
                    </span>
                  </div>
                </div>

                <!-- <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                              <span class="input-group-text"><i class="ri-key-fill"></i></span>
                              <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
                              <span class="input-group-text" onclick="togglePassword('password', this)" style="cursor: pointer">
                                <i class="ri-eye-off-fill"></i>
                              </span>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-group">
                              <span class="input-group-text"><i class="ri-key-fill"></i></span>
                              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" />

                              <span class="input-group-text" onclick="togglePassword('confirmPassword', this)"
                                style="cursor: pointer">
                                <i class="ri-eye-fill"></i>
                              </span>
                            </div>
                          </div> -->

                @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
                  <div class="form-group">
                    <label class="form-label">Remaining (Hours & Minutes)</label>
                    <div class="d-flex">
                      <input type="number" name="hours" value="{{ $userHours ? $userHours->hours : 00 }}"
                        class="form-control w-25 me-2" placeholder="Hours" min="0" max="99999" required>
                      <input type="number" name="minutes" value="{{ $userHours ? $userHours->minutes : 00 }}"
                        class="form-control w-25" placeholder="Minutes" min="0" max="99999" required>
                    </div>
                  </div>
                @endif

                <!-- Save button yaha right side box ke andar niche -->
                <div class="btn-wrapper">
                  <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
                  <button type="submit" class="btn btn-primary" id="updateUserBtn">
                    <span class="btn-text">Save Changes</span>
                    <img src="{{ asset('images/ally-loader_yellow.gif') }}" id="updateUserLoader" width="22"
                      style="display:none;">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <script>
        document.addEventListener("DOMContentLoaded", function () {

          const form = document.getElementById("updateUserForm");
          const loader = document.getElementById("updateUserLoader");
          const text = document.querySelector("#updateUserBtn .btn-text");

          if (form) {
            form.addEventListener("submit", function () {

              text.style.display = "none";
              loader.style.display = "inline";

            });
          }

          // Fix back button issue
          window.addEventListener("pageshow", function () {
            text.style.display = "inline";
            loader.style.display = "none";
          });

        });
      </script>
    </div>
  </section>
@endsection