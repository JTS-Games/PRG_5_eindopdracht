<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// This is made for a lesson, can be deleted later
Route::get('/contact', function() {
    $personalEMail = 'JTS-Games@email.com';
    return view('contact', [
        'personalEMail' => $personalEMail
    ]);
})->name('contact');

// This is made for a lesson, can be deleted later
Route::get('products/{productID}', function(string $productID) {
    $productID = 'macbook';
    return view('products', [
        'productID' => $productID
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
