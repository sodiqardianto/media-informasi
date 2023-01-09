<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashborad');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('dataUser', [App\Http\Controllers\UserController::class, 'data'])->name('users.data');

    Route::post('users/{user}/change-password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('users.changePassword');

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('dataRole', [App\Http\Controllers\RoleController::class, 'data'])->name('roles.data');
    Route::get('roles/{role}/access', [App\Http\Controllers\RoleController::class, 'access'])->name('roles.access');
    Route::post('roles/{role}/access', [App\Http\Controllers\RoleController::class, 'updateAccess'])->name('roles.updateAccess');

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('dataPermission', [App\Http\Controllers\PermissionController::class, 'data'])->name('permissions.data');

    Route::resource('kategori', App\Http\Controllers\KategoriController::class);
    Route::get('datakategori', [App\Http\Controllers\KategoriController::class, 'data'])->name('kategori.data');

    Route::get('pesan', [App\Http\Controllers\PesanController::class, 'index'])->name('pesan.index');
    Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'show'])->name('pesan.show');
    Route::delete('pesan/{id}', [App\Http\Controllers\PesanController::class, 'destroy'])->name('pesan.destroy');
    Route::get('pesan/{id}/edit', [App\Http\Controllers\PesanController::class, 'edit'])->name('pesan.edit');
    Route::put('pesan/{id}', [App\Http\Controllers\PesanController::class, 'update'])->name('pesan.update');

    Route::get('datapesan', [App\Http\Controllers\PesanController::class, 'data'])->name('pesan.data');

    Route::resource('guru', App\Http\Controllers\GuruController::class);
    Route::get('dataguru', [App\Http\Controllers\GuruController::class, 'data'])->name('guru.data');

    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::get('databerita', [App\Http\Controllers\BeritaController::class, 'data'])->name('berita.data');
});

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('our-teacher', [App\Http\Controllers\HomeController::class, 'show'])->name('our-teacher');
Route::get('our-post', [App\Http\Controllers\HomeController::class, 'showBerita'])->name('our-post');
Route::get('detail-post/{id}', [App\Http\Controllers\HomeController::class, 'detailBerita'])->name('detail-post');
Route::post('pesan', [App\Http\Controllers\PesanController::class, 'store'])->name('pesan.store');
