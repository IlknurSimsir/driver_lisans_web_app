<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function vehicle()
    {
        return view("user_panel.vehicle");
    }
}
