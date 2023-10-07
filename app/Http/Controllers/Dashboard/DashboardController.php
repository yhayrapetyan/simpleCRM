<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        return view('control-panel.dashboard.index', [
            'statistics' => [
                'users' => User::count(),
                'clients' => Client::count(),
                'projects' => Project::count(),
                'Tasks' => Task::count(),
                'Organizations' => Organization::count()
            ]
        ]);
    }
}
