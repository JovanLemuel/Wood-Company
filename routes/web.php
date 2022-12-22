<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;

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

//create update
Route::get('/createproduct', [ProductController::class, 'create']);
Route::get('/updateproduct', [ProductController::class, 'update']);

Route::get('/createblog', [BlogController::class, 'create']);
Route::get('/updateblog', [BlogController::class, 'update']);

Route::get('/createcategory', [CategoryController::class, 'create']);
Route::get('/updatecategory', [CategoryController::class, 'update']);

Route::get('/updategenre', [GenreController::class, 'update']);
Route::get('/creategenre', [GenreController::class, 'create']);

Route::get('/createsupplier', [SupplierController::class, 'create']);
Route::get('/updatesupplier', [SupplierController::class, 'update']);

Route::get('/createpartner', [PartnerController::class, 'create']);
Route::get('/updatepartner', [PartnerController::class, 'update']);

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

Route::resource('products', ProductController::class)->middleware('auth', 'verified');

//blog
Route::get('/blog', [BlogController::class, 'index']);

Route::resource('blogs', BlogController::class)->middleware('auth', 'verified');

//contact
Route::resource('mails', MailController::class);

Route::get('/contact', function () {
    return view('contact');
});

//partner
Route::resource('partners', PartnerController::class)->middleware('auth', 'verified');

//category
Route::resource('categories', CategoryController::class)->middleware('auth', 'verified');

//supplier
Route::resource('suppliers', SupplierController::class)->middleware('auth', 'verified');

//genre
Route::resource('genres', GenreController::class)->middleware('auth', 'verified');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/admin_product', [ProductController::class, 'admin_product'])
    ->middleware(['auth', 'verified'])->name('admin_product');

Route::get('/dashboard/admin_blog', [BlogController::class, 'admin_blog'])
    ->middleware(['auth', 'verified'])->name('admin_blog');

Route::get('/dashboard/admin_mail', [MailController::class, 'admin_mail'])
    ->middleware(['auth', 'verified'])->name('admin_mail');

Route::get('/dashboard/admin_partner', [PartnerController::class, 'admin_partner'])
    ->middleware(['auth', 'verified'])->name('admin_partner');

Route::get('/dashboard/admin_supplier', [SupplierController::class, 'admin_supplier'])
    ->middleware(['auth', 'verified'])->name('admin_supplier');

Route::get('/dashboard/admin_category', [CategoryController::class, 'admin_category'])
    ->middleware(['auth', 'verified'])->name('admin_category');

Route::get('/dashboard/admin_genre', [GenreController::class, 'admin_genre'])
    ->middleware(['auth', 'verified'])->name('admin_genre');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
