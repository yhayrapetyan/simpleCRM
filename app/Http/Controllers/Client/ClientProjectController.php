<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientProjectController extends Controller
{
    public function index(Client $client)
    {
        return view('control-panel.clients.show.projects', [
            'client' => $client,
            'projects' => $client->project,
        ]);
    }
}
