<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\skillsController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\AuthController;

Route::get('/api/skills', [skillsController::class, 'getSkills']);
Route::get('/api/clients', [clientsController::class,'getClients']);
Route::get('/api/projects', [projectsController::class, 'getProjects']);
Route::post('/api/contacts', [contactsController::class, 'store']);
Route::get('/api/contacts', [contactsController::class, 'getAllMessages'])->name('contacts');
Route::post('/api/clients', [clientsController::class,'store'])->name('add-client');
Route::post('api/skills', [skillsController::class, 'store'])->name('add-skill');
Route::post('/api/projects', [projectsController::class, 'addproject'])->name('add-project');
Route::get('/dashboard', [AuthController::class,'index']);
Route::post('/dashboard', [AuthController::class,'login'])->name('login');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function() {
    return view('Admin.admin');
});
Route::get('/portfolio', function() {
    return view('portfolio');
});
