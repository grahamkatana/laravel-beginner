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
/*Route::get('customers',function(){

    $customers = ['Juliet Katana',
    'Kenneth Katana',
    'Linda Katana','Lisa Katana'
];
    return view('internals.customers',['customers'=>$customers,]);
});
Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::get('customers/{customer}','CustomersController@show');
Route::patch('customers/{customer}','CustomersController@update');
Route::delete('customers/{customer}','CustomersController@destroy');
Route::get('customers/{customer}/edit','CustomersController@edit');
Route::post('customers','CustomersController@store');*/
//------------my routes start here------------------

Route::get('/', function () {
    return view('home');
});

Route::get('contact','contactFormController@create');
Route::post('contact','contactFormController@store');
Route::view('about','about');
//Route::resource('customers','CustomersController')->middleware('auth');
Route::resource('customers','CustomersController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
