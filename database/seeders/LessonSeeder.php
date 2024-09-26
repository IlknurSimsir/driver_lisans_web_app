<?php

namespace Database\Seeders;

use App\Models\LessonModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Trafik Kuralları ve Çevre Bilgisi',
                'explanation' => 'Genel Trafik Kuralları',
                'icon' => 'fa fa-road',
                'activity' => '1',
            ],
            [
                'name' => 'İlk Yardım Dersi',
                'explanation' => 'Sağlık ve ilk yardım bilgisi',
                'icon' => 'fa fa-first-aid',
                'activity' => '1',
            ],
            [
                'name' => 'Motor ve Araç Tekniği',
                'explanation' => 'Araçların teknik bilgisi',
                'icon' => 'fa fa-cogs',
                'activity' => '1',
            ],
            [
                'name' => 'Trafik Adabı',
                'explanation' => 'Trafikte davranış dersleri',
                'icon' => 'fa fa-users',
                'activity' => '1',
            ],
            [
                'name' => 'Sürücü Kursu Motor Dersi',
                'explanation' => 'Araç motorunun detaylı bilgisi',
                'icon' => 'fa fa-car',
                'activity' => '1',
            ],
            [
                'name' => 'Genel',
                'explanation' => 'Genel kurallar',
                'icon' => 'fa fa-info-circle',
                'activity' => '1',
            ],

        ];

        LessonModel::insert($data);
    }
}
