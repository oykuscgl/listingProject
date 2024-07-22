@extends('layouts.app')

@section('content')
<div class="relative w-full h-96 mt-12 mx-auto">
    <div id="carousel" class="relative overflow-hidden">

        <div class="relative h-96 overflow-hidden rounded-lg">
            <div class="absolute inset-0 transition-transform transform translate-x-0 flex items-center justify-between" data-slide="1">
                <div class="w-1/2 m-12">
                    <h5 class="text-2xl font-semibold text-red-600">YAZIN ENERJİSİNİ KEŞFEDİN</h5>
                    <p class="mt-4 text-gray-800 text-xl">Yazın ilhamı ve birinci sınıf malzemelerle mutfağınıza tazelik geliyor.</p>
                    <button onclick="window.location.href='/about-us'" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4 flex items-center justify-between">
                        <span class="text-md ml-1">Kampanya Detaylarını İnceleyin</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 mr-4 w-1/2">
                    <img src="{{ asset('/images/bannercake.webp') }}" class="w-full h-full object-cover">
                </div>
            </div>

    
            <div class="absolute inset-0 transition-transform transform translate-x-full flex items-center justify-between" data-slide="2">
                <div class="ml-12 w-1/2">
                    <h5 class="text-2xl text-red-600 font-semibold">FOOD INNOVATION FOR GOOD</h5>
                    <p class="mt-4 text-gray-800 text-xl">Dünyanın dört bir yanında insanların iyiliği ve sağlığı için yenilikçi gıda çözümleri geliştirerek gezegenimizi ileriye taşıyoruz.</p>
                    <button onclick="window.location.href='/more-info'" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4 flex items-center justify-between">
                        <span class="text-md ml-1">Daha fazla bilgi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 mr-4 w-1/2">
                    <img src="{{ asset('/images/banner2.jpeg') }}" class="w-full h-full object-cover">
                </div>
            </div>

      
            <div class="absolute inset-0 transition-transform transform translate-x-full flex items-center justify-between" data-slide="3">
                <div class="ml-12 w-1/2">
                    <h5 class="text-2xl font-semibold text-red-600">PURATOS'TA İYİLİK İÇİN GIDA İNOVASYONU YAPIYORUZ</h5>
                    <p class="mt-4 text-gray-800 text-xl">Puratos'ta gıda inovasyonunun iyilik için bir güç olduğu inancıyla harekete ediyoruz.</p>
                    <button onclick="window.location.href='/about-us'" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4 flex items-center justify-between">
                        <span class="text-md ml-1">Puratos'ta inovasyon yapmanın sonsuz sebebini keşfedin</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex-shrink-0 mr-4 w-1/2">
                    <img src="{{ asset('/images/banner3.jpeg') }}" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
    

    <div class="absolute inset-0 flex items-center justify-between">
        <button id="prev" class="bg-white bg-opacity-50 hover:bg-opacity-100 text-black rounded-full p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="next" class="bg-white bg-opacity-50 hover:bg-opacity-100 text-black rounded-full p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('[data-slide]');
    let currentIndex = 0;

    document.getElementById('next').addEventListener('click', () => {
        slides[currentIndex].classList.add('translate-x-full');
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.remove('translate-x-full');
    });

    document.getElementById('prev').addEventListener('click', () => {
        slides[currentIndex].classList.add('translate-x-full');
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        slides[currentIndex].classList.remove('translate-x-full');
    });
});
</script>

