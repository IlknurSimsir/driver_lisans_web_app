<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\LessonModel;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function lessons()
    {
        $lessons = LessonModel::all();
        return view("user_panel.lesson", compact("lessons"));
    }
}
