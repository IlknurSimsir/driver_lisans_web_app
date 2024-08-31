<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\OrganisationModel;
use App\Models\TeacherClassModel;
use App\Models\TeacherModel;

class ClassController extends Controller
{
    public function class()
    {
        $organisation_name = OrganisationModel::first();
        $class = ClassModel::all();
        $teacher = TeacherModel::all();
        $teacherclass = TeacherClassModel::all();
        return view("admin_panel.class", compact('class', 'organisation_name', 'teacher', 'teacherclass'));
    }

    public function update(Request $request)
    {
        $class = ClassModel::find($request->id);
        $class->name = $request->name;
        $class->term = $request->term;
        //$class->lesson_teacher_id = $request->lesson_teacher_id;
        $class->class_size = $request->class_size;
        $class->start_date = $request->start_date;
        $class->save();

        return redirect()->back()->with('success', 'Sınıf başarıyla güncellendi!');
    }

    public function add(Request $request)
    {
        $class = new ClassModel();

        $class->name = $request->name;
        $class->term = $request->term;
        $class->class_size = $request->class_size;
        $class->start_date = $request->start_date;
        $class->save();

        $classid = $class->id;
        $teacherclass = new TeacherClassModel();
        $teacherclass->class_id = $classid;
        $teacherclass->teacher_id = $request->lesson_teacher_id;
        $teacherclass->save();

        return redirect()->back()->with('success', 'Sınıf başarıyla eklendi!');
    }
}
