<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
{
    $userId = $id;

    // Order tasks by newest first (descending)
    $query = Task::where('user_id', $id)
                 ->orderBy('id', 'desc'); // Or ->orderBy('created_at', 'desc');

    // Optional filter by task type
    if ($request->filled('task_type')) {
        $searchTerm = $request->input('task_type');
        $query->where('task_type', 'LIKE', '%' . $searchTerm . '%');
    }

    // Paginate results
    $tasks = $query->paginate(10)->appends($request->query());

    return view('tasks.index', compact('tasks', 'userId'))->with('adminView', true);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'task_type'   => 'required',
            'date'        => 'required',
            'task_point'  => 'required',
            'description' => 'required',
        ]);

        $task              = new Task();
        $task->user_id     = $id;
        $task->task_type   = $request->task_type;
        $task->date        = date('Y-m-d', strtotime($request->date));
        $task->point       = $request->task_point;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('users.tasks.index', $id)->with('message', 'Task Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, string $task)
    {
        $this->validate($request, [
            'task_type'   => 'required',
            'date'        => 'required',
            'task_point'  => 'required',
            'description' => 'required',
        ]);

        $task              = Task::find($task);
        $task->user_id     = $request->user_id;
        $task->task_type   = $request->task_type;
        $task->date        = date('Y-m-d', strtotime($request->date));
        $task->point       = $request->task_point;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('users.tasks.index', $id)->with('message', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id, string $task)
    {
        $task = Task::find($task);
        $task->delete();

        return redirect()->route('users.tasks.index', $id)->with('message', 'Task Deleted Successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = explode(',', $request->ids);

        if (count($ids) > 0) {
            Task::whereIn('id', $ids)->delete();
        }

        return redirect()->back()->with('success', 'Selected task deleted successfully.');
    }
}
