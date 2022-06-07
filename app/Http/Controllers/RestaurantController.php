<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

class RestaurantController extends Controller
{
    //
    public function getAllRestaurants(){
        $restaurants = Restaurant::all();
        return response()->json([
            "status" => "Success",
            "restaurnts" => $restaurants
        ], 200);
    }

    public function getRestaurant($id = null){
        $restaurant = Restaurant::find($id);
        return response()->json([
            "status" => "Success",
            "restaurant" => $restaurant
        ], 200);
        
    }
}
