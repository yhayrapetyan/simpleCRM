<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectTaskController extends Controller
{
    public function index(Project $project)
    {
        return view('control-panel.projects.show.tasks', [
            'project' => $project,
            'tasks' => $project->task,
        ]);
    }

}
