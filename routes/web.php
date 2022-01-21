<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function () {
    Auth::logout();
    return response()->redirectTo('/');
})->name('my-logout');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

require __DIR__.'/auth.php';
