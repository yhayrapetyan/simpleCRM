<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Ability;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('control-panel.roles.index', ['roles' => Role::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('control-panel.roles.create', ['abilities' => Ability::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());
        $role->ability()->attach($request->validated('abilities'));

        return to_route('roles.show', $role);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return to_route('roles.abilities.index',$role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {

        return view('control-panel.roles.edit', [
            'role' => $role,
            'abilities' => Ability::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {

        $role->update($request->validated());
        Db::table('role_abilities')->where('role_id', $role->id)->delete();
        $role->ability()->attach($request->validated('abilities'));


        return to_route('roles.show', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return to_route('roles.index');
    }
}
