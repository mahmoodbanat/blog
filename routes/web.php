<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome' );
});

Route::get('landing', function () {
    return view('landing');
});

Route::get('/test/{id}', function ($id) {
    return $id;
});

Route::get('/test/{id?}', function () {
    return 'welcome';
});
Route::get('second','Admin/SecondController@showString');   
  

Route::get ('login',function(){
    return ' mast br login to access this route';
}) -> name('login');


// Route::get ('users','UserController@indes');
 

Route::resource('news','NewsController');



Auth::routes(['verify'=> true]);

// Route::get('/home', 'Homecontroller@index')->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware ('verified');



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['prefix' => 'offers'], function () {
        //   Route::get('store', 'CrudController@store');
        Route::get('create', 'CrudController@create');
        Route::post('store', 'CrudController@store')->name('offers.store');

        Route::get('edit/{offer_id}', 'CrudController@editOffer');
        Route::post('update/{offer_id}', 'CrudController@UpdateOffer')->name('offers.update');
        Route::get('delete/{offer_id}', 'CrudController@delete')->name('offers.delete');
        Route::get('all', 'CrudController@getAllOffers')->name('offers.all');
        Route::get('get-all-inactive-offer', 'CrudController@getAllInactiveOffers');

    });

    Route::get('youtube', 'CrudController@getVideo') ->middleware('auth');
});