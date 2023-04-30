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

// 1
Route::get('/', function () {
    return view('welcome');
});

// Route::get('foo', function () {
//     return ('Hello World!');
// });

// Route::redirect('/', 'foo');

// Route::view('/welcome', 'welcome')


// 2
// Route::get('user/{id}', function ($id) {
//     return 'User ' . $id;
// });

// Route::get('user/{name?}', function ($name = null) {
//     return 'User ' . $name;
// });

// Route::get('user/{name?}', function ($name = 'Bayu') {
//     return 'User ' . $name;
// });

// Route::get('user/{id}', function ($id) {
//     return 'User ' . $id;
// })->where('id', '[0-9]+');

// Route::get('user/{name}', function ($name) {
//     return 'Name : ' . $name;
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     return 'UserId : ' . $id . '<br>' . 'UserName : ' . $name;
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// Route::get('user/{id}/profile', function ($id) {
//     return 'User ' . $id;
// })->name('profile');

// $url = route('profile', ['id' => 2]);



// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return $postId . '<br>' . $commentId;
// });