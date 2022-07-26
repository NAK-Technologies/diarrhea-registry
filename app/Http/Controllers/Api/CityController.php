<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $arr = [];
        foreach ($cities as $city) {
            array_push($arr, new CityResource($city));
        }
        return response($arr);
    }
}
