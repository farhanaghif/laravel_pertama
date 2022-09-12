<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Project List',
            'subtitle' => 'Ini adalah tampilan data project',
            'isiAsset' => asset('nice')
        ];

        $projects = Project::with('leader')->withCount('tasks')->get();
        // return response()->json($projects);
        return view('project.index', $data, compact('projects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'leader_id' => 'required|integer',
            'owner' => 'required|string',
            'deadline' => 'required|date',
            'progress' => 'required|integer',
            'description' => 'nullable',
        ]);
        Project::create($data);
        return redirect()->route('project.index');
    }

    public function show($id)
    {
        // $project = Project::findOrFail($id);
        // $tasks = $project->tasks;

        // relation with
        $project = Project::with('tasks')->findOrFail($id);
        // return response()->json($project);
        // pakai query
        $tasks = Task::where('project_id', $project->id)->get();

        $data = [
            'status' => 'Dashboard',
            'isiAsset' => asset('nice')
        ];
        return view('project.show', compact('project', 'tasks'), $data);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project')) ;
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'leader_id' => 'required|integer',
            'owner' => 'required|string',
            'deadline' => 'required|date',
            'progress' => 'required|integer',
            'description' => 'nullable'
        ]);
        $project->update($data);
        return redirect()->route('project.index');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index');
    }
}
