<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-800">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hizmetler.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-J6JHuQlRHCUCjMUbTV800vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A800Dm800s+Xu5Br1EeMaDpWAMjC9Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-J6JHuQlRHCUCjMUbTV800vUqlLg5C/Z+ZpKrqvyzA02hSe2HltzTT3bE3D5s7A800Dm800s+Xu5Br1EeMaDpWAMjC9Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: 'CenturyGothic', Verdana, sans-serif;
        }
        @font-face {
            font-family: 'CenturyGothic', Verdana, sans-serif;
            font-weight: 600;
            font-style: italic;
            font-display: swap;
            src: url('clientlib-font-default/resources/fonts/CenturyGothicW05-SemiBoldIt.woff');
        }
        .red-more{
            color: #cc092f;
        }
        .card {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* Kartlar normal yükseklik */
        .full-height {
            width: 60vh;
            height: 50vh; 
        }
        .big-cards{
            width: 60vh;
            height: 75vh;
        }
        .big-cards-text
        {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: start;
        }

    .banner::after 
        {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0));
        }

        .banner 
        {
        margin-bottom: 3%;
        width: 100%;
        height: 35vh;
        object-fit: cover;
        display: block;
        position: relative;
        z-index: 0; 
        }

        /*KARTLAR İÇİN ARKA PLAN VE YER DÜZENİ*/
        .gradient-overlay {   
            margin: 0;
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
            letter-spacing: .05rem;
            position: absolute;
            top: 50%; 
            left: 20%; 
            transform: translate(-100%, -50%); 
            text-align: center; 
            color: red; 
            font-weight: bold; 
            font-size: 24px;
        }
        /* BUTON DÜZENİ */
        .btn {
            position: absolute;
            bottom: 15%; 
            left: 50%;
            transform: translateX(-50%);
            background-color: #e53e3e;
            color: white;
            padding: 1rem 3rem;
            border-radius: 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: start;
        }
        .btn i {
            font-size: 2rem; /* İkon boyutu */
            color: white; /* İkon rengi */
        }
        
 
@media (max-width: 1020px) 
        {
            .card
            {
                transform: scale(0.95);
            }
            .full-height {
            width: 100%;
            height: 35vh; 
            }
            .big-cards{
                width: 100%;
                height: 35vh;
            }
            .banner {
            margin-bottom: -4%;
            position: relative;
            width: 100%;
            object-fit: cover;
            height: 30vh;
            }

            .banner::before 
            {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; 
            height: 100%; 
            background: linear-gradient(to right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0)); /* Gradient style adjusted */
            }
        .banner-text {
            letter-spacing: .05rem;
            position: absolute;
            top: 40%;
            bottom: 50%; 
            left: 35%;  
            text-align: left; 
            color: #e53e3e; 
            font-weight: bold; 
            font-size: 36px;
        }
            .btn {
            position: relative;
            margin-top: 20px; 
            bottom: 0; 
            left: 0; 
            transform: unset; 
            }
            .banner-text {
                margin-left: 15%;
        }
        .lg-text{
        font-size: 1.6rem; 
        }
        .lg-title{
            font-size: 1.5rem;
        }
        }   


    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="banner-container  mr-2 m-2">
    <div style="position: relative;">
        <img class="banner h-fit" src="{{ asset('images/puratosabout.jpeg') }}" alt="Banner Image">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray to-transparent"></div>
        <div class="banner-text">
            <div style="display: flex; flex-direction: row; justify-content: start; font-size: 12px;">
                <p class="text-black">Home ></p> 
                <p class="red-more">PURATOS HAKKINDA</p>
            </div>
            <div><h3 class="text-bold red-more">PURATOS HAKKINDA</h3></div>
        </div>
    </div>
</div>



