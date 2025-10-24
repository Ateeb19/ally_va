@extends('layouts.app')

@section('content')
  <!-- Add Task Listing Table -->
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
            <div class="form-group">
              <form action="{{ url()->current() }}" method="GET">
                <div class="d-flex gap-3">
                  <div class="input-group">
                    <input type="search" class="email_search" name="blog_search" placeholder="Search by blog title"
                      value="{{ request('blog_search') }}" />
                  </div>
                  <button type="submit" class="btn-search">Search</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Button trigger -->
          <div class="col-xl-6 d-flex justify-content-end align-items-center">
            <form id="blogDeleteMultipleForm" action="{{ route('blogs.destroyMultiple') }}" method="POST"
              style="display: none;">
              @csrf
              @method('DELETE')
              <input type="hidden" name="ids" id="delete_ids">
            </form>

            <button class="btn-delete me-4" id="deleteSelected">
              Delete <i class="ri-delete-bin-6-line"></i>
            </button>
            <a href="{{ route('blogs.create') }}" class="btn-add">Add New<i class="ri-add-circle-line"></i></a>
          </div>
        </div>
      </div>
      <div class="w-100">
        <div class="admin-table-wrap">
          <table>
            <thead>
              <tr>
                <th scope="col">
                  <input type="checkbox" class="form-check-input me-2" id="selectAll" /> Title
                </th>
                <th scope="col">Last Update Date</th>
                <th scope="col">Image</th>
              </tr>
            </thead>

            <tbody class="superadmin-icons">
              @forelse($blogs as $blog)
                <tr>
                  <td>
                    <input type="checkbox" class="form-check-input me-2 blog-checkbox" data-id="{{ $blog->id }}" />
                    <a href="{{ route('blogs.edit', $blog->id) }}">{{ $blog->title }}</a>
                  </td>
                  <!-- <td>{{ date('d-m-Y', strtotime($blog->updated_at)) }}</td> -->
                  <td>{{ \Carbon\Carbon::parse($blog->updated_at)->format('m/d/y') }}</td>
                  <td>
                    <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Image" height="100px" width="100px">
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3" class="text-center text-muted py-3">
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
  @push('script')
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const selectAll = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('.blog-checkbox');

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
        document.querySelectorAll('.blog-checkbox:checked').forEach(cb => {
          ids.push(cb.getAttribute('data-id'));
        });

        if (ids.length === 0) {
          alert('Please select at least one blog.');
          return;
        }

        if (confirm('Are you sure you want to delete selected tasks?')) {
          document.getElementById('delete_ids').value = ids.join(',');
          document.getElementById('blogDeleteMultipleForm').submit();
        }
      });
    </script>
  @endpush
@endsection