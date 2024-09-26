<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\OrganisationModel;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function communication()
    {
        $organisations = OrganisationModel::first();
        return view("user_panel.communication", compact('organisations'));
    }
}
