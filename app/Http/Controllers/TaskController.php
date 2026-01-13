<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{

    public $priorities = [
        [
            'name' => 'Low',
            'value' => 'low'
        ],
        [
            'name' => 'Medium',
            'value' => 'medium'
        ],
        [
            'name' => 'High',
            'value' => 'high'
        ],
        [
            'name' => 'Urgent',
            'value' => 'urgent'
        ],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $userId = Auth::user()->id;
        
        $tasks = Task::with('user')
            ->where('user_id', $userId)
            ->latest()
            ->paginate(5);

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('tasks.create', ['priorities' => $this->priorities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
            'due_date' => ['required', 'date']
        ]);

        Task::create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'description' => request('description'),
            'status' => 'todo',
            'priority' => request('priority'),
            'due_date' => request('due_date')
        ]);

        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        Gate::authorize('edit-task', $task);

        return view('tasks.edit', [
            'task' => $task,
            'priorities' => $this->priorities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'due_date' => ['required', 'date']
        ]);

        $task->update([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'priority' => request('priority'),
            'due_date' => request('due_date')
        ]);

        return redirect('/tasks/' . $task->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
