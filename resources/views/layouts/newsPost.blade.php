<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@%5E1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
       body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'CenturyGothic', Verdana, sans-serif;
        }
        *{
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'CenturyGothic', Verdana, sans-serif;
            font-weight: 600;
            font-style: italic;
            font-display: swap;
            src: url('clientlib-font-default/resources/fonts/CenturyGothicW05-SemiBoldIt.woff');
        }

</style>
<body>

<section class="container mt-10 p-4">
<header class="text-white py-4 px-6 flex items-center justify-between">
    <div class="text-2xl font-bold text-black"></div>
    <p class="mt-4 text-sm/relaxed">
        {{ $newsPost->title }}
    </p>
  </header>
  <div class="bg-white border-t border-gray-300 flex items-center py-4 px-6 rounded-full serial">
    <input type="text" class="px-4 py-2 border border-gray-300 rounded-full flex-grow mr-2 focus:outline-none hover:border-red-500 focus:border-gray-700" placeholder="">
    <button class="bg-gray-600 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-full focus:outline-none">
    <img src="magnifying-glass-solid.svg" alt="search" class="h-6 w-6">
    </button>
    </div>
  </div>

  <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4 btn">
            <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg"></h3>
            <p class="mt-4 text-sm/relaxed">
                {{ $newsPost->title }}
            </p>
            <div class="flex justify-between items-center text-sm mt-5">
                <p class="mt-4 text-sm/relaxed">
                    {{ $newsPost->description }}
                </p>
            </div>
        </div>
    </div>

    <div class="p-4">
        <ul class="list-disc list-inside mt-2">
            <p class="mt-4 text-sm/relaxed">
                {{ $newsPost->detailed_info }}
            </p>
        </ul>
    </div>

    <div class="p-4">
        <a href="{{ route('news.index') }}" class="text-red-500">Tüm Haberlere Geri Dön</a>
    </div>
</section>

</body>
</html>
