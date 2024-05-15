<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        // Valider les données du formulaire
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Créer un nouveau contact avec les données validées
        $contact = new contacts();
        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;

        // Sauvegarder le contact dans la base de données
        $contact->save();

        // Retourner une réponse JSON
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display a listing of the resource.
     */
    public function getAllMessages()
    {
        $messages = contacts::all();
        return $messages;
    }



    /**
     * Display the specified resource.
     */
    public function show(contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacts $contacts)
    {
        //
    }
}
