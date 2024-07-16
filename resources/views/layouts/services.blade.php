<<<<<<< HEAD
@extends('layouts.app')

@section('content')
=======
<!DOCTYPE html>
<html lang="en">
>>>>>>> 92a584c629cbb31e7f0591d9d7c038d9b74cd43f

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Hizmetlerimiz</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .card {
            width: 100%;
            height: 90%;
            position: relative;
            overflow: hidden;
            margin: auto;
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Kartlar normal yükseklik */
        .full-height {
            height: 50vh;
        }
        .banner-container{
        margin-right: 2rem;
        margin-left: 2rem;
        }
        .banner {
            width: 100%;
            height: 35vh;
            object-fit: cover;
            margin: 10px;
            display: block;
        }
        /*KARTLAR İÇİN ARKA PLAN VE YER DÜZENİ*/
        .gradient-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem;
            background-image: linear-gradient(to top, rgba(200, 200, 200, 0.5) 30%, rgba(200, 200, 200, 0.9) 100%);
        }
        /* BAŞLIK VE FOTOĞRAF DÜZENİ */
        .banner-text {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-100%, -50%);
            text-align: center;
            color: #e53e3e;
            font-weight: bold;
        }
        /* BUTON DÜZENİ */
        .btn {
        position: absolute;
        bottom: 5%; /* Adjusted bottom position */
        left: 50%;
        transform: translateX(-50%);
        background-color: #e53e3e;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        display: flex;
        align-items: center;
        }
        .btn i {
            margin-left: 8px;
        }
        .brightness-75 {
            filter: brightness(1.25);
        }
        /* responsive küçük ekran ayarları*/
        @media (max-width: 960px)
        {
            .full-height {
            height: 10vh;
            }
            .banner-container {
            margin-right: 3rem;
            }
            .banner{
                max-width: 100%;
            }
            .btn {
            position: relative;
            margin-top: 20px;
            bottom: unset;
            left: unset;
            transform: unset;
            }
            .banner-text {
            position: absolute;
            top: 50%;
            left: 150%;
        }
        .lg-text{
        font-size: 1.2rem;
        }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
=======
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-J6JHuQlRHCUCjMUbTV800vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A800Dm800s+Xu5Br1EeMaDpWAMjC9Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
>>>>>>> 92a584c629cbb31e7f0591d9d7c038d9b74cd43f
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
<<<<<<< HEAD
</div>
<div class="card row-start mx-auto">
    <main class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
        @foreach($services as $service)
            <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
                <img class="w-full filter brightness-75" src="{{ asset('images/inovasyon.jpeg') }}" alt="{{ $service->title }}">
                <div class="gradient-overlay">
                    <h2 class="lg-title text-white text-4xl font-bold mb-4">{{ $service->title }}</h2>
                    <p class="text-gray-700 mb-4 text-2xl lg-text">{{ $service->description }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="btn mt-4">Keşfet <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        @endforeach
    </main>
</div>

</body>
@endsection
=======

    
    <div class="relative mr-2">
        <img class="w-full object-cover banner" src="{{ asset('images/puratosabout.jpeg') }}" alt="Banner Image"style="height:30vh">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
        <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
            <div class="flex items-center space-x-2 text-sm text-black">
                <p class="underline uppercase">Home ></p>
                <p class="text-red-500">HİZMETLERİMİZ</p>
            </div>
            <div>
                <h3 class="font-bold text-red-700 text-4xl mt-5">HİZMETLERİMİZ</h3>
            </div>
        </div>
    </div>

    <section class="container-fluid px-4 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">

            <div class="relative shadow-md rounded-md overflow-hidden" style="height:70vh;">
                        <img class="object-cover w-full h-full z-10 filter brightness-75" src="{{ asset('images/inovasyon.jpeg') }}" alt="Hakkımızda">
                        <div class="absolute inset-0 bg-gray-100 opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center w-full mt-16">
                    <a href="#" class="text-white text-2xl font-bold mt-4 mb-8">İNOVASYON MERKEZİ</a>
                    <p class="text-gray-700 text-2xl text-center justify-center w-96">Müşterilerimizin uluslararası trendlere yönelik derinlemesine araştırmalara erişimini sağlıyoruz. Eğitimler ve seminerlerle uzmanlığımızı sizlerle paylaşıyoruz.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-44">
                    <div class="flex items-center justify-between w-full">
                     <span class="text-md ml-1">Keşfet</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                    </a>
                </div>
            </div>


            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/ekmek.merkez.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center w-full mt-16">
                    <a href="#" class="text-white text-2xl font-bold mt-4 mb-8">EKMEKÇİLİK MERKEZİ</a>
                    <p class="text-gray-700 text-2xl text-center w-96">Belçika'nın St. Vith kentinde bulunan Ekmekçilik Merkezi, müşterilerimize, bilim insanlarına ve Puratos çalışanlarına ekmekçilikte mükemmel tatlar elde etme tutukusunu paylaşmak için özel olanaklar sağlıyor. Ayrıca merkezimiz Ekşimaya Kütüphanesi'ne de ev sahipliği yapıyor.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

       
            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/ekmek.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-40 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-4 uppercase">Endüstriyel Ekmekçilik Merkezi</a>
                    <p class="text-gray-700 text-2xl mb-4  text-center w-96">Endüstriyel Ekmekçilik Merkezi müşterilere iş süreçlerinde kullanabilecekleri çözümler geliştirmek için olanaklar ve araçlar sunmaktadır.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-8">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

            
            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/pasta.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <a href="#" class="text-white text-2xl font-bold mb-4 mt-8 uppercase">Endüstriyel Pastacılık Merkezi</a>
                    <p class="text-gray-700 text-2xl mb-4 text-center w-96">Endüstriyel Pastacılık Merkezimiz sektöre işlerini geliştirmek için ihtiyaç duydukları tüm imkanları ve araçları sağlayarak dünyanın her yerinden müşterilerimize yardımcı oluyor.</p>
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
        
            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/cikolata.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100 opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center mt-4">
                    <a href="#" class="text-white text-2xl font-bold">ÇİKOLATA MERKEZİ</a>
                    <p class="text-gray-700 text-2xl mt-8 text-center w-96">Puratos Çikolata Merkezimizde, dünyanın en iyi çikolata ve pasta şefleri eşliğinde eğitim ve seminerler düzenlenmektedir.</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>

            <div class="relative  shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/arge.jpeg') }}" alt="Sector">
                <div class="absolute inset-0 bg-gray-100  opacity-40 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center mt-4">
                    <a href="#" class="text-white text-2xl font-bold w-96">ARGE</a>
                    <p class="text-gray-700 text-2xl text-center mt-8 w-96">ARGE ekibimiz ve son teknolojiye sahip tesislerimiz tamamen hizmetinizde...</p>
                    <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-12">
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
    </section>


</body>

</html>
>>>>>>> 92a584c629cbb31e7f0591d9d7c038d9b74cd43f
