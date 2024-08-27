<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Meet;
use App\Models\Project;

use function PHPSTORM_META\map;

class TaskController extends Controller
{
    public function index()
    {
        // Eager load the user with each task
        $tasks = Task::with('user')->get();
        return view('tasks.task', compact('tasks'));
    }

        public function add(TaskRequest $request)
        {
            dd($request->all()); // Add this line for debugging
            $request->validate([
                'tasksname' => 'required|string|max:255',
                'description' => 'required|string',
                'project_id' => 'required|exists:projects,id',
            ]);

            // Create a new task with the authenticated user's ID
            Task::create([
                'tasksname' => $request->tasksname,
                'description' => $request->description,
                'user_id' => auth()->id(),
                'project_id' => $request->project_id, // Assuming 'project_id' is the correct column name in the tasks table
            ]);

            return redirect()->route('task');
        }





    public function showTask()
    {
        // Retrieve all tasks with their associated users
        $tasks = Task::with('user')->get();
        $tasks = Task::with('user.projects')->get();
        return view('tasks.showTask', compact('tasks'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to edit the task
        if (Auth::user()->cannot('update', $task)) {
            abort(403, 'Unauthorized action.');
        }

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to update the task
        if (Auth::user()->cannot('update', $task)) {
            abort(403, 'Unauthorized action.');
        }

        $task->update($request->all());

        return redirect()->route('tasks.showTask')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        // Check if the user is authorized to delete the task
        if (Auth::user()->cannot('delete', $task)) {
            abort(403, 'Unauthorized action.');
        }

        $task->delete();

        return redirect()->route('tasks.showTask')->with('success', 'Task deleted successfully.');
    }

    // TaskController.php

    public function rateTask(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $this->authorize('update', $task);

        $task->rating = $request->input('rating');
        $task->save();

        return response()->json(['success' => true]);
    }
    public function updateRating(Request $request, $id)
    {
        $task = Task::find($id);

        if (auth()->user()->id === $task->user_id || auth()->user()->role === 'admin') {
            $task->rating = $request->rating;
            $task->save();

            return response()->json(['success' => true, 'message' => 'Rating updated successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Unauthorized.'], 403);
    }


    public function kanban()
    {
        $tasks = Task::all();

        $toDo = $tasks->where('rating', [0],1);
        $doing = $tasks->whereBetween('rating', [2, 99]);
        $done = $tasks->where('rating', 100);

        return view('tasks.kanban', compact('toDo', 'doing', 'done'));
    }
    //meets
    public function adminSpace()
    {
        $meets = Meet::all();
        return view('tasks.adminSpace', compact('meets')); // Make sure this view name is correct
    }

    public function addMeet(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Meet::create($validatedData);
        return redirect()->route('tasks.adminSpace');
    }
    public function dashboard()
{
        $meets = Meet::all();
        return view('myDashboard', compact('meets'));
    }

}

