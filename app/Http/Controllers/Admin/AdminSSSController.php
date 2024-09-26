<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SssModel;
use Illuminate\Http\Request;

class AdminSSSController extends Controller
{
    public function sss()
    {
        $sss = SssModel::all();
        return view("admin_panel.sss", compact('sss'));
    }
    public function update(Request $request)
    {
        $sss = SssModel::find($request->id);

        if (!$sss) {
            return redirect()->back()->with('error', 'Soru Cevap bulunamadı.');
        }

        $sss->question = $request->question;
        $sss->answer = $request->answer;
        $sss->save();

        return redirect()->back()->with('success', 'Soru Cevap başarıyla güncellendi!');
    }


    public function add(Request $request)
    {
        if (!$request->has(['question', 'answer'])) {
            return redirect()->back()->with('error', 'Soru veya Cevap eksik.');
        }
        $sss = new SssModel();

        $sss->question = $request->question;
        $sss->answer = $request->answer;
        $sss->save();

        return redirect()->back()->with('success', 'Soru Cevap başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $sss = SssModel::find($request->id);

        if (!$sss) {
            return redirect()->back()->with('error', 'Soru Cevap bulunamadı.');
        }

        $sss->delete();

        return redirect()->back()->with('success', 'Soru Cevap başarıyla silindi!');
    }
}
