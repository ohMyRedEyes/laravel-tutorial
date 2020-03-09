<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));

        // the previous line is the same as
        /*
        return view('projects.index', [
            'projects' => $projects,
        ]);
        */
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        /*$project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();*/

        // lines above can be rewritten as follows:
        /*Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);*/
        // but to do like this we have to add title and description as fillable properties in App\Project
        // to prevent other parameters to be passed, i.e. an id of a project (if someone modifies a form in a browser)
        
        // also given the fact below
        /*
            [
                'title' => request('title'),
                'description' => request('description')
            ]
            is the same as 
            request(['title', 'description'])
        */
        // we can do like this:
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }

    public function edit(Project $project) // example.com/projects/1/edit
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        /*$project->title = request('title');
        $project->description = request('description');

        $project->save();*/

        // given the info in the store() method we can write the lines above like
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
