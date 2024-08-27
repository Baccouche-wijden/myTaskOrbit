<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    // Display a listing of the projects
    public function index()
    {
        // Eager load the user with each task
        $projects = Project::with('user')->get();
        return view('projects.project', compact('projects'));
    }



            public function add(ProjectRequest $request)
            {

                Project::create([
                    'name' => $request->projectsname, // Use the correct field name
                    'description' => $request->description,
                    'user_id' => auth()->id(),
                ]);

                return redirect()->route('project');
            }


            public function show()
            {
                $projects = Project::all();
                return view('projects.showProject', compact('projects'));
            }

            public function assignForm()
            {
                $this->authorize('assign', Project::class);
                $users = User::all();
                $projects = Project::all();
                return view('projects.assign', compact('users', 'projects'));
            }

            public function assign(Request $request)
            {
                $this->authorize('assign', Project::class);

                $user = User::findOrFail($request->user_id);
                $project = Project::findOrFail($request->project_id);

                $user->projects()->attach($project->id);

                return redirect()->route('projects.assign.form')->with('success', 'Project assigned to user successfully.');
            }


        public function edit(Project $project)
        {
            return view('projects.edit', compact('project'));
        }

        public function update(Request $request, Project $project)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $project->update($request->only('name', 'description'));

            return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
        }

        public function destroy(Project $project)
        {
            $project->delete();

            return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
        }

        public function formTasks()
        {
                $projects = Project::all();
                return view('tasks.task', compact('projects'));
            }
}
