<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');


    }

    public function show()
    {

    }

    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect('/projects');


    }

    public function edit($id)
    {

        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
}
