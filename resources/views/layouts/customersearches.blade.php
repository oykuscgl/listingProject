<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Services</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-J6JHuQlRHCUCjMUbTV8vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A8Dm8s+Xu5Br1EeMaDpWAMjC9Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .card {
            width: 95%;
            height: 95%;
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
            width: 60vh;
            height: 45vh;
        }
        .banner-container {
    position: relative;
    margin-right: 1rem;
    margin-left: 1rem;
    margin-bottom: 3rem;
}

.banner:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0)); /* Sol tarafa doğru beyaz gradyan */
    z-index: 1; /* Diğer içeriklerin üzerine çıkması için */
}

.banner {
    width: 100%;
    height: 35vh;
    object-fit: cover;
    display: block;
    position: relative; /* Banner container içinde pozisyon */
    z-index: 0; /* Z-index değeri ayarlanıyor */
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
            left: 30%;
            transform: translate(-100%, -50%);
            text-align: center;
            color: #e53e3e;
            font-weight: bold;
        }
        /* BUTON DÜZENİ */
        .btn {
        position: absolute;
        bottom: 15%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #e53e3e;
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
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
        @media (max-width: 1020px)
        {
            .full-height {
            width: 100%;
            height: 25vh;
            }
            .banner-container {
            margin-right: 1rem;
            }
            .banner{
                background-color: white;
                margin-bottom: 2rem;
                height: 27vh;
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
                margin-left: 15%;
                font-size: 20px;
        }
        .lg-text{
        font-size: 1.2rem;
        }
        }   BUNLAR HTML DOSYAMDA OLAN CSSLER BUNLARI EXTERNAL OLARAK KULLANDIĞIM STYLE.CSS DOSYAMDAN ÇEKMEK İSTİYORUM STYLE.CSS DOSYAM ŞU ŞEKİLDE /* style.css */

/* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    position: relative;
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}

.card {
    width: 100%;
    height: 100%;
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

.banner-container {
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

    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div style="position:relative;">
    <div class="banner-container">
        <img class="banner" src="{{ asset('images/bannercustomer.jpeg') }}" alt="Banner Image">
        <div class="banner-text">
            <div class="text-sm"
            style="display: flex; flex-direction:row; justify-content:start;"><p class="text-black">Home ></p> <p class="text-red">TÜKETİCİ ARAŞTIRMALARI</p> </div>
            <div class="text-bold text-3xl">TÜKETİCİ ARAŞTIRMALARI</div>
        </div>
    </div>
</div>
<div class="card row-start">
    <main class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
        <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
            <img class="w-full filter brightness-75" src="{{ asset('images/sensobus.jpeg') }}" alt="İnovasyon Merkezi">
            <div class="gradient-overlay">
                <h2 class="lg-title text-white text-2xl font-bold mb-4">SENSOBUS</h2>
                <p class="text-black mb-4 text-2xl lg-text text-center">Puratos Sensobus, müşteri tercihlerini yerinde tespit edebilmek için kullanıldığımız mobil bir duyusal analiz laboratuvarıdır.</p>
                <a href="#" class="btn">Keşfet <i class="fas fa-chevron-right"></i></a>

            </div>
        </div>

        <div class="relative bg-white shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/sensory.jpeg') }}" alt="Ekmekçilik Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-2xl font-bold mb-4">DUYUSAL ANALİZLER</h2>
          <p class="text-black  text-2xl lg-text text-center">Duyusal Analizler, tüketici isteklerine, algı ve tercihlerine göre ürünler ve uygulamalar geliştirmeyi sağlar.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-chevron-right"></i></a>

      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/taste-.jpeg') }}" alt="Endüstriyel Ekmekçilik Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-2xl font-bold mb-4">TASTE TOMORROW</h2>
          <p class="text-black  text-2xl lg-text text-center">Ekmekçilik, pastacılık ve çikolata ile ilgili global ve yerel tüketici davranışlarına dair derinlemesine analizleri keşfedin.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-chevron-right"></i></a>

      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/article.png') }}" alt="Endüstriyel Pastacılık Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-2xl font-bold mb-4">GÜNCEL MAKALELER</h2>
          <p class="text-black text-2xl lg-text text-center">Sektöre dair inovasyonları, ilham veren konseptleri, ekmeçilik, pastacılık ve çikolata sektörleri ile ilgili yenilikleri öğrenmek için makalelerimize göz atabilirsiniz.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-chevron-right"></i></a>

      </div>
    </div>

  </main>
</div>

</body>
</html>

