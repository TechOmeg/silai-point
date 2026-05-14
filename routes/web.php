<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FabricCategoryController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\MainIndexController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MeasurmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialController;

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])
    ->name('add.to.cart');

Route::get('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::post('/cart/update', [CartController::class, 'update'])
    ->name('cart.update');

Route::get('/cart', function () {
    $cart = session()->get('cart', []);
    return view('frontend.cart', compact('cart'));
})->name('cart.page');

Route::get('/button-details/{id}', [ButtonController::class, 'buttonDetails'])
    ->name('button.show');

Route::post('/button-add-to-cart', [ButtonController::class, 'buttonAddToCart'])
    ->name('button.add.to.cart');

Route::get('/measurment', [MeasurmentController:: class,'index'])->name('measurment.page');
Route::post('/measurment/store', [MeasurmentController::class, 'store'])->name('measurement.store');

Route::get('/checkout', function () {
    $cart = session()->get('cart', []);
    return view('frontend.checkout', compact('cart'));
})->name('checkout');

Route::get('/', [MainIndexController::class, 'index'])->name('home');
Route::get('fabric/{id}', [MainIndexController::class, 'fabricShow'])->name('fabric.show');

Route::get('/admin', function () {
    return view('admin.auth.login');
})->name('admin');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');
Route::get('/admin/fabric-category', [FabricCategoryController::class, 'index'])->name('fabric.category')->middleware('auth');
Route::post('/admin/fabric-category/store', [FabricCategoryController::class, 'store'])->name('fabric-category.store');

Route::post('/admin/fabric-category/update/{id}', [FabricCategoryController::class, 'update'])->name('fabric-category.update');

Route::delete('/admin/fabric-category/delete/{id}', [FabricCategoryController::class, 'destroy'])->name('fabric-category.destroy');

// FABRICS
Route::get('/admin/add-fabric', [FabricController::class, 'create'])
    ->name('add.fabric')
    ->middleware('auth');

Route::get('/admin/all-fabrics', [FabricController::class, 'index'])
    ->name('all.fabric')
    ->middleware('auth');    

Route::post('/admin/store-fabric', [FabricController::class, 'store'])
    ->name('store.fabric')
    ->middleware('auth');

Route::post('/admin/update-fabric/{id}', [FabricController::class, 'update'])
    ->name('update.fabric')
    ->middleware('auth');

Route::delete('/admin/delete-fabric/{id}', [FabricController::class, 'destroy'])
    ->name('delete.fabric')
    ->middleware('auth');

Route::get('/admin/edit-fabric/{id}', [FabricController::class,'edit'])->name('edit.fabric');

Route::delete('/admin/delete-fabric/{id}', [FabricController::class,'destroy'])->name('delete.fabric'); 
Route::get('/admin/buttons-category', [ButtonController::class, 'index'])->name('buttons.category')->middleware('auth');   
Route::post('/button-categories/store', [ButtonController::class, 'store'])->name('button-category.store');

Route::post('/button-categories/update/{id}', [ButtonController::class, 'update'])->name('button-category.update');

Route::delete('/button-categories/delete/{id}', [ButtonController::class, 'destroy'])->name('button-category.destroy');

Route::get('/admin/add/buttons', [ButtonController::class, 'addbutton'])->name('add.buttons')->middleware('auth');   
Route::get('/admin/all/buttons', [ButtonController::class, 'allbutton'])->name('all.buttons')->middleware('auth');
Route::get('/admin/edit-button/{id}', [ButtonController::class,'editbutton'])->name('edit.button');
Route::post('/admin/update-button/{id}', [ButtonController::class, 'updatebutton'])
    ->name('update.button')
    ->middleware('auth');

Route::delete('/admin/delete-button/{id}', [ButtonController::class, 'destroybutton'])
    ->name('delete.button')
    ->middleware('auth');

Route::post('/admin/store/buttons',
    [ButtonController::class, 'storebutton']
)->name('store.button')->middleware('auth');


Route::get('/category/cambric', [ProductController::class, 'cambric'])
    ->name('category.cambric');

Route::get('/category/linen', [ProductController::class, 'linen'])
    ->name('category.linen');

Route::get('/category/khaddar', [ProductController::class, 'khaddar'])
    ->name('category.khaddar');

Route::get('/category/karandi', [ProductController::class, 'karandi'])
    ->name('category.karandi');

Route::get('/category/boski', [ProductController::class, 'boski'])
    ->name('category.boski');

Route::get('/category/cotton', [ProductController::class, 'cotton'])
    ->name('category.cotton');

Route::get('/category/wash-wear', [ProductController::class, 'washwear'])
    ->name('category.washwear');

Route::get('fabric', [MainIndexController::class, 'fabric'])->name('fabric');
Route::get('buttons', [MainIndexController::class, 'buttons'])->name('buttons');
Route::get('new-arrivals', [MainIndexController::class, 'newArrivals'])->name('new.arrivals');

Route::get('/order-overview', [OrderController::class, 'orderOverview'])->name('order.overview');
Route::get('order-store', [OrderController::class, 'orderStore'])->name('order.store');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('auth/google', [SocialController::class, 'redirectGoogle'])->name('auth.google.redirect');
Route::get('auth/google/callback', [SocialController::class, 'callbackGoogle']);
Route::get('auth/facebook', [SocialController::class, 'redirectFacebook'])->name('auth.facebook.redirect');
Route::get('auth/facebook/callback', [SocialController::class, 'callbackFacebook']);