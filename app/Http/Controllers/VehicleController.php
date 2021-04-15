<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();

        return view('vehicle', [
            'vehicles' => $vehicles
        ]);
    }

    public function create(Request $request){
        Log::error("found in create!");
        
        $vehicle = new Vehicle();
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->save();

        return redirect('/vehicle');
    }
}
