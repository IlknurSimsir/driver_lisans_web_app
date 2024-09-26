<?php

namespace Database\Seeders;

use App\Models\PanelUserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'ilknur',
            'surname' => 'f',
            'phone' => Str::random(10),
            'email' => 'ilknursimsir@gmail.com',
            'password' => '123456',

        ];
        PanelUserModel::insert($data);
    }
}
