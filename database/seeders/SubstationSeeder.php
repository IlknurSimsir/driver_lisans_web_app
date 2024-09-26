<?php

namespace Database\Seeders;

use App\Models\SubstationModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubstationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'substation_name' => 'Selçuklu',
                'phone' => '05555555551345',
                'address' => 'Selçuklu',
                'substation_photo' => 'substation_photo.png',
                'maps' => 'selçuklu',

            ],
            [
                'substation_name' => 'Meram',
                'phone' => '05555557551345',
                'address' => 'Meram',
                'substation_photo' => 'substation_photo.png',
                'maps' => 'Meram',

            ],
            [
                'substation_name' => 'Karatay',
                'phone' => '05555551351345',
                'address' => 'Karatay',
                'substation_photo' => 'substation_photo.png',
                'maps' => 'Karatay',

            ],


        ];

        SubstationModel::insert($data);
    }
}
