@extends('layouts.app')

@section('content')

<div class="relative mr-2">
    <img class="w-full object-cover banner" src="{{ asset('storage/'.$blogPost->image) }}" alt="Banner Image"style="height:30vh">
    <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100"></div>
    <div class="absolute top-1/3 left-12 transform -translate-y-1/2">
        <div class="flex items-center space-x-2 text-sm text-black">
            <p class="underline uppercase">Home ></p>
            <p class="text-red-500">BLOG</p>
        </div>
        <div>
            <h3 class="font-bold text-red-700 text-4xl mt-5">{{$blogPost->title}}</h3>
        </div>
    </div>
</div>

<section class="container mt-10 p-4">
    <div class="p-4">
        <ul class="list-disc list-inside mt-2">
            <p class="mt-4 text-sm/relaxed">
                {!! $blogPost->detailed_info !!}
            </p>
        </ul>
    </div>

    <div class="p-4">
        <a href="{{ route('blogs.index') }}" class="text-red-500">Tüm Blog Yazılarına Geri Dön</a>
    </div>
</section>

</body>
</html>

@endsection
