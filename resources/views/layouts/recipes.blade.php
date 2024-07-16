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
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
    <body class="bg-white">
    <nav class="bg-gray-200 mb-20 p-4 flex flex-row text-center justify-center">
        <div class="container  flex flex-col items-center">
            <div class="text-2xl font-bold text-black">NAVBAR BURAYA GELİCEK</div>
        </div>
</nav>
    <div class="container-fluid flex flex-row">
        <aside class="w-1/5 p-4 justify-start bg-white shadow-md rounded-lg">
            <div class="mb-4">
                <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Aktif filtreler</span>
            </div>
                 <div class="mb-4">
                    <div class="flex flex-row items-center">
                        <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border  rounded-md shadow-md hover:text-red-500">
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
        <button onclick="changeBackgroundColor(this)"  class="h-18 flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
            <label class="text-lg font-bold uppercase ml-1" >Ekmekçilik</label>
            <span class="ml-auto">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                </svg>
            </span>
        </button>
        </div>
        </div>

            <div class="mb-4">
                <div class="flex flex-row items center">
                <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                    <label class="text-lg font-bold uppercase ml-1">Çikolata</label>
                        <span class="ml-auto">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                          </svg>
                    </span>
                </button>
            </div>
            <div class="bg-gray-100 md:rounded mt-8">
                <div class="mb-4">
                <span class="text-lg  ml-3 mb-5">Bitmiş ürüne göre arama</span>
                </div>
            <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform transform:scale-060 hover:text-red-500">
                    <label class="text-sm text-black ml-1">Ürün çeşidi seç</label>
                        <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </span>
                </button>
            </div>
    </div>
        </aside>
<div class="flex flex-col justify-end text-end w-full mr-5">
<header class="bg-gray-00 p-4 flex flex-row text-start justify-start">
        <div class="container  flex flex-col justify-start items-start">
           <div class="mb-5 text-2xl font-bold text-black">TARİFLERİMİZ</div>
           
           <div class="relative w-full">
    <div class="flex items-center">
        <input autocomplete="off" type="text" aria-autocomplete="both" aria-expanded="false" aria-haspopup="listbox" role="combobox" class="rbt-input-main form-control rbt-input px-5 py-3 pr-12 border border-gray-300 rounded-full focus:outline-none hover:border-red-500 focus:border-gray-700 w-full" value="">
        <button class="bg-gray-600 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-full focus:outline-none absolute right-0 top-0 mt-2 mr-3">
            <img src="{{ asset('images/magnifying-glass-solid.svg') }}" alt="search" class="h-6 w-6 flex items-center justify-center">
        </button>
    </div>
    <input aria-hidden="true" class="rbt-input-hint" readonly="" tabindex="-1" value="" style="background-color: transparent; border-color: transparent; box-shadow: none; color: rgba(0, 0, 0, 0.35); left: 0px; pointer-events: none; position: absolute; top: 0px; width: 100%; border-style: solid; border-width: 1px; font-size: 14px; height: 48px; line-height: 23.8px; margin: 0px; padding: 12px 60px 12px 24px;">
</div>


        </div>
</header>
        <section class="p-4">
            <div class="relative mb-4 mt-4 flex justify-between">
                <p class="text-left">{{ count($recipes) }} tarif</p>
                <div class="flex items-right">
                    <select class="appearance-none bg-white border border-gray-300 px-4 py-2 pr-8 rounded-lg shadow-sm focus:outline-none focus:border-gray-700 hover:border-red-500">
                        <option selected disabled>Sırala</option>
                        <option value="1">En Yeni</option>
                        <option value="2">Tarihe Göre Sırala</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($recipes as $recipe)   
                    <div class="h-72 card bg-white shadow-lg rounded-lg">
                        <figure class="relative">
                            <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}">
                                <img src="{{ asset('images/'.$recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                            </a>
                        </figure>
                        <div class="btn pl-5 p-2">
                            <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                                <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}"></a>
                            </h3>
                            <div class="flex flex-col items-start text-sm mt-3">
                                <h4 class="font-bold text-lg text-left mb-5">{{ $recipe->title }}</h4>
                                <p>
                                    <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}" class="text-red-500 text-lg underline">Daha fazla bilgi</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="h-72 card bg-white shadow-lg rounded-lg overflow-hidden">
                        <figure class="relative">
                            <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}">
                                <img src="{{ asset('images/'.$recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                            </a>
                        </figure>
                        <div class="p-2 pl-5 btn">
                            <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                                <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}"></a>
                            </h3>
                            <div class="flex flex-col items-start text-sm mt-3">
                            <h4 class="font-bold text-lg text-left mb-5">{{ $recipe->title }}</h4>
                                <p>
                                    <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}" class="text-red-500 text-lg underline">Daha fazla bilgi</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="h-72 card bg-white shadow-lg rounded-lg overflow-hidden">
                        <figure class="relative">
                            <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}">
                                <img src="{{ asset('images/'.$recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                            </a>
                        </figure>
                        <div class="p-2 pl-5 btn">
                            <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg">
                                <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}"></a>
                            </h3>
                            <div class="flex flex-col items-start text-sm mt-3">
                            <h4 class="font-bold text-lg text-left mb-5">{{ $recipe->title }}</h4>
                                <p>
                                    <a href="{{ route('recipes.show', ['recipe_id' => $recipe->id]) }}" class="text-red-500 text-lg underline">Daha fazla bilgi</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
    </body>
</html>
