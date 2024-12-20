<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;





Route::get('/produk', [ProdukController::class, 'index'])->name('index.index');
Route::get('/create', [ProdukController::class, 'create'])->name('index.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('index.store');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('index.edit');
Route::put('/update/{id}', [ProdukController::class, 'update'])->name('index.update');
Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('index.destroy');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('index.show');
Route::get('/review', [ProdukController::class, 'review'])->name('index.review');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('client.profile');
Route::get('/shop/{category}', [ClientController::class, 'filterByCategory'])->name('shop.filter');
Route::get('/checkout', [CheckoutController::class, 'showCart'])->name('checkout.show');
Route::post('/apply-coupon', [CheckoutController::class, 'applyCoupon'])->name('apply.coupon');



Route::get('/product/{id}', [ClientController::class, 'show'])->name('client.show');


// Authentication routescart
Auth::routes();

// Home route (corrected)
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('client.index');
});
// Root route to redirect to login
Route::get('/', function() {
    return redirect()->route('client.index');
});

Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/shop', [ClientController::class, 'shop'])->name('client.shop');

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/services', function () {
    return view('client.services');
});

Route::get('/blog', function () {
    return view('client.blog');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/thankyou', function () {
    return view('client.thankyou');
});

///cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::post('/review', [ReviewController::class, 'store'])->name('review.store');

Route::get('/coupon', [ProdukController::class, 'coupon'])->name('index.coupon');

Route::post('apply-coupon', [CheckoutController::class, 'applyCoupon'])->name('apply.coupon');

Route::post('/place-order', [OrderController::class, 'store'])->name('place.order');
