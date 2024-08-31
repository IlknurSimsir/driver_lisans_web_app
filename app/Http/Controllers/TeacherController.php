<?php

namespace App\Http\Controllers;

use App\Models\LessonModel;
use Illuminate\Http\Request;
use App\Models\TeacherModel;
use App\Models\OrganisationModel;
use App\Models\TeacherClassModel;

class TeacherController extends Controller
{
    public function teacher()
    {
        $organisation_name = OrganisationModel::first();
        $teacher = TeacherModel::all();
        $lesson = LessonModel::all();
        return view("admin_panel.teacher", compact('teacher', 'organisation_name', 'lesson'));
    }
    public function update(Request $request)
    {
        $teacher = TeacherModel::find($request->id);
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->lesson_id = $request->lesson_id;
        $teacher->explanation = $request->explanation;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $teacher->photo = 'storage/images/' . $filename;
        } else {
            // Eğer fotoğraf güncellenmediyse, eski fotoğrafı saklayın
            $teacher->photo = $teacher->getOriginal('photo');
        }
        $teacher->save();

        return redirect()->back()->with('success', 'Eğitmen başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'lesson_id' => 'required',
            'explanation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Fotoğraf zorunlu
        ]);

        $teacher = new TeacherModel();

        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->lesson_id = $request->lesson_id;
        $teacher->explanation = $request->explanation;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $teacher->photo = 'storage/images/' . $filename;
        }
        $teacher->save();

        return redirect()->back()->with('success', 'Eğitmen başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $teacher = TeacherModel::find($request->id);

        if (!$teacher) {
            return redirect()->back()->with('error', 'Eğitmen bulunamadı.');
        }

        $teacher->delete();

        return redirect()->back()->with('success', 'Eğitmen başarıyla silindi!');
    }
}
