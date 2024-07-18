<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-J6JHuQlRHCUCjMUbTV800vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A800Dm800s+Xu5Br1EeMaDpWAMjC9Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        box-sizing: border-box;
    }
  
</style>

<body class="font-sans bg-white">

    
    <div>
        @include('components.navbar')
    </div>

    
    <div class="relative mr-2">
        <img class="w-full object-cover banner" src="{{ asset('images/puratosabout.jpeg') }}" alt="Banner Image"
            style="height:30vh">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
        <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
            <div class="flex items-center space-x-2 text-sm text-black">
                <p class="underline uppercase">Home ></p>
                <p class="text-red-500">PURATOS HAKKINDA</p>
            </div>
            <div>
                <h3 class="font-bold text-red-700 text-4xl mt-5">PURATOS HAKKINDA</h3>
            </div>
        </div>
    </div>

    <section class="container-fluid px-4 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
            <div class="relative  shadow-md rounded-lg overflow-hidden">
                    <div class="relative">
                        <img class="object-cover w-full h-full z-10 filter brightness-75" src="{{ asset('images/about.jpeg') }}" alt="Hakkımızda">
                        <div class="absolute inset-0 bg-black opacity-20 z-0"></div>
                    </div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 py-6 w-full mb-5 xl:h-150">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-3">HAKKIMIZDA</a>
                        <p class="text-2xl text-white opacity-100 mb-10 text-center justify-center w-96">Puratos, küresel, müşteri odaklı bir organizasyon ve sıkı sıkıya bağlı bir aile şirketidir.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full">
                    <div class="flex items-center justify-between w-full">
                     <span class="text-md ml-1">Keşfet</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                    </a>
                </div>
            </div>


            <div class="relative bg-black shadow-md rounded-lg overflow-hidden h-full ">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/us.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-black  opacity-20 z-0 "></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 py-6">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-3">DEĞERLERİMİZ</a>
                     <p class="text-white text-2xl mb-10  text-center w-96">Değerlerimiz, yaptığımız her şeyin kalbinde olan güvene dayanır. Tüm değerlerimizin özünde yer alan güven, yeni fikirler için güvenilir ortaklar olmamızı sağlıyor.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

       
            <div class="relative bg-black shadow-md rounded-lg overflow-hidden h-100">
                    <img class="w-full h-full object-cover z-10filter brightness-75" src="{{ asset('images/taah.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-black opacity-20 z-0 "></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center mb-12">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-3">TAAHHÜTLERİMİZ</a>
                        <p class="text-white text-2xl mb-5  text-center w-96">Ürünlerimiz ve çözümlerimiz sürekli besin değerlerini optimize etmeyi amaçlarken sosyal sorumluluk faaliyetlerimiz gelecek nesile yatırıma dayalıdır.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

            
            <div class="relative  shadow-md rounded-lg overflow-hidden">
                    <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/humanres.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-black  opacity-20 z-0 "></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center  mb-12">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-3">İNSAN KAYNAKLARI</a>
                        <p class="text-white text-2xl mb-5  text-center w-96">Çalışanlarımız, yetenekleri ve tutkularıyla yönlendirilir. Puratos'da şirket değerlerimizi ve çalışma prensiplerimizi harmanlayarak kendi sihrinizi yaratabilirsiniz.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>
        
            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:85vh">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/tarihce.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-black opacity-20 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center mb-12">
                    <a href="#" class="text-white text-2xl font-bold mb-5">TARİHÇEMİZ</a>
                        <p class="text-white text-2xl mb-5 text-center w-96">Puratos 100 yaşında! 100 yıl boyunca yenilik tutkusu ve yaptığımız her şeyi sürekli iyileştirme isteğiyle hareket ettik.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-20">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

        <div class="relative  shadow-md rounded-lg overflow-hidden h-full">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/sector.jpeg') }}" alt="Sector">
            <div class="absolute inset-0 bg-black  opacity-20 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center mb-12">
                        <a href="#" class="text-white text-2xl font-bold mt-4 mb-4 w-96">EKMEKÇİLİK VE PASTACILIK SEKTÖRÜ YENİDEN YAPILANDIRMA FONU</a>
                            <p class="text-white text-2xl text-center w-96">Puratos Türkiye olarak hayata geçirdiğimiz “Puratos Türkiye Ekmekçilik ve Pastacılık Sektörü Yeniden Yapılanma Fonu” ile dayanışmanın bir parçası oluyor ve depremden etkilenen bölgelerdeki yerel ekmekçilik ve pastacılık işletmelerinin yeniden ayağı kalmasına katkı sağlıyoruz.</p>
                        <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-5">
                            <div class="flex items-center justify-between w-full">
                             <span class="text-md ml-1">Keşfet</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                </div>  
                        </a>
            </div>
        </div>

            <div class="relative  shadow-md rounded-lg overflow-hidden h-auto" style="height:85vh">
                <div class="bg-gray-100 from-white to-gray-500"></div>
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/demo.png') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-black opacity-20 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center  mb-12">
                    <a href="#" class="text-white text-2xl font-bold mb-3 mt-10">PURATOS’TAN PROFESYONELLERE ÖZEL DEMO DENEYİMİ</a>
                        <p class="text-white text-2xl mb-10 text-center w-96">‘Food Innovation for Good’ yani ‘İyilik İçin Gıda İnovasyonu’ sloganıyla çıktığımız bu yolda tüm faydanın iyiliğe aktarılması için çabalıyoruz. Eğitim meraklılarını da bizlerle bu iyiliği paylaşmaya davet ediyoruz.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>
        </div>

<div class="container-sm text-center bg-gray-100 py-20 mt-12 w-full">
    <div class="flex flex-col items-center justify-center">
             <h2 class="text-2xl font-bold mb-5">PURATOS'U KEŞFEDİN</h2>
                <p class="text-2xl text-gray-700 mb-5 w-1/2">Puratos, ekmekçilik, pastacılık ve çikolata sektörlerinde artizan, endüstriyel, perakende ve yiyecek sektöründeki müşterileri için yenilikçi bir ürün yelpazesine sahip ve uygulama uzmanlığı sunan uluslararası bir gruptur.</p>
        <div class="bg-white border border-red-500 rounded-full p-2">
            <div class="flex flex-row justify-beetwen items-center">
                 <a href="#" class="flex flex-row items-center mr-2">
                <span class="font-bold text-red-600 ml-3">Oynat</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-10">
                <path fill="red" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                </svg>
                </a>
            </div>
        </div>
    </div>
</div>

</section>


</body>

</html>
