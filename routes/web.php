<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\ActivityLog\ActivityLogController;
use App\Http\Controllers\Web\User\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Csp\AddCspHeaders;

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
Route::middleware(AddCspHeaders::class)->group(function () {
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

    // users
    Route::prefix('users')->name('users.')->group( function() {
      Route::get('table', [UserController::class, 'showTable'])->name('table');
    });
    Route::resource('users', UserController::class);

    // activity-logs
    Route::prefix('activity-logs')->name('activity-logs.')->group( function() {
      Route::get('/', [ActivityLogController::class, 'index'])->name('index');
      Route::get('/{activity}', [ActivityLogController::class, 'show'])->name('show');
    });
  });
});

require __DIR__ . '/auth.php';
