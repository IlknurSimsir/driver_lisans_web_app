<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserSideModel;

use Illuminate\Database\Seeder;

class UserSideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'mainInfo' => 'Sürücü kursumuza hoş geldiniz! Profesyonel eğitmenlerimiz, modern araçlarımız ve öğrenci odaklı eğitim anlayışımız ile güvenli ve bilinçli sürücüler yetiştiriyoruz. Teorik ve pratik derslerimiz, güncel trafik kuralları ve yönetmeliklere uygun şekilde hazırlanmıştır. Yoğun programınıza uyum sağlayacak esnek ders saatleri ve birebir sürüş eğitimlerimizle, direksiyon sınavına en iyi şekilde hazırlanmanız için buradayız. ',
                'driverStage1' => 'Sürücü kursumuza kayıt olmak için kimlik fotokopisi, sağlık raporu ve öğrenim belgesi gibi temel belgeler gerekmektedir. Kayıt işlemleriyle ilgili tüm detaylar için ofisimize başvurabilir veya bizi arayabilirsiniz.',
                'driverStage2' => 'Trafik kuralları, ilk yardım ve araç tekniği konularını içeren yazılı sınav, sürücü adayları için önemli bir aşamadır. Kursumuzda verilen teorik dersler ve güncel sınav materyalleriyle bu sınavı kolayca geçmeniz için size destek oluyoruz.',
                'driverStage3' => 'Trafik kuralları, ilk yardım ve araç tekniği konularını içeren yazılı sınav, sürücü adayları için önemli bir aşamadır. Kursumuzda verilen teorik dersler ve güncel sınav materyalleriyle bu sınavı kolayca geçmeniz için size destek oluyoruz.',
                'aboutUsInfo' => 'Sürücü kursu olarak yılların deneyimi ve uzman kadromuzla, sürücü adaylarına en kaliteli eğitimi sunmayı hedefliyoruz. Her bireyin farklı öğrenme hızına ve ihtiyacına göre özel eğitim programları hazırlayarak, güvenli ve bilinçli sürücüler yetiştiriyoruz. Modern araç filomuz ve güncel eğitim materyallerimizle teorik ve pratik derslerimizi, öğrencilerimizin başarıya ulaşması için özenle tasarlıyoruz. Öğrenci memnuniyetini her zaman ön planda tutarak, esnek ders saatleri ve birebir eğitim yaklaşımımızla, sürüş sürecinizi en verimli ve keyifli hale getiriyoruz. Bizi tercih eden tüm adayların güvenle yola çıkabilmesi için buradayız!',
                'driverLicenceInfo' => 'Sürücü belgeleri, trafiğe çıkmak ve araç kullanmak için gerekli yasal izinleri sağlar. Kursumuzda, farklı araç tiplerine yönelik çeşitli sürücü belgeleri için eğitimler verilmektedir. Otomobil kullanmak isteyenler için B sınıfı, motosiklet tutkunları için A ve A2 sınıfı, ticari araç sürücülerine özel C ve D sınıfı gibi belgelerle ihtiyaçlarınıza uygun eğitim programları sunuyoruz. Profesyonel eğitmenlerimiz, teorik ve pratik eğitimlerle sizi hem yazılı sınavlara hem de direksiyon sınavlarına en iyi şekilde hazırlar. Amacımız, kurallara hakim, güvenli ve sorumlu sürücüler yetiştirmektir.',
                'teacherInfoTheoretical' => ' Teorik eğitim, trafik kuralları, ilk yardım, çevre ve araç tekniği gibi konularda bilgi sahibi olmanızı sağlar. Deneyimli eğitmenlerimiz, Milli Eğitim Bakanlığı müfredatına uygun olarak hazırlanmış güncel ders içerikleri ile sınavda başarılı olmanız için en etkili eğitimi sunar. Sınıf ortamında ya da online olarak verilen bu eğitimler sayesinde, trafikte güvenli ve bilinçli bir sürücü olmanın temellerini öğrenirsiniz.',
                'teacherInfoPractical' => 'Pratik direksiyon eğitimi, araç kullanma becerilerinizi geliştirmenizi ve trafiğe hazır hale gelmenizi sağlar. Uzman eğitmenlerimiz eşliğinde, şehir içi ve şehir dışı sürüş, park etme, şerit değiştirme gibi önemli konularda uygulamalı eğitim alırsınız. Her öğrencinin kendi hızında ilerlemesini sağlayarak, özgüvenle araç kullanmanızı hedefliyoruz. Bu eğitim, direksiyon sınavında ve gerçek hayatta güvenle araç kullanabilmeniz için büyük önem taşır.',
                'vehicleInfo' => 'Sürücü kursumuzda, eğitimlerimizde kullanılan araçlar, sürüş konforunuzu ve güvenliğinizi sağlamak üzere özenle seçilmiştir. Modern, bakımlı ve son teknoloji donanıma sahip araçlarımız, sürücü adaylarının her türlü koşula hazırlıklı olmalarına yardımcı olur. Manuel ve otomatik vites seçeneklerimizle, adayların ihtiyaçlarına uygun eğitim sunuyoruz. Ayrıca, araçlarımızın bakımları düzenli olarak yapılarak hem sürüş esnasında güvenliği en üst düzeyde tutuyor hem de sınavlarda başarılı olmanızı sağlıyoruz.',
            ],

        ];

        UserSideModel::insert($data);
    }
}
