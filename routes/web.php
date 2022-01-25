<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\Admin\AdminProductController;

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

Route::get('lang/{lang}', function ($lang){ return redirect()->back(); })->name('lang.switch');

Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');

Route::group([
    'prefix'        => 'admin',
    'as'            => 'admin.products.',
    'middleware'    => 'auth',
], function () {
    Route::get('/products', [AdminProductController::class,'index'])->name('index');
    Route::get('/products/{product}', [AdminProductController::class,'show'])->name('show');
    Route::get('/products/create', [AdminProductController::class,'create'])->name('create');
    Route::get('/products/edit/{product}', [AdminProductController::class,'edit'])->name('edit');
    Route::get('/products/destroy/{product}', [AdminProductController::class,'destroy'])->name('destroy');
    Route::post('/products', [AdminProductController::class,'store'])->name('store');
    Route::put('/products/{product}', [AdminProductController::class,'update'])->name('update');
});

Route::get('/manufacturers', [ManufacturerController::class,'index'])->name('manufacturers');
Route::get('/manufacturers/{manufacturer}', [ManufacturerController::class,'show'])->name('manufacturers.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function () {
    Auth::logout();
    return response()->redirectTo('/');
})->name('my-logout');

require __DIR__.'/auth.php';
