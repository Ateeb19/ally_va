@extends('layouts.app')

@section('content')
<section class="admin-profile-wrapper mt-5 mb-5">
  <div class="container">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
      @endif
    <form  method="POST" action="{{ route('user.update', $user->id)}}">
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
                    <span class="input-group-text"
                      ><i class="ri-user-3-line"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="full_name"
                      placeholder="Enter Full Name"
                      required
                      value='{{ $user->name }}'
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Email Address</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ri-mail-fill"></i></span>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="E-mail"
                      name="email"
                      required
                      value='{{ $user->email }}'
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text"
                      ><i class="ri-phone-line"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      placeholder="Enter Phone Number"
                      value='{{ $user->phone }}'
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">WhatsApp Number</label>
                  <div class="input-group">
                    <span class="input-group-text"
                      ><i class="ri-whatsapp-line"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="whatsapp_no"
                      placeholder="Enter WhatsApp Number"
                      value='{{ $user->whatsapp_no }}'
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">City</label>
                  <div class="input-group">
                    <span class="input-group-text"
                      ><i class="ri-building-line"></i
                    ></span>
                    <input
                      type="text"
                      name="city"
                      class="form-control"
                      placeholder="Enter City"
                      value='{{ $user->city }}'
                    />
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-label">Country</label>
                  <div class="input-group">
                    <span class="input-group-text"
                      ><i class="ri-building-line"></i
                    ></span>
                    <input
                      type="text"
                      name="country"
                      class="form-control"
                      placeholder="Enter Country"
                      value='{{ $user->country }}'
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="form-right">
              <h2>Password Change</h2>
              <div class="form-group">
                <label class="form-label">Password</label>

                <div class="input-group">
                  <span class="input-group-text"><i class="ri-key-fill"></i></span>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    id="password"
                    name="password"
                  />
                  <span
                    class="input-group-text"
                    onclick="togglePassword('password', this)"
                    style="cursor: pointer"
                  >
                    <i class="ri-eye-off-fill"></i>
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="ri-key-fill"></i></span>
                  <input
                    type="password"
                    class="form-control"
                    id="confirmPassword"
                    placeholder="Confirm Password"
                  />

                  <span
                    class="input-group-text"
                    onclick="togglePassword('confirmPassword', this)"
                    style="cursor: pointer"
                  >
                    <i class="ri-eye-fill"></i>
                  </span>
                </div>
              </div>

              @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
              <div class="form-group">
                <label class="form-label">Remaining (Hours & Minutes)</label>
                <div class="d-flex">
                    <input type="number" name="hours" value="{{ $userHours ? $userHours->hours : 00 }}" class="form-control w-25 me-2" placeholder="Hours" min="0">
                    <input type="number" name="minutes" value="{{ $userHours ? $userHours->minutes : 00 }}" class="form-control w-25" placeholder="Minutes" min="0" max="59">
                </div>
              </div>
              @endif

              <!-- Save button yaha right side box ke andar niche -->
              <div class="btn-wrapper">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
              </div>
            </div>
        </div>
        </div>
    </form>   
  </div>    
</section>
@endsection
