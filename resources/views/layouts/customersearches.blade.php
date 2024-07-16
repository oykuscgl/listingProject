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

            <div class="relative shadow-md rounded-md overflow-hidden h-96">
                        <img class="object-cover w-full h-full z-10 filter brightness-75" src="{{ asset('images/sensobus.jpeg') }}" alt="Hakkımızda">
                        <div class="absolute inset-0 bg-gray-100 opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-start text-center w-full mt-16">
                    <a href="#" class="text-white text-2xl font-bold mt-4 mb-8">SENSOBUS</a>
                    <p class="text-gray-700 text-2xl text-center justify-center w-96">Puratos Sensobus, müşteri tercihlerini yerinde tespit edebilmek için kullanıldığımız mobil bir duyusal analiz laboratuvarıdır.</p>
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


            <div class="relative shadow-md rounded-lg overflow-hidden h-96">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/sensory.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-start text-center w-full mt-16">
                    <a href="#" class="text-white text-2xl font-bold mt-4 mb-8">DUYUSAL ANALİZLER</a>
                    <p class="text-gray-700 text-2xl text-center w-96">Duyusal Analizler, tüketici isteklerine, algı ve tercihlerine göre ürünler ve uygulamalar geliştirmeyi sağlar.</p>
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

       
            <div class="relative shadow-md rounded-lg overflow-hidden h-96">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/taste-.jpeg') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-40 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <a href="#" class="text-white text-2xl font-bold mb-8 mt-4 uppercase">TASTE TOMORROW</a>
                    <p class="text-gray-700 text-2xl mb-4  text-center w-96">Ekmekçilik, pastacılık ve çikolata ile ilgili global ve yerel tüketici davranışlarına dair derinlemesine analizleri keşfedin.</p>
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

            
            <div class="relative shadow-md rounded-lg overflow-hidden h-96">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('images/article.png') }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <a href="#" class="text-white text-2xl font-bold mb-4 mt-8 uppercase">GÜNCEL MAKALELER</a>
                    <p class="text-gray-700 text-2xl mb-4 text-center w-96">Sektöre dair inovasyonları, ilham veren konseptleri, ekmeçilik, pastacılık ve çikolata sektörleri ile ilgili yenilikleri öğrenmek için makalelerimize göz atabilirsi</p>
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
    </section>


</body>

</html>
