<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function index()
    {
        $messages = new contactsController();
        $messages = $messages->getAllMessages();
        return view('Admin.dashboard', ['messages' => $messages]);
    }
}
