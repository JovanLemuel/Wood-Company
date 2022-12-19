<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;

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

// home
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/#', function () {
    return view('home');
});

//catalog
Route::get('/catalog', [ProductController::class, 'index']);

Route::get('/catalog/{product}', [ProductController::class, 'show']);

Route::resource('products', ProductController::class)->middleware('admin');

//blog
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{blog}', [BlogController::class, 'show']);

Route::resource('blogs', BlogController::class)->middleware('admin');

//contact
Route::resource('mails', MailController::class);

Route::get('/contact', function () {
    return view('contact');
});

//partner
Route::resource('partners', PartnerController::class)->middleware('admin');

//category
Route::resource('categorys', CategoryController::class)->middleware('admin');

//supplier
Route::resource('suppliers', SupplierController::class)->middleware('admin');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/admin_product', [ProductController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_product');

Route::get('/dashboard/admin_blog', [BlogController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_blog');

Route::get('/dashboard/admin_mail', [MailController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_mail');

Route::get('/dashboard/admin_partner', [PartnerController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_partner');

Route::get('/dashboard/admin_supplier', [SupplierController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_supplier');

Route::get('/dashboard/admin_category', [CategoryController::class, 'show'])
    ->middleware(['auth', 'verified'])->name('admin_category');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
