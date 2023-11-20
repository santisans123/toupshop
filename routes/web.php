<?php

use App\Http\Controllers\AuthecticationController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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
    Route::post('/admin/update-order', 'updateOrder')->name('updateOrder');
    Route::post('/admin/delete-order', 'DeleteOrder')->name('deleteOrder');
    Route::get('/admin/recent-order', 'recentOrder')->name('recentOrder');
    Route::get('/admin/list-recent', 'listRecentOrder')->name('listRecentOrder');
    Route::get('/admin/order-checkout', 'orderCheckoutAdmin')->name('orderCheckout');
});

Route::controller(ItemController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/admin/list-items', 'listItem')->name('listItems');
    Route::get('/admin/create-item', 'createItem')->name('createItem');
    Route::post('/admin/create-item', 'createItemStore')->name('createItemStore');
    Route::post('/admin/update-item', 'updateItem')->name('updateItem');
    Route::post('/admin/delete-item', 'deleteItem')->name('deleteItem');
    Route::get('/admin/list-price', 'listPrice')->name('listPrice');
    Route::get('/admin/create-price', 'createPrice')->name('productPrice');
    Route::post('/admin/create-price-store', 'createPriceStore')->name('createPrice');
    Route::post('/admin/update-price', 'updatePrice')->name('updatePrice');
    Route::post('/admin/delete-price', 'deletePrice')->name('deletePrice');
    Route::get('/history-transaction', 'historyTransaction')->name('historyTransaction');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/admin/list-user', 'listUser')->name('listUser');
    Route::post('/admin/delete-user', 'deleteUser')->name('deleteUser');
});

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
