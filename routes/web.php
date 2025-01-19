<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;

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
Route::get('/login', function(){
    return view('login-form');
});

Route::post('/login', [UserController::class, 'login' ])->name('login');
Route::post('/logout', [UserController::class, 'logout' ])->name('logout');

Route::get('/', [PageController::class, 'showCorrectHomepage'])->name('/');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blogGrid'])->name('blog');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/blog-detail', [PageController::class, 'blogDetail'])->name('blogDetail');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('portfolio', PortfolioController::class);
    Route::get('admin/portfolio/{portfolio}/refresh-thumbnail', [PortfolioController::class, 'refreshThumbnail'])
    ->name('portfolio.refresh-thumbnail');

    Route::resource('users', UserController::class);
   // Route::get('settings', [AdminSettingController::class, 'index'])->name('admin.settings');
});

require __DIR__.'/auth.php';
