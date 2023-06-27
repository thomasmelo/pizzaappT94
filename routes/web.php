<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CargoController,
    ClienteController,
    EnderecoController,
    PedidoController,
    ProdutoController,
    ProdutoTamanhoController,
    ProfileController,
};


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * ------------------------------
 * | Cargos
 * ------------------------------
 */
Route::prefix('cargos')
    ->controller(CargoController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('cargo.index');
        Route::get('/novo', 'create')
            ->name('cargo.create');
        Route::get('/{id}', 'show')
            ->name('cargo.show');
        Route::get('/editar/{id}', 'edit')
            ->name('cargo.edit');
        Route::post('/store', 'store')
            ->name('cargo.store');
        Route::post('/update', 'update')
            ->name('cargo.update');
        Route::post('/destroy', 'destroy')
            ->name('cargo.destroy');
    });





require __DIR__ . '/auth.php';
