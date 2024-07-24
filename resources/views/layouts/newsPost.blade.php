@extends('layouts.app')

@section('content')

<div class="relative mr-2">
    <img class="w-full object-cover banner" src="{{ asset('storage/'.$newsPost->image) }}" alt="Banner Image"style="height:30vh">
    <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
    <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
        <div class="flex items-center space-x-2 text-sm text-black">
            <p class="underline uppercase">Home ></p>
            <p class="text-red-500">HABERLER</p>
        </div>
        <div>
            <h3 class="font-bold text-red-700 text-4xl mt-5">{{$newsPost->title}}</h3>
        </div>
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
                {!! $newsPost->detailed_info !!}
            </p>
        </ul>
    </div>

    <div class="p-4">
        <a href="{{ route('news.index') }}" class="text-red-500">Tüm Haberlere Geri Dön</a>
    </div>
</section>
@endsection
