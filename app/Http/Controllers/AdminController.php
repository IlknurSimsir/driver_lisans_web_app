<?php

namespace App\Http\Controllers;


use App\Models\AnnouncementModel;
use App\Models\OrganisationModel;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_index()
    {
        $organisation_name = OrganisationModel::first();
        $announcement = AnnouncementModel::orderBy('due_date', 'desc')->get();
        $substationCount = DB::table('substation')->count();

        // Veritabanından öğrenci, öğretmen ve araç sayılarını çekme
        $chartData = DB::table('organisation') // Tabloyu kendi tablonla değiştir
            ->select('updated_at', 'student_number', 'teacher_number', 'vehicle_number')
            ->get();
        $studentStatusData = DB::table('student')
            ->select('course_status', DB::raw('count(*) as count'))
            ->groupBy('course_status')
            ->get();

        // Kurs durumlarını metinlerle eşleştir
        $durumlar = [
            1 => 'Başladı',
            2 => 'Tamamladı',
            3 => 'E-Sınavdan Kaldı',
            4 => 'Direksiyon Sınavından Kaldı',
            5 => 'Devamsızlıktan Kaldı'
        ];

        // Durumları metinle değiştirme işlemi
        $studentStatusData = $studentStatusData->map(function ($item) use ($durumlar) {
            $item->course_status = $durumlar[$item->course_status] ?? 'Bilinmeyen Durum'; // Bilinmeyen bir durum varsa
            return $item;
        });
        return view("admin_panel.admin_index", compact('announcement', 'organisation_name', 'substationCount', 'chartData', 'studentStatusData'));
    }
}
