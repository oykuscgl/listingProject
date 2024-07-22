<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/recipescript.js') }}"></script>
    <script src="{{ asset('js/allproductscript.js') }}"></script>

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
                    <button onclick="filterCards('pastry')" class="flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Pastacılık</label>
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
                    <button onclick="filterCards('chocolate')" class="h-18 flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Çikolata</label>
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
                    <button onclick="filterCards('bread')" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Ekmekçilik</label>
                        <span class="ml-auto">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </aside>
        <div class="w-4/5 p-4">
<div class="mb-4 bg-gray-200">
                <h2 class="text-xl font-bold uppercase text-black ml-3 mb-5 pt-4 pl-2">TARİFLERİMİZ</h2>
                <div class="p-4  shadow-md rounded-lg">
                <div class="flex items-center border border-gray-300 rounded-full overflow-hidden">
                <input type="text" placeholder="Ara..." class="flex-1 p-2 border-none focus:outline-none" />
                <button class="p-2 bg-gray-400 text-white flex items-center justify-center hover:bg-black rounded-full focus:outline-none">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10 4a6 6 0 1 1 0 12 6 6 0 0 1 0-12zm-1 6h2v2h-2v-2zm0-4h2v2h-2V6zm0 8h2v2h-2v-2zm5.657 3.657a1 1 0 0 1-1.414-1.414A8 8 0 1 0 4 12a1 1 0 0 1-2 0A10 10 0 1 1 14.657 20.657z"/>
            </svg>
        </button>
    </div>
</div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach($recipes as $recipe)
                    <div class="card border rounded-lg p-4 {{ $recipe->category }}">
                        <h2 class="text-xl font-semibold mb-2">{{ $recipe->title }}</h2>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn mt-4">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>


