<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
       body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'CenturyGothic', Verdana, sans-serif;
        }
        *{
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'CenturyGothic', Verdana, sans-serif;
            font-weight: 600;
            font-style: italic;
            font-display: swap;
            src: url('clientlib-font-default/resources/fonts/CenturyGothicW05-SemiBoldIt.woff');
        }
    
</style>
<body>
 
<section class="container mt-10 p-4">
<header class="text-white py-4 px-6 flex items-center justify-between">
    <div class="text-2xl font-bold text-black">TARİFLERİMİZ</div>
  </header>
  <div class="bg-white border-t border-gray-300 flex items-center py-4 px-6 rounded-full serial">
    <input type="text" class="px-4 py-2 border border-gray-300 rounded-full flex-grow mr-2 focus:outline-none hover:border-red-500 focus:border-gray-700" placeholder="">
    <button class="bg-gray-600 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-full focus:outline-none">
    <img src="magnifying-glass-solid.svg" alt="search" class="h-6 w-6">
    </button>
    </div>
  </div>


  <div class="relative m-5 flex row justify-between">
  <p>302 items</p>
    <select class=" appearance-none bg-white border border-gray-300 px-4 py-2 pr-8 rounded-lg shadow-sm focus:outline-none focus:border-gray-700 hover:border-red-500">
      <option selected disabled>Sırala</option>
      <option value="1">En Yeni</option>
      <option value="2">Tarihe Göre Sırala</option>
    </select>
    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
      <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </div>
  </div>


    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full h-full">
        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/patisserie/0f9fe39f-5308-4cbf-bed7-ff5fd4d8dd9c.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Çilekli Noel Pasta" class="w-full h-32 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Çilekli Noel Pasta</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/Osmanlı%20Köy%20Ekmeği.tif">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/Osmanlı%20Köy%20Ekmeği.tif/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Osmanlı Köy Ekmeği" class="w-full h-32 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/Osmanlı%20Köy%20Ekmeği.tif" class="text-black">Osmanlı Köy Ekmeği</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/Osmanlı%20Köy%20Ekmeği.tif" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/chocolate/amber/Amber-sosyal%20214.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Amber Çikolata" class="w-full h-32 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Dulce De Leche Amber Çikolata</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/TAHILLI%20EKMEK.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Tahıllı Ekmek" class="w-full h-32 object-cover">
                </a>
            </figure>
            <div class="p-4">
                <h3 class="mt-2 mb-2 font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Tahıllı Ekmek</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>




        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/patisserie/PORTAKAL%20KREMALI%20CIKOLATALI%20KEK.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg"class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Portakal Kremalı Çikolatalı Kek</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/TAHILLI%20TOST%20EKMEGI.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Tahıllı Tost Ekmeği</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/KAYISI%20VE%20CEVIZLI%20EKMEK.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Kayısı & Cevizli Ekmek</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/TAHILLI%20HAMBURGER%20EKMEGI.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Tahıllı Hamburger Ekmeği</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>


        
        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/bakery/TAHILLI%20RAMAZAN%20PIDESI.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Çilekli Noel Pasta" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Tahıllı Ramazan Pidesi</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>


        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/patisserie/SONBAHAR%20KEKI.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Sonbahar Keki</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>


        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/patisserie/LIMONLU%20KATLI%20PASTA.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Çilekli Noel Pasta" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Limonlu Katlı Pasta</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
            <figure class="relative">
                <div class="absolute top-2 right-2 p-cursor-pointer">
                    <span class="btn-fav btn-fav-empty"></span>
                </div>
                <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta">
                    <img src="https://www.puratos.com.tr/content/dam/turkey/images/recipes/patisserie/KAYISILI%20EKLER.jpg/jcr:content/renditions/cq5dam.web.400.400.jpeg" alt="Çilekli Noel Pasta" class="w-full h-48 object-cover">
                </a>
            </figure>
            <div class="p-4 btn">
                <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                    <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-black">Kayısılı Ekler</a>
                </h3>
                <div class="flex justify-between items-center text-sm mt-5">
                    <p>
                        <a href="https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" class="text-red-500">Daha fazla bilgi</a>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
</body>
</html>


