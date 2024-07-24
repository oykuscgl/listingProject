@extends('layouts.app')

@section('content')
<div class="container-fluid flex flex-col lg:flex-row bg-gray-200">

    <div id="mainContent" class="w-full lg:w-full order-1 lg:order-2">
        <div class="mb-4 bg-gray-200">
            <h2 class="text-xl font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">TARİFLERİMİZ</h2>
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

   

<div class="relative inline-block text-left mt-4 lg:mt-0">
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


        <div id="recipesContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach($recipes as $recipe)
        <div class="card border rounded-lg overflow-hidden relative p-4 {{ $recipe->category ? $recipe->category->name : '' }}">
            @if ($recipe->image)
                <div class="w-full h-48 overflow-hidden mb-4">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-full object-cover">
                </div>
            @endif  
            <h2 class="text-xl font-semibold mb-2">{{ $recipe->title }}</h2>
            <div class="flex justify-start items-center">
                <a href="{{ route('recipes.show', $recipe->id) }}" class="btn mt-4 text-red-600">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>
            </div>
        </div> 
    @endforeach
</div>

    </div>

    <aside id="filterSection" class="fixed inset-0 lg:relative lg:w-1/5 p-4 hidden lg:block lg:flex flex-col justify-start bg-white shadow-md rounded-lg order-3 lg:order-1">
        <div class="lg:hidden p-4 bg-gray-900 text-white flex justify-between items-center">
            <span class="text-lg font-bold uppercase">Filtreler</span>
            <button onclick="toggleFilters()">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="lg:mt-0 flex flex-col justify-start text-start">
            <span class="text-xl font-bold text-black mb-4">AKTİF FİLTRELER</span>
        </div>
        <div class="flex flex-col mb-4 space-y-2">
            <div class="filter-btn-wrapper">
                <button onclick="toggleBackgroundColor(this, 'Pastacılık')" class="filter-btn p-2 w-full text-left flex justify-between items-center shadow-md border-2 border-gray-300 rounded-lg hover:bg-red-600 hover:text-white">
                    PASTACILIK
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
            <div class="filter-btn-wrapper">
                <button onclick="toggleBackgroundColor(this, 'Çikolata')" class="filter-btn p-2 w-full text-left flex justify-between items-center shadow-md border-2 border-gray-300 rounded-lg hover:bg-red-600 hover:text-white">
                    ÇİKOLATA
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
            <div class="filter-btn-wrapper">
                <button onclick="toggleBackgroundColor(this, 'Ekmekçilik')" class="filter-btn p-2 w-full text-left flex justify-between items-center shadow-md border-2 border-gray-300 rounded-lg hover:bg-red-600 hover:text-white active:text-white">
                    EKMEKÇİLİK
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="mt-auto space-y-2">
            <button id="applyFiltersBtn" class="w-full p-2 bg-red-600 text-white rounded-xl border-2 border-white text-start pl-2 shadow-md" onclick="applyFilters()">Filtreyi Uygula</button>
            <button id="resetFiltersBtn" class="w-full p-2 font-bold bg-white text-red-600 rounded-xl border-2 border-red-600 text-start pl-2 shadow-md" onclick="resetFilters()">Filtreyi Kaldır</button>
        </div>
    </aside>
</div>
@endsection

<script>
    let selectedFilter = '';

    function toggleFilters() {
    console.log('toggleFilters fonksiyonu çağrıldı');
    const filterSection = document.getElementById('filterSection');
    const mainContent = document.getElementById('mainContent');

    if (filterSection.classList.contains('hidden')) {
        filterSection.classList.remove('hidden');
        filterSection.classList.add('fixed');
        mainContent.classList.add('hidden');
    } else {
        filterSection.classList.add('hidden');
        filterSection.classList.remove('fixed');
        mainContent.classList.remove('hidden');
    }
    }

    function toggleSortMenu() {
    const sortOptions = document.getElementById('sortOptions');
    sortOptions.classList.toggle('hidden');
    }

    function toggleBackgroundColor(button, filter) {
    console.log('toggleBackgroundColor fonksiyonu çağrıldı');
    const activeFilters = document.getElementById('activeFilters');
    const applyFiltersBtn = document.getElementById('applyFiltersBtn');
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');

    if (button.classList.contains('bg-red-600')){
        button.classList.contains('text-white'); 
        button.classList.remove('bg-red-600');
        button.classList.add('bg-white');
        selectedFilter = '';
        const filterText = Array.from(activeFilters.children)
                                .filter(child => child.textContent.includes(filter))
                                .map(child => child.textContent).join('');
        activeFilters.innerHTML = activeFilters.innerHTML.replace(filterText, '');
    } else {
        button.classList.add('bg-red-600');
        button.classList.remove('bg-white');
        selectedFilter = filter;
        activeFilters.innerHTML += `<div>${filter}</div>`;
    }

    
    if (selectedFilter) {
        applyFiltersBtn.classList.remove('hidden');
        resetFiltersBtn.classList.remove('hidden');
    } else {
        applyFiltersBtn.classList.add('hidden');
        resetFiltersBtn.classList.add('hidden');
    }
    }


    function applyFilters() {
    console.log('applyFilters fonksiyonu çağrıldı');
    console.log(`Seçilen filtre: ${selectedFilter}`);

    
    const url = new URL(window.location.href);
    url.searchParams.set('filter', selectedFilter);
    window.location.href = url.toString(); 
    }

    function resetFilters() {
    console.log('resetFilters fonksiyonu çağrıldı');
    selectedFilter = '';

    
    const url = new URL(window.location.href);
    url.searchParams.delete('filter');
    window.location.href = url.toString(); 
    }
    document.querySelector('input[type="text"]').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const cards = document.querySelectorAll('#recipesContainer .card');

    cards.forEach(card => {
        const title = card.querySelector('h2').textContent.toLowerCase();
        
        if (title.includes(searchTerm)) {
            card.style.display = ''; // Eşleşen kartları göster
        } else {
            card.style.display = 'none'; // Eşleşmeyen kartları gizle
        }
    });
    });
</script>
