<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getProjects()
    {
        $projects = projects::all();
        return $projects;
    }

    public function addproject(Request $request)
    {
        $project = new projects();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->image = $request->image;
        $project->githubLink = $request->githubLink;
        $project->save();
        return redirect()->back()->with('success', 'Project added successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projects $projects)
    {
        //
    }
}
