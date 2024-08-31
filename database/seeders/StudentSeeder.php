<?php

namespace Database\Seeders;

use App\Models\StudentModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'default',
                'surname' => 'student',
                'phone' => '05555555551345',
                'email' => 'default_student@gmail.com',
                'password' => '123456',
                'license_type' => '1',
                'class_id' => '1',
                'course_status' => '1',
                'token' => '0',

            ],
            [
                'name' => 'defaultOrnek2',
                'surname' => 'studentOrnek2',
                'phone' => '05555555551345Ornek2',
                'email' => 'default_studentOrnek2@gmail.com',
                'password' => '123456Ornek2',
                'license_type' => '1',
                'class_id' => '1',
                'course_status' => '1',
                'token' => '0',

            ],
            [
                'name' => 'default2',
                'surname' => 'student2',
                'phone' => '05555555552',
                'email' => 'default_student2@gmail.com',
                'password' => '123456',
                'license_type' => '2',
                'class_id' => '1',
                'course_status' => '2',
                'token' => '0',
            ],
            [
                'name' => 'default3',
                'surname' => 'student3',
                'phone' => '05555555553',
                'email' => 'default_student3@gmail.com',
                'password' => '1234563',
                'license_type' => '3',
                'class_id' => '3',
                'course_status' => '3',
                'token' => '0',

            ],
            [
                'name' => 'default4',
                'surname' => 'student4',
                'phone' => '05555555554',
                'email' => 'default_student4@gmail.com',
                'password' => '123456',
                'license_type' => '4',
                'class_id' => '4',
                'course_status' => '4',
                'token' => '0',
            ],
            [
                'name' => 'default5',
                'surname' => 'student5',
                'phone' => '05555555555',
                'email' => 'default_student5@gmail.com',
                'password' => '123556',
                'license_type' => '5',
                'class_id' => '5',
                'course_status' => '5',
                'token' => '0',
            ],

        ];
        StudentModel::insert($data);
    }
}
