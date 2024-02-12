<?php

use App\Livewire\Category;
use App\Livewire\Tasks\TasksIndex;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::view('/', 'welcome');

Route::get('/category', Category::class);
 
// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth'])
//     ->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::get('/tasks', TasksIndex::class)->name('tasks.index');
});



require __DIR__.'/auth.php';
