<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
// MODUL 2-2 START - Authentikasi Manual Sederhana
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
// MODUL 2-2 END
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// MODUL 2-2 START - Protect posts dan categories dengan auth middleware
// Route dari laraveltest-main
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
// MODUL 2-1 START
// Route Model Binding dengan slug
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');
// MODUL 2-1 END
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories.index');
// MODUL 2-2 END

// MODUL 2-2 START - Authentikasi Manual Sederhana
// Route untuk register - middleware guest (hanya untuk yang belum login)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Route untuk login - middleware guest (hanya untuk yang belum login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Route logout - hanya untuk yang sudah login
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk dashboard posts (resource controller) - hanya untuk yang sudah login
Route::resource('/dashboard', DashboardPostController::class)->middleware(['auth', 'verified'])->name('dashboard', 'index');
// MODUL 2-2 END
