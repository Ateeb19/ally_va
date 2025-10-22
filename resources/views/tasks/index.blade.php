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
          <!-- Button trigger -->
          <div class="col-xl-6 d-flex justify-content-end align-items-center">
            <form id="taskDeleteMultipleForm" action="{{ route('admin.users.task.destroyMultiple') }}" method="POST"
              style="display: none;">
              @csrf
              @method('DELETE')
              <input type="hidden" name="ids" id="delete_ids">
            </form>

            <button class="btn-delete me-4" id="deleteSelected">
              Delete <i class="ri-delete-bin-6-line"></i>
            </button>
            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#taskCreateModal">
              Add New <i class="ri-add-circle-line"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="w-100">
        <div class="admin-table-wrap">
          <table>
            <thead>
              <tr>
                <th scope="col">
                  <input type="checkbox" class="form-check-input me-2" id="selectAll" />
                  Task Type
                </th>
                <th scope="col">Task Date</th>
                <th scope="col">Points Charged</th>
                <!-- <th scope="col" class="action-col">Action</th> -->
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
                    <td>
                      <input type="checkbox" class="form-check-input me-2 task-checkbox" data-id="{{ $task->id }}" />
                      <a href="javascript:void(0);" class="edit-task-link" data-bs-toggle="modal"
                        data-bs-target="#taskEditModal" data-id="{{ $task->id }}" data-user_id="{{ $userId }}"
                        data-type="{{ $task->task_type }}" data-date="{{ $task->date }}" data-point="{{ $task->point }}"
                        data-desc="{{ $task->description }}">
                        {{ $task->task_type }}
                      </a>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($task->date)->format('m/d/y') }}</td>
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

  <!-- Sign Up Modal -->
  <div class="modal fade" id="taskCreateModal" tabindex="-1" aria-labelledby="taskCreateModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-3 shadow">

        <!-- Header -->
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold" id="taskCreateModal">Create Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
          @endif
          <form method="POST" action="{{ route('users.tasks.store', $userId) }}" class="vstack gap-3" id="AddTaskForm">
            @csrf

            <!-- Task type -->
            <div class="input-group">
              <span class="input-group-text"><i class="ri-user-fill"></i></span>
              <input type="text" class="form-control" name="task_type" value="{{ old('task_type') }}" required
                placeholder="Task Type">
            </div>

            <!-- Task date -->
            <div class="input-group">
              <span class="input-group-text"><i class="ri-mail-fill"></i></span>
              <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required
                placeholder="Date">
            </div>

            <!-- Task Point -->
            <div class="input-group">
              <span class="input-group-text"><i class="ri-phone-fill"></i></span>
              <input type="number" class="form-control" placeholder="Task Point" name="task_point" required />
            </div>

            <!-- Task Description -->
            <div class="input-group">
              <span class="input-group-text"><i class="ri-phone-fill"></i></span>
              <textarea class="form-control" cols="55" rows="5" name="description" required></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary w-100 task-add-btn">
              Save
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Task Modal -->
  <div class="modal fade" id="taskEditModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <form method="POST" id="editTaskForm" class="vstack gap-3">
          @csrf
          @method('PUT')

          <div class="modal-header border-0">
            <h5 class="modal-title">Edit Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <input type="hidden" id="task_id" name="task_id">
            <input type="hidden" id="user_id" name="user_id">

            <div class="input-group mb-3">
              <!-- <label class="form-label">Task Type</label> -->
              <span class="input-group-text"><i class="ri-user-fill"></i></span>
              <input type="text" id="task_type" class="form-control" name="task_type">
            </div>

            <div class="input-group mb-3">
              <!-- <label class="form-label">Task Date</label> -->
              <span class="input-group-text"><i class="ri-mail-fill"></i></span>
              <input type="date" id="task_date" name="date" class="form-control">
            </div>

            <div class="input-group mb-3">
              <!-- <label class="form-label">Task Point</label> -->
              <span class="input-group-text"><i class="ri-phone-fill"></i></span>
              <input type="number" id="task_point" name="task_point" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ri-phone-fill"></i></span>
              <textarea class="form-control" cols="55" rows="5" name="description" required id="description"></textarea>
            </div>

            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <button type="submit" class="btn btn-primary w-100 btn-task-update">Update Changes</button>
          </div>




        </form>

      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const editLinks = document.querySelectorAll(".edit-task-link");
      const taskForm = document.getElementById("editTaskForm");

      editLinks.forEach(link => {
        link.addEventListener("click", function () {
          const id = this.getAttribute("data-id");
          const user_id = this.getAttribute("data-user_id");
          const type = this.getAttribute("data-type");
          const date = this.getAttribute("data-date");
          const point = this.getAttribute("data-point");
          const desc = this.getAttribute("data-desc");

          // Fill modal inputs
          document.getElementById("task_id").value = id;
          document.getElementById("user_id").value = user_id;
          document.getElementById("task_type").value = type;
          document.getElementById("task_date").value = date;
          document.getElementById("task_point").value = point;
          document.getElementById("description").value = desc;

          // Update form action dynamically
          taskForm.action = `/admin/users/${user_id}/tasks/${id}`;
        });
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const selectAll = document.getElementById('selectAll');
      const checkboxes = document.querySelectorAll('.task-checkbox');

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
      document.querySelectorAll('.task-checkbox:checked').forEach(cb => {
        ids.push(cb.getAttribute('data-id'));
      });

      if (ids.length === 0) {
        alert('Please select at least one task.');
        return;
      }

      if (confirm('Are you sure you want to delete selected tasks?')) {
        document.getElementById('delete_ids').value = ids.join(',');
        document.getElementById('taskDeleteMultipleForm').submit();
      }
    });
  </script>
@endsection