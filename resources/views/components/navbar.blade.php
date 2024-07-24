<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puratos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .user-box {
            display: none;
        }
        .user-box::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 90%;
            transform: translateX(-50%);
            border-width: 0 10px 10px 10px;
            border-style: solid;
            border-color: transparent transparent white transparent;
        }
        /* Ensure the second list background and border fill the entire screen height */
        .full-height {
            height: 100%;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen m-0 p-0 w-full">

    <!-- Navbar Wrapper -->
    <header class="bg-white sticky top-0 z-50 w-full border-b border-gray-300">
        <div class="w-full flex items-center justify-between">
            
            <!-- Left Container - Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Puratos Logo" class="h-25 ml-4 mt-3 mb-3">
            </div>
            
            <!-- Right Container - Menu Icon and Icons -->
            <div class="flex items-center space-x-4 lg:hidden">
                <i class="fa-solid fa-magnifying-glass text-2xl font-thin"></i>
                <div id="userIcon" class="relative flex items-center justify-center w-10 h-10 rounded-full cursor-pointer hover:bg-gray-100" onclick="toggleUserBox()">
                    <i class="fa-regular fa-user text-2xl font-thin"></i>
                </div>
                <button id="menuButton">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Right Container - Full Menu -->
            <div class="hidden lg:flex flex-1 flex-col items-start space-y-5 ml-5">
                <!-- Top Menu -->
                <div class="flex justify-end bg-stone-100 py-3 rounded-bl-full w-full">
                    <nav>
                        <ul class="flex items-center space-x-2 sm:space-x-4 text-sm mr-4">
                            <li><a href="/products" class="text-gray-700 hover:text-red-600">Ürünlerimiz</a></li>
                            <li><a href="/recipes" class="text-gray-700 hover:text-red-600">Tarifler</a></li>
                            <li><a href="/services" class="text-gray-700 hover:text-red-600">Hizmetlerimiz</a></li>
                            <li><a href="/customersearches" class="text-gray-700 hover:text-red-600">Tüketici Araştırmaları</a></li>
                            <li><a href="/aboutus" class="text-gray-700 hover:text-red-600">Puratos Hakkında</a></li>
                            <li><a href="/news" class="text-gray-700 hover:text-red-600">Haberler</a></li>
                            <li><a href="/blog" class="text-gray-700 hover:text-red-600">Blog</a></li>
                            <li><a href="/HRPage" class="text-gray-700 hover:text-red-600">İnsan Kaynakları</a></li>
                            <li><a href="/communication" class="text-gray-700 hover:text-red-600">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Bottom Menu -->
                <div class="bg-white py-2 w-full flex justify-between items-center">
                    <nav class="flex w-full justify-between items-center ml-3">
                        <ul class="flex space-x-4">
                            <li class="relative group">
                                <div class="flex items-center mr-6">
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
                                <div class="flex items-center mr-6">
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
                                <div class="flex items-center mr-6">
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
                        <!-- Search and Icons -->
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" class="border rounded-full py-2 pl-4 pr-10 focus:outline-none" placeholder="Ara">
                                <button class="absolute right-0 top-0 mt-1 mr-1 bg-black text-white rounded-full w-8 h-8 flex items-center justify-center">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <div id="userIcon" class="relative flex items-center justify-center w-10 h-10 rounded-full cursor-pointer hover:bg-gray-100" onclick="toggleUserBox()">
                                <i class="fa-regular fa-user text-2xl mr-3"></i>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- User Box -->
    <div id="userBox" class="absolute top-36 right-0 w-72 bg-white border border-gray-300 rounded-lg shadow-lg z-50">
        <div class="text-center p-4 border-b">
            <p>MyPuratos'a erişmek için giriş yapın veya üye olun</p>
        </div>
        <div class="flex flex-col text-center p-4 space-y-4">
            <a href="/login" class="py-2 border-b text-gray-700 hover:text-red-600">Giriş yap</a>
            <a href="/register" class="py-2 text-gray-700 hover:text-red-600">Kayıt ol</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden fixed inset-0 bg-white z-50 flex flex-col items-start space-y-4 lg:hidden full-height">
        <div class="flex justify-between w-full">
            <img src="{{ asset('images/logo.png') }}" alt="Puratos Logo" class="h-14 mt-2 ml-3">
            <button id="closeMenuButton" class="text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <nav class="w-full">
            <ul class="flex flex-col space-y-4 text-xl font-semibold ml-2 ">
                <li><a href="#" class="text-gray-700 hover:text-red-600 flex items-center justify-between">Ekmekçilik <i class="fa-solid fa-chevron-right text-red-600"></i></a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600 flex items-center justify-between">Pastacılık <i class="fa-solid fa-chevron-right text-red-600"></i></a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600 flex items-center justify-between">Çikolata <i class="fa-solid fa-chevron-right text-red-600"></i></a></li>
                <li><a href="#" class="text-gray-700 hover:text-red-600">Hizmet Verdiğimiz Müşterilerimiz</a></li>
            </ul>
        </nav>
        <nav class="bg-gray-100 w-full border-t border-gray-400 flex-grow">
            <ul class="flex flex-col space-y-4 text-md">
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
            </ul>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const userBox = document.getElementById('userBox');
            userBox.style.display = 'none';
        });

        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenuButton = document.getElementById('closeMenuButton');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        function toggleUserBox() {
            const userBox = document.getElementById('userBox');
            userBox.style.display = userBox.style.display === 'none' || userBox.style.display === '' ? 'block' : 'none';
        }
    </script>

</body>
</html>
