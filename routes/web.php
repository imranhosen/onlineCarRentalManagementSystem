<?php

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');
Route::get('/fleet', 'WelcomeController@fleet');
Route::get('/service', 'WelcomeController@service');
Route::get('/rate', 'WelcomeController@rate');
Route::get('/driver', 'WelcomeController@driver');
Route::get('/tips', 'WelcomeController@tips');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/contact', 'WelcomeController@contact');

Route::get('/car-details/{id}', 'WelcomeController@carDetailsInfo');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Category/add-category', 'CategoryController@index');
Route::post('/Category/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/Category/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/Category/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/Category/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/Category/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/Category/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/Category/delete-category/{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/blog/add-blog', 'BlogController@ShowBlogyForm');
Route::post('/blog/add-blog', 'BlogController@SaveBlogInfo');
Route::get('/blog/manage-blog', 'BlogController@manageBlogInfo');
Route::get('/blog/unpublished-blog/{id}', 'BlogController@unpublishedBlogInfo');
Route::get('/blog/published-blog/{id}', 'BlogController@publishedBlogInfo');
Route::get('/blog/edit-blog/{id}', 'BlogController@editBlogInfo');
Route::get('/blog/delete-blog/{id}', 'BlogController@deleteBlogInfo');
Route::post('/blog/update-blog/', 'BlogController@updateBlogInfo');

Route::get('/car/add-car', 'CarController@ShowCarForm');
Route::post('/car/add-car', 'CarController@SaveCarForm');
Route::get('/car/manage-car', 'CarController@manageCarInfo');
Route::get('/car/unpublished-car/{id}', 'CarController@unpublishedCarInfo');
Route::get('/car/published-car/{id}', 'CarController@publishedCarInfo');
Route::get('/car/edit-car/{id}', 'CarController@editCarInfo');
Route::get('/car/delete-car/{id}', 'CarController@deleteCarInfo');
Route::post('/car/update-car', 'CarController@updateCarInfo');

Route::get('/booking', 'BookingController@index');
Route::get('/booking-register', 'BookingController@showRegisterForm');
Route::post('/new-customer', 'BookingController@saveCustomerInfo');
Route::get('/booking-info/{id}', 'BookingController@showBookingInfo');
Route::get('/customer-logout', 'BookingController@customerLogout');
Route::post('/customer-login', 'BookingController@customerLoginCheck');
Route::post('/new-order', 'BookingController@saveOrderInfo');
Route::get('/successfull', 'BookingController@orderSaved');
Route::get('/order/manage-order', 'BookingController@manageOrderInfo');
Route::get('/order/delete-order/{id}', 'BookingController@deleteOrderInfo');

Route::get('/service/add-service', 'ServiceController@showServiceForm');
Route::post('/service/new-service', 'ServiceController@saveServiceInfo');
Route::get('/service/manage-service', 'ServiceController@manageServiceInfo');
Route::get('/service/unpublished-service/{id}', 'ServiceController@unpublishedServiceInfo');
Route::get('/service/published-service/{id}', 'ServiceController@publishedServiceInfo');
Route::get('/service/edit-service/{id}', 'ServiceController@editServiceInfo');
Route::get('/service/delete-service/{id}', 'ServiceController@deleteServiceInfo');
Route::post('/service/update-service', 'ServiceController@updateServiceInfo');
Route::get('/service/service-details/{id}', 'ServiceController@detailsServiceInfo');


Route::get('/driver/add-driver', 'DriverController@showDriverForm');
Route::post('/driver/new-driver', 'DriverController@saveDriverInfo');
Route::get('/driver/manage-driver', 'DriverController@manageDriverInfo');
Route::get('/driver/unpublished-driver/{id}', 'DriverController@unpublishedDriverInfo');
Route::get('/driver/published-driver/{id}', 'DriverController@publishedDriverInfo');
Route::get('/driver/edit-driver/{id}', 'DriverController@editDriverInfo');
Route::get('/driver/delete-driver/{id}', 'DriverController@deleteDriverInfo');
Route::post('/driver/update-driver', 'DriverController@updateDriverInfo');

Route::post('/new-comment', 'CommentController@saveComment');
Route::get('/comment/manage-comment', 'CommentController@manageCommentInfo');
Route::get('/comment/delete-comment/{id}', 'CommentController@deleteComment');
Route::get('/successfully', 'CommentController@commentSaved');






