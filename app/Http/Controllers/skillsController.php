<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class skillsController extends Controller
{
    public function getSkills()
    {
        $skills = skills::all();
        return $skills;
    }

    public function store(Request $request)
    {
        $skills = new skills();
        $skills->title = $request->title;
        $skills->url = $request->url;
        $skills->category = $request->category;
        $skills->save();
        return redirect()->back()->with("success","Skill saved successfully");
    }
}
