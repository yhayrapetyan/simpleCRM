<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserProjectController extends Controller
{
    public function index(User $user)
    {
        return view('control-panel.users.show.projects', [
            'user' => $user,
            'projects' => $user->project,
        ]);
    }

}
