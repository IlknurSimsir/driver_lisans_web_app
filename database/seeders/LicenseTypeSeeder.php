<?php

namespace Database\Seeders;

use App\Models\LicenseTypeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                [
                    'type' => 'A2',
                    'explanation' => 'Orta derecede motosikletler: 35 kW güce kadar olan ve 0.2 kW/kg güç/ağırlık oranıyla sınırlı motosikletleri kapsar.',
                ],
                [
                    'type' => 'A',
                    'explanation' => 'Büyük motosikletler: 35 kW\'tan fazla güce sahip motosikletleri kapsar.',
                ],
                [
                    'type' => 'B1',
                    'explanation' => 'Dört tekerli hafif motorlu taşıtlar: B1 sınıfı araçlar için özel olarak belirlenmiş kriterlere sahip dört tekerlekli araçları kapsar.',
                ],
                [
                    'type' => 'B',
                    'explanation' => 'Otomobiller ve kamyonetler: Maksimum 3.500 kg ağırlığında ve 8\'den az yolcu taşıma kapasitesine sahip araçları kapsar.',
                ],
                [
                    'type' => 'BE',
                    'explanation' => 'Otomobiller ve hafif römorklar: B sınıfı araçlar ile römork veya yarı römork çekebilmeyi kapsar.',
                ],
                [
                    'type' => 'C1',
                    'explanation' => 'Hafif kamyonlar: 3.500 - 7.500 kg arasında ağırlığa sahip kamyon ve benzeri araçları kapsar.',
                ],
                [
                    'type' => 'C1E',
                    'explanation' => 'Hafif kamyonlar ve römorklar: C1 sınıfı araçlarla birlikte 750 kg\'dan fazla römork çekebilmeyi kapsar.',
                ],
                [
                    'type' => 'C',
                    'explanation' => 'Kamyonlar: 7.500 kg üzerindeki ağırlığa sahip kamyonları kapsar.',
                ],
                [
                    'type' => 'CE',
                    'explanation' => 'Kamyonlar ve römorklar: C sınıfı araçlarla birlikte her türlü römork veya yarı römork çekebilmeyi kapsar.',
                ],
                [
                    'type' => 'D1',
                    'explanation' => 'Küçük otobüsler: En fazla 16 yolcu taşıyabilen ve 8 metreden kısa otobüsler için geçerli ehliyet sınıfıdır.',
                ],
                [
                    'type' => 'D1E',
                    'explanation' => 'Küçük otobüsler ve römorklar: D1 sınıfı araçlarla birlikte 750 kg\'dan fazla römork çekebilmeyi kapsar.',
                ],
                [
                    'type' => 'D',
                    'explanation' => 'Otobüsler: 16\'dan fazla yolcu kapasitesine sahip otobüsler için geçerli olan ehliyet sınıfıdır.',
                ],
                [
                    'type' => 'DE',
                    'explanation' => 'Otobüsler ve römorklar: D sınıfı araçlarla birlikte her türlü römork veya yarı römork çekebilmeyi kapsar.',
                ],
                [
                    'type' => 'F',
                    'explanation' => 'Tarım ve iş makineleri: Tarım ve orman işlerinde kullanılan motorlu araçları kullanabilmek için gereken ehliyet sınıfıdır.',
                ],
                [
                    'type' => 'M',
                    'explanation' => 'Mopedler: Motor gücü 4 kW\'ı geçmeyen iki, üç veya dört tekerlekli mopedleri kapsar.',
                ],
            ];

        LicenseTypeModel::insert($data);
    }
}
