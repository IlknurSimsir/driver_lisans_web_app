<?php

namespace App\Http\Controllers;

use App\Models\OrganisationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganisationController extends Controller
{
    public function organisation()
    {
        $organisations = OrganisationModel::all();
        $organisation_name = OrganisationModel::first();

        // Veritabanı alanlarını kullanıcı dostu isimlerle eşle
        $fieldNames = [
            'name' => 'Kurum Adı',
            'phone' => 'Telefon',
            'phone_second' => 'İkinci Telefon',
            'organisation_phone' => 'Kurum Telefonu',
            'email' => 'E-Posta',
            'address' => 'Adres',
            'wp_contact' => 'WhatsApp İletişim',
            'logo' => 'Kurum Logosu',
            'banner_img' => 'Kurum Banner Fotoğrafı',
            'image' => 'Kurum Fotoğrafı',
            'instagram' => 'Instagram Hesabı',
            'facebook' => 'Facebook Hesabı',
            'youtube' => 'YouTube Kanalı',
            'x' => 'Bilinmeyen Alan',
            'app_store' => 'App Store Linki',
            'play_store' => 'Play Store Linki',
            'weekday' => 'Hafta İçi Çalışma Saatleri',
            'saturday' => 'Cumartesi Çalışma Saatleri',
            'sunday' => 'Pazar Çalışma Saatleri',
            'maps' => 'Harita Konumu',
            'student_number' => 'Öğrenci Sayısı',
            'teacher_number' => 'Öğretmen Sayısı',
            'vehicle_number' => 'Araç Sayısı',
        ];

        return view("admin_panel.organisation", compact('organisations', 'organisation_name', 'fieldNames'));
    }

    public function update(Request $request, $id)
    {
        $organisation = OrganisationModel::findOrFail($id);
        $key = $request->input('key');
        $value = $request->input('value');

        if (in_array($key, $organisation->getFillable()) || in_array($key, $organisation->getNullable())) {
            $organisation->$key = $value;
            $organisation->save();
            return redirect()->back()->with('success', 'Bilgi başarıyla güncellendi.');
        }

        return redirect()->back()->with('error', 'Geçersiz alan.');
    }

    public function updateLogo(Request $request, $id)
    {
        $request->validate([
            'logo' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);

        $organisation = OrganisationModel::findOrFail($id);

        if ($request->hasFile('logo')) {
            if ($organisation->logo) {
                Storage::delete($organisation->logo);
            }

            $path = $request->file('logo')->store('logos', 'public');
            $organisation->logo = $path;
            $organisation->save();
        }

        return redirect()->back()->with('success', 'Logo başarıyla güncellendi.');
    }

    public function updateBannerImg(Request $request, $id)
    {
        $request->validate([
            'banner_img' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);

        $organisation = OrganisationModel::findOrFail($id);

        if ($request->hasFile('banner_img')) {
            if ($organisation->banner_img) {
                Storage::delete($organisation->banner_img);
            }

            $path = $request->file('banner_img')->store('images', 'public');
            $organisation->banner_img = $path;
            $organisation->save();
        }

        return redirect()->back()->with('success', 'Banner başarıyla güncellendi.');
    }

    public function updateImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);

        $organisation = OrganisationModel::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($organisation->image) {
                Storage::delete($organisation->image);
            }

            $path = $request->file('image')->store('images', 'public');
            $organisation->image = $path;
            $organisation->save();
        }

        return redirect()->back()->with('success', 'Fotoğraf başarıyla güncellendi.');
    }
}