<div class="grid h-full place-items-center text-center bg-gray-200 mt-8">
   <div class="flex justify-center mt-12">
    <h1 class="text-4xl font-bold text-black">Ürünlerimizi Keşfedin</h1>
    </div>     
    <div class="slider owl-carousel flex w-full m-16">
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
                 Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
                  Second Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     Keşfet
                  </button>
               </div>
            </div>
         </div>
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
                  Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
                  Second Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     Keşfet
                  </button>
               </div>
            </div>
         </div>
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
                    Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
                  Second Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     Keşfet
                  </button>
               </div>
            </div>
         </div>
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
               Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
                 Second Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     Keşfet
                  </button>
               </div>
            </div>
         </div>
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
               Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
               Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     keşfet
                  </button>
               </div>
            </div>
         </div>
         <div class="card flex-1 mx-2.5 bg-white">
            <div class="img h-52 w-full">
               <img src="#" alt="" class="h-full w-full object-cover">
            </div>
            <a href="#">
            <div class="content p-5">
               <div class="title text-2xl font-semibold">
               Title
               </div>
               <div class="sub-title text-xl font-semibold text-red-600 leading-5">
               Title
               </div>
               <p class="text-justify my-2.5">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.
               </p>
               <div class="btn text-left my-2.5">
                  <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                     keşfet
                  </button>
               </div>
            </div>
            </a>
         </div>
      </div>
   </div>


    <div class="bg-gray-200 py-12">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl text-black font-semibold tracking-wide uppercase">İlginizi Çekebilecek Konular</h2>
        </div>

        <div class="mt-10">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6">
                <a href="#">
                <div class="p-6 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/maya.png') }}" alt="ticket" class="w-full h-48 object-contain mb-4">
                    <p class="text-xl text-black font-bold text-center">Ekşi Maya Akademisi</p>
                </div>
                </a>
                
                <a href="#">
                <div class="p-6 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/kakao.jpeg') }}" alt="ticket" class="w-full h-48 object-contain mb-4">
                <p class="text-xl text-black font-bold text-center">İyilik & Sağlık</p>
                </div>
                </a>
                <a href="#">
                <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/ticket.png') }}" alt="ticket" class="w-full h-48 object-contain mt-4 mb-4">
                    <p class="text-xl text-black font-bold text-center">Yalın Etiket Çözümler</p>
                </div>
                </a>
                <a href="#">
                <div class="p-6 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/belcolade.png') }}" alt="ticket" class="w-full h-48 object-contain mb-4">
                <p class="text-xl text-black font-bold text-center">Gerçek Belçika Çikolatası</p>
                </div>
                </a>
                <a href="#">
                <div class="p-6 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/chef.png') }}" alt="ticket" class="w-full h-48 object-contain mb-4">
                    <p class="text-xl text-black font-bold text-center">İşletmeniz İçin Büyüme Önerileri</p>
                </div>
                </a>
                <a href="#">
                <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col items-center justify-center">
                    <img src="{{ asset('/images/health.png') }}" alt="ticket" class="w-full h-48 object-contain mt-4 mb-4">
                    <p class="text-xl text-black font-bold text-center">İşletmeniz İçin Büyüme Önerileri</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="flex flex-col gap-4 mt-20">

    <div class="flex flex-row gap-4">
        <div class="relative group flex-1 bg-red-800 text-white">
            <div class="flex flex-col justify-center items center">
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 h-96 flex flex-col items-center justify-center transition duration-300">
                <span class="text-white text-xl lg:text-4xl font-semibold">Puratos'un Trendleri ile Yeni Lezzetlere Adım Atın!</span>
                <span class="text-white text-2xl font-semibold text-center w-1/2 mt-8">Trendlerden Seçimini Yap!</span>
            </div>
        </div>
        <div class="relative group flex-1">
            <img src="{{ asset('/images/ust2.jpeg') }}" alt="Büyük Resim 2" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex items-center justify-center transition duration-300">
                <span class="text-red-800 text-xl font-semibold"> </span>
            </div>
        </div>
    </div>


    <div class="flex flex-row gap-4 flex-wrap">
    <div class="relative group flex-2 w-full sm:w-1/2 md:w-1/4">
        <a href="#" class="block relative">
            <img src="{{ asset('/images/alt4.jpeg') }}" alt="Küçük Resim 1" class="w-full h-64 object-cover">
            <div class="overlay absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center transition duration-300">
                <span class="text-overlay text-white text-lg font-semibold">LIGHT SANDVİÇ</span>
            </div>
        </a>
    </div>
    <div class="relative group flex-1 w-full sm:w-1/2 md:w-1/4">
        <a href="#" class="block relative">
            <img src="{{ asset('/images/alt1.jpeg') }}" alt="Küçük Resim 2" class="w-full h-64 object-cover">
            <div class="overlay absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center transition duration-300">
                <span class="text-overlay text-white text-lg font-semibold">CUPCAKES</span>
            </div>
        </a>
    </div>
    <div class="relative group flex-2 w-full sm:w-1/2 md:w-1/4">
        <a href="#" class="block relative">
            <img src="{{ asset('/images/alt2.jpeg') }}" alt="Küçük Resim 3" class="w-full h-64 object-cover">
            <div class="overlay absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center transition duration-300">
                <span class="text-overlay text-white text-lg font-semibold">Strawberry Cake</span>
            </div>
        </a>
    </div>
    <div class="relative group flex-1 w-full sm:w-1/2 md:w-1/4">
        <a href="#" class="block relative">
            <img src="{{ asset('/images/alt3.jpeg') }}" alt="Küçük Resim 4" class="w-full h-64 object-cover">
            <div class="overlay absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center transition duration-300">
                <span class="text-overlay text-white text-lg font-semibold">Summer Fav</span>
            </div>
        </a>
    </div>
