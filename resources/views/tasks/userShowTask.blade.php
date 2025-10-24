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

      @if(isset($adminView) && auth()->user()->hasRole('super_admin'))
        <div class="table-info-wrap">
          <div class="row">
            <div class="col-xl-6">
              <form action="{{ url()->current() }}" method="GET">
                <div class="form-group">
                  <!-- <label class="form-label">Search Email</label> -->
                  <div class="d-flex gap-3">
                    <div class="input-group">
                      <input type="search" class="email_search" name="task_type" value="{{ request('task_type') }}"
                        placeholder="Search by Task Type" />
                    </div>
                    <button type="submit" class="btn-search">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endif

      <div class="w-100">
        <div class="admin-table-wrap">
          <table>
            <thead>
              <tr>
                <th scope="col">Task Type</th>
                <th scope="col">Task Date</th>
                <th scope="col">Points Charged</th>
              </tr>
            </thead>
            <tbody class="superadmin-icons">
              @if($tasks->isEmpty())
                <tr>
                  <td colspan="3" class="text-center text-muted py-4">No data found</td>
                </tr>
              @else
                @foreach($tasks as $task)
                  <tr>
                    <td>{{ $task->task_type }}</td>
                    <td>{{ $task->date }}</td>
                    <td>{{ $task->point }}</td>
                  </tr>
                @endforeach
              @endif
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
@endsection