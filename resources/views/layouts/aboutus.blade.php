@extends('layouts.app')

@section('content')
    <div class="relative mr-2">
        <img class="w-full object-cover banner" src="{{ asset('images/puratosabout.jpeg') }}" alt="Banner Image"
            style="height:30vh">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
        <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
            <div class="flex items-center space-x-2 text-sm text-black">
                <p class="underline uppercase">Home ></p>
                <p class="text-red-500">PURATOS HAKKINDA</p>
            </div>
            <div>
                <h3 class="font-bold text-red-700 text-4xl mt-5">PURATOS HAKKINDA</h3>
            </div>
        </div>
    </div>

    <section class="container-fluid px-4 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">

    @foreach($infos as $info)
                <div class="relative shadow-md rounded-md overflow-hidden h-96">
                     <a href="{{ route('aboutUs.show', ['info_id' => $info->id]) }}">
                    <img src="{{ asset('storage/'.$info->image) }}" alt="{{ $info->title }}" class="w-full h-full object-cover z-10 filter brightness-75">
                    </a>
            <div class="absolute inset-0 bg-gray-100 opacity-50 z-0"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-start text-center w-full mt-16">
        <a href="#" class="text-black text-2xl font-bold mt-4 mb-8">{{ $info->title }}</a>
        <p class="text-gray-700 text-2xl text-center justify-center w-96">{{ $info->description }}</p>
        <a href="{{ route('aboutUs.show', ['info_id' => $info->id]) }}" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
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
    </section>
    <div class="container-fluid text-center bg-gray-100 py-20 mt-12 w-full">
        <div class="flex flex-col items-center justify-center">
             <h2 class="text-2xl font-bold mb-5">PURATOS'U KEŞFEDİN</h2>
                <p class="text-2xl text-gray-700 mb-5 w-1/2">Puratos, ekmekçilik, pastacılık ve çikolata sektörlerinde artizan, endüstriyel, perakende ve yiyecek sektöründeki müşterileri için yenilikçi bir ürün yelpazesine sahip ve uygulama uzmanlığı sunan uluslararası bir gruptur.</p>
            <div class="bg-white border border-red-500 rounded-full p-2">
                <div class="flex flex-row justify-beetwen items-center">
                 <a href="#" class="flex flex-row items-center mr-2">
                <span class="font-bold text-red-600 ml-3">Oynat</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="1.5" stroke="red" class="w-5 h-5 ml-10">
                <path fill="red" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                </svg>
                </a>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
