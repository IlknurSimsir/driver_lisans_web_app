<?php

namespace Database\Seeders;

use App\Models\TeacherModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 6; $i++) {
            $data[] = [
                'name' => 'default' . $i,
                'surname' => 'teacher' . $i,
                'phone' => '0555555555' . $i,
                'email' => 'default_student' . $i . '_' . Str::random(5) . '@gmail.com', // Benzersiz e-posta
                'explanation' => 'Direksiyon Eğitmeni',
                'photo' => 'photo.png' . $i,
                'lesson_id' => '1',
            ];
        }

        TeacherModel::insert($data);
    }
}
