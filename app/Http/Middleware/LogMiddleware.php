<?php

namespace App\Http\Middleware;

use App\Models\LogModel;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;
use stdClass;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $gelenroute = $request->route()->getName() ?? $request->path();
            $insert = LogModel::insert([
                "User_id"   =>  Session::get('user_id'),
                "ip"        =>  $request->ip(),
                "Kullanici_islem" => $gelenroute,
                "Tarih"     => now(),
            ]);
            if ($insert) {
                return $next($request);
            } else {
                $Mesaj = new stdClass();
                $Mesaj->State = 0;
                $Mesaj->Baslik = 'Hata';
                $Mesaj->Icerik = 'Bir Hata Oluştu Geliştiriciyle iletişime geçin..';
                return redirect()->route('login')->with('Mesaj', $Mesaj);
            }
        } else {
            $Mesaj = new stdClass();
            $Mesaj->State = 0;
            $Mesaj->Baslik = 'Hata';
            $Mesaj->Icerik = 'Yetkisiz Erişim';
            return redirect()->route('login')->with('Mesaj', $Mesaj);
        }
    }
}
