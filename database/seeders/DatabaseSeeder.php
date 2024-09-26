<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            OrganisationSeeder::class,
            LessonSeeder::class,
            CourseStatusSeeder::class,
            LicenceTypeSeeder::class,
            StudentSeeder::class,
            UserSideSeeder::class,
            VehicleSeeder::class,
            TeacherSeeder::class,
            SubstationSeeder::class,
        ]);
    }
}
