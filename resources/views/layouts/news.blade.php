@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/200 px-48">
            <h3 class="text-2xl font-bold mb-4">
                <span>{{ $news->count() }}</span> Sonuçlar
            </h3>
            <div class="grid gap-4">
                @foreach($news as $item)
                    <div class="bg-white p-4 shadow flex flex-wrap">
                        <div class="w-full md:w-1/3 p-8">
                            <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full md:w-2/3 p-2">
                            <h4 class="text-xl font-bold">{{ $item->title }}</h4>
                            <p class="text-red-700 mb-1">{{ $item->date }}</p>
                            <div class="underline-short mb-2"></div>
                            <p class="badge bg-gray-500 text-white inline-block mb-2">{{ $item->category }}</p>
                            <p class="text-gray-700 mb-4">{{ $item->description }}</p>
                            <a href="{{ route('news.show', ['newsPost_id' => $item->id]) }}" class="text-red-500">Daha fazla bilgi</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
