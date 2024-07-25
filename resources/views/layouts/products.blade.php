@extends('layouts.app')

@section('content')
<div class="container-fluid flex flex-col lg:flex-row bg-gray-200">
    <!-- Ana İçerik -->
    <div id="mainContent" class="w-full lg:w-3/4 order-1 lg:order-2">
        <!-- Arama Alanı -->
        <div class="mb-4 bg-gray-200">
            <h2 class="text-lg font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">ÜRÜNLERİMİZ</h2>
            <div class="p-4 shadow-md rounded-lg bg-white ml-2">
                <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                    <input type="text" id="search" placeholder="Ara..." class="flex-1 p-2 border-none focus:outline-none" />
                    <button onclick="performSearch()" class="p-2 bg-red-500 flex items-center justify-center hover:bg-red-700 rounded-full focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Filtreleri Göster Butonu -->
        <button id="toggleFiltersBtn" class="lg:hidden p-2 bg-red-500 text-white rounded-md m-4 shadow-md border-2 border-gray-300 self-center order-2 lg:order-1" onclick="toggleFilters()">
            <svg class="w-6 h-6 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            Filtreleri Göster
        </button>

        <!-- Sıralama Menüsü -->
        <div class="flex justify-end w-full">
            <div class="relative inline-block text-left mt-4 lg:mt-0 mb-4 z-10">
                <button onclick="toggleSortMenu()" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="sortOptionsButton" aria-expanded="true" aria-haspopup="true">
                    Sırala
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707A1 1 0 116.293 6.293l3-3A1 1 0 0110 3zm0 14a1 1 0 01-.707-.293l-3-3a1 1 0 011.414-1.414L10 14.586l2.293-2.293A1 1 0 1113.707 13.707l-3 3A1 1 0 0110 17z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="sortOptions" class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="sortOptionsButton">
                        <a href="?sort=name" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">İsme Göre</a>
                        <a href="?sort=category" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Kategoriye Göre</a>
                        <a href="?sort=date" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Tarihe Göre</a>
                        <a href="?sort=alphabetical" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Alfabetik Sırala</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ürünler -->
        <div id="productsContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 z-0">
    @foreach ($products as $product)
    <div class="card category-{{ $product->category_id }} specialCategory-{{ $product->specialCategory }} bg-white rounded-lg overflow-hidden shadow-md transform transition duration-500 hover:scale-105 flex flex-col justify-between">
        <div class="flex flex-col flex-grow">
            <div class="w-full h-48 overflow-hidden mb-4 flex items-center justify-center">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="object-contain h-48 max-h-full max-w-full">
            </div>
            <div class="p-4 flex-grow">
                <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                <p class="text-gray-600 text-sm">{{ $product->description }}</p>
            </div>
        </div>
        <div class="flex justify-center mb-4">
            <a href="{{ route('products.show', $product->id) }}" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-700">Ürünü İncele</a>
        </div>
    </div>
    @endforeach
