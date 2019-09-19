<?php

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


Route::get('/', ['uses'=>'website\frontend\WebsiteController@index', 'as'=>'home']);

Route::get('/styles', ['uses'=>'website\frontend\WebsiteController@style', 'as'=>'home.style']);
Route::get('/photography', ['uses'=>'website\frontend\WebsiteController@photography', 'as'=>'home.photography']);
Route::get('/homeblogs', ['uses'=>'website\frontend\WebsiteController@blog', 'as'=>'home.blog']);
Route::get('/homeaboutpage', ['uses'=>'website\frontend\WebsiteController@aboutpage', 'as'=>'home.about']);

Route::get('/homecontact', ['uses'=>'website\frontend\WebsiteController@contact', 'as'=>'home.contact']);






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/adminpanel', ['uses'=>'website\backend\AdminController@index', 'as' =>'adminpanel'])->middleware('auth');

// // Rooms Category
// Route::get('/Room-category', ['uses' => 'website\RoomCategoryController@index', 'as' => 'Roomcategory']);
// Route::post('/Room-category', ['uses' => 'website\RoomCategoryController@index', 'as' => 'Roomcategory.search']);
// Route::get('/Room-category/add', ['uses' => 'website\RoomCategoryController@addCategory', 'as' => 'Roomcategory.add']);
// Route::post('/Room-category/add', ['uses' => 'website\RoomCategoryController@addCategoryPost', 'as' => 'Roomcategory.addpost']);
// Route::get('/Room-category/edit/{id}', ['uses' => 'website\RoomCategoryController@editCategory', 'as' => 'Roomcategory.edit']);
// Route::post('/Room-category/edit/{id}', ['uses' => 'website\RoomCategoryController@updateCategory', 'as' => 'Roomcategory.update']);
// Route::get('/Room-category/delete/{id}', ['uses' => 'website\RoomCategoryController@deleteCategory', 'as' => 'Roomcategory.delete']);

Route::get('/Slider-category', ['uses'=>'website\backend\SliderCategoryController@index', 'as' =>'slidercategory']);
Route::get('/Slider-category/create', ['uses'=>'website\backend\SliderCategoryController@create', 'as' =>'slidercategory.create']);
Route::post('/Slider-category/store', ['uses'=>'website\backend\SliderCategoryController@store', 'as' =>'slidercategory.store']);
Route::get('/Slider-category/edit/{id}', ['uses'=>'website\backend\SliderCategoryController@edit', 'as' =>'slidercategory.edit']);
Route::post('/Slider-category/update/{id}', ['uses'=>'website\backend\SliderCategoryController@update', 'as' =>'slidercategory.update']);
Route::get('/Slider-category/delete/{id}', ['uses'=>'website\backend\SliderCategoryController@destroy', 'as' =>'slidercategory.delete']);

//slider route

Route::get('/Slider', ['uses'=>'website\backend\SliderController@index', 'as' =>'slider']);
Route::get('/Slider/create', ['uses'=>'website\backend\SliderController@create', 'as' =>'slider.create']);
Route::post('/Slider/store', ['uses'=>'website\backend\SliderController@store', 'as' =>'slider.store']);
Route::get('/Slider/edit/{id}', ['uses'=>'website\backend\SliderController@edit', 'as' =>'slider.edit']);
Route::post('/Slider/update/{id}', ['uses'=>'website\backend\SliderController@update', 'as' =>'slider.update']);
Route::get('/Slider/delete/{id}', ['uses'=>'website\backend\SliderController@destroy', 'as' =>'slider.delete']);

//making the blog routes with resource
Route::resource('blogcategory', 'website\backend\BlogCategoryController');
Route::get('/blogcate/delete/{id}', ['uses'=>'website\backend\BlogCategoryController@delete', 'as' =>'blogcategory.delete']);

Route::resource('blog', 'website\backend\BlogController');
Route::get('/blog/delete/{id}',['uses'=>'website\backend\BlogController@delete', 'as'=>'blog.delete']);

Route::resource('fashionvideocategory','website\backend\FashionVideoCategoryController');
Route::get('/fashionvideoscategory/delete/{id}', ['uses'=>'website\backend\FashionVideoCategoryController@delete', 'as' =>'fashionvideocategory.delete']);

Route::resource('fashionvideo','website\backend\FashionVideoController');
Route::get('/fashionvideo/delete/{id}', ['uses'=>'website\backend\FashionVideoController@delete', 'as' =>'fashionvideo.delete']);


// Route::resource('fashionvideo','website\backend\FashionVideoController');

// Route::get('/fashionvides/delete/{id}', ['uses'=>'website\backend\FashionVideoController', 'as'=>'fashionvideo.delete']);

Route::resource('aboutpage', 'website\backend\AboutPageController');
Route::get('about-page/delete/{id}', ['uses'=>'website\backend\AboutPageController@delete', 'as' =>'aboutpage.delete']);

Route::resource('addresspage', 'website\backend\AddressPageController');
Route::get('address-page/delete/{id}', ['uses'=>'website\backend\AddressPageController@delete', 'as' =>'addresspage.delete']);




