<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function mainPage()
    {
        return view("user_panel.mainPage");
    }
}
