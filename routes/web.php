<?php

use App\Http\Controllers\AuthecticationController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
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
Route::controller(AuthecticationController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(OrderController::class)->group(function() {
    Route::get('/order/{id}', 'detailItem')->name('order');
    Route::post('/order', 'createOrderUser')->name('orderUser')->middleware('checkLogin');
    Route::get('/admin/create-order', 'createOrderAdmin')->name('orderAdmin');
    Route::get('/admin/recent-order', 'recentOrder')->name('recentOrder');
    Route::get('/admin/item-order', 'itemOrderAdmin')->name('itemOrder');
    Route::get('/admin/list-items', 'itemListAdmin')->name('listItems');
    Route::get('/admin/order-checkout', 'orderCheckoutAdmin')->name('orderCheckout');
});

Route::get('/', [ItemController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/oder', function () {
//     return view('checkout/order');
// })->name('order');

// Route::get('/recent', function () {
//     return view('admin/recent');
// })->name('recent');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});
