<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserSideModel;
use App\Models\VehicleModel;

class VehiclesController extends Controller
{
    public function vehicles()
    {

        $user_side = UserSideModel::first();
        $vehicles = VehicleModel::all();
        return view("user_panel.vehicle", compact('user_side', 'vehicles'));
    }
}
