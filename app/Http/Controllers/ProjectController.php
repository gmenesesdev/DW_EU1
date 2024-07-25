<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::getAll();
        return view('index', compact('projects'));
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return redirect('/projects');
    }

    public function show($id)
    {
        $project = Project::find($id);
        if ($project) {
            return view('show', compact('project'));
        }
        return redirect('/projects')->with('error', 'Project not found');
    }

    public function update(Request $request, $id)
    {
        $project = Project::updateByID($id, $request->all());
        if ($project) {
            return redirect('/projects');
        }
        return redirect('/projects')->with('error', 'Project not found');
    }

    public function destroy($id)
    {
        $success = Project::destroy($id);
        return redirect('/projects');
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        if ($project) {
            return view('edit', compact('project'));
        }
        return redirect('/projects')->with('error', 'Project not found');
    }
}
