<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\OrganisationModel;
use App\Models\SubstationModel;
use App\Models\UserSideModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainPageController extends Controller
{
    public function mainPage()
    {
        $user_side = UserSideModel::first();
        $substations = SubstationModel::all();
        return view("user_panel.mainPage", compact('user_side', 'substations'));
    }


    public function reachUsEmail(Request $request)
    {
        $organisation = OrganisationModel::first();
        // Formdan gelen verileri al
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('mail');
        $info = $request->input('getInfo');

        // E-posta verilerini oluştur
        $data = [
            'name' => $name,
            'surname' => $surname,
            'phone' => $phone,
            'email' => $email,
            'info' => $info,
        ];
        // E-posta gönderimi
        try {
            Mail::send(
                'admin_panel.reachUs',
                $data,
                function ($message) {
                    $message->from(env('MAIL_FROM_ADDRESS'), 'İletişim');
                    $message->to('ilknursimsir205@gmail.com')->subject('İletişim Formu - Yeni Mesaj');
                }
            );

            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
