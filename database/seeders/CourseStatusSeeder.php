<?php

namespace Database\Seeders;

use App\Models\CourseStatusModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'status' => 'Başladı',

            ],
            [
                'status' => 'Tamamladı',

            ],
            [
                'status' => 'E-Sınavdan Kaldı',

            ],
            [
                'status' => 'Direksiyon Sınavından Kaldı',

            ],
            [
                'status' => 'Devamsızlıktan Kaldı',

            ],
        ];

        CourseStatusModel::insert($data);
    }
}
