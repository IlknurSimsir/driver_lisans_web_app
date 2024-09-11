<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverLisansController extends Controller
{
    public function driverLisans()
    {
        return view("user_panel.driverLisans");
    }
}
