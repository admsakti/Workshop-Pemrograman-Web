<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts', function() {
    $contacts = [
        1 => ['name' => 'Name 1', 'phone' => '085123456789'],
        2 => ['name' => 'Name 2', 'phone' => '085987654321'],
        3 => ['name' => 'Name 3', 'phone' => '081567891234'],
    ];
    // return view('contacts.index');
    return view('contacts.index', ['contacts'=>$contacts]);
})->name('contacts.index');

Route::get('/contacts/create', function() {
    return "<h1>Add New Contact</h1>";
})->name('contacts.create');

Route::get('/contacts/{id}', function($id) {
    return "Contact: " . $id;
})->name('contacts.show');