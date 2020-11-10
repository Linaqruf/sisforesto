<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
	
Auth::routes();
Route::get('/signup', [App\Http\Controllers\PenggunaController::class, 'signup'])->name('signup');
Route::post('/postregister', [App\Http\Controllers\PenggunaController::class, 'postregister']);

// Route::group(['middleware' => ['auth','checkrole:admin']], function(){
Route::middleware(['auth', 'checkrole:admin'])->group(function () {

	// data restoran
	Route::get('/restoran', [App\Http\Controllers\RestoranController::class, 'index'])->name('restoran');
	Route::post('/restoran/create', [App\Http\Controllers\RestoranController::class, 'create']);
	Route::get('/restoran/{id}/edit', [App\Http\Controllers\RestoranController::class, 'edit']);
	Route::post('/restoran/{id}/update', [App\Http\Controllers\RestoranController::class, 'update']);
	Route::get('/restoran/{id}/delete', [App\Http\Controllers\RestoranController::class, 'delete']);


	//data kafe
	Route::get('/cafe', [App\Http\Controllers\CafeController::class, 'index'])->name('cafe');
	Route::post('/cafe/create', [App\Http\Controllers\CafeController::class, 'create']);
	Route::get('/cafe/{id}/edit', [App\Http\Controllers\CafeController::class, 'edit']);
	Route::post('/cafe/{id}/update', [App\Http\Controllers\CafeController::class, 'update']);
	Route::get('/cafe/{id}/delete', [App\Http\Controllers\CafeController::class, 'delete']);

	//data pengguna
	Route::get('/pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna');
	Route::post('/pengguna/create', [App\Http\Controllers\PenggunaController::class, 'create']);
	Route::get('/pengguna/{id}/edit', [App\Http\Controllers\PenggunaController::class, 'edit']);
	Route::post('/pengguna/{id}/update', [App\Http\Controllers\PenggunaController::class, 'update']);
	Route::get('/pengguna/{id}/delete', [App\Http\Controllers\PenggunaController::class, 'delete']);
});

Route::middleware(['auth', 'checkrole:admin,user'])->group(function () {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::get('/listrestoran', [App\Http\Controllers\RestoranController::class, 'listrestoran'])->name('listrestoran');
	Route::get('/listcafe', [App\Http\Controllers\CafeController::class, 'listcafe'])->name('listcafe');

	// RESTORAN
	Route::get('/restoran/{id}/profil', [App\Http\Controllers\RestoranController::class, 'profil']);
	Route::post('/restoran/{id}/profil/fasilitas', [App\Http\Controllers\RestoranController::class, 'fasilitas']);
	Route::post('/restoran/{id}/profil/menu', [App\Http\Controllers\RestoranController::class, 'menu']);
	Route::post('/restoran/{id}/profil/postreview', [App\Http\Controllers\RestoranController::class, 'postreview']);
	// Route::get('/restoran/{id}/profil/fasilitas/{fid}', [App\Http\Controllers\RestoranController::class, 'deletefasilitas']);

	// CAFE
	Route::get('/cafe/{id}/profil', [App\Http\Controllers\CafeController::class, 'profil']);
	Route::post('/cafe/{id}/profil/fasilitas', [App\Http\Controllers\CafeController::class, 'fasilitasCafe']);
	Route::post('/cafe/{id}/profil/menu', [App\Http\Controllers\CafeController::class, 'menuCafe']);
	Route::post('/cafe/{id}/profil/postreview', [App\Http\Controllers\CafeController::class, 'postreview']);
	// Route::get('/cafe/{id}/profil/fasilitas/{fid}', [App\Http\Controllers\CafeController::class, 'deletefasilitas']);
	
	// PROFIL
	Route::get('/pengguna/{id}/profil', [App\Http\Controllers\PenggunaController::class, 'profil']);
	Route::post('/pengguna/{id}/uploadavatar', [App\Http\Controllers\PenggunaController::class, 'uploadavatar']);

// Route::middleware(['auth', 'checkrole:admin'])->group(function() {
	// Route::get('pengguna/profilsaya/{id}', [App\Http\Controllers\PenggunaController::class, 'profilsaya'])->name('pengguna.profilsaya');
// });

});