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
                    <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="changeBackgroundColor(this)" class="h-18 flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
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
                    <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Ekmekçilik</label>
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
                <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform transform:scale-060 hover:text-red-500">
                    <label class="text-sm text-black ml-1">Ürün çeşidi seç</label>
                    <span class="ml-auto">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="mb-4">
                <span class="text-lg ml-3 mb-5">Çözümlerimiz</span>
            </div>
            <button onclick="toggleCheckboxes()" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md transform-scale-060 hover:text-red-500">
                <label class="text-sm text-black ml-1">Ürün çeşidi seç</label>
                <span class="ml-auto">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg>
                </span>
            </button>
            <div id="checkboxes" class="hidden mt-2 ml-3">
                <label><input type="checkbox" name="option1" value="option1" class="mr-2">Option 1</label>
                <label><input type="checkbox" name="option2" value="option2" class="mr-2">Option 2</label>
                <label><input type="checkbox" name="option3" value="option3" class="mr-2">Option 3</label>
            </div>
        </aside>
        <div class="w-4/5 p-4">
            <div class="mb-4">
                <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Products</span>
            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach($products as $product)
                    <div class="border rounded-lg p-4">
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




