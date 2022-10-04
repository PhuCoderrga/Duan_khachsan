<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\PublishController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\CheckoutController as ModelsCheckoutController;



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
/* publish Controller */
Route::get('/', [PublishController::class, 'ShowIndex'])->name('index.publish');
Route::get('/du-lich-trong-nuoc', [PublishController::class, 'DLTrongNuoc'])->name('dulichtrongnuoc.publish');
Route::get('/du-lich-ngoai-nuoc', [PublishController::class, 'DLNgoaiNuoc'])->name('dulichngoainuoc.publish');

/*detail Product*/  
route::get('chi-tiet-chuyen-di/{id}', [PublishController::class, 'ChiTietTour'])->name('chitiettour.punlish');
/*search*/
route::get('/search', [PublishController::class, 'search']);

/*users*/



/*login*/
Route::get('/login', [LoginAdminController::class, 'LoginAdmin'])->name('login.admin');
Route::post('/login', [LoginAdminController::class, 'LoginAdminGet'])->name('login.admin.post');

route::middleware('admin')->group(function()
{
    /*logout admin*/
    Route::post("/logout",[LoginAdminController::class,"logout"])->name("logout");
    /*admin*/
    Route::get('/admin', [AdminController::class, 'ShowIndex'])->name('index.admin');
    /*List_Product*/
    Route::get('list-products', [AdminController::class, 'ShowListProduct'])->name('listproduct.admin');
    /*Add Product*/
    Route::get('create-product', [AdminController::class, 'ShowCreateProduct'])->name('createproduct.admin');
    Route::post('create-product', [AdminController::class, 'CreateProduct'])->name('createproduct.admin.get');
    /*Edit Product*/
    Route::get('edit-product/{id}', [AdminController::class, 'ShowEditProduct'])->name('editproduct.admin');
    Route::post('edit-product/{id}', [AdminController::class, 'EditProduct'])->name('editproduct.admin.get');
    /*Delete Product*/ 
    Route::delete('delete-product', [AdminController::class, 'DeleteProduct'])->name('deleteproduct.admin');

    /*List_category*/
    Route::get('list-categories', [AdminController::class, 'ShowListCategories'])->name('listcategories.admin');
    /*Add Categories*/
    Route::get('create-category', [AdminController::class, 'ShowCreateCatgories'])->name('createcategory.admin');
    Route::post('create-category', [AdminController::class, 'CreatePCategories'])->name('createproduct.admin.get');
    /*Edit Categories*/
    Route::get('edit-category/{id}', [AdminController::class, 'ShowEditCategory'])->name('editcategory.admin');
    Route::post('edit-category/{id}', [AdminController::class, 'EditCategory'])->name('editcategory.admin.get');
    /*Delete Product*/ 
    Route::delete('delete-category', [AdminController::class, 'DeleteCategory'])->name('deletecategory.admin');
});