<section class="container-fluid">  
<div class="card row-start">
    <main class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-8 ml-5"> 
        <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
            <img class="w-full filter" src="{{ asset('images/about.jpeg') }}" alt="Hakkımızda">
            <div class="gradient-overlay">
                <a href="#" class="lg-title text-white text-2xl font-bold mb-4">HAKKIMIZDA</a>
                <p class="text-gray-800 mb-4 text-2xl lg-text text-center">Puratos, küresel, müşteri odaklı bir organizasyon ve sıkı sıkıya bağlı bir aile şirketidir.</p>
                <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="relative bg-white shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter" src="{{ asset('images/us.jpeg') }}" alt="Degerlerimiz">
      <div class="gradient-overlay">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">DEĞERLERİMİZ</a>
          <p class="text-gray-800  text-2xl lg-text text-center">Değerlerimiz, yaptığımız her şeyin kalbinde olan güvene dayanır. Tüm değerlerimizin özünde yer alan güven, yeni fikirler için güvenilir ortaklar olmamızı sağlıyor.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>

      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter" src="{{ asset('images/taah.jpeg') }}" alt="Taahutlerimiz">
      <div class="gradient-overlay big-cards-text">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">TAAHÜTLERİMİZ</a>
          <p class="text-gray-800  text-2xl lg-text text-center">Ürünlerimiz ve çözümlerimiz sürekli besin değerlerini optimize etmeyi amaçlarken sosyal sorumluluk faliyetlerimiz gelecek nesile yatırıma dayalıdır.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>

      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden big-cards">
      <img class="w-full filter" src="{{ asset('images/humanres.jpeg') }}" alt="Human Resources">
      <div class="gradient-overlay big-card-text">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">İNSAN KAYNAKLARI</a>
          <p class="text-gray-800 text-2xl lg-text text-center">Çalışanlarımız, yetenekleri ve tutkularıyla yönlendirilir. Puratos'da şirket değerlerimizi ve çalışma prensiplerimizi harmanlayarak kendi sihrinizi yaratabilirsiniz.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden big-cards">
      <img class="w-full filter" src="{{ asset('images/tarihce.jpeg') }}" alt="Tarihce">
      <div class="gradient-overlay">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">TARİHÇEMİZ</a>
          <p class="text-gray-800 text-2xl lg-text text-center">Puratos 100 yaşında! 100 yıl boyunca yenilik tutkusu ve yaptığımız her şeyi sürekli iyileştirme isteğiyle hareket ettik.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden big-cards">
      <img class="w-full filter" src="{{ asset('images/sector.jpeg') }}" alt="sector">
      <div class="gradient-overlay">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">EKMEKÇİLİK VE PASTACILIK SEKTÖRÜ YENİDEN YAPILANDIRMA FONU</a>
          <p class="text-gray-800 text-2xl lg-text text-center">Puratos Türkiye olarak hayata geçirdiğimiz “Puratos Türkiye Ekmekçilik ve Pastacılık Sektörü Yeniden Yapılanma Fonu” ile dayanışmanın bir parçası oluyor ve depremden etkilenen bölgelerdeki yerel ekmekçilik ve pastacılık işletmelerinin yeniden ayağı kalmasına katkı sağlıyoruz.</p>
          <a href="#" class="btn">Keşfet <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    
    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter" src="{{ asset('images/demo.png') }}" alt="Demo">
      <div class="gradient-overlay">
          <a href="#" class="lg-title text-white text-2xl font-bold mb-4">PURATOS'TAN PROFESYONELLERE ÖZEL DEMO DENEYİMİ</a>
          <p class="text-bold text-gray-800 text-2xl lg-text text-center">‘Food Innovation for Good’ yani ‘İyilik İçin Gıda İnovasyonu’ sloganıyla çıktığımız bu yolda tüm faydanın iyiliğe aktarılması için çabalıyoruz. Eğitim meraklılarını da bizlerle bu iyiliği paylaşmaya davet ediyoruz.</p>
          <a href="#" class="btn">Keşfet <i class="fa-thin fa-angle-right"></i></a>
      </div>
    </div>

  </main>
</div>
</section>


<section class="explore flex justify-center text-center">
    <div class="container bg-gray">
        <div class="col-center">
            <h2 class="text-4x1 text-bold">PURATOSU KEŞFEDİN</h2>
            <p class="text-4x1">Puratos, ekmekçilik, pastacılık ve çikolata sektörlerinde artizan, endüstriyel, perakende ve yiyecek sektöründeki müşterileri için yenilikçi bir ürün yelpazesine sahip ve uygulama uzmanlığı sunan uluslararası bir gruptur.</p>
        </div>
        <div>
        <a href="#" class="">Oynat<i class="fas fa-angle-right"></i></a>
        </div>

    </div>


</section>

</body>
</html>

