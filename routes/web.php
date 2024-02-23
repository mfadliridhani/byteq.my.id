<?php

use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\GuestHomeController;
use App\Http\Controllers\GuestResumeController;
use App\Http\Controllers\GuestProjectController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardContactContrlloer;

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

// Admin
Route::get('admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('admin/register', [RegisterController::class, 'store']);

Route::get('admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('admin/login', [LoginController::class, 'authenticate']);

Route::get('admin/logout', [LoginController::class, 'logout']);

Route::get('admin/password', [PasswordController::class, 'index']);

Route::get('admin/dashboard/categories/checkSlugCategory', [CategoryController::class, 'checkSlugCategory'])->middleware('auth');

Route::get('admin/dashboard/categories/checkSlugEditCategory', [CategoryController::class, 'checkSlugEditCategory'])->middleware('auth');

Route::get('admin/dashboard/blogs/checkSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('auth');

Route::resource('contacts', ContactController::class)->middleware('guest');
Route::resource('admin/dashboard/blogs', DashboardBlogController::class)->middleware('auth');
Route::resource('admin/dashboard/categories', CategoryController::class)->middleware('admin');
Route::resource('admin/dashboard/contacts', DashboardContactContrlloer::class)->middleware('admin');
Route::resource('admin/dashboard/homes', HomeController::class)->middleware('admin');
Route::resource('admin/dashboard/accounts', AdminUserController::class)->middleware('admin');

Route::get('admin/dashboard', function () {
    $data = [
        'tittle' => 'Dashboard'
    ];
    return view('admin/dashboard/index', $data);
})->middleware('auth');

// Guest
Route::get('/', [GuestHomeController::class, 'index']);
Route::get('/resumes', [GuestResumeController::class, 'index']);
Route::get('/projects', [GuestProjectController::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);
