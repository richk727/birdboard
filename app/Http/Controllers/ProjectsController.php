<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        //$projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);
        
        return view('projects.show', compact('project'));
    }

    public function create(Project $project)
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required|max:150',
            'notes' => 'min:3'
        ]);

        $project = auth()->user()->projects()->create($attributes);
        
        return redirect($project->path());
    }

    public function update(Project $project)
    {

        $this->authorize('update', $project);
        
        $attributes = request()->validate([
            'notes' => 'min:3'
        ]);

        $project->update($attributes);

        return redirect($project->path());
    }
}
