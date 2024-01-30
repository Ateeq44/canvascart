<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\user\MainController::class, 'index'])->name('home');
Route::get('product-details/{cslug}/{slug}/{cat_id}', [App\Http\Controllers\user\MainController::class, 'product_details'])->name('product_details');
Route::get('category', [App\Http\Controllers\user\MainController::class, 'category'])->name('category');
Route::get('shop', [App\Http\Controllers\user\MainController::class, 'shop']);
Route::get('products_category/{cat_id}', [App\Http\Controllers\user\MainController::class, 'products_category']);
Route::get('search', [App\Http\Controllers\user\MainController::class, 'search']);

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('cart', [App\Http\Controllers\user\CartController::class, 'cart'])->name('cart');
    Route::get('add-to-cart', [App\Http\Controllers\user\CartController::class, 'addproduct']);
    Route::get('increase/{id}', [App\Http\Controllers\user\CartController::class, 'increase']);
    Route::get('decrease/{id}', [App\Http\Controllers\user\CartController::class, 'decrease']);
    Route::get('cart-delete/{id}', [App\Http\Controllers\user\CartController::class, 'delete']);
    Route::get('checkout', [App\Http\Controllers\user\CheckoutController::class, 'checkout']);
    Route::Post('placeorder', [App\Http\Controllers\user\CheckoutController::class, 'placeOrder']);
    Route::get('invoice/{orderId}', [App\Http\Controllers\user\CheckoutController::class, 'invoice']);
    Route::get('order_details/{Id}', [App\Http\Controllers\HomeController::class, 'order_details']);
    Route::get('tracking_order/{Id}', [App\Http\Controllers\HomeController::class, 'tracking_order']);
    Route::get('wishlist', [App\Http\Controllers\user\WishlistController::class, 'index']);
    Route::get('add-to-wishlist', [App\Http\Controllers\user\WishlistController::class, 'add']);
    Route::get('wishlist-delete/{id}', [App\Http\Controllers\user\WishlistController::class, 'delete']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/users', [App\Http\Controllers\admin\UserController::class, 'index'])->name('users');

    /*
        product categories
    */
        Route::get('admin/productcategories'            ,   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'index']);
        Route::get('admin/productcategories/edit/{id?}' ,   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'edit']);
        Route::post('admin/productcategories/edit/{id?}',   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'edit']);
        Route::get('admin/productcategories/create'     ,   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'create']);
        Route::post('admin/productcategories/create'    ,   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'create']);
        Route::get('admin/productcategories/delete/{id}',   [App\Http\Controllers\Admin\ProductCategoriesController::class, 'delete']);


    /*
        products 
    */
        Route::get('admin/product'                     , [App\Http\Controllers\Admin\ProductController::class, 'index']);
        Route::get('admin/product/edit/{id?}'          , [App\Http\Controllers\Admin\ProductController::class, 'edit']);
        Route::post('admin/product/edit/{id?}'         , [App\Http\Controllers\Admin\ProductController::class, 'edit']);
        Route::get('admin/product/create'              , [App\Http\Controllers\Admin\ProductController::class, 'create']);
        Route::post('admin/product/create'             , [App\Http\Controllers\Admin\ProductController::class, 'create']);
        Route::get('admin/product/delete/{id}'         , [App\Http\Controllers\Admin\ProductController::class, 'delete']);
        Route::get('admin/product/view/{id}'           , [App\Http\Controllers\Admin\ProductController::class, 'view']);
    /*
        Users 
    */
        Route::get('admin/user'                        , [App\Http\Controllers\Admin\UserController::class, 'index']);
        Route::get('admin/user/edit/{id?}'             , [App\Http\Controllers\Admin\UserController::class, 'edit']);
        Route::post('admin/user/edit/{id?}'            , [App\Http\Controllers\Admin\UserController::class, 'edit']);
        Route::get('admin/user/create'                 , [App\Http\Controllers\Admin\UserController::class, 'create']);
        Route::post('admin/user/create'                , [App\Http\Controllers\Admin\UserController::class, 'create']);
        Route::get('admin/user/delete/{id}'            , [App\Http\Controllers\Admin\UserController::class, 'delete']);
    /*
        Users 
    */
        Route::get('admin/details'                     , [App\Http\Controllers\Admin\DetailsController::class, 'index']);
        Route::get('admin/details/edit/{id?}'          , [App\Http\Controllers\Admin\DetailsController::class, 'edit']);
        Route::post('admin/details/edit/{id?}'         , [App\Http\Controllers\Admin\DetailsController::class, 'edit']);
        Route::get('admin/details/create'              , [App\Http\Controllers\Admin\DetailsController::class, 'create']);
        Route::post('admin/details/create'             , [App\Http\Controllers\Admin\DetailsController::class, 'create']);
        Route::get('admin/details/delete/{id}'         , [App\Http\Controllers\Admin\DetailsController::class, 'delete']);
    /*
        Orders 
    */
        Route::get('admin/orders'                      , [App\Http\Controllers\Admin\AdminController::class, 'orders']);
        Route::post('admin/orders/update/{id}'          , [App\Http\Controllers\Admin\AdminController::class, 'update']);
        Route::get('admin/orders/view/{id}'            , [App\Http\Controllers\Admin\AdminController::class, 'view']);

    });