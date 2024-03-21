<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show(Project $project)
    {
        return view('guest.projects.show', compact('project'));
    }
}
