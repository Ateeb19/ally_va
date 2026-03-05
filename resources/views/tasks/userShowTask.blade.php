@extends('layouts.app')
@section('title', 'Ally VA')

@section('content')
  <!-- Add Task Listing Table -->
  <section class="admin-table-wrapper my-4">
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
                <th scope="col">Point Charge</th>
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
                    <!-- <td>{{ $task->task_type }}</td> -->
                    <td> <a href="javascript:void(0);" class="view-task-link" data-bs-toggle="modal"
                        data-bs-target="#taskViewModal" data-id="{{ $task->id }}" data-type="{{ $task->task_type }}"
                        data-date="{{ $task->date }}" data-point="{{ $task->point }}" data-desc="{{ $task->description }}">
                        {{ $task->task_type }}
                      </a> </td>
                    <td>{{ date('m-d-Y', strtotime(datetime: $task->date)) }}</td>
                    <td>{{ $task->point }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>

          <div class="d-flex flex-wrap justify-content-between align-items-center mt-4 pagination-wrap">
            {{ $tasks->links('vendor.pagination.bootstrap-5') }}
          </div>
        </div>
      </div>

      <!-- View Task Modal -->
      <div class="modal fade" id="taskViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-header border-0">
              <h5 class="modal-title">Task Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Task Type</label>
                <div class="input-group ">
                  <span class="input-group-text"><i class="ri-suitcase-fill"></i></span>
                  <input type="text" id="view_task_type" class="form-control" readonly>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Task Date</label>
                <div class="input-group ">
                  <span class="input-group-text"><i class="ri-calendar-fill"></i></span>
                  <input type="date" id="view_task_date" class="form-control" readonly>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Task Points</label>
                <div class="input-group ">
                  <span class="input-group-text"><i class="ri-draft-fill"></i></span>
                  <input type="text" id="view_task_point" class="form-control" readonly>
                </div>
              </div>

              <label class="form-label">Task Description</label>
              <div class="d-flex align-items-stretch border rounded bg-white">
                <span
                  class="input-group-text border-0 border-end rounded-0 d-flex align-items-center justify-content-center">
                  <i class="ri-file-list-fill"></i>
                </span>
                <textarea id="view_task_desc" class="form-control border-0 shadow-none" rows="4" readonly></textarea>
              </div>

              <!-- <div class="mb-3">
                    <label class="form-label">Task Description</label>
                    <div class="d-flex align-items-start border rounded bg-white">
                      <span class="input-group-text " style="height: 100%;"><i class="ri-phone-fill"></i></span>
                      <textarea id="view_task_desc" class="form-control border-0 shadow-none" rows="4" readonly></textarea>
                    </div>
                  </div> -->
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const viewLinks = document.querySelectorAll(".view-task-link");

      viewLinks.forEach(link => {
        link.addEventListener("click", function () {
          const type = this.getAttribute("data-type");
          const date = this.getAttribute("data-date");
          const point = this.getAttribute("data-point");
          const desc = this.getAttribute("data-desc");

          document.getElementById("view_task_type").value = type;
          document.getElementById("view_task_date").value = date;
          document.getElementById("view_task_point").value = point;
          document.getElementById("view_task_desc").value = desc;
        });
      });
    });
  </script>

@endsection