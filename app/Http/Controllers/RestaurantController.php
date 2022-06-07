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
            "restos" => $restaurants
        ], 200);
    }
}
