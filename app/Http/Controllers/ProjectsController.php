<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        //$projects = \App\Project::all(); //full path
        $projects = Project::all(); // é possível porque eu adicionei use App\Project; no topo 


        return view('projects.index',['projeto'=>$projects]);
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

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        //dd(request()->all());
        $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }
}
