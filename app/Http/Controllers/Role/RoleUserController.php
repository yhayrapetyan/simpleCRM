<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function index(Role $role)
    {
        return view('control-panel.roles.show.users', [
            'role' => $role,
            'users' => $role->user,
        ]);
    }
}
