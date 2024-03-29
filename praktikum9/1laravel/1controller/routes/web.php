<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

function getContacts() {
    return [
        1 => ['name' => 'Name 1', 'phone' => '085123456789'],
        2 => ['name' => 'Name 2', 'phone' => '085987654321'],
        3 => ['name' => 'Name 3', 'phone' => '081567891234'],
    ];
}

Route::get('/contacts', [ContactController::class, 'index'])
->name('contacts.index');

Route::get('/contacts/create', function() {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function($id) {
    $contacts = getContacts();
    abort_unless(isset($contacts[$id]), 404);
    $contact = $contacts[$id];
    return view('contacts.show')->with('contact', $contact);
})->name('contacts.show');