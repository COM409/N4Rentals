<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('DVD', function () {
    return view('n4_DVD');
});

Route::get('BluRay', function () {
    return view('n4_BluRay');
});

Route::get('Games', function () {
    return view('n4_Games');
});

Route::get('CustomerLogin', function () {
    return view('customer.custLogin');
});

Route::get('RentalHistory', function () {
    return view('customer.rentalHistory');
});

Route::get('AdminLogin', function () {
    return view('admin.adminLogin');
});

Route::get('AddProduct', function () {
    return view('admin.addProd');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
