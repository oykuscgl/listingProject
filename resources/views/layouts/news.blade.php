@extends('layouts.app')

@section('content')
<div class="container-fluid  mx-auto px-4 py-8">
    <div class="flex flex-row">
        <aside class="w-full md:w-1/5 p-4 justify-start bg-gray-200 shadow-md rounded-lg mb-4 md:mr-4">
            <div class="mb-4">
                <span class="text-lg font-bold uppercase text-black ml-3 mb-5">Filtrele</span>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Kurumsal</label>
                        <span>
                          <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                          </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button onclick="changeBackgroundColor(this)" class="h-18 flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Ekmekçilik</label>
                        <span class="ml-auto">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex flex-row items-center">
                    <button onclick="changeBackgroundColor(this)" class="flex items-center justify-between w-full p-2 bg-white border border-gray-300 rounded-md shadow-md hover:text-red-500">
                        <label class="text-lg font-bold uppercase ml-1">Ekşi Maya</label>
                        <span class="ml-auto">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <h1 class="font-bold text-black text-sm mt-8">PURATOS TÜRKİYE</h1>
                <p class="text-gray-600 text-lg mt-8">
        Puratos Türkiye İzmir Fabrika Tire Organize Sanayi Bölgesi İbni Melek OSB Mahallesi Tosbi Yol 5. Sokak No:2 35900 Tire/İZMİR +90 232 513 50 13 Puratos İnovasyon Merkezi Barbaros Mah. Begonya Sok. Nidakule Ataşehir Kuzey No:3/L (34 nolu dükkan) 34746 Ataşehir/İSTANBUL +90 216 593 0512 Puratos Genel Merkez Barbaros Mahallesi, Begonya Sokak, Nidakule Kuzey Ataşehir, No:3/209, 28. Kat 34746 Ataşehir/İSTANBUL +90 216 593 0512</p>
        <div class="text-lg font-bold mt-8 flex flex-col tex ">
         <div class="flex flex-row items-center">
        <p class="mr-2">Tel No:</p>
        <p>+90 216 593 05 12</p>
        </div>
        <div class="flex flex-row items-center mt-2">
        <p class="mr-2">Mail:</p>
        <p>puratostr@puratos.com</p>
    </div>
</div>

            </div>
        </aside>

        <div class="w-full md:w-4/5 p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-2xl font-bold mb-4">
                <span>{{ $news->count() }}</span> Sonuçlar
            </h3>
            <div class="grid gap-4">
                @foreach($news as $item)
                    <div class="bg-white p-4 shadow flex flex-wrap">
                        <div class="w-full md:w-1/3 p-8">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
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

<script>
    function toggleCheckboxes() {
        var checkboxes = document.getElementById('checkboxes');
        checkboxes.classList.toggle('hidden');
    }

    function changeBackgroundColor(button) {
        button.classList.toggle('bg-gray-200');
    }
</script>

@endsection
