<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementModel;
use App\Models\PanelUserModel;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use stdClass;

class SignController extends Controller
{
    public function login()
    {
        return view('admin_panel.login');
    }
    public function resetPasswordPage()
    {
        return view('admin_panel.resetPasswordPage');
    }
    public function resetPasswordEmail(Request $request)
    {
        $val = FacadesValidator::make(
            [
                "email" => $request->email,
            ],
            [
                "email" => 'required|email|exists:panel_user,email',
            ],
            [
                "email.required" => 'Kullanıcı Bulunamadı',
                "email.exists" => 'Kullanıcı Bulunamadı',
                "email.email" => 'Geçersiz E-mail',
            ]
        );
        if ($val->fails()) {
            $hata = $val->errors()->first();
            $durum = new stdClass();
            $durum->State = 0; //hata olduğunda state 0 olur
            $durum->Baslik = 'Hata'; //mesajın başlığı
            $durum->Icerik = $hata; // 
            return view('admin_panel.resetPasswordPage', $durum);
        }
        $user = PanelUserModel::where('email', $request->email)->first();
        $forgot_token = Hash('sha256', md5('fp'));
        $user->forgot_token = $forgot_token;
        $user->save();
        $data = array('token' => $forgot_token);
        try {
            Mail::send(
                'admin_panel.mail',
                $data,
                function ($message) {
                    $message->from(env('MAIL_FROM_ADDRESS'), 'İletişim');
                    $message->subject("İLETİŞİM FORMU");
                    $message->to('ilknursimsir205@gmail.com');
                }

            );
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        return view('admin_panel.sendMailInfo');
    }
    public function newPassword($token)
    {
        $val = FacadesValidator::make(
            [
                "token" => $token,
            ],
            [
                "token" => 'required|exists:panel_user,forgot_token',
            ],
            [
                "token.required" => 'Kullanıcı Bulunamadı',
                "token.exists" => 'Kullanıcı Bulunamadı',
            ]
        );
        if ($val->fails()) {
            $hata = $val->errors()->first();
            $durum = new stdClass();
            $durum->State = 0; //hata olduğunda state 0 olur
            $durum->Baslik = 'Hata'; //mesajın başlığı
            $durum->Icerik = $hata; // 
            return view('admin_panel.resetPasswordPage', $durum);
        }
        $user = PanelUserModel::where(['forgot_token' => $token])->first();
        if (!$user) {
            $Mesaj = new stdClass();
            $Mesaj->State = 0;
            $Mesaj->Baslik = 'Hata';
            $Mesaj->Icerik = 'token bilgisi bulunamadı';
            return redirect()->back()->with('Mesaj', $Mesaj);
        } else {
            return view('admin_panel.newPasswordPage', ['forgot_token' => $token]);
        }
    }
    public function newPasswordPost(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);

        $user = PanelUserModel::where('forgot_token', $request->forgot_token)->first();
        if ($user) {
            //$user->forgot_token = '0';
            $user->password = $request->password;
            $user->save();
        }
        return redirect()->back()->with('success', 'Şifre  başarıyla güncellendi!');

        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
        ])->withInput($request->only('email'));
    }

    public function signOut()
    {
        Auth::logout();
        return redirect("login");
    }

    public function signInPost(Request $request)
    {



        /*
        $val = Validator::make(
            [
                "rootid" => $rootid,
                "sifre" => $sifre,
            ],
            [
                "rootid" => 'required|exists:users,id',
                "sifre" => 'required',
            ],
            [
                "rootid.required" => 'Kullanıcı Bulunamadı',
                "rootid.exists" => 'Kullanıcı Bulunamadı',
                "sifre.required" => 'Şifre Gereklidir',
            ]
        );
        if ($val->fails()) {
            $hata = $val->errors()->first();
            $durum = new stdClass();
            $durum->State = 0;
            $durum->Baslik = 'Hata';
            $durum->Icerik = $hata;
            return $durum;
        }
        */
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = PanelUserModel::where('email', $request->email)->first();

        if ($user && $request->password == $user->password) {
            Auth::login($user);
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            Session::put('last_activity', now());

            // Doğrudan ana sayfaya yönlendirin
            return redirect()->route("admin_index");
        }

        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
        ])->withInput($request->only('email'));
    }
}