</div>

    </div>

    <!-- Filtreler -->
    <div id="filterSection" class="w-full lg:w-1/4 p-4 lg:flex lg:flex-col bg-gray-100 hidden lg:block">
        <!-- Çözümlerimiz Bölümü -->
        <div class="mb-4">
            <h3 class="text-lg font-bold text-gray-800 ">Çözümlerimiz</h3>
            <button id="toggleSolutions" class="w-full px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-700 focus:outline-none">
                İyilik & Sağlık Konsepti
            </button>
            <div id="solutionsOptions" class="hidden mt-2 space-y-2">
                <div class="flex items-center">
                    <input id="bitkiselBazli" type="checkbox" class="special-category-checkbox" data-category="bitkisel-bazli">
                    <label for="bitkiselBazli" class="ml-2 text-gray-700">Bitkisel Bazlı</label>
                </div>
                <div class="flex items-center">
                    <input id="bitkiselProtein" type="checkbox" class="special-category-checkbox" data-category="bitkisel-protein">
                    <label for="bitkiselProtein" class="ml-2 text-gray-700">Bitkisel Protein</label>
                </div>
                <div class="flex items-center">
                    <input id="glutensiz" type="checkbox" class="special-category-checkbox" data-category="glutensiz">
                    <label for="glutensiz" class="ml-2 text-gray-700">Glutensiz</label>
                </div>
                <div class="flex items-center">
                    <input id="hayvansalYagIcermez" type="checkbox" class="special-category-checkbox" data-category="hayvansal-yag-icermez">
                    <label for="hayvansalYagIcermez" class="ml-2 text-gray-700">Hayvansal Yağ İçermez</label>
                </div>
                <div class="flex items-center">
                    <input id="lifKaynağı" type="checkbox" class="special-category-checkbox" data-category="lif-kaynagi">
                    <label for="lifKaynağı" class="ml-2 text-gray-700">Lif Kaynağı</label>
                </div>
                <div class="flex items-center">
                    <input id="sutIcermez" type="checkbox" class="special-category-checkbox" data-category="sut-icermez">
                    <label for="sutIcermez" class="ml-2 text-gray-700">Süt İçermez</label>
                </div>
                <div class="flex items-center">
                    <input id="tahillarTohumlar" type="checkbox" class="special-category-checkbox" data-category="tahillar-tohumlar">
                    <label for="tahillarTohumlar" class="ml-2 text-gray-700">Tahıllar & Tohumlar</label>
                </div>
                <div class="flex items-center">
                    <input id="yumurtaIcermez" type="checkbox" class="special-category-checkbox" data-category="yumurta-icermez">
                    <label for="yumurtaIcermez" class="ml-2 text-gray-700">Yumurta İçermez</label>
                </div>
            </div>
        </div>

        <!-- Kategoriler -->
        <div class="mb-4">
            <h3 class="text-lg font-bold text-gray-800">Kategoriler</h3>
            <div class="mt-2">
                <div class="flex items-center">
                    <input id="category1" type="checkbox" class="category-checkbox" data-category="1">
                    <label for="category1" class="ml-2 text-gray-700">Ekmekçilik</label>
                </div>
                <div class="flex items-center">
                    <input id="category2" type="checkbox" class="category-checkbox" data-category="2">
                    <label for="category2" class="ml-2 text-gray-700">Pastacılık</label>
                </div>
                <div class="flex items-center">
                    <input id="category3" type="checkbox" class="category-checkbox" data-category="3">
                    <label for="category3" class="ml-2 text-gray-700">Çikolata</label>
                </div>
            </div>
        </div>

        <div class="mb-4 flex justify-center">
            <button id="clearFiltersBtn" class="px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-700" onclick="clearFilters()">Filtreleri Kaldır</button>
        </div>
    </div>
</div>
@endsection
<script>document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const productsContainer = document.getElementById('productsContainer');
    const filterSection = document.getElementById('filterSection');
    const toggleFiltersBtn = document.getElementById('toggleFiltersBtn');
    const sortOptionsButton = document.getElementById('sortOptionsButton');
    const sortOptions = document.getElementById('sortOptions');
    const clearFiltersBtn = document.getElementById('clearFiltersBtn');
    const toggleSolutionsBtn = document.getElementById('toggleSolutions');
    const solutionsOptions = document.getElementById('solutionsOptions');

    searchInput.addEventListener('input', performSearch);
    toggleFiltersBtn.addEventListener('click', toggleFilters);
    sortOptionsButton.addEventListener('click', toggleSortMenu);
    clearFiltersBtn.addEventListener('click', clearFilters);
    toggleSolutionsBtn.addEventListener('click', () => {
        solutionsOptions.classList.toggle('hidden');
    });

    const filters = {
        categories: [],
        specialCategories: []
    };

    document.querySelectorAll('.category-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', updateFilters);
    });

    document.querySelectorAll('.special-category-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', updateFilters);
    });

    function performSearch() {
        const query = searchInput.value.toLowerCase();
        document.querySelectorAll('.card').forEach(card => {
            const name = card.querySelector('h3').innerText.toLowerCase();
            const description = card.querySelector('p').innerText.toLowerCase();
            if (name.includes(query) || description.includes(query)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function toggleFilters() {
        if (filterSection.classList.contains('hidden')) {
            filterSection.classList.remove('hidden');
        } else {
            filterSection.classList.add('hidden');
        }
    }

    function toggleSortMenu() {
        sortOptions.classList.toggle('hidden');
    }

    function updateFilters() {
        filters.categories = Array.from(document.querySelectorAll('.category-checkbox:checked')).map(cb => cb.dataset.category);
        filters.specialCategories = Array.from(document.querySelectorAll('.special-category-checkbox:checked')).map(cb => cb.dataset.category);
        applyFilters();
    }

    function applyFilters() {
        document.querySelectorAll('.card').forEach(card => {
            const cardCategory = card.classList.contains('category-' + filters.categories.join('-')) || filters.categories.length === 0;
            const cardSpecialCategory = card.classList.contains('specialCategory-' + filters.specialCategories.join('-')) || filters.specialCategories.length === 0;

            if (cardCategory && cardSpecialCategory) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function clearFilters() {
        document.querySelectorAll('.category-checkbox').forEach(checkbox => checkbox.checked = false);
        document.querySelectorAll('.special-category-checkbox').forEach(checkbox => checkbox.checked = false);
        filters.categories = [];
        filters.specialCategories = [];
        applyFilters();
    }
});
</script>

