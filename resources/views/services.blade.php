<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
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
            width: 90%;
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
            height: 70vh; 
        } 
        .banner-container{
        margin-right: 8rem;
        margin-left: 6rem;
        }
        .banner {
            width: 100%;
            height: 35vh;
            object-fit: cover;
            margin: 30px 30px 30px 30px;
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
            left: 30%; 
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
            overflow: hidden;
            height: 30vh; 
            }
            .banner-container {
            margin: 0 auto;  
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
            left: 40%; 
            transform: translate(-100%, -50%); 
        }
        .lg-text{
        font-size: 1.2rem; 
        }
        }  
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div style="position:relative;">
    <div class="banner-container">
        <img class="banner" src="{{ asset('images/banner.jpeg') }}" alt="Banner Image">
        <div class="banner-text">
            <div class="text-black">Home > Hizmetlerimiz</div>
            <div class="text-bold text-4xl">HİZMETLERİMİZ</div>
        </div>
    </div>
</div>
<div class="card row-start mx-auto">
    <main class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8"> 
        <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
            <img class="w-full filter brightness-75" src="{{ asset('images/inovasyon.jpeg') }}" alt="İnovasyon Merkezi">
            <div class="gradient-overlay">
                <h2 class="lg-title text-white text-4xl font-bold mb-4">İNOVASYON</h2>
                <p class="text-gray-700 mb-4 text-2xl lg-text">Müşterilerimizin uluslararası trendlere yönelik derinlemesine araştırmalara erişimini sağlıyoruz. Eğitimler ve seminerlerle uzmanlığımızı sizlerle paylaşıyoruz.</p>
                <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="relative bg-white shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/ekmek.jpeg') }}" alt="Ekmekçilik Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-4xl font-bold mb-4">EKMEKÇİLİK MERKEZİ</h2>
          <p class="text-gray-700  text-2xl lg-text">Belçika'nın St. Vith kentinde bulunan Ekmekçilik Merkezi, müşterilerimize, bilim insanlarına ve Puratos çalışanlarına ekmekçilikte mükemmel tatlar elde etme tutukusunu paylaşmak için özel olanaklar sağlıyor. Ayrıca merkezimiz Ekşimaya Kütüphanesi'ne de ev sahipliği yapıyor.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/ekmek.merkez.jpeg') }}" alt="Endüstriyel Ekmekçilik Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-4xl font-bold mb-4">ENDÜSTRİYEL EKMEKÇİLİK MERKEZİ</h2>
          <p class="text-gray-700  text-2xl lg-text">Endüstriyel Ekmekçilik Merkezi müşterilere iş süreçlerinde kullanabilecekleri çözümler geliştirmek için olanaklar ve araçlar sunmaktadır.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-black shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="{{ asset('images/pasta.jpeg') }}" alt="Endüstriyel Pastacılık Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-4xl font-bold mb-4">ENDÜSTRİYEL PASTACILIK MERKEZİ</h2>
          <p class="text-gray-700 text-2xl lg-text">Endüstriyel Pastacılık Merkezimiz sektöre işlerini geliştirmek için ihtiyaç duydukları tüm imkanları ve araçları sağlayarak dünyanın her yerinden müşterilerimize yardımcı oluyor.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-white shadow-md rounded-lg overflow-hidden full-height">
     

      <img class="w-full filter brightness-75" src="./resources/images/cikolata.jpeg" alt="Çikolata Merkezi">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-4xl font-bold mb-4"> ÇİKOLATA MERKEZİ </h2>
          <p class="text-gray-700  text-2xl lg-text">Puratos Çikolata Merkezimizde, dünyanın en iyi çikolata ve pasta şefleri eşliğinde eğitim ve seminerler düzenlenmektedir.</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>

    <div class="relative bg-white shadow-md rounded-lg overflow-hidden full-height">
      <img class="w-full filter brightness-75" src="./resources/images/arge.jpeg" alt="Arge">
      <div class="gradient-overlay">
          <h2 class="lg-title text-white text-4xl font-bold mb-4">ARGE</h2>
          <p class="text-gray-700  text-2xl lg-text">ARGE ekibimiz ve son teknolojiye sahip tesislerimiz tamamen hizmetinizde...</p>
          <a href="#" class="btn">Keşfet <i class="fas fa-angle-right"></i></a>
      </div>
    </div>
  </main>
</div>

</body>
</html>

