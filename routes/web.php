<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;



Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);

//backend 
// note: function không để dấu - nên để dấu _

// admin
Route::get('admin', [AdminController::class, 'index']);
// admin-layout
Route::get('dashboard', [AdminController::class, 'show_dashboard']);
//log-out
Route::get('logout', [AdminController::class, 'log_out']);
// admin-bashboard
Route::post('admin-dashboard', [AdminController::class, 'dashboard']);

// Category Product Add Update Delete
Route::get('add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
Route::post('update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
Route::get('all-category-product', [CategoryProduct::class, 'all_category_product']);

Route::post('save-category-product', [CategoryProduct::class, 'save_category_product']);

// note: function không để dấu - nên để dấu _

Route::get('active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);

// Category Product-Brand Add Update Delete

Route::get('add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::get('delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);
Route::post('update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
Route::get('all-brand-product', [BrandProduct::class, 'all_brand_product']);

Route::post('save-brand-product', [BrandProduct::class, 'save_brand_product']);

// note: function không để dấu - nên để dấu _

Route::get('active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);
Route::get('unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);