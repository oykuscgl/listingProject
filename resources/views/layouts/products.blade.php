<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/productscript.js') }}"></script>
    <script src="{{ asset('js/allproductscript.js') }}"></script>
    <style>
        .hidden {
            display: none;
        }
        .active {
            background-color: #f87171; /* Tailwind red-500 */
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
                <div class="flex flex-row items-center">
                    <button data-category-id="1" class="filter-button flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Ekmekçilik</label>
                        <span>
                          <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                          </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button data-category-id="2" class="filter-button flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Pastacılık</label>
                        <span class="ml-auto">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button data-category-id="3" class="filter-button flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Çikolata</label>
                        <span class="ml-auto">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 md:rounded mt-8">
                <div class="mb-4">
                    <span class="text-lg ml-3 mb-5">Bitmiş ürüne göre arama</span>
                </div>
                <button onclick="toggleCheckboxes()" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform scale-90 hover:text-red-500">
                    <label class="text-sm text-black ml-1">Ürün çeşidi seç</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
                <div id="checkboxes" class="flex flex-col hidden mt-2 ml-3">
                    <!-- Ensure these filters match the values you expect in your product data -->
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="bitkisel-bazli" class="mr-2">
                        Bitkisel Bazlı
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="bitkisel-protein" class="mr-2">
                        Bitkisel protein
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="glutensiz" class="mr-2">
                        Glutensiz
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="hayvansal-yag-icemez" class="mr-2">
                        Hayvansal yağ içermez
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="lif-kaynagi" class="mr-2">
                        Lif Kaynağı
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="sut-icremez" class="mr-2">
                        Süt içermez
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="tahillar-tohumlar" class="mr-2">
                        Tahıllar & Tohumlar
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="yapay-tatlandirici" class="mr-2">
                        Yapay tatlandırıcı
                    </label>
                </div>
            </div>
        </aside>

        <main class="w-4/5 p-4">
            <div class="flex justify-between mb-4">
                <button onclick="toggleFilters()" class="flex items-center justify-between p-2 bg-red-500 text-white rounded-full shadow-md">
                    <span>Filtreleri Göster</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg>
                </button>
            </div>
            <div id="product-container" class="grid grid-cols-3 gap-4">
                @foreach($products as $product)
                    <div class="card border rounded-lg p-4"
                        data-category-id="{{ $product->category_id }}"
                        data-filters="{{ $product->filters }}"> <!-- Ensure you provide a filters attribute if needed -->
                        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700 font-bold">{{ $product->price }} ₺</span>
                            <span class="text-gray-700">{{ $product->stock }} adet stokta</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('#checkboxes input[type="checkbox"]');
            const cards = document.querySelectorAll('#product-container .card');
            const categoryButtons = document.querySelectorAll('.filter-button');
            const filterButton = document.querySelector('button[onclick="toggleFilters()"]');

            function filterCards() {
                const activeCategoryFilter = Array.from(categoryButtons)
                    .find(button => button.classList.contains('active'))?.dataset.categoryId;
                const activeFilters = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                cards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category-id');
                    const cardFilters = card.getAttribute('data-filters') ? card.getAttribute('data-filters').split(',') : [];
                    const matchesCategory = !activeCategoryFilter || cardCategory === activeCategoryFilter;
                    const matchesFilters = activeFilters.every(filter => cardFilters.includes(filter));

                    card.style.display = matchesCategory && matchesFilters ? 'block' : 'none';
                });
            }

            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Toggle active class on category buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Apply filters
                    filterCards();
                });
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', filterCards);
            });

            filterButton.addEventListener('click', function() {
                document.getElementById('checkboxes').classList.toggle('hidden');
            });

            // Initial call to apply filters on page load
            filterCards();
        });

        function toggleCheckboxes() {
            document.getElementById('checkboxes').classList.toggle('hidden');
        }

        function toggleFilters() {
            document.getElementById('checkboxes').classList.toggle('hidden');
        }
    </script>
</body>
</html>
