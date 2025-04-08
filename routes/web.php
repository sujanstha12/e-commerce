<?php

use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('about',[FrontendController::class, 'about'])->name('about');
Route::get('/',[FrontendController::class, 'index'])->name('welcome');
Route::get('category', [FrontendController::class, 'category'])->name('category');
Route::get('product', [FrontendController::class, 'product'])->name('product');
Route::get('productDetail/{product:name}', [FrontendController::class, 'productDetail'])->name('productDetail');
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('dropdown', [FrontendController::class, 'dropdown'])->name('dropdown');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('profiles', [FrontendController::class, 'profile'])->name('profiles');
Route::get('myorder', [FrontendController::class, 'myorder'])->name('myorder');
Route::post('sale/{product:name}', [SaleController::class, 'sale'])->name('sale');
Route::get('mywishlist', [FrontendController::class, 'mywishlist'])->name('mywishlist');
Route::get('mysetting', [FrontendController::class, 'mysetting'])->name('mysetting');
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('upload', [UploadController::class, 'store'])->name('upload');
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
Route::delete('{file}/delete','destroy')->name('destroy');
});



//customer auth

Route::get('customer/registerPage', [CustomerAuthController::class, 'registerPage'])->name('customer.registerPage');
Route::post('customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::get('customer/loginPage', [CustomerAuthController::class, 'loginPage'])->name('customer.loginPage');
Route::post('customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');





require __DIR__.'/auth.php';
