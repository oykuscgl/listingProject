@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hizmetlerimiz</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .card {
            width: 100%;
            height: 90%;
            position: relative;
            overflow: hidden;
            margin: auto;
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Kartlar normal yükseklik */
        .full-height {
            height: 50vh;
        }
        .banner-container{
        margin-right: 2rem;
        margin-left: 2rem;
        }
        .banner {
            width: 100%;
            height: 35vh;
            object-fit: cover;
            margin: 10px;
            display: block;
        }
        /*KARTLAR İÇİN ARKA PLAN VE YER DÜZENİ*/
        .gradient-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem;
            background-image: linear-gradient(to top, rgba(200, 200, 200, 0.5) 30%, rgba(200, 200, 200, 0.9) 100%);
        }
        /* BAŞLIK VE FOTOĞRAF DÜZENİ */
        .banner-text {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-100%, -50%);
            text-align: center;
            color: #e53e3e;
            font-weight: bold;
        }
        /* BUTON DÜZENİ */
        .btn {
        position: absolute;
        bottom: 5%; /* Adjusted bottom position */
        left: 50%;
        transform: translateX(-50%);
        background-color: #e53e3e;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        display: flex;
        align-items: center;
        }
        .btn i {
            margin-left: 8px;
        }
        .brightness-75 {
            filter: brightness(1.25);
        }
        /* responsive küçük ekran ayarları*/
        @media (max-width: 960px)
        {
            .full-height {
            height: 10vh;
            }
            .banner-container {
            margin-right: 3rem;
            }
            .banner{
                max-width: 100%;
            }
            .btn {
            position: relative;
            margin-top: 20px;
            bottom: unset;
            left: unset;
            transform: unset;
            }
            .banner-text {
            position: absolute;
            top: 50%;
            left: 150%;
        }
        .lg-text{
        font-size: 1.2rem;
        }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<style>
    *{
        box-sizing: border-box;
    }

</style>

<body class="font-sans bg-white">

</div>
<div class="card row-start mx-auto">
    <main class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
        @foreach($services as $service)
            <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
                <img class="w-full filter brightness-75" src="{{ asset('images/inovasyon.jpeg') }}" alt="{{ $service->title }}">
                <div class="gradient-overlay">
                    <h2 class="lg-title text-white text-4xl font-bold mb-4">{{ $service->title }}</h2>
                    <p class="text-gray-700 mb-4 text-2xl lg-text">{{ $service->description }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="btn mt-4">Keşfet <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        @endforeach
    </main>
</div>

</body>
@endsection
