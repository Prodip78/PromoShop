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

Route::get('/', function () {
    return view('frontend.userhome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\LoginController@login');

//backend...category
Route::get('admin/category', 'Admin\Category\CategoryController@index')->name('admin.category');
Route::post('admin/category/store','Admin\Category\CategoryController@storeCategory')->name('store.category');
Route::get('delete/category{category_id}', 'Admin\Category\CategoryController@DeleteCategory');
Route::get('edit/category{category_id}', 'Admin\Category\CategoryController@EditCategory');
Route::post('update/category{category_id}', 'Admin\Category\CategoryController@UpdateCategory');

//sub_category....
Route::get('admin/sub_category', 'Admin\Category\SubCategoryController@index')->name('admin.sub_category');
Route::post('store.sub-category', 'Admin\Category\SubCategoryController@StoreSubCategory');
Route::get('delete/sub-category{sub_category_id}', 'Admin\Category\SubCategoryController@DeleteSubCategory');
Route::get('edit/sub_category{sub_category_id}', 'Admin\Category\SubCategoryController@EditSubCategory');
Route::post('update/Sub-category{sub_category_id}', 'Admin\Category\SubCategoryController@UpdateSubCategory');

//product...
Route::get('admin/product', 'Admin\Category\ProductController@index')->name('admin.product');
Route::post('admin/product/store','Admin\Category\ProductController@storeproduct')->name('store.product');
Route::get('delete/product{id}', 'Admin\Category\ProductController@DeleteProduct');
Route::get('edit/product{id}', 'Admin\Category\ProductController@EditProduct');
Route::post('update/product{id}', 'Admin\Category\ProductController@UpdateProduct');

//banner...
Route::get('admin/banner', 'Admin\Category\BannerController@index')->name('admin.banner');
Route::post('admin/banner/store','Admin\Category\BannerController@storebanner')->name('store.banner');
Route::get('delete/banner{id}', 'Admin\Category\BannerController@DeleteBanner');
Route::get('edit/banner{id}', 'Admin\Category\BannerController@EditBanner');
Route::post('update/banner{id}', 'Admin\Category\BannerController@UpdateBanner');

//Site logo here....
Route::get('/site-logo', 'Admin\Category\BannerController@LogoIndex');
Route::post('admin/logo/store','Admin\Category\BannerController@storelogo')->name('store.logo');
Route::get('delete/logo{id}', 'Admin\Category\BannerController@Deletelogo');
Route::get('edit/logo{id}', 'Admin\Category\BannerController@logoEdit');
Route::post('update/logo{id}', 'Admin\Category\BannerController@UpdateLogo');









//frontend/category by product
Route::get('/product_category{category_id}', 'Forntend\User\UserController@Show_category_by_product');

//product_details..

Route::get('/view.product{id}', 'Forntend\User\UserController@Show_product_details');

//cart...

Route::post('/add-to-cart', 'Forntend\User\CartController@add_to_cart');
Route::get('/show-cart', 'Forntend\User\CartController@show_cart');
Route::get('/delete-to-cart{rowId}', 'Forntend\User\CartController@delete_to_cart');
Route::post('/update-cart', 'Forntend\User\CartController@update_to_cart');

//checkout...
Route::get('/login-check', 'Forntend\User\CheckoutController@login_check');
Route::post('/registration-customer','Forntend\User\CheckoutController@registration_customer');
Route::get('/checkout', 'Forntend\User\CheckoutController@checkout');
Route::post('//save-billing-details','Forntend\User\CheckoutController@billing_datails');

//login customer..
Route::get('/customer-logout', 'Forntend\User\CheckoutController@customer_logout');
Route::post('/login-customer', 'Forntend\User\CheckoutController@login_customer');

//payment...
Route::get('/payment','Forntend\User\CheckoutController@payment');
Route::post('/order-place', 'Forntend\User\OrderController@order_place');

//manage order
Route::get('/manage-order', 'Forntend\User\OrderController@manage_order');
Route::get('view/order{order_id}', 'Forntend\User\OrderController@view_order');
Route::get('delete/order{order_id}', 'Forntend\User\OrderController@delete_order');

//search....
Route::get('/search', 'Forntend\User\OrderController@search')->name('search.product');
//contact.....
Route::get('/contact', 'Forntend\User\ContactController@index');
Route::get('/contact-manage', 'Forntend\User\ContactController@contact_manage');
Route::post('/contact-message', 'Forntend\User\ContactController@contact_message');




