<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;

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

// function getContacts() {
//     return [
//         1 => ['name' => 'Name 1', 'phone' => '085123456789'],
//         2 => ['name' => 'Name 2', 'phone' => '085987654321'],
//         3 => ['name' => 'Name 3', 'phone' => '081567891234'],
//     ];
// }

Route::get('/contacts', [ContactController::class, 'index'])
->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])
->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])
->name('contacts.show');

Route::resource('/companies', CompanyController::class);

Route::resource('/tags', TagController::class)
->only(
    'index', 'show' 
);

Route::resource('/tasks', TaskController::class)
->except(
    'store'
);