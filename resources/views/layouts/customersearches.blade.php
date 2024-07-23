<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-J6JHuQlRHCUCjMUbTV800vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A800Dm800s+Xu5Br1EeMaDpWAMjC9Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        box-sizing: border-box;
    }

</style>

<body class="font-sans bg-white">
    <div>
        @include('components.navbar')
    </div>


    <div class="relative mr-2">
        <img class="w-full object-cover banner" src="{{ asset('images/puratosabout.jpeg') }}" alt="Banner Image"style="height:30vh">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
        <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
            <div class="flex items-center space-x-2 text-sm text-black">
                <p class="underline uppercase">Home ></p>
                <p class="text-red-500">TÜKETİCİ ARAŞTIRMALARI</p>
            </div>
            <div>
                <h3 class="font-bold text-red-700 text-4xl mt-5">TÜKETİCİ ARAŞTIRMALARI</h3>
            </div>
        </div>
    </div>
    <section class="container-fluid px-4 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
            @foreach($researches as $research)
            <div class="relative shadow-md rounded-lg overflow-hidden" style="height:70vh;">
                <img class="w-full h-full object-cover z-10 filter brightness-75" src="{{ asset('storage/' . $research->image) }}" alt="Hakkımızda">
                <div class="absolute inset-0 bg-gray-100  opacity-50 z-0"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center w-full mt-16">
                    <a href="{{ route('services.show', $research->id) }}" class="text-white text-2xl font-bold mt-4 mb-8">{{ $research->title }}</a>
                    <p class="text-gray-700 text-2xl text-center w-96">{{ $research->description }}</p>
                    <a href="{{ route('services.show', $research->id) }}" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
                    <div class="flex items-center justify-between w-full">
                    <span class="text-md ml-1">Keşfet</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>


</body>

</html>
