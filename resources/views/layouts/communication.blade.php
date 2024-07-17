@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-r from-white to-gray-100 py-8">
        <div class="container mx-auto px-4">
            <nav class="text-sm mb-4">
                <a href="#" class="text-gray-600">HOME</a> &gt; <span class="text-red-600">İLETİŞİM</span>
            </nav>
            <h1 class="text-3xl font-bold text-red-600 mb-8">İLETİŞİM</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="col-span-2">
                <div class="mb-8">
                    <h2 class="text-xl font-bold mb-4">SİZİ TANIYALIM</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="artisan" class="mr-2">
                            <label for="artisan">Artizan fırın / Pastane</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="chocolatier" class="mr-2">
                            <label for="chocolatier">Çikolatacı</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="industrial" class="mr-2">
                            <label for="industrial">Endüstriyel</label>
                        </div>
                        <div class="border border-orange-500 p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="supermarket" class="mr-2" checked>
                            <label for="supermarket">Süpermarket</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="retail" class="mr-2">
                            <label for="retail">Perakende gıda sektörü</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('applicant-form')">
                            <input type="radio" name="category" id="applicant" class="mr-2">
                            <label for="applicant">İş başvurusu yapan, öğrenci, okul...</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('help-form')">
                            <input type="radio" name="category" id="supplier" class="mr-2">
                            <label for="supplier">Tedarikçi, ajans</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('contact-reason-form')">
                            <input type="radio" name="category" id="other" class="mr-2">
                            <label for="other">Diğer</label>
                        </div>
                    </div>
                </div>
                <div id="contact-reason-form" class="hidden">
                    <h2 class="text-xl font-bold mb-4">İLETİŞİME GEÇME SEBEBİNİZ</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('help-form')">
                            <input type="radio" name="reason" id="info" class="mr-2">
                            <label for="info">Ürünler hakkında bilgi almak istiyorum</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('help-form')">
                            <input type="radio" name="reason" id="sales" class="mr-2">
                            <label for="sales">Satış ekibiyle görüşmek istiyorum</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('help-form')">
                            <input type="radio" name="reason" id="support" class="mr-2">
                            <label for="support">Teknik ürün desteği almak istiyorum</label>
                        </div>
                        <div class="border p-4 rounded cursor-pointer" onclick="showForm('help-form')">
                            <input type="radio" name="reason" id="otherReason" class="mr-2">
                            <label for="otherReason">Diğer</label>
                        </div>
                    </div>
                </div>
                <div id="applicant-form" class="hidden">
                    <div class="mb-8 text-center">
                        <a href="link-to-job-listing-page" class="underline text-red-600 cursor-pointer hover:text-red-700">PURATOS EKİBİNE KATILMAK İÇİN LÜTFEN İŞ İLANLARI SAYFAMIZI ZİYARET EDİN</a>
                    </div>
                    <h2 class="text-xl font-bold mb-4">SİZE NASIL YARDIMCI OLABİLİRİZ?</h2>
                    <form>
                        <div class="mb-4 relative">
                            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="name" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Adınız</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="surname" name="surname" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="surname" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Soyadınız</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="email" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> E-mail</label>
                        </div>
                        <div class="mb-4 relative">
                            <select id="country" name="country" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                                <option value="Turkey">Turkey</option>
                                <!-- Add other countries as needed -->
                            </select>
                            <label for="country" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Ülke</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="tel" id="phone" name="phone" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="phone" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Telefon numarası</label>
                        </div>
                        <div class="mb-4 relative">
                            <textarea id="message" name="message" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required></textarea>
                            <label for="message" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Mesaj</label>
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" required>
                                <span class="ml-2"><span class="text-red-600">*</span> Kabul ediyorum <a href="#" class="text-red-600">Puratos Politikası</a></span>
                            </label>
                        </div>
                        <button type="submit" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-600 text-black hover:text-red-600">Gönder</button>
                    </form>
                </div>
                <div id="help-form" class="hidden">
                    <h2 class="text-xl font-bold mb-4">SİZE NASIL YARDIMCI OLABİLİRİZ?</h2>
                    <form>
                        <div class="mb-4 relative">
                            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="name" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Adınız</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="surname" name="surname" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="surname" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Soyadınız</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="company" name="company" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="company" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Şirket Adı / Ad soyad</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="email" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> E-mail</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="street" name="street" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="street" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Cadde</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="apartment" name="apartment" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="apartment" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Apartman No</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="postal-code" name="postal-code" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="postal-code" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Posta kodu</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="text" id="city" name="city" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="city" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Şehir</label>
                        </div>
                        <div class="mb-4 relative">
                            <select id="country" name="country" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                                <option value="Turkey">Turkey</option>
                                <!-- Add other countries as needed -->
                            </select>
                            <label for="country" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Ülke</label>
                        </div>
                        <div class="mb-4 relative">
                            <input type="tel" id="phone" name="phone" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required>
                            <label for="phone" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Telefon numarası</label>
                        </div>
                        <div class="mb-4 relative">
                            <textarea id="message" name="message" class="w-full border rounded px-3 py-2 focus:border-red-600 focus:outline-none peer" placeholder=" " required></textarea>
                            <label for="message" class="absolute left-3 top-3 text-gray-600 transition-transform duration-200 transform peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 origin-top-left"><span class="text-red-600">*</span> Mesaj</label>
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" required>
                                <span class="ml-2"><span class="text-red-600">*</span> Kabul ediyorum <a href="#" class="text-red-600">Puratos Politikası</a></span>
                            </label>
                        </div>
                        <button type="submit" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-600 text-black hover:text-red-600">Gönder</button>
                    </form>
                </div>
            </div>
            <div class="space-y-8">
                <div>
                    <h2 class="text-lg font-bold">Puratos Türkiye / İstanbul İnovasyon Merkezi</h2>
                    <p>Barbaros Mah. Begonya Sok. Nidakule<br>Ataşehir Kuzey No:3/L (34 nolu dükkan)<br>Ataşehir/İSTANBUL</p>
                </div>
                <div>
                    <h2 class="text-lg font-bold">Puratos Türkiye / Ankara İnovasyon Merkezi</h2>
                    <p>Mehmet Akif Ersoy Mah. 274. Sokak Wings<br>Ankara A Blok (108 numaralı dükkan)<br>Yenimahalle / Ankara</p>
                </div>
                <div>
                    <h2 class="text-lg font-bold">Çalışma saatleri</h2>
                    <p class="text-red-600">Pazartesi-Cuma<br>8:00 - 17:30</p>
                </div>
                <div>
                    <h2 class="text-lg font-bold">İletişim</h2>
                    <p>TEL <a href="tel:+902165930512" class="text-red-600 hover:underline">+90 216 593 05 12</a><br>
                    TEL <a href="tel:+902325135013" class="text-red-600 hover:underline">+90 232 513 50 13</a><br>
                    E-MAİL <a href="mailto:puratostr@puratos.com" class="text-red-600 hover:underline">puratostr@puratos.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(formId) {
            document.getElementById('contact-reason-form').classList.add('hidden');
            document.getElementById('help-form').classList.add('hidden');
            document.getElementById('applicant-form').classList.add('hidden');
            document.getElementById(formId).classList.remove('hidden');
        }
    </script>
@endsection
