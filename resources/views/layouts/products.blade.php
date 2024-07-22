@extends('layouts.app')

@section('content')
    <title>Products</title>
    <div class="container-fluid flex flex-row">
        <aside class="w-1/5 p-4 justify-start bg-white shadow-md rounded-lg">
            <div class="mb-4">
                <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Aktif filtreler</span>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button onclick="filterCards(1)" class="flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="filterCards(2)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="filterCards(3)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
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
                <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform scale-90 hover:text-red-500">
                    <label class="text-sm text-black ml-1">Ürün çeşidi seç</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="bg-gray-100">
                <div class="mb-4 mt-4">
                    <span class="text-lg ml-3 mb-5">Çözümlerimiz</span>
                </div>
                <button onclick="toggleCheckboxes()" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform scale-90 hover:text-red-500">
                    <label class="text-sm text-black ml-1"> İyilik ve Sağlık Konsepti</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>

                <div id="checkboxes" class="flex-col hidden mt-2 ml-3">
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="bitkisel-bazli" class="mr-2">
                        Bitkisel Bazlı
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="bitkisel-protein" class="mr-2">
                        Bitkisel protein
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="checkbox" name="filter" value="gluten-free" class="mr-2">
                        Gluten-Free
                    </label>
                </div>
                <button id="reset-filter" class="p-2 mt-2 bg-red-500 text-white rounded-md hidden" onclick="resetFilters()">Filtreyi Temizle</button>
            </div>
        </aside>

        <div class="w-4/5 p-4">
            <div class="mb-4 bg-gray-200">
                <h2 class="text-xl font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">ÜRÜNLERİMİZ</h2>
                <div class="p-4 shadow-md rounded-lg">
                    <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                        <input id="search-input" type="text" placeholder="Ara..." class="flex-1 p-2 border-none focus:outline-none">
                        <button id="search-button" class="p-2 bg-gray-400 text-white flex items-center justify-center hover:bg-black rounded-full focus:outline-none">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M10 4a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm-1 6h2v2h-2v-2zm0-4h2v2h-2V6zm0 8h2v2h-2v-2zm5.657 3.657a1 1 0 0 1-1.414-1.414A8 8 0 1 0 4 12a1 1 0 0 1-2 0A10 10 0 1 1 14.657 20.657z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4" id="product-container">
                @foreach($products as $product)
                    <div class="card border rounded-lg p-4 category-{{ $product->category_id }}" data-name="{{ strtolower($product->name) }}" data-description="{{ strtolower($product->description) }}">
                        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                        <a href="{{ route('products.show', $product->id) }}">
    <span class="text-gray-700 font-bold">{{ $product->price }} ₺</span>
    <span class="text-gray-700">{{ $product->stock }} adet stokta</span>
</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        let activeFilter = null;

        function filterCards() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const checkboxes = document.querySelectorAll('#checkboxes input[type="checkbox"]');
            const cards = document.querySelectorAll('#product-container .card');

            const activeFilters = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);

            cards.forEach(card => {
                const cardName = card.dataset.name;
                const cardDescription = card.dataset.description;
                const cardFilters = card.className.includes(`category-${activeFilter}`) ? [activeFilter] : [];
                const shouldShow = activeFilters.every(filter => card.dataset.filters ? card.dataset.filters.split(',').includes(filter) : false)
                                  && (cardName.includes(searchInput) || cardDescription.includes(searchInput));

                card.style.display = shouldShow ? 'block' : 'none';
            });

            document.getElementById('reset-filter').classList.toggle('hidden', activeFilters.length === 0 && searchInput === '');
        }

        function filterByCategory(categoryId) {
            activeFilter = categoryId;
            filterCards();
        }

        function resetFilters() {
            activeFilter = null;
            document.getElementById('search-input').value = '';
            filterCards();
        }

        function toggleCheckboxes() {
            const checkboxes = document.getElementById('checkboxes');
            checkboxes.classList.toggle('hidden');
        }

        function changeBackgroundColor(button) {
            button.classList.toggle('bg-gray-500');
            button.classList.toggle('text-white');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('#checkboxes input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', filterCards);
            });

            document.getElementById('search-input').addEventListener('input', filterCards);
            document.getElementById('search-button').addEventListener('click', filterCards);

            // Initial call to apply filters on page load
            filterCards();
        });
    </script>
@endsection
