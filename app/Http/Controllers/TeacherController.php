<?php

namespace App\Http\Controllers;

use App\Models\LessonModel;
use Illuminate\Http\Request;
use App\Models\TeacherModel;
use App\Models\OrganisationModel;
use Illuminate\Support\Facades\Log;

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
            try {
                $file = $request->file('photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/images', $filename);
                $teacher->photo = 'storage/images/' . $filename;
            } catch (\Exception $e) {
                Log::error('Photo upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Fotoğraf yüklenirken bir hata oluştu.');
            }
        } else {
            // Eğer fotoğraf güncellenmediyse, eski fotoğrafı saklayın
            $teacher->photo = $teacher->getOriginal('photo');
        }

        $teacher->save();

        return redirect()->back()->with('success', 'Eğitmen başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        // Validasyon kontrolü
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'lesson_id' => 'required',
            'explanation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096', // Boyut limiti artırıldı
        ]);

        Log::info('Adding a new teacher', ['request' => $request->all()]);

        $teacher = new TeacherModel();
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->lesson_id = $request->lesson_id;
        $teacher->explanation = $request->explanation;

        if ($request->hasFile('photo')) {
            try {
                $file = $request->file('photo');
                // Dosya adında özel karakterleri temizleme
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9]/', '_', $file->getClientOriginalName());
                $path = $file->storeAs('public/images', $filename);
                Log::info('Photo uploaded', ['path' => $path]);
                $teacher->photo = 'storage/images/' . $filename;
            } catch (\Exception $e) {
                Log::error('Photo upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Fotoğraf yüklenirken bir hata oluştu.');
            }
        }

        // Veritabanına kaydetme işlemi
        try {
            $teacher->save();
            Log::info('Teacher saved successfully', ['teacher' => $teacher]);
        } catch (\Exception $e) {
            Log::error('Teacher save failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Eğitmen kaydedilirken bir hata oluştu.');
        }

        return redirect()->back()->with('success', 'Eğitmen başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $teacher = TeacherModel::find($request->id);

        if (!$teacher) {
            return redirect()->back()->with('error', 'Eğitmen bulunamadı.');
        }

        try {
            $teacher->delete();
            Log::info('Teacher deleted successfully', ['teacher_id' => $request->id]);
        } catch (\Exception $e) {
            Log::error('Teacher delete failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Eğitmen silinirken bir hata oluştu.');
        }

        return redirect()->back()->with('success', 'Eğitmen başarıyla silindi!');
    }
}
