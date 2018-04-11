<?php


Route::get('/','FrontController@index')->name('welcome');
Route::get('/contactus','FrontController@contact')->name('contact.us');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('all/dataproducts/view','ProductController@dataProducts')->name('products.data');

Route::get('category','AdminController@getCategory')->name('get.category');

Route::post('postcategory','AdminController@postCategory')->name('post.category');

Route::get('subcategory/{id}','AdminController@getSubCategory')->name('get.subcategory');
Route::post('postsubcategory','AdminController@postSubCategory')->name('post.subcategory');
Route::get('getproducts/{id}','ProductController@create')->name('get.product');
Route::post('postproducts','ProductController@store')->name('product.store');

Route::get('getallproducts', [
	'uses'=>'ProductController@getAllProduct',
'as'=>'get.allproducts'
]);
Route::get('deleteproduct/{id}', ['uses'=>'ProductController@deleteProduct'])->name('delete.product');
Route::get('editproduct/{id}', ['uses'=>'ProductController@editProduct'])->name('edit.product');
Route::post('posteditproduct', ['uses'=>'ProductController@updateProduct'])->name('update.product');

Route::get('/delete/numbercategory/{id}', ['uses'=>'AdminController@deleteCategory'])->name('delete.category');

Route::get('/delete/subcategory/{id}', ['uses'=>'AdminController@deleteSubCategory'])->name('delete.subcatgory');

Route::get('subcategoryproducts/{id}', ['uses'=>'ProductController@subcategoryProduct'])->name('subcategory.product');
Route::get('singleproducts/{id}', ['uses'=>'ProductController@singleProduct'])->name('single.product');


Route::get('add/cart/{id}',[
'uses'=>'CartController@edit',
'as'=>'Cart.edit'
]);
Route::get('/index',[
'uses'=>'CartController@index',
'as'=>'cart.index'
	]);
	Route::post('/cart/{id}',[
'uses'=>'CartController@update',
'as'=>'Cart.update'
	]);

	Route::post('/destroy/cart/{id}',[
'uses'=>'CartController@destroy',
'as'=>'Cart.remove'

	]);
	Route::get('/checkout/order/deliverd',[
'uses'=>'CartController@checkOut',
'as'=>'check.out',

]);

	Route::post('submit','CartController@submit')->name('order.submit');
	Route::get('deleteorder/{id}','AdminController@deleteOrder')->name('order.delete');



//search product
	Route::get('search','ProductController@search')->name('search.product');

//admin order

	Route::get('orderlist','AdminController@order')->name('orderlist');
	//more images

	Route::get('moreimages/{id}','ProductController@addMoreImages')->name('add.more');
	Route::get('manageimages/{id}','ProductController@manageMore')->name('manage.more');
Route::post('storemoreimages','ProductController@storeMoreImages')->name('store.more');
Route::get('deletemoreimages/{id}','ProductController@deleteMoreImages')->name('delete.more');

//view subcate 

Route::get('viewsubcate/product/{id}','ProductController@viewSubcategory')->name('view.subcat');

