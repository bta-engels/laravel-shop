<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
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

Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/create', [ProductController::class,'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');

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
