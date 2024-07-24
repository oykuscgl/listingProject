@extends('layouts.app')

@section('content')

<section class="container mt-10 p-4">
    <div class="relative mr-2">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
        <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
            <div class="flex items-center space-x-2 text-sm text-black">
                <p class="underline uppercase">Home ></p>
                <p class="text-red-500">TARİFLER</p>
            </div>
            <div>
                <h3 class="font-bold text-red-700 text-4xl mt-5">{{ $recipe->title }}</h3>
            </div>
        </div>
    </div>
  <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4 btn">
            <h3 class="p-margin-top-sm p-margin-bottom-sm font-bold text-lg"></h3>
            <p class="font-bold text-red-700 text-4xl mt-5">
                {{ $recipe->title }}
            </p>
        </div>
    </div>


    <div class="p-4">
        <div class="flex items-start space-x-4">
            <div class="flex-1">
                <p class="mt-4 text-sm/relaxed">
                    {!! $recipe->detailed_info !!}
                </p>
            </div>
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/'.$recipe->image) }}" alt="Recipe Image" class="w-48 h-auto">
            </div>
        </div>
    </div>

    <div class="p-4">
        <a href="{{ route('recipes.index') }}" class="text-red-500">Tüm Tariflere Geri Dön</a>
    </div>
</section>


@endsection
