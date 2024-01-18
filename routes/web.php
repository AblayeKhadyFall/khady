<?php

use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\FournisseursController;
//use App\Models\Produits;
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

Route::get('accueil', function () {
    return view('produits.accueil');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function(){
        Route::resource('produits', ProduitsController::class)->names('produits');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::resource('clients', ClientsController::class)->names('clients');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('fournisseurs',FournisseursController::class)->names('fournisseurs');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('commandes',CommandesController::class)->names('commandes');

});

require __DIR__.'/auth.php';
