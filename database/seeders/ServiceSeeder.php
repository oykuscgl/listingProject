<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(
        [
            "title"=> "İNOVASYON MERKEZİ",
            "description"=> "Müşterilerimizin uluslararası trendlere yönelik derinlemesine araştırmalara erişimini sağlıyoruz. Eğitimler ve seminerlerle uzmanlığımızı sizlerle paylaşıyoruz.",
            "detailed_info"=> "YENİLİKÇİ FİKİRLERİNİZ İÇİN GÜVENİLİR ORTAĞINIZ
        Puratos'daki başarımızı, müşterilerimizin işletmelerinin gelişmesine imkân tanıyan ürünler ve çözümler üretmede ne kadar yardımcı olduğumuzu ölçerek belirliyoruz. Bu başarıyı yakalamanın önemli yollarından biri İnovasyon Merkezi’miz.",
        "image" => "strawberry.jpeg"
        
    ]);
    }
}
