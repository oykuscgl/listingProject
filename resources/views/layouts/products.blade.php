<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <script src="{{ asset('js/recipescript.js') }}"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-white">
    <div>
        @include('components.navbar')
    </div>

    <div class="container-fluid flex flex-row">
        <aside class="w-1/5 p-4 justify-start bg-white shadow-md rounded-lg">
            <div class="mb-4">
                <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Aktif filtreler</span>
            </div>
            <div class="mb-4">
                <button onclick="filterProducts('pastry')" class="filter-button flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                    <label class="text-lg font-bold uppercase ml-1">Pastacılık</label>
                    <span>
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="mb-4">
                <button onclick="filterProducts('Çikolata')" class="filter-button flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                    <label class="text-lg font-bold uppercase ml-1">Çikolata</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="mb-4">
                <button onclick="filterProducts('bread')" class="filter-button flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                    <label class="text-lg font-bold uppercase ml-1">Ekmekçilik</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
            </div>
        </aside>
        <div class="w-4/5 p-4">
            <div class="mb-4">
                <div class="flex items-center">
                    <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Ürünlerimiz</span>
                    
                    <form id="search-form" class="ml-auto flex items-center" action="" method="GET">
                        <input type="text" name="query" placeholder="Ara..." class="border border-gray-300 rounded-l-md p-2">
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-md hover:bg-blue-600">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M23.707 22.293a1 1 0 0 1-1.414 0l-5.894-5.894a9.918 9.918 0 0 1-1.918.606c-.46.058-.917.089-1.375.089a9.998 9.998 0 1 1 9.999-9.999c0 .458-.03.916-.089 1.375a9.918 9.918 0 0 1-.606 1.918l5.894 5.894a1 1 0 0 1 0 1.414zM12 20a8 8 0 1 0-8-8 8.009 8.009 0 0 0 8 8z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4" id="product-container">
                @foreach($products as $product)
                    <div class="border rounded-lg p-4 product-card {{ $product->category }}">
                        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700 font-bold">{{ $product->price }} ₺</span>
                            <span class="text-gray-700">{{ $product->stock }} adet stokta</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
<script>
    function filterProducts(category) {
        const cards = document.querySelectorAll('.product-card');
        cards.forEach(card => {
            // Eğer kategori 'all' ise tüm ürünleri göster
            if (category === 'all' || card.classList.contains(category)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
</script>

