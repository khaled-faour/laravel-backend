<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

class RestaurantController extends Controller
{
    //
    public function getAllRestaurants(){
        $restaurants = Restaurant::all();
        echo $restaurants;
    }
}
