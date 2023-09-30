<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Organization\StoreOrganizationRequest;
use App\Http\Requests\Organization\UpdateOrganizationRequest;
use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('control-panel.organizations.index', ['organizations' => Organization::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('control-panel.organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {

        $organization = Organization::create($request->validated());

        return to_route('organizations.show' , $organization);
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return to_route('organizations.clients.index', $organization);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Organization $organization): View
    {
        return view('control-panel.organizations.edit', [
            'organization' => $organization,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $organization->update($request->validated());
        return to_route('organizations.show', $organization);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return to_route('organizations.index');
    }
}
