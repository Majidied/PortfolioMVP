<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class adminController extends Controller
{
    public function verifyAdmin(Request $request)
    {
        if ($request->code == 'iBOY') {
            $messages = contacts::latest()->get();
            return view('Admin.dashboard', compact('messages'));
        } else {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }
    }
}
