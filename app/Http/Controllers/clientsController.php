<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class clientsController extends Controller
{
    public function getClients()
    {
        $clients = clients::all();
        return $clients;
    }

    public function store(Request $request)
    {
        $clients = new clients();
        $clients->title = $request->title;
        $clients->url = $request->url;
        $clients->save();
        return redirect()->back()->with("success","Client saved successfully");
    }
}
