<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class clientsController extends Controller
{
    /**
     * Get all clients.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getClients()
    {
        $clients = clients::all();
        return $clients;
    }

    /**
     * Store a new client.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $clients = new clients();
        $clients->title = $request->title;
        $clients->url = $request->url;
        $clients->save();
        return redirect()->back()->with("success","Client saved successfully");
    }
}
