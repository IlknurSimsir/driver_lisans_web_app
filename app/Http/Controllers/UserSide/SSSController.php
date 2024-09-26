<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\SssModel;
use Illuminate\Http\Request;

class SSSController extends Controller
{
    public function sss()
    {
        $sss = SssModel::all();
        return view("user_panel.sss", compact("sss"));
    }
}
