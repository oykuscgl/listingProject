<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create(
            [
                "title"=> "Puratos’tan Turkiye’ye İkinci İnovasyon Merkezi",
                "description"=> "Ekmekcilik, pastacilık ve cikolata sektorlerine sundugu kaliteli urun ve cozumlerle kendi alaninin kuresel lideri olan Puratos, Turkiyedeki ikinci inovasyon merkezini Ankarada acti.",
                "category"=> "Kurumsal",
                "detailed_info"=> "Ekmekcilik, pastacilik ve cikolata sektorlerine sundugu kaliteli urun ve cozumlerle kendi alaninin kuresel lideri olan Puratos, Turkiyedeki ikinci inovasyon merkezini Ankarada acti. Puratos Ankara İnovasyon Merkezinde musterilerinin islerine deger katacak inovatif urunler ve cozumler gelistireceklerini söyleyen Puratos Turkiye Genel Muduru Bora Akin, ayrica sektordeki yenilikleri kesfetmelerine yardimci olarak işlerini büyütmelerine fayda saglayacaklarinin altini cizdi.

Ekmekcilik, pastacilik ve cikolata alanindaki bir asri asan tecrubesiyle artizan, yiyecek ve perakende sektorune yenilikci ürünler sunan Puratos Turkiye, dunyanin dort bir yaninda faaliyet gosteren inovasyon merkezleriyle musterilerinin ihtiyaclarina yonelik cozumler gelidtiriyor. İstanbulda bir inovasyon merkezi bulunan Puratos, ikinci inovasyon merkezini 21 Mayis 2024 tarihinde Ankara Yenimahallede acti. Puratos Turkiye Genel Müdürü Bora Akin ev sahipliğinde gerçekleşen acilisa, gorevi degisen eski Puratos APMEA Bolge Direktoru Peter Deriemaeker ve Deriemaekerden gorevi devralan yeni direktor Edouard Potnun yani sira Yenimahalle Belediye Başkani Fethi Yasar ve ATO (Ankara Ticaret Odasi) Meclis Baskani Mustafa Deryal de katildi.",
            ]);
    }
}
