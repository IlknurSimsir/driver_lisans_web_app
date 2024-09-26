<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\RoutesModel;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function route()
    {
        $routes = RoutesModel::all();
        return view("user_panel.route", compact("routes"));
    }
}
