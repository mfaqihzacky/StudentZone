<?php

use App\Models\Tugas;
use App\Models\Waktu;
use App\Models\MataKuliah;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Route::middleware(['isAdmin'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/', function () {
        return view('home',[
            'title' => "HOME",
            'active' =>"home",
            'waktus' => Waktu::all(),
            'mataKuliahs' => MataKuliah::all(),
            'pengumuman' => Pengumuman::latest()->limit(3)->get(),
            'tugas' => Tugas::latest()->limit(3)->get(),
        ]);
    })->middleware('auth');

    Route::get('/profile', function () {
        return view('Profile.profile',[
            'title' => "PROFILE",
            'active' =>"profile",
            'user' => auth()->user(),
            'matkul' => MataKuliah::all(),
        ]);
    })->middleware('auth');
    Route::put('/profile/{userId}', [UserController::class, 'updatePassword'])->middleware('auth');
// });

// Route::group(['middleware' => ['auth']], function () {
    Route::post('/matakuliah/{matkul}/jadwal/{jadwal}', [JadwalController::class, 'deleteJadwal'])->middleware('isAdmin');
    Route::post('/matakuliah/{matkul}/user/{user}', [UserController::class, 'addToMatkul'])->middleware('isAdmin');
    Route::post('/matakuliah/{matkul}/user/{user}/remove', [UserController::class, 'romoveFromMatkul'])->middleware('isAdmin');
    Route::post('/tugas/{tugas}/user/{user}', [UserController::class, 'addToMatkul'])->middleware('isAdmin');
    Route::resource('/matakuliah', MataKuliahController::class)->middleware('isAdmin');
    Route::resource('/jadwal', JadwalController::class)->middleware('isAdmin');
    Route::resource('/anggota', UserController::class)->middleware('isAdmin');
    Route::resource('/pengumuman', PengumumanController::class)->middleware('isAdmin');
    Route::resource('/tugas', TugasController::class);//->except('show')->middleware('isAdmin');
    Route::resource('/materi', MateriController::class);
    // Route::resource('/kelompok', KelompokController::class)->except('show')->middleware('isAdmin');
    // Route::get('/kalender', function(){
    //     return view('calendar', [
    //         'title' => 'Kalender',
    //         'active' => 'kalender'
    //     ]);
    // });
// });
