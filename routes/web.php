<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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

// Route::get('/categories', function () {
//     return view('blog.categories');
// });

// Route::get('/categorysingle', function () {
//     return view('blog.categorysingle');
// });

// Route::get('/dashboard', function () {
    //     return view('dashboard.index');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/about', function () {
    return view('blog.about');
});

Route::get('/post', function () {
    return view('blog.post');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth', 'verified')->name('dashboard');


Route::resource('/news', PostController::class)->middleware('auth');

Route::middleware('can:accessAdmin')->group(function () {
    Route::get('/users', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/users/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/users/create', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{user}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
