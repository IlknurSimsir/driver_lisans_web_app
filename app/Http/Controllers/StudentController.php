<?php

namespace App\Http\Controllers;

use App\Models\CourseStatusModel;
use App\Models\LicenceTypeModel;
use App\Models\OrganisationModel;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function student()
    {
        $student = StudentModel::all();
        $course = CourseStatusModel::all();
        $license = LicenceTypeModel::all();

        return view("admin_panel.student", compact('student', 'course', 'license'));
    }
    public function update(Request $request)
    {
        $student = StudentModel::find($request->id);
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->course_status = $request->course_status;
        $student->license_type = $request->license_type;
        $student->class_id = $request->class_id;
        $student->save();

        return redirect()->back()->with('success', 'Öğrenci başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        $student = new StudentModel();

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->course_status = $request->course_status;
        $student->license_type = $request->license_type;
        $student->class_id = $request->class_id;
        $student->save();
        $organisation = OrganisationModel::first();
        $organisation->student_number = $organisation->student_number + 1;
        $organisation->save();

        return redirect()->back()->with('success', 'Öğrenci başarıyla oluşturuldu!');
    }

    public function delete(Request $request)
    {
        $student = StudentModel::find($request->id);

        if (!$student) {
            return redirect()->back()->with('error', 'Öğrenci bulunamadı.');
        }

        $student->delete();
        $organisation = OrganisationModel::first();
        $organisation->student_number = $organisation->student_number - 1;
        $organisation->save();
        return redirect()->back()->with('success', 'Öğrenci başarıyla silindi!');
    }
}
