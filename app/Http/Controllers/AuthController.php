<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'majidi' && $request->password === 'Majidi2003@') {
            // If the credentials match, redirect to the dashboard
            return DashboardController::index();
        } else {
            // If the credentials don't match, redirect back to the login page with an error message
            return redirect()->back()->withInput()->withErrors(['Invalid credentials.']);
        }
    }
}
