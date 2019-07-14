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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/dashbord', function () {
    return view('dashbord');
});


Route::post('/save_book', 'addbook_controller@store');

Route::get('/bookview','addbook_controller@display');

Route::get('/editbook/{id}','addbook_controller@edit');

Route::get('/showbook/{id}','addbook_controller@show');

Route::put('/updatebook/{id}','addbook_controller@update');

Route::get('/addbook', function () {
    return view('addbook');
});

Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::get('/categoryview', function () {
    return view('category');
});

Route::post('/savecategory','category_controller@store');

Route::get('/categoryview','category_controller@display');

Route::get('/categoryviewdetail/{id}','category_controller@view');

Route::get('/editcategoriy/{id}','category_controller@edit');

Route::put('/categorydetailedit/{id}','category_controller@update');

Route::get('/addauthor', function () {
    return view('addauthor');
});

Route::get('/categoryview','category_controller@display');

// Route::get('/authorview', function () {
//     return view('authorview');
// });
Route::post('/saveauthor','authoradd_controller@store');

Route::get('/authorview','authoradd_controller@display');

Route::get('/editauthor/{id}','authoradd_controller@edit');

Route::get('/viewauthor/{id}','authoradd_controller@view');

Route::put('/authordetailedit/{id}','authoradd_controller@update');

Route::get('/addrack', function () {
    return view('addrack');
});

Route::post('/save_rack','rack_controller@store');

Route::get('/rackview','rack_controller@display');

Route::get('/editrack/{id}','rack_controller@edit');

Route::put('/rackdetailedit/{id}','rack_controller@update');

Route::get('/rackdetailview/{id}','rack_controller@view');

Route::get('/addpublisher', function () {
    return view('addpublisher');
});

Route::post('/save_publisher','publisher_controller@store');

Route::get('/publisherview','publisher_controller@display');

Route::get('/editpublisher/{id}','publisher_controller@edit');

Route::put('/publisherdetailedit/{id}','publisher_controller@update');

Route::get('/viewpublisher/{id}','publisher_controller@view');

Route::get('/addreader', function () {
    return view('addreader');
});

Route::post('/save_reader','reader_controller@store');

Route::get('/readersview','reader_controller@display');