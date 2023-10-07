<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleAbilityController extends Controller
{
    public function index(Role $role)
    {
        return view('control-panel.roles.show.abilities', [
            'role' => $role,
            'abilities' => $role->ability
        ]);
    }
}
