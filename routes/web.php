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
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::post('/DynamicDependent/fetch', 'FlightController@fetch')->name('dynamicdependent.fetch');
// Route::post('DynamicDependent/testing', 'FlightController@testing')->name('testing');
Route::get('/searchflight', 'FlightController@search')->name('searchflight');
Route::get('/searchhotel', 'LodgingController@search')->name('searchhotel');
Route::post('/searchhotel/results', 'LodgingController@results');
Route::post('/searchflight/results', 'FlightController@results');
//Route::post('/DependenciaDinamica/')




Route::resources([
     'activities' => 'ActivityController',
     'activityProviders' => 'ActivityProviderController',
     'adresses' => 'AdressController',
     'airplanes' => 'AirplaneController',
     'airports' => 'AirportController',
     'flights' => 'FlightController',
     'insurances' => 'InsuranceController',
     'lodgings' => 'LodgingController',
     'packages' => 'PackageController',
     'paymentMethods' => 'PaymentMethodController',
     'reserves' => 'ReserveController',
     'roles' => 'RoleController',
     'rooms' => 'RoomController',
     'roomSchedules' => 'RoomScheduleController',
     'seats' => 'SeatController',
     'stretches' => 'StretchController',
     'transfers' => 'TransferController',
     'transferProviders' => 'TransferProviderController',
     'transferSchedules' => 'TransferScheduleController',
     'users' => 'UserController',
     'vehicles' => 'VehicleController',
     'vehicleSchedules' => 'VehicleScheduleController',
     'vehicleSuppliers' => 'VehicleSupplierController',

    //Nested weás

    'users.reserves' => 'User\ReserveController',
    'reserves.paymentMethods' => 'Reserve\PaymentMethodController',

]);

Route::get('/hola', function() {
    return view('activities.create');
});

// Route::get('/vuelos', function() {
//     return view('salvacion.flights.search');
// });


//Cart
Route::get('cart/purchases', [
    'as' => 'cart-purchases',
    'uses' => 'CartController@show'
]);
Route::get('cart/add/habitacion/{id}', 'CartController@addRoom');
Route::get('cart/add/vehicle/{id}', 'CartController@addVehicle');
Route::get('cart/add/activity/{id}/{amountOfKids}/{amountOfAdults}', 'CartController@addActivity');
Route::get('cart/add/flight/{id}', 'CartController@addFlight');
Route::get('cart/add/transfer/{id}', 'CartController@addTransfer');
Route::get('cart/add/insurance/{id}', 'CartController@addInsurance');
Route::get('cart/thrashCart', 'CartController@thrashCart');
Route::get('cart/deleteItem/{key}/{index}', 'CartController@deleteItem');
Route::get('detail/order', [
    'middleware' => 'auth',
    'as' => 'orderDetail',
    'uses' => 'CartController@orderDetail'
]);

