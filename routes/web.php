<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminManufacturerController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function () {
    Auth::logout();
    return response()->redirectTo('/');
})->name('my-logout');

require __DIR__.'/auth.php';
