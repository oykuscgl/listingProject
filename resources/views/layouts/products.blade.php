@extends('layouts.app')

@section('content')
<div class="container-fluid flex flex-col lg:flex-row bg-gray-200">
    <!-- Main Content -->
    <div id="mainContent" class="w-full lg:w-full order-1 lg:order-2">
        <div class="mb-4 bg-gray-200">
            <h2 class="text-xl font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">ÜRÜNLERİMİZ</h2>
            <div class="p-4 shadow-md rounded-lg">
                <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                    <input type="text" placeholder="Ara..." class="flex-1 p-2 border-none focus:outline-none" />
                    <button class="p-2 bg-gray-400 flex items-center justify-center hover:bg-black rounded-full focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M10 4a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm-1 6h2v2h-2v-2zm0-4h2v2h-2V6zm0 8h2v2h-2v-2zm5.657 3.657a1 1 0 0 1-1.414-1.414A8 8 0 1 0 4 12a1 1 0 0 1-2 0A10 10 0 1 1 14.657 20.657z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <button id="toggleFiltersBtn" class="lg:hidden p-2 bg-red-500 text-white rounded-md m-4 shadow-md border-2 border-gray-300 self-center order-2 lg:order-1" onclick="toggleFilters()">
            <svg class="w-6 h-6 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            Filtreleri Göster
        </button>

        <!-- Sorting Button -->
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
                    <a href="?sort=title" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Başlığa Göre</a>
                    <a href="?sort=category" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Kategoriye Göre</a>
                    <a href="?sort=date" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Tarihe Göre</a>
                    <a href="?sort=alphabetical" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Alfabetik Sırala</a> <!-- Yeni seçenek eklendi -->
                </div>
            </div>
        </div>
        </div>
        <!-- Products Container -->
        <div id="productsContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 z-0">
            @foreach ($products as $product)
            <div class="card category-{{ $product->category_id }} bg-white rounded-lg overflow-hidden shadow-md transform transition duration-500 hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 text-md">{{ $product->description }}</p>
                    <div class="mt-4 flex justify-center">
                        <a href="{{ route('products.show', $product->id) }}" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md">Ürünü İncele</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Filter Section -->
    <div id="filterSection" class="w-full lg:w-1/4 p-4 lg:flex lg:flex-col bg-gray-100 hidden lg:block">
        <h2 class="text-xl font-bold uppercase text-black mb-4">Filtreler</h2>
        <div class="mb-4">
            <h3 class="text-lg font-bold text-gray-800">Kategoriler</h3>
            <div class="mt-2">
                <button class="filter-btn bg-white text-black py-2 px-4 border rounded-md shadow-md m-1 hover:bg-gray-100" onclick="toggleFilter(this, 'category-1')">Ekmekçilik</button>
                <button class="filter-btn bg-white text-black py-2 px-4 border rounded-md shadow-md m-1 hover:bg-gray-100" onclick="toggleFilter(this, 'category-2')">Pastacılık</button>
                <button class="filter-btn bg-white text-black py-2 px-4 border rounded-md shadow-md m-1 hover:bg-gray-100" onclick="toggleFilter(this, 'category-3')">Çikolata</button>
            </div>
        </div>
        <div class="flex flex-col mt-4">
            <button id="applyFiltersBtn" class="hidden bg-red-500 text-white py-2 px-4 rounded-md shadow-md m-1" onclick="applyFilters()">Filtreyi Uygula</button>
            <button id="resetFiltersBtn" class="hidden bg-gray-500 text-white py-2 px-4 rounded-md shadow-md m-1" onclick="resetFilters()">Filtreyi Kaldır</button>
        </div>
    </div>
</div>
@endsection

<script>
let selectedFilters = [];
let currentSort = '';

function toggleFilters() {
    const filterSection = document.getElementById('filterSection');
    const mainContent = document.getElementById('mainContent');

    if (filterSection.classList.contains('hidden')) {
        filterSection.classList.remove('hidden');
        mainContent.classList.add('hidden');
    } else {
        filterSection.classList.add('hidden');
        mainContent.classList.remove('hidden');
    }
}

function toggleSortMenu() {
    const sortOptions = document.getElementById('sortOptions');
    sortOptions.classList.toggle('hidden');
}

function toggleFilter(button, filter) {
    const index = selectedFilters.indexOf(filter);
    if (index > -1) {
        selectedFilters.splice(index, 1);
        button.classList.remove('bg-red-500', 'text-white');
        button.classList.add('bg-white', 'text-black');
    } else {
        selectedFilters.push(filter);
        button.classList.add('bg-red-500', 'text-white');
        button.classList.remove('bg-white', 'text-black');
    }

    if (selectedFilters.length > 0) {
        document.getElementById('applyFiltersBtn').classList.remove('hidden');
        document.getElementById('resetFiltersBtn').classList.remove('hidden');
    } else {
        document.getElementById('applyFiltersBtn').classList.add('hidden');
        document.getElementById('resetFiltersBtn').classList.add('hidden');
    }
}

function applyFilters() {
    document.querySelectorAll('.card').forEach(card => {
        const cardCategories = card.classList.toString();
        const shouldShow = selectedFilters.some(filter => cardCategories.includes(filter));
        card.classList.toggle('hidden', !shouldShow);
    });
}

function resetFilters() {
    selectedFilters = [];
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.classList.remove('bg-red-500', 'text-white');
        button.classList.add('bg-white', 'text-black');
    });
    document.querySelectorAll('.card').forEach(card => card.classList.remove('hidden'));
    document.getElementById('applyFiltersBtn').classList.add('hidden');
    document.getElementById('resetFiltersBtn').classList.add('hidden');
}

function applySorting(sortBy) {
    const container = document.getElementById('productsContainer');
    let items = Array.from(container.getElementsByClassName('card'));

    items.sort((a, b) => {
        const nameA = a.querySelector('h3').textContent.trim().toUpperCase();
        const nameB = b.querySelector('h3').textContent.trim().toUpperCase();
        
        if (sortBy === 'alphabetical') {
            return nameA.localeCompare(nameB);
        }
        return 0; // Default to no sorting
    });

    items.forEach(item => container.appendChild(item));
}

document.querySelectorAll('#sortOptions a').forEach(option => {
    option.addEventListener('click', function(event) {
        event.preventDefault();
        const sortType = this.getAttribute('href').split('=')[1];
        if (sortType === 'alphabetical') {
            applySorting('alphabetical');
        }
        // Update current sort type
        currentSort = sortType;
    });
});
</script>



