<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\OrganisationModel;
use App\Models\UserSideModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $user_side = UserSideModel::first();
        $organisation_name = OrganisationModel::first();
        $substationCount = DB::table('substation')->count();
        return view("user_panel.aboutUs", compact('user_side', 'organisation_name', 'substationCount'));
    }
}
