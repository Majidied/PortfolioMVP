<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function index()
    {
        $messages = new contactsController();
        $messages = $messages->getAllMessages();
        return view('Admin.dashboard', ['messages' => $messages]);
    }
}
