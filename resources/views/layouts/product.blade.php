<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white bg-opacity-75 py-4 shadow-sm">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <nav>
                <ul class="flex space-x-4 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-gray-900">HOME ></a></li>
                    <li><a href="#" class="hover:text-gray-900">ÜRÜNLERİMİZ ></a></li>
                    <li><a href="#" class="hover:text-gray-900">{{ $product->name }}</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 max-w-6xl">
        <div class="grid grid-cols-5 gap-8">
            <div class="col-span-3 flex flex-col items-center bg-white bg-opacity-75 p-6 rounded-lg shadow-sm">
                <h1 class="text-4xl font-bold mb-6">{{ $product->name }}</h1>
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-auto">
            </div>
            <aside class="col-span-2">
                <div class="mb-6 bg-white p-6 shadow-sm rounded-lg">
                    <p class="text-sm text-gray-600">MyPuratos hesabınızla online mağazamızın tadını çıkarın! Tüm katalog ürünlerini, fiyat ve stok bilgilerini, size özel kampanyaları ve daha fazlasını keşfedin!</p>
                    <div class="mt-4 flex space-x-4">
                        <button class="py-2 px-5 bg-transparent border border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white">Giriş yap</button>
                        <button class="py-2 px-4 bg-red-600 text-white rounded-full hover:bg-red-700">Kayıt ol</button>
                    </div>
                </div>
                <div class="p-4 rounded-lg">
                    <p class="text-gray-700 mb-2">{{ $product->description }}</p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Enzim ve emülgatör teknolojisine dayalı bir inovasyon çözümüdür</li>
                        <li>Yumuşaklık, nemlilik, esnek yapı dahil olmak üzere farklı kek tazeliği parametreleri üzerinde kanıtlanmış pozitif bir etkiye sahiptir</li>
                        <li>Tüm kek uygulamalarında kullanılabilir</li>
                    </ul>
                    <a href="#" class="text-red-600 mt-4 inline-block"><u>Tam açıklamayı görüntüleyin</u></a>
                </div>
            </aside>
        </div>

        <section class="bg-white bg-opacity-75 p-6 shadow-sm rounded-lg mt-8">
            <h2 class="text-2xl font-bold mb-4">Detaylar</h2>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <p><strong>Uygulamalar:</strong><span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-lg text-sm font-medium bg-gray-400 text-white">kek</span> <span class="max-w-40 truncate whitespace-nowrap inline-block py-1.5 px-3 rounded-lg text-sm font-medium bg-gray-400 text-white">porsiyon kek</span></p>
                    <p><strong>Açıklama:</strong> {{ $product->name }}</p>
                </div>
                <div>
                    <p><strong>Ürün kodu:</strong> {{ $product->product_code }}</p>
                    <p><strong>Raf ömrü:</strong> {{ $product->shelf_life }} Gün</p>
                </div>
                <div>
                    <p><strong>Ambalaj:</strong> {{ $product->packaging }}</p>
                    <p><strong>Palet:</strong> {{ $product->pallet }}</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-gray-600">Bu ürün hakkında daha fazla bilgi almak ister misiniz? <a href="#" class="text-red-600">Bize ulaşın</a></p>
        </section>

      
        <section class="bg-white p-6 shadow-sm rounded-lg mt-8">
            <h2 class="text-2xl font-bold mb-4">Sıkça Birlikte Alınanlar</h2>
            <div class="grid grid-cols-5 gap-4 items-center">
                @foreach ($products as $product)
                    <div class="col-span-1 flex flex-col items-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-32 h-auto">
                        <p class="text-center">{{ $product->name }}</p>
                    </div>
                @endforeach
            </div>
        </section>


        <section class="bg-white p-6 shadow-sm rounded-lg mt-8">
            <h2 class="text-2xl font-bold mb-4">Diğer Müşterilerin Satın Aldığı Ürünler</h2>
            <div class="grid grid-cols-5 gap-4">
                @foreach ($products as $product)
                    <div class="col-span-1 flex flex-col items-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-32 h-auto">
                        <p class="text-center">{{ $product->name }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="text-red-600 mt-2"><u>Daha fazla bilgi</u></a>

                    </div>
                @endforeach
            </div>
        </section>
        <div class="col-span-1 flex flex-col items-center">
            <button class="py-2 px-4 bg-red-600 text-white rounded hover:bg-red-700 mt-8">Tüm Ürünler</button>
        </div>
    </main>    

    <!-- Contact Section -->
    <footer class="bg-gray-200 p-6 shadow-sm rounded-lg mt-8 flex justify-between items-center">
        <div class="flex-1 p-6" style="background-image: url('/etc.clientlibs/settings/wcm/designs/puratos2022/clientlib-preloaded/resources/img/jpg/pattern.jpg'); background-size: cover; background-repeat: no-repeat;">
            <h2 class="text-2xl font-bold mb-4">İletişim</h2>
            <p>Ürünlerimiz ve iş süreçlerinize uygun çözümlerimiz hakkında daha fazla bilgi almak için bize ulaşabilirsiniz.</p>
            <button class="py-2 px-4 bg-red-600 text-white rounded hover:bg-red-700 mt-4">İletişim</button>
        </div>
        <div class="flex-1 bg-red-600 text-white p-6 rounded-lg flex flex-col justify-center items-center">
            <h2 class="text-2xl font-bold mb-4">Hizmetlerimiz</h2>
            <p>Puratos, dünya çapında pastacılık, ekmekçilik ve çikolata sektörlerine kaliteli ürünler ve çözümler sunar.</p>
            <button class="py-2 px-4 bg-white text-red-600 rounded hover:bg-gray-200 mt-4">Daha fazla bilgi</button>
        </div>
    </footer>
</body>
</html>
