<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [FrontendController::class, 'index'])
->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mantap', function () {
    return view('contacts.create');
});

// Index
Route::get('/contacts', [ContactController::class, 'index'])
->name('contacts.index');

// Read / Show
Route::get('/contacts/{id}', [ContactController::class, 'show'])
->name('contacts.show');

// Create
Route::get('/contact/create', [ContactController::class, 'create'])
->name('contacts.create');

Route::post('/contacts/store', [ContactController::class, 'store'])
->name('contacts.store');

// Update
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])
->name('contacts.edit');

Route::post('/contacts/update', [ContactController::class, 'update'])
->name('contacts.update');

// Delete
Route::get('/contacts/{id}/delete', [ContactController::class, 'delete'])
->name('contacts.delete');