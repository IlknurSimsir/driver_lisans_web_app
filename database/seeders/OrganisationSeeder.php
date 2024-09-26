<?php

namespace Database\Seeders;

use App\Models\OrganisationModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Dinamikod',
            'phone' => '5555151515',
            'address' => 'Türkiye',
            'email' => 'default_email@gmail.com',
            'logo' => 'public/logos/default_logo.png',
            'banner_img' => 'public/images/default_banner_img.png',
            'image' => 'public/images/default_image.png',
            'weekday' => '09:00-18:00',
            'saturday' => '09:00-12:00',
            'sunday' => '-',
            'maps' => 'noAdress',
            'student_number' => '5',
            'teacher_number' => '6',
            'vehicle_number' => '6',
            'wp_contact' => '58717962',
            'phone_second' => '2122587123',
            'organisation_phone' => '202228716',
            'instagram' => 'insta',
            'facebook' => 'face',
            'x' => 'x',
            'youtube' => 'dinamikod',
            'app_store' => 'dinamikod',
            'play_store' => 'dinamikod',

        ];
        OrganisationModel::insert($data);
    }
}
