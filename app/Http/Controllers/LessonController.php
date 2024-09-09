<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LessonModel;

class LessonController extends Controller
{
    public function lesson()
    {
        $lesson = LessonModel::all();
        return view("admin_panel.lesson", compact('lesson'));
    }

    public function update(Request $request)
    {
        $lesson = LessonModel::find($request->id);
        $lesson->name = $request->name;
        $lesson->explanation = $request->explanation;
        $lesson->save();

        return redirect()->back()->with('success', 'Ders başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        $lesson = new LessonModel();

        $lesson->name = $request->name;
        $lesson->explanation = $request->explanation;
        $lesson->activity = "1";
        $lesson->save();

        return redirect()->back()->with('success', 'Ders başarıyla eklendi!');
    }

    // Yeni eklenen aktiflik güncelleme metodu
    public function updateActivity(Request $request, $id)
    {
        $lesson = LessonModel::find($id);

        $lesson->activity = $request->has('activity') ? 1 : 0;

        $lesson->save();

        return redirect()->back()->with('success', 'Aktiflik durumu başarıyla güncellendi!');
    }
}
