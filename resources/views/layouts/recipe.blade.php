@extends('layouts.app')

@section('content')

<section class="container mt-10 p-4">
<header class="text-white py-4 px-6 flex items-center justify-between">
    <div class="text-2xl font-bold text-black"></div>
    <p class="mt-4 text-sm/relaxed">
        {{ $recipe->title }}
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
            <p class="mt-14 text-sm/relaxed">
                {{ $recipe->title }}
            </p>
        </div>
    </div>

    <div class="p-4">
        <ul class="list-disc list-inside mt-2">
            <p class="mt-4 text-sm/relaxed">
                {!! $recipe->detailed_info !!}
            </p>
        </ul>
    </div>

    <div class="p-4">
        <a href="{{ route('recipes.index') }}" class="text-red-500">Tüm Tariflere Geri Dön</a>
    </div>
</section>


@endsection
