<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use Illuminate\Routing\RouteGroup;

/*use
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   





//frontend Routes
Route::get('/',[FrontendController::class,'index']);
Route::get('/category',[FrontendController::class,'category']);
Route::get('/view-category/{slug}',[FrontendController::class,'viewcategory']);
Route::get('/category/{cate_slug}/{prod_slug}', [FrontendController::class, 'showproduct']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add-to-cart',[CartController::class,'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart',[CartController::class,'updateCart']);



Route::middleware(['auth'])->group(function () {
    Route::get('/cart',[CartController::class,'viewCart']);
    Route::get('/checkout',[CheckoutController::class,'index']);
    Route::post('place-order',[CheckoutController::class,'placeorder']);
    
});




Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [\App\Http\Controllers\Admin\FrontendController::class, 'index']);
    Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-categories',[\App\Http\Controllers\Admin\CategoryController::class, 'add']);
    Route::post('/insert-category',[\App\Http\Controllers\Admin\CategoryController::class, 'insert']);
    Route::get('/edit-prod/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    
    //products route
    Route::get('/products', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('/add-products', [\App\Http\Controllers\Admin\ProductController::class, 'add']);
    Route::post('/insert-product', [\App\Http\Controllers\Admin\ProductController::class, 'insert']);
    Route::get('/edit-products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::put('/update-products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/delete-products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
   
});