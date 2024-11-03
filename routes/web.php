<?php

use App\Http\Controllers\EnchanterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubclassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// This is made for a lesson, can be deleted later
Route::get('/contact', function() {
    $personalEMail = 'JTS-Games@email.com';
    return view('contact', [
        'personalEMail' => $personalEMail
    ]);
})->name('contact');

Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/nicetry', function() {
    return view('nicetry');
})->name('nicetry');

// This is made for a lesson, can be deleted later
/*
Route::get('products/{productID}', function(string $productID) {
    $productID = 'macbook';
    return view('products', [
        'productID' => $productID
    ]);
});
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::patch('/enchanters/{enchanter}/toggle', [EnchanterController::class, 'toggleStatus'])->name('enchanters.toggleStatus');

Route::resource('/enchanters', EnchanterController::class);
Route::resource('/subclasses', SubclassController::class);
Route::resource('/new-dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('/admin', \App\Http\Controllers\AdminController::class);
require __DIR__.'/auth.php';
