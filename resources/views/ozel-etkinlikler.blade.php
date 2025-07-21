@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold text-primary mb-6">Özel Etkinlikler</h1>
    <p class="mb-8 text-gray-700">Evlilik teklifi, kına gecesi, doğum günü ve daha fazlası için teknede unutulmaz anlar yaşamak ister misiniz? Aşağıda daha önce düzenlediğimiz bazı özel etkinlikleri görebilir, siz de kendi etkinliğiniz için talep oluşturup fiyat teklifi alabilirsiniz.</p>

    <!-- Geçmiş Etkinlikler -->
    <div class="mb-12">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daha Önce Yapılan Etkinlikler</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Etkinlik Kartı 1 -->
            <div class="bg-white rounded-lg shadow p-5 flex flex-col">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Evlilik Teklifi" class="rounded-md mb-3 h-40 object-cover">
                <h3 class="font-bold text-lg text-primary mb-1">Evlilik Teklifi</h3>
                <p class="text-gray-600 text-sm mb-2">Boğazda gün batımında romantik bir evlilik teklifi organizasyonu.</p>
                <span class="text-xs text-gray-400">Haziran 2024, İstanbul</span>
            </div>
            <!-- Etkinlik Kartı 2 -->
            <div class="bg-white rounded-lg shadow p-5 flex flex-col">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Kına Gecesi" class="rounded-md mb-3 h-40 object-cover">
                <h3 class="font-bold text-lg text-primary mb-1">Kına Gecesi</h3>
                <p class="text-gray-600 text-sm mb-2">Deniz üstünde geleneksel ve eğlenceli bir kına gecesi kutlaması.</p>
                <span class="text-xs text-gray-400">Mayıs 2024, Bodrum</span>
            </div>
            <!-- Etkinlik Kartı 3 -->
            <div class="bg-white rounded-lg shadow p-5 flex flex-col">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Doğum Günü" class="rounded-md mb-3 h-40 object-cover">
                <h3 class="font-bold text-lg text-primary mb-1">Doğum Günü</h3>
                <p class="text-gray-600 text-sm mb-2">Arkadaşlarınızla veya ailenizle teknede özel doğum günü partisi.</p>
                <span class="text-xs text-gray-400">Nisan 2024, Fethiye</span>
            </div>
            <!-- Etkinlik Kartı 4 -->
            <div class="bg-white rounded-lg shadow p-5 flex flex-col">
                <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=600&q=80" alt="Kurumsal Etkinlik" class="rounded-md mb-3 h-40 object-cover">
                <h3 class="font-bold text-lg text-primary mb-1">Kurumsal Etkinlik</h3>
                <p class="text-gray-600 text-sm mb-2">Şirket çalışanları için motivasyon ve takım ruhu etkinliği.</p>
                <span class="text-xs text-gray-400">Mart 2024, Marmaris</span>
            </div>
        </div>
    </div>

    <!-- Talep Formu -->
    <div class="bg-white rounded-lg shadow p-8 mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Kendi Etkinliğinizi Planlayın</h2>
        <form class="space-y-4">
            <div>
                <label for="adsoyad" class="block text-gray-700 mb-1">Ad Soyad</label>
                <input type="text" id="adsoyad" name="adsoyad" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 mb-1">E-posta</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label for="telefon" class="block text-gray-700 mb-1">Telefon</label>
                <input type="tel" id="telefon" name="telefon" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label for="etkinlik_turu" class="block text-gray-700 mb-1">Etkinlik Türü</label>
                <select id="etkinlik_turu" name="etkinlik_turu" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    <option value="">Seçiniz</option>
                    <option>Evlilik Teklifi</option>
                    <option>Kına Gecesi</option>
                    <option>Doğum Günü</option>
                    <option>Kurumsal Etkinlik</option>
                    <option>Diğer</option>
                </select>
            </div>
            <div>
                <label for="tarih" class="block text-gray-700 mb-1">Tarih</label>
                <input type="date" id="tarih" name="tarih" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
                <label for="aciklama" class="block text-gray-700 mb-1">Açıklama / Özel Talepler</label>
                <textarea id="aciklama" name="aciklama" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
            </div>
            <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-semibold py-2 rounded-md transition">Fiyat Teklifi Al</button>
        </form>
    </div>
</div>
@endsection 