<?php

namespace App\Http\Controllers;

use App\Models\OrganisationModel;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function mainPage()
    {
        $organisation_name = OrganisationModel::first();
        return view("user_panel.mainPage", compact('organisation_name'));
    }
}
