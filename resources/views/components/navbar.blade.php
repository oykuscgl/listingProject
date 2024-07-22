<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puratos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow sticky top-0 z-50">
        <!-- Üst Menü -->
        <div class="w-full flex justify-end">
            <div class="bg-gray-100 py-2 pb-3 pl-5 sm:pl-10 md:pl-20 lg:pl-40 rounded-bl-3xl w-full max-w-screen-lg">
                <nav>
                <ul class="flex flex-wrap justify-end space-x-2 sm:space-x-4 text-xs">
                <li><a href="/products" class="text-gray-700 hover:text-red-600">Ürünlerimiz</a></li>
                <li><a href="/recipes" class="text-gray-700 hover:text-red-600">Tarifler</a></li>
                <li><a href="/services" class="text-gray-700 hover:text-red-600">Hizmetlerimiz</a></li>
                <li><a href="/customersearches" class="text-gray-700 hover:text-red-600">Tüketici Araştırmaları</a></li>
                <li><a href="/aboutus" class="text-gray-700 hover:text-red-600">Puratos Hakkında</a></li>
                <li><a href="/news" class="text-gray-700 hover:text-red-600">Haberler</a></li>
                <li><a href="/blog" class="text-gray-700 hover:text-red-600">Blog</a></li>
                <li><a href="/HRPage" class="text-gray-700 hover:text-red-600">İnsan Kaynakları</a></li>
                <li><a href="/mypuratos" class="text-gray-700 hover:text-red-600">MyPuratos</a></li>
                <li><a href="/communication" class="text-gray-700 hover:text-red-600">İletişim</a></li>
                <li><a href="/login" class="text-gray-700 hover:text-red-600">Login</a></li>
                <li><a href="/register" class="text-gray-700 hover:text-red-600">Register</a></li>
                </ul>

                </nav>
            </div>
        </div>
        <!-- Alt Menü -->
        <div class="bg-white py-2">
            <div class="flex flex-wrap justify-between items-center px-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Puratos Logo" class="ml-4">
                </div>
                <nav class="hidden md:flex">
                    <ul class="flex space-x-4">
                        <li class="relative group">
                            <div class="flex items-center mr-5">
                                <a href="#" class="font-bold text-gray-700 hover:text-red-600">Ekmekçilik</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </div>
                            <!-- Dropdown -->
                            <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                            </div>
                        </li>
                        <li class="relative group">
                            <div class="flex items-center mr-5">
                                <a href="#" class="font-bold text-gray-700 hover:text-red-600">Pastacılık</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </div>
                            <!-- Dropdown -->
                            <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                            </div>
                        </li>
                        <li class="relative group">
                            <div class="flex items-center mr-5">
                                <a href="#" class="font-bold text-gray-700 hover:text-red-600">Çikolata</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                </svg>
                            </div>
                            <!-- Dropdown -->
                            <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                            </div>
                        </li>
                        <li><a href="#" class="font-bold text-gray-700 hover:text-red-600">Hizmet Verdiğimiz Müşterilerimiz</a></li>
                    </ul>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" class="border rounded-full py-2 pl-4 pr-10 focus:outline-none" placeholder="Ara">
                        <button class="absolute right-0 top-0 mt-1 mr-1 bg-black text-white rounded-full w-8 h-8 flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <a href="#" class="text-gray-700 hover:text-red-600">Web mağazası</a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <i class="fa-regular fa-user"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <button id="loginButton">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </a>
                </div>
                <input type="checkbox" id="menuToggle" class="hidden peer">
                <label for="menuToggle" class="md:hidden text-gray-700 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>
            <nav class="md:hidden peer-checked:block hidden">
                <ul class="flex flex-col space-y-2 mt-4">
                    <li class="relative group">
                        <div class="flex items-center justify-between">
                            <a href="#" class="font-bold text-gray-700 hover:text-red-600">Ekmekçilik</a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>
                        <!-- Dropdown -->
                        <div class="mt-2 w-full bg-white border rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li class="relative group">
                        <div class="flex items-center justify-between">
                            <a href="#" class="font-bold text-gray-700 hover:text-red-600">Pastacılık</a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>
                        <!-- Dropdown -->
                        <div class="mt-2 w-full bg-white border rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li class="relative group">
                        <div class="flex items-center justify-between">
                            <a href="#" class="font-bold text-gray-700 hover:text-red-600">Çikolata</a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </div>
                        <!-- Dropdown -->
                        <div class="mt-2 w-full bg-white border rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 1</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 2</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dropdown Item 3</a>
                        </div>
                    </li>
                    <li><a href="#" class="font-bold text-gray-700 hover:text-red-600">Hizmet Verdiğimiz Müşterilerimiz</a></li>
                    <li class="flex flex-col space-y-2">
                        <div class="relative">
                            <input type="text" class="border rounded-full py-2 pl-4 pr-10 focus:outline-none" placeholder="Ara">
                            <button class="absolute right-0 top-0 mt-1 mr-1 bg-black text-white rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                        <a href="#" class="text-gray-700 hover:text-red-600">Web mağazası</a>
                        <a href="#" class="text-gray-700 hover:text-red-600">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-red-600">
                            <button id="loginButton">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
