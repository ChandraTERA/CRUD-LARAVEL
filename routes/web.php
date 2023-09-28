<?php
use App\Http\Controllers\KaryawanController;
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

// Default Server
Route::get('/', function () {
    return view('welcome');
});

// Server dari karyawan 
// Route::get('karyawan', function () {
//     $KaryawanController = new App\Http\Controllers\KaryawanController;
//     return $KaryawanController->index();
// });

Route::get('karyawan', function () {
    $karyawanController = new App\Http\Controllers\KaryawanController;
    return $karyawanController->index();
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('views', function() {
    return view('dashboard');
});
// Route::controller(KaryawanController::class)->prefix('karyawan');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(function() {
    Route::get('/', 'index')->name('karyawan');

    Route::get('/add', [KaryawanController::class, 'add'])->name('karyawan.add');
    // Route::post('insert', 'insert')->name('karyawan.add.insert');
    Route::post('insert/save', [KaryawanController::class, 'insert'])->name('karyawan.insert');
    
    // Route::put('karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
  
    Route::get('/edit/{id}','KaryawanController@edit'); 
    Route::put('/karyawan/update/{id}',[KaryawanController::class, 'update'])->name('karyawan.update'); 

    // // Menampilkan formulir pembaruan
    // Route::get('karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    
    // // Menangani pembaruan data
    // Route::put('karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
    // // Route::put('karyawan/update/{id}', 'KaryawanController@update')->name('karyawan.update');

    Route::get('delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');
});