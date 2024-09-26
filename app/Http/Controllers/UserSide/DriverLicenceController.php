<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\UserSideModel;
use App\Models\LicenceTypeModel;
use Illuminate\Http\Request;

class DriverLicenceController extends Controller
{
    public function driverLicence()
    {
        $user_side = UserSideModel::first();
        $licence_type = LicenceTypeModel::all();

        return view("user_panel.driverLicence", compact('user_side', 'licence_type'));
    }
}
