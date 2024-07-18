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
<body>

<div class="header mt-32 mb-20 flex flex-col items-center justify-center">
    <div class="container absolute">
        <div class="flex justify-start mr-12 text-center items-center">
            <div class="mb-10">
                <div class="flex items-center space-x-2 text-sm text-black">
                    <p class="underline uppercase text-left">Home  >  </p>
                    <p class="text-black underline ml-2 text-left">  Tariflerimiz  >  </p>
                    <p class="text-red-600 ml-2 text-left"> {{ $recipe->title }}</p>
                </div>
                <div class="text-left">
                    <h3 class="font-bold text-red-700 text-4xl mt-5">{{ $recipe->title }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="">
<div class="flex flex-row justify-center text-center">
    <div class="flex flex-col text-center w-1/3 mr-12">
        <h2 class="text-xl text-left font-semibold">İÇİNDEKİLER</h2>
        <table class="w-full h-full divide-y divide-gray-200 border border-gray-300">
            <thead>
                <tr class="bg-gray-50">
                    <th scope="col" class="py-2 px-4 text-right text-xl text-gray-500 uppercase tracking-wider border-r border-gray-300"></th>
                    <th scope="col" class="py-2 px-4 text-left text-lg text-black tracking-wider border-r border-gray-300">gr</th>
                    <hr class="border-t-2 border-gray-300 my-4">
                </tr>
            </thead>
            <tbody>
                @if ($recipe && isset($recipe->description))
                    @php
                        $ingredients = json_decode($recipe->description, true);
                    @endphp

                    <!-- KEK İÇİN -->
                    <tr>
                        <td colspan="2" class="py-2 px-4 text-xl text-black border-gray-300 border-t text-left">Kek için</td>
                    </tr>
                    @foreach ($ingredients as $index => $ingredient)
                        @if ($index < 3)
                            <tr>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['ingredient'] }}</td>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['amount'] }}</td>
                            </tr>
                        @endif
                    @endforeach

                    <!-- GANAJ İÇİN -->
                    <tr>
                        <td colspan="2" class="py-2 px-4 text-xl text-black border-gray-300 border-t text-left">Ganaj için</td>
                    </tr>
                    @foreach ($ingredients as $index => $ingredient)
                        @if ($index >= 3 && $index < 7)
                            <tr>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['ingredient'] }}</td>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['amount'] }}</td>
                            </tr>
                        @endif
                    @endforeach

                    <!-- DEKORASYON İÇİN -->
                    <tr>
                        <td colspan="2" class="py-2 px-4 text-xl text-black border-gray-300 border-t text-left">Dekorasyon için</td>
                    </tr>
                    @foreach ($ingredients as $index => $ingredient)
                        @if ($index >= 7)
                            <tr>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['ingredient'] }}</td>
                                <td class="py-2 px-4 border-gray-300 border-b text-left">{{ $ingredient['amount'] }}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="h-full w-1/3 flex items-center text-end justify-start ml-12 mt-16">
        <img class="" src="{{ asset('images/'.$recipe->image) }}" alt="Image">
    </div>
</div>


<!-- KATEGORİ OLARAK DÜZENLENİCEK -->
<div class="flex flex-row mt-20 w-full ml-64">
    <div class="bg-white shadow-md rounded-lg w-1/3 mx-2 p-4 ml-8">
        <h1 class="text-2xl font-bold mb-4">HAZIRLANIŞI</h1>

        @php
            $detailedInfo = $recipe->detailed_info;
            $sections = [
                'KEK İÇİN' => strstr($detailedInfo, 'For the Cake', false),
                'GANAJ İÇİN' => strstr($detailedInfo, 'For the Ganache', false),
                'DEKORASYON İÇİN' => strstr($detailedInfo, 'For Decoration', false)
            ];

            // Removing parts after the first occurrence of each keyword
            $sections['KEK İÇİN'] = strstr($sections['KEK İÇİN'], 'For the Ganache', true);
            $sections['GANAJ İÇİN'] = strstr($sections['GANAJ İÇİN'], 'For Decoration', true);
        @endphp

@foreach ($sections as $sectionTitle => $sectionContent)
    <h2 class="text-lg mb-2">{{ $sectionTitle }}</h2>
