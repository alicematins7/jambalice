<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
Auth::routes();
Route::get('/', [App\Http\Controllers\homeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\homeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('site.logout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/favoritos', function () {
    return view('sistema.favoritos');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/registrado/lista', [App\Http\Controllers\registrarController::class, 'index'])->name('listaRegistrado');
Route::get('/registrado/editar/{id}', [App\Http\Controllers\registrarController::class, 'edit'])->name('editaRegistrado');
Route::post('/registrado/{id}', [App\Http\Controllers\registrarController::class, 'update'])->name('gravaEditaRegistrado');
Route::get('/registrado/cadastrar', [App\Http\Controllers\registrarController::class, 'create'])->name('novoRegistrado');
Route::post('/registrado', [App\Http\Controllers\registrarController::class, 'store'])->name('gravaNovoRegistrado');
Route::get('/registrar', [App\Http\Controllers\registrarController::class, 'form'])->name('registrarRegistrado');
Route::post('/registrar/salvar', [App\Http\Controllers\registrarController::class, 'registrarParticipar'])->name('registraNovoRegistrado');

Route::get('/cadastros/lista', [App\Http\Controllers\ControladorAnimal::class, 'index'])->name('listaCadastro');
Route::get('/cadastros/editar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'edit'])->name('editaCadastro');
Route::get('/cadastros/deletar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'destroy'])->name('deletaCadastro');
Route::post('/cadastros/{id}', [App\Http\Controllers\ControladorAnimal::class, 'update'])->name('gravaEditaCadastro');
Route::get('/cadastros/cadastrar', [App\Http\Controllers\ControladorAnimal::class, 'create'])->name('novoCadastro');
Route::post('/cadastros', [App\Http\Controllers\ControladorAnimal::class, 'store'])->name('gravaNovoCadastro');

require __DIR__.'/auth.php';