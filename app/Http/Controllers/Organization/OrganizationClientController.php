<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationClientController extends Controller
{
    public function index(Organization $organization)
    {
        return view('control-panel.organizations.show.clients', [
            'organization' => $organization,
            'clients' => $organization->client
        ]);
    }
}
