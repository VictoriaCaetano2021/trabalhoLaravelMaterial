<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('menuMaterial');
// });

Route::get('/', [MaterialController::class, 'index'])->name('home');//->middleware(['auth']);

Route::resource('material', MaterialController::class)->middleware(['auth']);

// Verb	URI	Action	Route Name
// GET	/material	index	material.index
// GET	/material/create	create	material.create
// POST	/material	store	material.store
// GET	/material/{material}	show	material.show
// GET	/material/{material}/edit	edit	material.edit
// PUT/PATCH	/material/{material}	update	material.update
// DELETE	/material/{material}	destroy	material.destroy


Auth::routes();


Route::get('/material/{material}/delete', [ MaterialController::class, 'delete'])->middleware(['auth']);
Route::post('/material/{material}/editar', [ MaterialController::class, 'editar'])->middleware(['auth']);
