<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Login and Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<!--Navbar-->
<header class="bg-gray-100 bg-white shadow flex flex-wrap">
    <!-- Üst Menü -->
    <div class="w-full">
        <div class="flex justify-end bg-gray-200 py-6 pr-2 rounded-l-full">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-700 hover:text-red-600">Ürünlerimiz</a></li>
                    <li><a href="{{ route('recipes.index')}}" class="text-gray-700 hover:text-red-600">Tarifler</a></li>
                    <li><a href="{{ route('services.index')}}" class="text-gray-700 hover:text-red-600">Hizmetlerimiz</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">Tüketici Araştırmaları</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">Puratos Hakkında</a></li>
                    <li><a href="{{ route('news.index')}}" class="text-gray-700 hover:text-red-600">Haberler</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">Blog</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">İnsan Kaynakları</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">MyPuratos</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">İletişim</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Alt Menü -->
    <div class="bg-white py-2 shadow">
        <div class="flex justify-between items-center px-4">
            <div class="flex items-center">
                <img src="images/logo.png" alt="Puratos Logo" class="h-25">
            </div>
            <nav class="flex-grow">
                <ul class="flex space-x-4 justify-end">
                    <li class="relative group">
                        <a href="#" class="text-gray-700 hover:text-red-600">Ekmekçilik</a>
                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#" class="text-gray-700 hover:text-red-600">Pastacılık</a>
                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#" class="text-gray-700 hover:text-red-600">Çikolata</a>
                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li><a href="#" class="text-gray-700 hover:text-red-600">Hizmet Verdiğimiz Müşterilerimiz</a></li>
                </ul>
            </nav>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" class="border rounded-full py-2 pl-4 pr-10 focus:outline-none" placeholder="Ara">
                    <button class="absolute right-0 top-0 mt-2 mr-2 bg-black text-white rounded-full p-1">
                        <svg class="w-5 h-5" xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19a9 9 0 110-18 9 9 0 010 18zm0 0l6-6"></path>
                        </svg>
                    </button>
                </div>
                <a href="#" class="text-gray-700 hover:text-red-600">Web mağazası</a>
                <a href="#" class="text-gray-700 hover:text-red-600">
                    <svg class="w-6 h-6" xmlns="https://picsum.photos/536/354" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A2.992 2.992 0 018 15h8a2.992 2.992 0 012.879 2.804M18 13a4 4 0 10-8 0M9 10a3 3 0 016 0"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-700 hover:text-red-600">
                    <svg class="w-6 h-6" xmlns="https://picsum.photos/536/354" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l1 10h13l1-10h2m-6 6h6"></path>
                    </svg>
                </a>
                <!-- Login and Register Buttons -->
                <a href="{{ route('login')}}" class="text-gray-700 hover:text-red-600">Login</a>
                <a href="{{ route('register')}}" class="text-gray-700 hover:text-red-600">Register</a>

            </div>
        </div>
    </div>
</header>
</body>
</html>
