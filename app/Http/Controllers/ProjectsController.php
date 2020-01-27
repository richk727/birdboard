<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->accessibleProjects();

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

    /**
     * Persist a new project.
     * 
     * @returns mixed 
     */
    public function store()
    {
        $attributes = $this->validateRequest();

        $project = auth()->user()->projects()->create($attributes);
        
        if(request()->has('tasks')) {
            $project->addTasks(request('tasks'));
            // foreach(request('tasks') as $task) {
            //     $project->addTask($task['body']);
            // }
        }

        if(request()->wantsJson()) {
            return ['message' =>$project->path()];
        }

        return redirect($project->path());
    }

    public function edit(Project $project) 
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the porject
     * 
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Project $project)
    {        
        $this->authorize('update', $project);
        
        $attributes = $this->validateRequest();

        $project->update($attributes);

        return redirect($project->path());
    }

    /**
     * Delete a project
     */

    public function destroy(Project $project)
    {
        $this->authorize('manage', $project);

        $project->delete();
        
        return redirect('/projects');
    }

    /**
     * Validate the request attributes
     * 
     * @return array
     */
    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required|max:150',
            'notes' => 'nullable'
        ]);
    }
}
