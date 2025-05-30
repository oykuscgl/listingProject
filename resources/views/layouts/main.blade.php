@extends('layouts.app')

@section('content')
<div class="relative w-full h-96 mt-12 mx-auto">
    <div id="carousel" class="relative overflow-hidden">

        <div class="relative h-96 overflow-hidden rounded-lg">
            <div class="absolute inset-0 transition-transform transform translate-x-0 flex items-center justify-between" data-slide="1">
                <div class="w-1/2 m-12">
                    <h5 class="text-2xl font-semibold text-red-600">YAZIN ENERJİSİNİ KEŞFEDİN</h5>
                    <p class="mt-4 text-gray-800 text-xl">Yazın ilhamı ve birinci sınıf malzemelerle mutfağınıza tazelik geliyor.</p>
                    <button onclick="window.location.href='/layouts/aboutUs'" class="bg-red-700 text-white py-2 px-4 rounded-full mt-4 flex items-center justify-between">
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

<div class="relative overflow-hidden bg-gray-200 mt-8 p-4">
    <div class="flex justify-center mt-12">
        <h1 class="text-4xl font-bold text-black">Ürünlerimizi Keşfedin</h1>
    </div>
    <div class="relative w-full mt-8">
        <div class="flex overflow-x-auto no-scrollbar">
            @foreach ($products as $product)
            <div class="card bg-white shadow-md flex flex-col justify-between flex-shrink-0 w-72 mr-4">
                <div class="img h-52 w-full">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-contain">
                </div>
                <div class="content p-5 flex-grow flex flex-col justify-between text-center">
                    <div>
                        <div class="title text-lg font-semibold mb-2">
                            {{ $product->name }}
                        </div>
                        <div class="mb-2 sub-title text-lg font-semibold text-red-600 leading-5">
                            {{ $product->category->name ?? 'No Category' }}
                        </div>
                        <p class="text-center my-2.5 mt-4">
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="btn flex justify-center my-2.5">
                        <a href="{{ route('products.show', $product->id) }}">
                            <button class="bg-red-600 text-white border-none outline-none text-lg py-2 px-8 rounded-md cursor-pointer transition-transform transform hover:scale-90">
                                Keşfet
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-100 text-black rounded-full p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-100 text-black rounded-full p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.flex');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let scrollAmount = 0;
    const scrollStep = container.offsetWidth / 2;

    function updateScrollAmount() {
        const maxScroll = container.scrollWidth - container.clientWidth;
        scrollAmount = Math.max(0, Math.min(scrollAmount, maxScroll));
    }

    function updateButtons() {
        const maxScroll = container.scrollWidth - container.clientWidth;
        prevButton.disabled = scrollAmount <= 0;
        nextButton.disabled = scrollAmount >= maxScroll;
    }

    nextButton.addEventListener('click', () => {
        scrollAmount += scrollStep;
        updateScrollAmount();
        container.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
        updateButtons();
    });

    prevButton.addEventListener('click', () => {
        scrollAmount -= scrollStep;
        updateScrollAmount();
        container.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
        updateButtons();
    });

    // Initialize button states
    updateButtons();

    // Listen to scroll events to update button states
    container.addEventListener('scroll', () => {
        scrollAmount = container.scrollLeft;
        updateButtons();
    });
});

</script>












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
    <div class="flex flex-wrap mt-12 bg-gray-200">
        <!-- Sol taraf, içerik ve buton -->
        <div class="relative rounded-md overflow-hidden lg:w-1/3 flex flex-col justify-between p-6 max-h-[24rem]">
            <div class="flex-grow flex flex-col justify-center text-left">
                <a href="#" class="text-black text-2xl font-bold mt-4 mb-8">En son trendler ve haberler</a>
                <p class="text-gray-700 text-xl text-left">
                    Sektördeki en son trendleri ve haberleri keşfedin. İşbirliğine dayalı ilhamın kıvılcımını harekete geçirmek için sabırsızlanıyoruz!
                </p>
            </div>
            <a href="{{ route('news.index') }}" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-2 flex items-center justify-start w-full max-w-xs">
                <span class="text-md ml-1">Tüm makaleleri görüntüle</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>

        <!-- Sağ taraf, blog card'lar -->
        <div class="w-full lg:w-2/3 flex flex-col relative mt-24 mb-24">
            <!-- Slider Container -->
            <div class="relative overflow-hidden">
                <div class="slider flex transition-transform duration-500 ease-out">
                    @foreach ($blogs as $blog)
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4 flex-shrink-0">
                        <div class="shadow-md rounded-md overflow-hidden flex flex-col min-h-[24rem]">
                            <a href="{{ route('blogs.show', ['blogPost_id' => $blog->id]) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="h-48 w-full object-cover rounded-t-md" alt="blog">
                            </a>
                            <div class="p-4 bg-white rounded-b-md flex flex-col flex-grow">
                                <a href="{{ route('blogs.show', ['blogPost_id' => $blog->id]) }}" class="text-black text-xl font-bold mb-2">{{ $blog->title }}</a>
                                <p class="text-gray-700 text-base flex-grow">{{ $blog->description }}</p>
                                <a href="{{ route('blogs.show', ['blogPost_id' => $blog->id]) }}" class="text-red-500 mt-2">Daha fazla oku</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Prev and Next Buttons -->
                <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full shadow-md hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 19.5-7.5-7.5 7.5-7.5" />
                    </svg>
                </button>
                <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full shadow-md hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slidesContainer = document.querySelector('.slider'); // Düzeltildi
        const slides = document.querySelectorAll('.slider > div'); // Düzeltildi
        const prevButton = document.querySelector('#prev');
        const nextButton = document.querySelector('#next');
        let slideIndex = 0;

        const updateSlider = () => {
            const slideWidth = slides[0].offsetWidth;
            slidesContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;

            // Disable/Enable buttons based on current index
            prevButton.disabled = slideIndex === 0;
            nextButton.disabled = slideIndex === slides.length - 1;
        };

        nextButton.addEventListener('click', () => {
            if (slideIndex < slides.length - 1) {
                slideIndex++;
                updateSlider();
            }
        });

        prevButton.addEventListener('click', () => {
            if (slideIndex > 0) {
                slideIndex--;
                updateSlider();
            }
        });

        // Initial call to set slider position
        updateSlider();

        // Optional: Resize handler to adjust slider on window resize
        window.addEventListener('resize', updateSlider);
    });
</script>


<div class="relative mr-2 mt-24">
    <img class="w-full object-cover banner" src="{{ asset('images/bannercontact.jpg') }}" alt="Banner Image" style="height: 30vh;">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-200 via-gray-transparent flex flex-col justify-center items-center">
        <h3 class="font-bold text-2xl"> SİZE EN YAKIN DİSTRİBÜTÖRÜ BULMAK İÇİN İLETİŞİME GEÇ </h3>
        <a href="/communication" class="btn bg-red-700 text-white py-2 px-4 rounded-full mt-4">
            <div class="flex items-center justify-between w-full">
                <span class="text-md ml-1">İLETİŞİM</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </a>
    </div>
</div>



@endsection