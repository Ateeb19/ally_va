@extends('layouts.app')

@section('content')
<section class="admin-profile-wrapper mt-5 mb-5">
  <div class="container">
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
      @endif
    <form  method="POST" action="{{ route('users.userprofile.update', ['user' => $userId, 'userprofile' => $userId])}}">
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
                <label class="form-label">Per Hour Price</label>
                <div class="input-group">
                    <input type="number" name="hourPrice" value="{{ $userHours ? $userHours->hour_price : '' }}" class="form-control bg-input" placeholder="Hour Price" min="0">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Remaining (Hours & Minutes)</label>
                <div class="d-flex">
                    <input type="number" name="hours" value="{{ $userHours ? $userHours->hours : 00 }}" class="form-control bg-input w-25 me-2" placeholder="Hours" min="0">
                    <input type="number" name="minutes" value="{{ $userHours ? $userHours->minutes : 00 }}" class="form-control bg-input w-25" placeholder="Minutes" min="0" max="59">
                </div>
              </div>
              <?php
              // Convert the associative array to a simple indexed array for easier iteration
              $data = [];
              foreach ($UserMostPurchase as $key => $item) {
                  $data[] = [
                        'hours' => $item->hours,
                        'price' => $item->hours_price,
                        'discount' => $item->discount ?? 0, // default 0 if null
                    ];
              }

              // Pad the array with empty entries if fewer than 3 purchases exist
              $data = array_pad($data, 3, ['hours' => '', 'price' => '', 'discount' => 0]);

              // Assign the values for easier insertion into the HTML
              $hours_1 = $data[0]['hours'];
              $hours_price_1 = $data[0]['price'];
              $hours_discount_1 = $data[0]['discount'];

              $hours_2 = $data[1]['hours'];
              $hours_price_2 = $data[1]['price'];
              $hours_discount_2 = $data[1]['discount'];

              $hours_3 = $data[2]['hours'];
              $hours_price_3 = $data[2]['price'];
              $hours_discount_3 = $data[2]['discount'];
              ?>

              <div class="form-group">
                <label class="form-label">Most Purchased (Box 1)</label>
                <div class="d-flex">
                  <input type="number" name="hours_1" value="<?php echo $hours_1; ?>" class="form-control bg-input w-25 me-2" placeholder="Total Hours" min="0">
                  <input type="number" name="hours_price_1" value="<?php echo $hours_price_1; ?>" class="form-control bg-input w-25 me-2" placeholder="Hour Price">
                  <input type="number" name="hours_discount_1" value="<?php echo $hours_discount_1; ?>" class="form-control bg-input w-25" placeholder="Discount (%)">
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Most Purchased (Box 2)</label>
                <div class="d-flex">
                  <input type="number" name="hours_2" value="<?php echo $hours_2; ?>" class="form-control bg-input w-25 me-2" placeholder="Total Hours" min="0">
                  <input type="number" name="hours_price_2" value="<?php echo $hours_price_2; ?>" class="form-control bg-input w-25 me-2" placeholder="Hour Price">
                  <input type="number" name="hours_discount_2" value="<?php echo $hours_discount_2; ?>" class="form-control bg-input w-25" placeholder="Discount (%)">
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Most Purchased (Box 3)</label>
                <div class="d-flex">
                  <input type="number" name="hours_3" value="<?php echo $hours_3; ?>" class="form-control bg-input w-25 me-2" placeholder="Total Hours" min="0">
                  <input type="number" name="hours_price_3" value="<?php echo $hours_price_3; ?>" class="form-control bg-input w-25 me-2" placeholder="Hour Price">
                  <input type="number" name="hours_discount_3" value="<?php echo $hours_discount_3; ?>" class="form-control bg-input w-25" placeholder="Discount (%)">
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
