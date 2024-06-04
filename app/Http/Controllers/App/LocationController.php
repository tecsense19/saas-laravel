<?php

namespace App\Http\Controllers\App;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\{
    City,
    Country,
    State
};
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();
        // Create an associative array with the "state" key
        $response = [
            'status' => true,
            'data' => $countries, // Add your additional data here
        ];
        return response()->json($response);
    }

    public function getStates($countryId)
    {
        $states = State::where('country_id', $countryId)->get();
        // Create an associative array with the "state" key
        $response = [
            'status' => true,
            'data' => $states, // Add your additional data here
        ];
        return response()->json($response);
    }
    
    public function getAllStates()
    {
        $states = State::all();
        // Create an associative array with the "state" key
        $response = [
            'status' => true,
            'data' => $states, // Add your additional data here
        ];
        return response()->json($response);
    }
    
    public function getCities($stateId)
    {
        $cities = City::where('state_id', $stateId)->get();
        // Create an associative array with the "state" key
        $response = [
            'status' => true,
            'data' => $cities, // Add your additional data here
        ];
        return response()->json($response);
    }

    public function getAllCities()
    {
        $cities = City::all();
        // Create an associative array with the "state" key
        $response = [
            'status' => true,
            'data' => $cities, // Add your additional data here
        ];
        return response()->json($response);
    }
}