</br>
    <p class="text-gray-700 mb-6">{{ (e(trim($sectionContent))) }}</p>
    <hr class="border-t-2 border-gray-300 my-4">
@endforeach
    </div>
    <div class="bg-white shadow-md rounded-lg w-1/2 mx-2 mt-4 mr-12 ml-32">
        <div class="flex flex-col justify-center">
    <h2 class="font-bold text-xl mb-1">Mükemmel lezzette çilekli noel pasta...</h2>
    <p>Zorluk derecesi: x2</p>
    </div>
    </div>
</div>

<div class="flex flex-row items-center space-y-8 mt-10 ml-56">
    <div class="flex flex-wrap justify-center pt-4 mx-16">
        <a class="btn btn-sm btn-social bg-blue-700 text-white w-24 h-8 flex items-center justify-center rounded-full mr-5" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta&amp;title=%C3%87ilekli+Noel+Pasta&amp;summary=M%C3%BCkemmel+lezzette+%C3%A7ilekli+noel+pasta...&amp;source=Puratos" rel="noreferrer" target="_blank">
            <img src="assets/linkedin.svg" alt="LinkedIn Logo" class="w-4 h-4">
            <span class="ml-2">LinkedIn</span>
        </a>

        <a class="btn btn-sm btn-social bg-black text-white w-24 h-8 flex items-center justify-center rounded-full mr-5" href="https://twitter.com/intent/tweet?via=PuratosGroup&amp;url=https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta&amp;text=%C3%87ilekli+Noel+Pasta" rel="noreferrer" target="_blank">
            <img src="assets/twitter.svg" alt="Twitter Logo" class="w-4 h-4">
            <span class="ml-2">Twitter</span>
        </a>

        <a class="btn btn-sm btn-social bg-blue-600 text-white w-24 h-8 flex items-center justify-center rounded-full mr-5" href="https://www.facebook.com/dialog/share?app_id=591955047870185&amp;display=popup&amp;href=https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" rel="noreferrer" target="_blank">
            <img src="assets/facebook.svg" alt="Facebook Logo" class="w-4 h-4">
            <span class="ml-2">Facebook</span>
        </a>

        <a class="btn btn-sm btn-social bg-red-600 text-white w-24 h-8 flex items-center justify-center rounded-full mr-5 mt-5" href="http://pinterest.com/pin/create/button/?url=https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta&amp;media=https%3A%2F%2Fwww.puratos.com.tr%2Fcontent%2Fdam%2Fturkey%2Fimages%2Frecipes%2Fpatisserie%2F0f9fe39f-5308-4cbf-bed7-ff5fd4d8dd9c.jpg%2Fjcr%3Acontent%2Frenditions%2Fcq5dam.web.400.400.jpeg&amp;description=M%C3%BCkemmel+lezzette+%C3%A7ilekli+noel+pasta..." rel="noreferrer" target="_blank">
            <img src="assets/pinterest.svg" alt="Pinterest Logo" class="w-4 h-4">
            <span class="ml-2">Pinterest</span>
        </a>

        <a class="btn btn-sm btn-social bg-green-500 text-white w-24 h-8 flex items-center justify-center rounded-full mr-5 mt-5" data-action="share/whatsapp/share" href="https://api.whatsapp.com/send?text=%C3%87ilekli+Noel+Pasta+https://www.puratos.com.tr/tr/tarifler/cilekli-noel-pasta" rel="noreferrer" target="_blank">
            <img src="assets/whatsapp.svg" alt="Whatsapp Logo" class="w-4 h-4">
            <span class="ml-2">Whatsapp</span>
        </a>
    </div>
</div>






<div class="container-sm text-center bg-gray-100 py-20  mt-12 ml-8 w-full">
    <div class="flex flex-col items-start justify-center ml-64">
        <p class="text-left">KEŞFET</p>
        <div class="flex flex-row justify-start">
            <h2 class="text-2xl font-bold mb-5 text-left">TÜM İLGİLİ REÇETELERİ LİSTELE</h2>
        </div>
        <div class="bg-white border border-red-500 rounded-full p-2 text-center">
            <div class="flex flex-row justify-between items-center">
                <a href="#" class="flex flex-row items-center">
                    <span class="font-bold ml-3">Tüm Reçeteler</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>






</section>
  
</body>
</html>
