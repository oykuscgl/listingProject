@extends('layouts.app')

@section('content')
<div class="container-fluid flex flex-col lg:flex-row bg-gray-100">
    <div id="mainContent" class="w-full lg:w-full order-1 lg:order-2">
        <div class="mb-4 bg-gray-100">
            <h2 class="text-xl font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">TARİFLERİMİZ</h2>
            <div class="p-4 shadow-md rounded-lg bg-white ml-2">
                <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                    <input type="text" id="searchInput" placeholder="Ara..." class="flex-1 p-2 border-none focus:outline-none" />
                    <button onclick="searchRecipes()" class="p-2 bg-red-500 flex items-center justify-center hover:bg-red-900 rounded-full focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Flex container to align buttons in the same row -->
        <div class="flex justify-between mb-4">
            <button id="toggleFiltersBtn" class="lg:hidden p-2 bg-red-500 text-white rounded-md m-4 shadow-md border-2 border-gray-300 self-center" onclick="toggleFilters()">
                <svg class="w-6 h-6 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                Filtreleri Göster
            </button>

            <div class="relative flex flex-row items-center space-x-2 z-10 ml-auto">
    <button onclick="toggleSortMenu()" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="sortOptionsButton" aria-expanded="true" aria-haspopup="true">
        Sırala
        <svg class="mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707A1 1 0 116.293 6.293l3-3A1 1 0 0110 3zm0 14a1 1 0 01-.707-.293l-3-3a1 1 0 011.414-1.414L10 14.586l2.293-2.293A1 1 0 1113.707 13.707l-3 3A1 1 0 0110 17z" clip-rule="evenodd" />
        </svg>
    </button>
    <div id="sortOptions" class="hidden absolute right-0 top-8 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="sortOptionsButton">
            <a href="?sort=title" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Başlığa Göre</a>
            <a href="?sort=category" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Kategoriye Göre</a>
            <a href="?sort=date" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Tarihe Göre</a>
            <a href="?sort=alphabetical" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">Alfabetik Sırala</a>
        </div>
    </div>
</div>
        </div>

        <div id="recipesContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ml-2">
            @foreach($recipes as $recipe)
                <div class="card border rounded-lg overflow-hidden relative p-4 {{ $recipe->category ? $recipe->category->name : '' }}">
                    @if ($recipe->image)
                        <div class="w-full h-48 overflow-hidden mb-4">
                            <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif  
                    <h3 class="text-lg font-semibold mb-4">{{ ($recipe->title) }}</h3>
                    <span class="text-black-text-sm mb-16">{{ ($recipe->description) }}</span>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex justify-center bg-white">
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn px-4 py-2 bg-red-600 text-white rounded-md shadow-md">Daha fazla bilgi al</a>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>

    <aside id="filterSection" class="fixed inset-0 z-10 lg:relative lg:w-1/5 p-4 hidden lg:block lg:flex flex-col justify-start bg-white shadow-md rounded-lg order-3 lg:order-1 mt-2">
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
                <button onclick="toggleBackgroundColor(this, 'Pastacılık')" class="filter-btn p-2 w-full text-left flex justify-between items-center shadow-md border-2 border-gray-300 rounded-lg transition-colors duration-300 ease-in-out">
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
            <button id="removeFiltersBtn" class="w-full p-2 bg-white text-gray-800 rounded-xl border-2 border-red-600 text-start pl-2 shadow-md" onclick="removeFilters()">Filtreyi Kaldır</button>
        </div>
    </aside>
</div>

<script>
// Function to toggle filter section visibility
function toggleFilters() {
    const filterSection = document.getElementById('filterSection');
    filterSection.classList.toggle('hidden');
    filterSection.classList.toggle('flex');
}

// Function to toggle sort menu visibility
function toggleSortMenu() {
    const sortOptions = document.getElementById('sortOptions');
    sortOptions.classList.toggle('hidden');
}

// Function to toggle button background color and category filter
function toggleBackgroundColor(button, category) {
    const isActive = button.classList.contains('bg-red-600');
    
    if (isActive) {
        // Remove active styles
        button.classList.remove('bg-red-600', 'text-white');
        button.classList.add('bg-white', 'text-gray-800');
        button.classList.remove('hover:bg-red-700', 'hover:text-white');
        button.classList.add('hover:bg-gray-200', 'hover:text-gray-900'); // Reset hover effect
    } else {
        // Add active styles
        button.classList.add('bg-red-600', 'text-white');
        button.classList.remove('bg-white', 'text-gray-800');
        button.classList.remove('hover:bg-gray-200', 'hover:text-gray-900');
        button.classList.add('hover:bg-red-700', 'hover:text-white'); // Maintain hover effect for active state
    }
    
    // Apply filter based on the button's category
    filterRecipes(category);
}

// Function to filter recipes based on the selected category
function filterRecipes(category) {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const cardCategory = card.classList.contains(category);
        card.style.display = cardCategory ? '' : 'none';
    });
}
function handleSearchInput(event) {
    if (event.key === 'Enter') {
        searchRecipes();
    }
}
// Function to handle search input
function searchRecipes() {
    var input = document.getElementById("searchInput").value.toLowerCase();
    var cards = document.getElementsByClassName("card");

    for (var i = 0; i < cards.length; i++) {
        var cardTitle = cards[i].getElementsByTagName("h3")[0].innerText.toLowerCase();
        if (cardTitle.includes(input)) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }

    document.getElementById("searchInput").value = "";
}

// Add event listener to the search input to detect Enter key press
document.getElementById("searchInput").addEventListener("keypress", handleSearchInput);
// Function to apply filters and handle screen resize
function applyFilters() {
    // Logic to apply filters if necessary

    // After applying filters, check if filter section is visible
    const filterSection = document.getElementById('filterSection');
    if (window.innerWidth <= 1024 && filterSection.classList.contains('flex')) {
        // Hide filter section on mobile screens after applying filters
        filterSection.classList.add('hidden');
        filterSection.classList.remove('flex');
    }
}

// Function to remove filters and reset button states
function removeFilters() {
    const buttons = document.querySelectorAll('.filter-btn');
    buttons.forEach(button => {
        button.classList.remove('bg-red-600', 'text-white');
        button.classList.add('bg-white', 'text-gray-800');
        button.classList.remove('hover:bg-red-700', 'hover:text-white');
        button.classList.add('hover:bg-gray-200', 'hover:text-gray-900'); // Reset hover effect
    });

    const cards = document.querySelectorAll('.card');
    cards.forEach(card => card.style.display = '');

    document.getElementById("searchInput").value = "";
}

// Add event listener to handle screen resizing
window.addEventListener('resize', function() {
    const filterSection = document.getElementById('filterSection');
    if (window.innerWidth > 1024 && !filterSection.classList.contains('flex')) {
        filterSection.classList.add('lg:flex');
        filterSection.classList.remove('hidden');
    } else if (window.innerWidth <= 1024 && filterSection.classList.contains('lg:flex')) {
        filterSection.classList.remove('lg:flex');
        filterSection.classList.add('hidden');
    }
});
</script>

@endsection
