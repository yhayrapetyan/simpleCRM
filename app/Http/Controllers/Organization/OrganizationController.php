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
        $this->authorize('viewAny', Organization::class);
        return view('control-panel.organizations.index', ['organizations' => Organization::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create', Organization::class);
        return view('control-panel.organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request)
    {

        $this->authorize('create', Organization::class);
        $organization = Organization::create($request->validated());

        return to_route('organizations.show' , $organization);
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        $this->authorize('view', Organization::class);
        return to_route('organizations.clients.index', $organization);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Organization $organization): View
    {
        $this->authorize('update', Organization::class);

        return view('control-panel.organizations.edit', [
            'organization' => $organization,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        $this->authorize('update', Organization::class);

        $organization->update($request->validated());
        return to_route('organizations.show', $organization);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $this->authorize('delete', Organization::class);

        $organization->delete();
        return to_route('organizations.index');
    }
}
