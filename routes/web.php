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

Route::resources([
    // 'activities' => 'ActivityController',
    // 'activityProviders' => 'ActivityProviderController',
    // 'adresses' => 'AdressController',
    // 'airplanes' => 'AirplaneController',
    // 'airports' => 'AirportController',
    // 'flights' => 'FlightController',
    // 'insurances' => 'InsuranceController',
    // 'lodgings' => 'LodgingController',
    // 'packages' => 'PackageController',
    // 'paymentMethods' => 'PaymentMethodController',
    // 'reserves' => 'ReserveController',
    // 'roles' => 'RoleController',
    // 'rooms' => 'RoomController',
    // 'roomSchedules' => 'RoomScheduleController',
    // 'seats' => 'SeatController',
    // 'stretches' => 'StretchController',
    // 'transfers' => 'TransferController',
    // 'transferProviders' => 'TransferProviderController',
    // 'transferSchedules' => 'TransferScheduleController',
    // 'users' => 'UserController',
    // 'vehicles' => 'VehicleController',
    // 'vehicleSchedules' => 'VehicleScheduleController',
    // 'vehicleSuppliers' => 'VehicleSupplierController',

    //Nested weás

    'users.reserves' => 'User\ReserveController',
    'reserves.paymentMethods' => "Reserve\PaymentMethod"
]);

