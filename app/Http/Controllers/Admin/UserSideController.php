<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserSideModel;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function editMainPage()
    {
        $user_side = UserSideModel::first();
        return view('admin_panel.edit_front_side.editMainPage', compact('user_side'));
    }
    public function editMainPagePost(Request $request)
    {
        $user_side = UserSideModel::first();
        $user_side->mainInfo = $request->mainInfo;
        $user_side->driverStage1 = $request->driverStage1;
        $user_side->driverStage2 = $request->driverStage2;
        $user_side->driverStage3 = $request->driverStage3;
        $user_side->save();
        return redirect()->back()->with('success', 'Anasayfa bilgi alanı  başarıyla güncellendi!');
    }
    public function editAboutUs()
    {
        $user_side = UserSideModel::first();
        return view('admin_panel.edit_front_side.editAboutUs', compact('user_side'));
    }
    public function editAboutUsPost(Request $request)
    {
        $user_side = UserSideModel::first();
        $user_side->aboutUsInfo = $request->aboutUsInfo;
        $user_side->save();
        return redirect()->back()->with('success', 'Hakkımızda bilgi alanı  başarıyla güncellendi!');
    }
    // sürücü belgeleri düzenleme sayfası ve işlemleri
    public function editDriverLicence()
    {
        $user_side = UserSideModel::first();
        return view('admin_panel.edit_front_side.editDriverLicence', compact('user_side'));
    }
    public function editDriverLicencePost(Request $request)
    {
        $user_side = UserSideModel::first();
        $user_side->driverLicenceInfo = $request->driverLicenceInfo;
        $user_side->save();
        return redirect()->back()->with('success', 'Sürücü belgesi bilgi alanı  başarıyla güncellendi!');
    }
    public function editTeacher()
    {
        $user_side = UserSideModel::first();
        return view('admin_panel.edit_front_side.editTeacher', compact('user_side'));
    }
    public function editTeacherPost(Request $request)
    {
        $user_side = UserSideModel::first();
        $user_side->teacherInfoTheoretical = $request->teacherInfoTheoretical;
        $user_side->teacherInfoPractical = $request->teacherInfoPractical;
        $user_side->save();
        return redirect()->back()->with('success', 'Eğitmen bilgi alanı  başarıyla güncellendi!');
    }
    public function editVehicle()
    {
        $user_side = UserSideModel::first();
        return view('admin_panel.edit_front_side.editVehicle', compact('user_side'));
    }
    public function editVehiclePost(Request $request)
    {
        $user_side = UserSideModel::first();
        $user_side->vehicleInfo = $request->vehicleInfo;
        $user_side->save();
        return redirect()->back()->with('success', 'Araç bilgi alanı  başarıyla güncellendi!');
    }
}
