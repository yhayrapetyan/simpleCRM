<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Http\Requests\Organization\UpdateOrganizationRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Client::class);
        return view('control-panel.clients.index', ['clients' => Client::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Client::class);
        return view('control-panel.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $this->authorize('create', Client::class);
        $client = Client::create($request->validated());

        return to_route('clients.show', $client);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $this->authorize('view', Client::class);

        return to_route('clients.projects.index', $client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $this->authorize('update', Client::class);

        return view('control-panel.clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $this->authorize('update', Client::class);

        $client->update($request->validated());
        return to_route('clients.show', $client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $this->authorize('delete', Client::class);

        $client->delete();
        return to_route('clients.index');
    }
}
