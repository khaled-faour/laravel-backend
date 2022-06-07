<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/restaurants', [RestaurantController::class, 'getAllRestaurants'])->name("all-restaurants");
Route::get('/restaurant/{id}', [RestaurantController::class, 'getRestaurant'])->name("single-restaurant");
Route::post('/addrestaurant', [RestaurantController::class, 'addRestaurant'])->name("add-restaurant");