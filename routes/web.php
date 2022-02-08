<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminManufacturerController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminRoutesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/{lang}', function ($lang) {
    session()->put('language', $lang);
    return redirect()->back();
})->name('lang.switch');

Route::get('/admin/routes', [AdminRoutesController::class,'index'])->name('admin.routes');

Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');

Route::get('/manufacturers', [ManufacturerController::class,'index'])->name('manufacturers');
Route::get('/manufacturers/{manufacturer}', [ManufacturerController::class,'show'])->name('manufacturers.show');

Route::group([
    'prefix'        => 'admin/products',
    'as'            => 'admin.products.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminProductController::class,'index'])->name('index');
    Route::get('{product}', [AdminProductController::class,'show'])->name('show');
    Route::get('create', [AdminProductController::class,'create'])->name('create');
    Route::get('edit/{product}', [AdminProductController::class,'edit'])->name('edit');
    Route::get('destroy/{product}', [AdminProductController::class,'destroy'])->name('destroy');
    Route::post('', [AdminProductController::class,'store'])->name('store');
    Route::put('{product}', [AdminProductController::class,'update'])->name('update');
});

Route::group([
    'prefix'        => 'admin/manufacturers',
    'as'            => 'admin.manufacturers.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminManufacturerController::class,'index'])->name('index');
    Route::get('create', [AdminManufacturerController::class,'create'])->name('create');
    Route::get('{manufacturer}', [AdminManufacturerController::class,'show'])->name('show');
    Route::get('edit/{manufacturer}', [AdminManufacturerController::class,'edit'])->name('edit');
    Route::get('destroy/{manufacturer}', [AdminManufacturerController::class,'destroy'])->name('destroy');
    Route::post('', [AdminManufacturerController::class,'store'])->name('store');
    Route::put('/{manufacturer}', [AdminManufacturerController::class,'update'])->name('update');
});

Route::group([
    'prefix'        => 'admin/categories',
    'as'            => 'admin.categories.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminCategoryController::class,'index'])->name('index');
    Route::get('create', [AdminCategoryController::class,'create'])->name('create');
    Route::get('edit/{category}', [AdminCategoryController::class,'edit'])->name('edit');
    Route::get('destroy/{category}', [AdminCategoryController::class,'destroy'])->name('destroy');
    Route::post('', [AdminCategoryController::class,'store'])->name('store');
    Route::put('/{category}', [AdminCategoryController::class,'update'])->name('update');
});

Route::group([
    'prefix'        => 'admin/blogs',
    'as'            => 'admin.blogs.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminBlogController::class,'index'])->name('index');
    Route::get('create', [AdminBlogController::class,'create'])->name('create');
    Route::get('{blog}', [AdminBlogController::class,'show'])->name('show');
    Route::get('edit/{blog}', [AdminBlogController::class,'edit'])->name('edit');
    Route::get('destroy/{blog}', [AdminBlogController::class,'destroy'])->name('destroy');
    Route::post('', [AdminBlogController::class,'store'])->name('store');
    Route::put('/{blog}', [AdminBlogController::class,'update'])->name('update');
});

Route::group([
    'prefix'        => 'admin/pages',
    'as'            => 'admin.pages.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminPageController::class,'index'])->name('index');
    Route::get('create', [AdminPageController::class,'create'])->name('create');
    Route::get('{page}', [AdminPageController::class,'show'])->name('show');
    Route::get('edit/{page}', [AdminPageController::class,'edit'])->name('edit');
    Route::get('destroy/{page}', [AdminPageController::class,'destroy'])->name('destroy');
    Route::post('', [AdminPageController::class,'store'])->name('store');
    Route::put('/{page}', [AdminPageController::class,'update'])->name('update');
});

Route::group([
    'prefix'        => 'admin/features',
    'as'            => 'admin.features.',
    'middleware'    => 'auth',
], function () {
    Route::get('', [AdminFeatureController::class,'index'])->name('index');
    Route::get('create', [AdminFeatureController::class,'create'])->name('create');
    Route::get('{feature}', [AdminFeatureController::class,'show'])->name('show');
    Route::get('edit/{feature}', [AdminFeatureController::class,'edit'])->name('edit');
    Route::get('destroy/{feature}', [AdminFeatureController::class,'destroy'])->name('destroy');
    Route::post('', [AdminFeatureController::class,'store'])->name('store');
    Route::put('/{feature}', [AdminFeatureController::class,'update'])->name('update');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function () {
    Auth::logout();
    return response()->redirectTo('/');
})->name('my-logout');

Route::fallback(function () {
    return 'Falsche Route';
});
require __DIR__.'/auth.php';
