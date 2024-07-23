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
                    <button onclick="filterByCategory(1)" class="flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="filterByCategory(2)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="filterByCategory(3)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
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
                        Gluten Free
                    </label>
                </div>
            </div>
        </aside>
        <section class="w-4/5 p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($products as $product)
                <div class="card p-4 bg-white border rounded-md shadow-md" data-filters="{{ $product->category_id }}">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-4 rounded-md">
                    <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="mt-4 block text-center text-white bg-blue-500 py-2 px-4 rounded">View Details</a>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <script>

        let activeFilter = [];


        function filterCards() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                const cardCategoryId = parseInt(card.getAttribute('data-filters'));
                if (activeFilter.length === 0 || activeFilter.includes(cardCategoryId)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }


        function filterByCategory(categoryId) {
            const index = activeFilter.indexOf(categoryId);
            if (index > -1) {
                activeFilter.splice(index, 1);
            } else {
                activeFilter.push(categoryId);
            }
        }

        function toggleCheckboxes() {
            const checkboxes = document.getElementById('checkboxes');
            if (checkboxes.classList.contains('hidden')) {
                checkboxes.classList.remove('hidden');
            } else {
                checkboxes.classList.add('hidden');
            }
        }


        function changeBackgroundColor(button) {
            button.classList.toggle('bg-red-500');
        }
    </script>
@endsection
