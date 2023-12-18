<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// routes/web.php

use App\Http\Controllers\NoteController;

// Route to display all notes
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

// Route to display a single note
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

// Route to show the form for creating a new note
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

// Route to store a newly created note in the database
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

// Route to show the form for editing a note
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');

// Route to update the specified note in the database
Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');

// Route to remove the specified note from the database
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');


require __DIR__.'/auth.php';
