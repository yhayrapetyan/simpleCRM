<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserTaskController extends Controller
{
    public function index(User $user)
    {
        return view('control-panel.users.show.tasks', [
            'user' => $user,
            'tasks' => $user->task,
        ]);
    }
}
