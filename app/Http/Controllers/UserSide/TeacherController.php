<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\TeacherModel;
use App\Models\UserSideModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teachers()
    {
        $user_side = UserSideModel::first();
        $teachers = TeacherModel::all();
        return view("user_panel.teacher", compact('user_side', 'teachers'));
    }
}
