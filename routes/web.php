<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// READ
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// CREATE
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// UPDATE
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

// DELETE
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');