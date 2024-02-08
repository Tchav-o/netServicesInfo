<?php

use App\Http\Controllers\NetworkServicesController;
use App\Http\Controllers\ServiceInfoController;
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

Route::get('/', [NetworkServicesController::class, 'allServicesList']);
Route::get('/{serviceID}', [ServiceInfoController::class, 'getServiceInfo']);

