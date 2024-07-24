
@extends('layouts.app')
@section('content')

<div class="relative mr-2">
    <img class="w-full object-cover banner" src="{{ asset('storage/'.$info->image) }}" alt="Banner Image"style="height:30vh">
    <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
    <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
        <div class="flex items-center space-x-2 text-sm text-black">
            <p class="underline uppercase">Home ></p>
            <p class="text-red-500">PURATOS HAKKINDA</p>
        </div>
        <div>
            <h3 class="font-bold text-red-700 text-4xl mt-5">{{$info->title}}</h3>
        </div>
    </div>
</div>

    <main>
        <section class="service-detail-section">
            <div class="container">
                <div class="detailed-info">
                    {!! $info->detailed_info !!}
                </div>
            </div>
        </section>
    </main>

@endsection
