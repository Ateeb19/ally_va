@extends('layouts.app')

@section('content')

  <!-- //Admin data only show here -->
  @if(!isset($adminView) && auth()->user()->hasRole('super_admin'))
    <section class="admin-table-wrapper mt-5">
      <div class="container">
        @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
        @endif
        <div class="table-info-wrap">
          <div class="row">
            <div class="col-xl-6">
              <form action="{{ url()->current() }}" method="GET">
                <div class="form-group">
                  <div class="d-flex gap-3">
                    <div class="input-group">
                      <input type="search" class="email_search" name="email_search" placeholder="Search by email address"
                        value="{{ request('email_search') }}" />
                    </div>
                    <button type="submit" class="btn-search">Search</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- Button trigger -->
            <div class="col-xl-6 d-flex justify-content-end align-items-center">
              <button class="btn-add" data-bs-toggle="modal" data-bs-target="#userCreateModal">
                Add New <i class="ri-add-circle-line"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
          {{ $users->links() }}
        </div>
        <div class="w-100">
          <div class="admin-table-wrap">
            <table>
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col" class="action-col">Action</th>
                </tr>
              </thead>

              <tbody class="superadmin-icons">
                @forelse($users as $user)
                  <tr>
                    <td><a href="{{ route('admin.users.dashboard', $user->id) }}" target="_blank">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td class="action-btn">
                      <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="close-btn border-0 bg-transparent">
                          <i class="ri-delete-bin-fill"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="4" class="text-center text-muted py-3">
                      No data found
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>

            <div class="d-flex flex-wrap justify-content-between align-items-center mt-4 pagination-wrap">
              <p class="mb-0">Page: 1 of 2</p>
              <div class="d-flex align-items-center gap-2">
                <span>Page Size:</span>
                <select class="form-select form-select-sm w-auto py-2">
                  <option>10</option>
                  <option>25</option>
                  <option>50</option>
                </select>
              </div>
              <div class="d-flex gap-2 last-point-view">
                <button class="btn btn-sm btn-outline-secondary"><i class="ri-arrow-left-double-line"></i></button>
                <button class="btn btn-sm btn-outline-secondary"><i class="ri-arrow-left-s-line"></i></button>
                <button class="btn btn-sm btn-outline-secondary active">1</button>
                <button class="btn btn-sm btn-outline-secondary"><i class="ri-arrow-right-s-line"></i></button>
                <button class="btn btn-sm btn-outline-secondary"><i class="ri-arrow-right-double-line"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="userCreateModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">

          <!-- Header -->
          <div class="modal-header border-0">
            <h5 class="modal-title fw-bold" id="signupModalLabel">Create User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Body -->
          <div class="modal-body">
            <form method="POST" action="{{ route('user.store') }}" class="vstack gap-3" id="AddUserForm">
              @csrf

              <!-- Full Name -->
              <div class="input-group">
                <span class="input-group-text"><i class="ri-user-fill"></i></span>
                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
                  name="user_name" value="{{ old('user_name') }}" required placeholder="Full Name">
                @error('user_name')
                  <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <!-- Email -->
              <div class="input-group">
                <span class="input-group-text"><i class="ri-mail-fill"></i></span>
                <!-- <input id="user_email" type="user_email" class="form-control @error('user_email') is-invalid @enderror"
                                          name="user_email" value="{{ old('user_email') }}" required placeholder="E-mail"> -->
                <input id="user_email" type="email" class="form-control @error('user_email') is-invalid @enderror"
                  name="user_email" value="{{ old('user_email') }}" required placeholder="E-mail">
                @error('user_email')
                  <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <!-- Phone -->
              <div class="input-group">
                <span class="input-group-text"><i class="ri-phone-fill"></i></span>
                <input type="text" class="form-control @error('user_phone') is-invalid @enderror" placeholder="Phone Number"
                  name="user_phone" required />
                @error('user_phone')
                  <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <!-- Password -->
              <div class="input-group">
                <span class="input-group-text"><i class="ri-key-fill"></i></span>
                <input id="user_Password" type="password" class="form-control @error('user_Password') is-invalid @enderror"
                  name="user_Password" required placeholder="Password">
                <span class="input-group-text" onclick="togglePassword('signupPassword', this)" style="cursor: pointer">
                  <i class="ri-eye-off-fill"></i>
                </span>
                @error('user_Password')
                  <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <!-- Confirm Password -->
              <div class="input-group">
                <span class="input-group-text"><i class="ri-key-fill"></i></span>
                <input id="password-confirm-user" type="password" class="form-control" name="password_confirmation_user"
                  required placeholder="Confirm Password">
                <span class="input-group-text" onclick="togglePassword('password-confirm-user', this)"
                  style="cursor: pointer">
                  <i class="ri-eye-off-fill"></i>
                </span>
              </div>

              <!-- Submit -->
              <button type="submit" class="btn btn-primary w-100">
                Create Account
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

  @endif

  <!-- //User Dashboard data only show -->
  @if(auth()->user()->hasRole('user') || (isset($adminView) && auth()->user()->hasRole('super_admin')))
    <section class="hours-selection-wrapper mt-5">
      <div class="container">
        <!-- Choose Hours -->
        <div class="card p-2 shadow mb-5">
          <div class="card-body">
            <h2 class="mb-3">
              Choose Your Hours <span class="text-danger">*</span>
            </h2>


            <!-- Slider -->
            <div>
              <input type="range" min="10" max="300" value="20" step="10" id="hoursRange" class="form-range custom-range" />
            </div>

            <!-- Labels -->
            <div class="d-flex justify-content-between text-muted mt-3 flex-wrap">
              <span>10 Hours</span>
              <span class="fw-bold text-dark middle-label" id="hoursLabel">
                20 Hours Plan @ USD {{ $userHour ? ($userHour->hour_price ? $userHour->hour_price : 9) : 9 }}/hour
              </span>
              <span>300 Hours</span>
            </div>

            <script>
              const slider = document.getElementById('hoursRange');
              const label = document.getElementById('hoursLabel');

              const pricePerHour = {{ $userHour ? ($userHour->hour_price ? $userHour->hour_price : 9) : 9 }};

              slider.addEventListener('input', function () {
                const hours = this.value;
                label.textContent = `${hours} Hours Plan @ USD ${pricePerHour}/hour`;
              });
            </script>

            <!-- Price + Button -->
            <form action="{{ route('paypal.payment') }}" method="GET" id="paypalForm">
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 gap-3">
                <div class="text-white text-center py-2 price-btn">
                  <p class="fw-bold mb-0">
                    Total Price: <span id="totalPrice">$180</span>
                    <input type="hidden" name="totalPrice" id="TotalAmount" value="180">
                    <input type="hidden" name="discountAmount" id="discountAmount" value="">
                  </p>
                </div>
                {{-- ✅ Pass managed user ID if admin is paying for someone --}}
                @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
                  <input type="hidden" name="managed_user_id" value="{{ $userId }}">
                @endif
                <button type="submit" class="text-white fw-semibold shadow py-2 buy-btn">
                  Buy Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="most-selection-wrapper">
      <div class="container">
        <div class="card shadow mb-5">
          <div class="card-body text-center">
            <h2 class="mb-2 mt-2">Most Purchased</h2>
            <div class="container">
              <div class="totalhours">

                @forelse($UserMostPurchase as $data)
                  <div class="totalhours-box js-paypal-box" data-price="{{ $data->hours_price }}"
                    data-user="{{ $userId ?? '' }}" data-discount="{{ $data->discount ?? 0 }}"> {{-- ✅ Added --}}
                    <div class="rounded-3">
                      <h2>{{ $data->hours }} HOURS</h2>
                      <span>${{ $data->hours_price }}</span>
                    </div>
                  </div>
                @empty
                  {{-- Default Box 1 --}}
                  <div class="totalhours-box js-paypal-box" data-price="360" data-user="{{ $userId ?? '' }}"
                    data-discount="0">
                    <div class="rounded-3">
                      <h2>30 HOURS</h2>
                      <span>$270</span>
                    </div>
                  </div>

                  {{-- Default Box 2 --}}
                  <div class="totalhours-box js-paypal-box" data-price="1350" data-user="{{ $userId ?? '' }}"
                    data-discount="0">
                    <div class="rounded-3">
                      <h2>50 HOURS</h2>
                      <span>$450</span>
                    </div>
                  </div>

                  {{-- Default Box 3 --}}
                  <div class="totalhours-box js-paypal-box" data-price="2520" data-user="{{ $userId ?? '' }}"
                    data-discount="0">
                    <div class="rounded-3">
                      <h2>80 HOURS</h2>
                      <span>$720</span>
                    </div>
                  </div>
                @endforelse

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="user-table-wrapper mt-5 mb-4">
      <div class="container">
        <div class="user-table-wrap shadow">
          <div class="table-info-wrap">
            <div class="trans-boxes">
              <h2>Transaction Details <span>(Please allow time for updates)</span> </h2>
              @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
                <div class="trans-btn">
                  <form id="deleteMultipleForm" action="{{ route('admin.users.transaction.destroyMultiple') }}" method="POST"
                    style="display: none;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="ids" id="delete_ids">
                  </form>

                  <button class="btn-delete me-4" id="deleteSelected">
                    Delete <i class="ri-delete-bin-6-line"></i>
                  </button>
                  <button class="btn-add" data-bs-toggle="modal" data-bs-target="#transactionModal">Add New <i
                      class="ri-add-circle-line"></i></button>
                </div>
              @endif
            </div>
          </div>
          <div class="w-100">
            <div class="admin-table-wrap">
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">
                        <input type="checkbox" class="form-check-input me-2" id="selectAll" />
                        Transaction ID
                      </th>
                      <th scope="col">Transaction Date</th>
                      <th scope="col" class="text-end">Amount (USD)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($transactions->isEmpty())
                      <tr>
                        <td colspan="3" class="text-center text-muted py-4">No data found</td>
                      </tr>
                    @else
                      @foreach($transactions as $transaction)
                        <tr>
                          <td>
                            <input type="checkbox" class="form-check-input me-2 transaction-checkbox"
                              data-id="{{ $transaction->id }}" />

                            @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
                              <a href="javascript:void(0);" class="edit-btn" data-id="{{ $transaction->id }}"
                                data-transaction="{{ $transaction->transaction_id }}" data-date="{{ $transaction->date }}"
                                data-amount="{{ $transaction->amount }}" data-bs-toggle="modal" data-bs-target="#transactionModal"
                                title="Edit Transaction">
                                {{ $transaction->transaction_id }}
                              </a>
                            @else
                              {{ $transaction->transaction_id }}
                            @endif
                          </td>
                          <td>{{ date('d-m-Y', strtotime($transaction->date)) }}</td>
                          <td class="text-end">{{ $transaction->amount }}</td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>

              </div>

              <div class="d-flex flex-wrap justify-content-between align-items-center mt-2 pagination-wrap">
                <p class="mb-0">Page: 1 of 2</p>
                <div class="d-flex align-items-center gap-2">
                  <span>Page Size:</span>
                  <select class="form-select form-select-sm w-auto py-2">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                  </select>
                </div>
                <div class="d-flex gap-2 last-point-view">
                  <button class="btn btn-sm btn-outline-secondary">
                    <i class="ri-arrow-left-double-line"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-secondary">
                    <i class="ri-arrow-left-s-line"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-secondary active">
                    1
                  </button>
                  <button class="btn btn-sm btn-outline-secondary">
                    <i class="ri-arrow-right-s-line"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-secondary">
                    <i class="ri-arrow-right-double-line"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
      <div class="modal fade" id="transactionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="transactionForm" method="POST">
              @csrf
              <div class="modal-header border-0">
                <h5 class="modal-title">Add Transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="transaction_id_hidden">
                <div class="mb-3">
                  <label>Transaction ID</label>
                  <input type="text" name="transaction_id" id="transaction_id" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Transaction Date</label>
                  <input type="date" name="transaction_date" id="transaction_date" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Amount (USD)</label>
                  <input type="number" name="amount" id="amount" step="0.01" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script>
        const form = document.getElementById('transactionForm');
        const userId = "{{ $userId }}";

        document.querySelectorAll('.edit-btn').forEach(btn => {
          btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            document.getElementById('transaction_id').value = btn.dataset.transaction;
            document.getElementById('transaction_date').value = btn.dataset.date;
            document.getElementById('amount').value = btn.dataset.amount;

            form.action = `/admin/users/${userId}/transaction/${id}`;
            form.insertAdjacentHTML('beforeend', '@method("PUT")');
          });
        });

        document.querySelector('[data-bs-target="#transactionModal"]').addEventListener('click', () => {
          form.reset();
          form.action = `/admin/users/${userId}/transaction`;
          const oldMethod = form.querySelector('input[name="_method"]');
          if (oldMethod) oldMethod.remove();
        });
      </script>


      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const form = document.getElementById('transactionForm');
          const modalTitle = document.getElementById('transactionModalLabel');
          const userId = "{{ $userId }}";

          // Handle Edit button click
          document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', () => {
              const id = btn.dataset.id;
              const transaction = btn.dataset.transaction;
              const date = btn.dataset.date;
              const amount = btn.dataset.amount;

              // Fill modal inputs
              document.getElementById('transaction_id').value = transaction;
              document.getElementById('transaction_date').value = date;
              document.getElementById('amount').value = amount;

              // Update form action and title
              form.action = `/admin/users/${userId}/transaction/${id}`;
              modalTitle.textContent = 'Edit Transaction';

              // Ensure PUT method is added
              let methodInput = form.querySelector('input[name="_method"]');
              if (!methodInput) {
                methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);
              }
            });
          });

          // When opening modal for new transaction
          const addButton = document.querySelector('[data-bs-target="#transactionModal"]');
          if (addButton) {
            addButton.addEventListener('click', () => {
              form.reset();
              form.action = `/admin/users/${userId}/transaction`;
              modalTitle.textContent = 'Add Transaction';
              const oldMethod = form.querySelector('input[name="_method"]');
              if (oldMethod) oldMethod.remove();
            });
          }
        });
      </script>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const selectAll = document.getElementById('selectAll');
          const checkboxes = document.querySelectorAll('.transaction-checkbox');

          // ✅ When "Select All" changes — toggle all row checkboxes
          selectAll.addEventListener('change', function () {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
          });

          // ✅ When any individual checkbox changes — update "Select All"
          checkboxes.forEach(cb => {
            cb.addEventListener('change', function () {
              const allChecked = Array.from(checkboxes).every(c => c.checked);
              selectAll.checked = allChecked;
            });
          });
        });
        document.getElementById('deleteSelected').addEventListener('click', function () {
          let ids = [];
          document.querySelectorAll('.transaction-checkbox:checked').forEach(cb => {
            ids.push(cb.getAttribute('data-id'));
          });

          if (ids.length === 0) {
            alert('Please select at least one transaction.');
            return;
          }

          if (confirm('Are you sure you want to delete selected transactions?')) {
            document.getElementById('delete_ids').value = ids.join(',');
            document.getElementById('deleteMultipleForm').submit();
          }
        });
      </script>
    @endif
  @endif
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const boxes = document.querySelectorAll('.js-paypal-box');
      const totalAmountInput = document.getElementById('TotalAmount');
      const managedUserInput = document.getElementById('ManagedUserId');
      const paypalForm = document.getElementById('paypalForm');
      const totalPriceDisplay = document.getElementById('totalPriceDisplay');
      const discountAmount = document.getElementById('discountAmount');

      boxes.forEach(box => {
        box.style.cursor = 'pointer';
        box.addEventListener('click', function () {
          const price = this.getAttribute('data-price');
          const userId = this.getAttribute('data-user');
          const discount = this.getAttribute('data-discount');

          if (price) {
            totalAmountInput.value = price;

            if (userId && managedUserInput) {
              managedUserInput.value = userId; // ✅ Inject dynamic ID into hidden input
            }

            if (totalPriceDisplay) {
              totalPriceDisplay.textContent = '$' + price;
            }

            if (discountAmount) {
              discountAmount.value = discount
            }

            paypalForm.submit();
          } else {
            console.error('Missing price data attribute.');
          }
        });
      });
    });
  </script>



  <script>
    $(document).ready(function () {
      $('#AddUserForm').on('submit', function (e) {
        e.preventDefault(); // Stop form from normal submission

        // Remove old validation errors
        $('#AddUserForm .is-invalid').removeClass('is-invalid');
        $('#AddUserForm .invalid-feedback').text('');

        $.ajax({
          url: $(this).attr('action'), // form action URL (user.store)
          type: 'POST',
          data: $(this).serialize(), // send form data
          success: function (response) {
            if (response.success) {
              // Hide modal on success
              $('#userCreateModal').modal('hide');

              // Option 1: Show success alert
              alert('User added successfully!');

              // Option 2: Reload page to update table
              location.reload();
            }
          },
          error: function (xhr) {
            // Laravel Validation Error (422)
            if (xhr.status === 422) {
              const errors = xhr.responseJSON.errors;
              for (let field in errors) {
                const input = $(`#AddUserForm [name="${field}"]`);
                input.addClass('is-invalid');
                input.closest('.input-group').find('.invalid-feedback').text(errors[field][0]);
              }
            }
            // Other errors (e.g., 500, unauthorized, etc.)
            else {
              console.error('Unexpected error:', xhr.responseText);
            }
          }
        });
      });
    });
  </script>


@endsection