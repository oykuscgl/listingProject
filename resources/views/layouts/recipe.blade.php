!
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/resources/views/js/recipe-script.js"></script>
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'CenturyGothic', Verdana, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'CenturyGothic', Verdana, sans-serif;
            font-weight: 600;
            font-style: italic;
            font-display: swap;
            src: url('clientlib-font-default/resources/fonts/CenturyGothicW05-SemiBoldIt.woff');
        }
        .red-more{
            color: #cc092f;
        }
    </style>
</head>
<body class="">

<div class="container m-20">
    <div style="position: relative;">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-gray-500 to-transparent"></div>
        <div class="mb-10">
            <div class="flex flex-row justify-center text-center">
                <p class="text-black underline">Home  >  </p>
                <p class="text-black underline">Tariflerimiz  >  </p>
                <p class="red-more">{{ $recipe->title }}</p>
            </div>
            <div class="text-center">
                <h3 class="text-bold red-more text-3xl">   {{ $recipe->title }}</h3></div>
        </div>
    </div>
</div>
<section>
<div class="flex flex-row justify-center">
    <div class="flex flex-col text-center">
<h2 class="text-xl font-semibold mb-4">İÇİNDEKİLER</h2>
    <table class="bg-white border border-gray-200 w-full h-full">
        <thead class="bg-gray-200">
         <tr>
            <th class="py-2 px-4 border-b">MALZEMELER</th>
            <th class="py-2 px-4 border-b">MİKTAR</th>
         </tr>
    </thead>
    <tbody>
        @if ($recipe && isset($recipe->description))
            @foreach (json_decode($recipe->description, true) as $ingredient)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $ingredient['ingredient'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $ingredient['amount'] }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
        </table>
        </div>
    <img class="ml-10 w-1/2" src="{{ asset('images/'.$recipe->image) }}" alt="Image">
    </div>
</section>
    <div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4"> HAZIRLANIŞI</h1>
    <p class="text-gray-700 mb-6">{{ $recipe->detailed_info }}</p>
<div>
</body>
</html>