</div>

    <script>
    document.querySelectorAll('.group').forEach(item => {
    item.addEventListener('mouseover', event => {
        const overlay = item.querySelector('.overlay');
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        overlay.querySelector('.text-overlay').style.opacity = '1';
    });

    item.addEventListener('mouseout', event => {
        const overlay = item.querySelector('.overlay');
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0)';
        overlay.querySelector('.text-overlay').style.opacity = '0';
    });

    item.addEventListener('click', event => {
        const overlay = item.querySelector('.overlay');
        overlay.style.backgroundColor = 'rgba(255, 0, 0, 0.5)';
    });
    });
    </script>

    <style>
    .text-overlay {
    opacity: 0;
    transition: opacity 0.3s;
    }
    </style>

<div class="flex flex-row mt-12">
    <div class="relative shadow-md rounded-md overflow-hidden h-96 w-1/2">
        <div class="absolute inset-0 flex flex-col items-start justify-center text-center w-full pl-8">
            <a href="#" class="text-black text-2xl font-bold mt-4 mb-8">En son trendler ve haberler</a>
            <p class="text-gray-700 text-2xl text-left w-full">
                Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
            </p>
            <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4 flex items-center justify-between w-1/2">
                <span class="text-md ml-1">Tüm makaleleri görüntüle</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

<<div class="flex flex-wrap w-full">
  <div class="flex flex-col  w-1/4">
    <div class="shadow-md rounded-md overflow-hidden mb-4">
      <a href="#">
        <img src="{{ asset('/images/bannercake.webp') }}" class="h-60 w-full object-cover rounded-t-md" alt="blog">
      </a>
      <div class="p-4 bg-white rounded-b-md">
        <a href="#" class="text-black text-xl font-bold mb-2">DENGELİ BİR BAĞIRSAK FLORASININ TEMELİNDE YATAN BİLİM</a>
        <p class="text-gray-700 text-base">
          Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
        </p>
        <a href="#" class="btn mt-4 text-red-500">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>      
      </div>
    </div>
  </div>


  <div class="flex flex-col  w-1/4">
    <div class="shadow-md rounded-md overflow-hidden mb-4">
      <a href="#">
        <img src="{{ asset('/images/bannercake.webp') }}" class="h-60 w-full object-cover rounded-t-md" alt="blog">
      </a>
      <div class="p-4 bg-white rounded-b-md">
        <a href="#" class="text-black text-xl font-bold mb-2">DENGELİ BİR BAĞIRSAK FLORASININ TEMELİNDE YATAN BİLİM</a>
        <p class="text-gray-700 text-base">
          Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
        </p>
        <a href="#" class="btn mt-4 text-red-500">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>      
      </div>
    </div>
  </div>
  <div class="flex flex-col  w-1/4">
    <div class="shadow-md rounded-md overflow-hidden mb-4">
      <a href="#">
        <img src="{{ asset('/images/bannercake.webp') }}" class="h-60 w-full object-cover rounded-t-md" alt="blog">
      </a>
      <div class="p-4 bg-white rounded-b-md">
        <a href="#" class="text-black text-xl font-bold mb-2">DENGELİ BİR BAĞIRSAK FLORASININ TEMELİNDE YATAN BİLİM</a>
        <p class="text-gray-700 text-base">
          Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
        </p>
        <a href="#" class="btn mt-4 text-red-500">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>      
      </div>
    </div>
  </div>
  <div class="flex flex-col  w-1/4">
    <div class="shadow-md rounded-md overflow-hidden mb-4">
      <a href="#">
        <img src="{{ asset('/images/bannercake.webp') }}" class="h-60 w-full object-cover rounded-t-md" alt="blog">
      </a>
      <div class="p-4 bg-white rounded-b-md">
        <a href="#" class="text-black text-xl font-bold mb-2">DENGELİ BİR BAĞIRSAK FLORASININ TEMELİNDE YATAN BİLİM</a>
        <p class="text-gray-700 text-base">
          Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
        </p>
        <a href="#" class="btn mt-4 text-red-500">Daha fazla bilgi al <i class="fas fa-angle-right"></i></a>      
      </div>
    </div>
  </div>
</div>
</div>



<div class="relative mr-2 mt-24">
    <img class="w-full object-cover banner" src="{{ asset('images/bannercontact.jpg') }}" alt="Banner Image" style="height: 30vh;">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-200 via-gray-transparent flex flex-col justify-center items-center">
        <h3 class="font-bold text-2xl"> SİZE EN YAKIN DİSTRİBÜTÖRÜ BULMAK İÇİN İLETİŞİME GEÇ </h3>
        <a href="#" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
            <div class="flex items-center justify-between w-full">
                <span class="text-md ml-1">iLETİŞİM</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
    </div>
</div>



@endsection
