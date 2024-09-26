<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'img' => 'arac.png',
                'brand' => 'TOGG',
                'model' => 'T10X',
                'year' => '2024',
                'gear_type' => 'Otomatik',
            ],
            [
                'img' => 'arac.png',
                'brand' => 'Renault',
                'model' => 'Clio',
                'year' => '2022',
                'gear_type' => 'Manuel',
            ],
            [
                'img' => 'arac.png',
                'brand' => 'Renault',
                'model' => 'Megane',
                'year' => '2023',
                'gear_type' => 'Otomatik',
            ],
            [
                'img' => 'arac.png',
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => '2021',
                'gear_type' => 'Otomatik',
            ],
            [
                'img' => 'arac.png',
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'year' => '2020',
                'gear_type' => 'Manuel',
            ],
            [
                'img' => 'arac.png',
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => '2022',
                'gear_type' => 'Otomatik',
            ],


        ];
        VehicleModel::insert($data);
    }
}
