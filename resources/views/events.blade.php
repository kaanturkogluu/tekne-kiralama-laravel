@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Tab Navigation -->
        <div class="mb-8 flex space-x-4 border-b">
            <button id="tab-events" class="py-2 px-4 text-lg font-semibold border-b-2 border-primary text-primary focus:outline-none" onclick="showTab('events')">Etkinlikler</button>
            <button id="tab-special" class="py-2 px-4 text-lg font-semibold border-b-2 border-transparent text-gray-500 hover:text-primary focus:outline-none" onclick="showTab('special')">Özel Etkinlikler</button>
        </div>
        <!-- Etkinlikler Tab İçeriği -->
        <div id="events-tab-content">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">{{ __('events.title') }}</h1>
            <form class="flex flex-col md:flex-row gap-2 md:gap-4 w-full md:w-auto">
                <input type="text" name="q" placeholder="{{ __('events.search_placeholder') }}" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary w-full md:w-64">
                <select name="location" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">{{ __('events.all_locations') }}</option>
                    <option value="istanbul">İstanbul</option>
                    <option value="izmir">İzmir</option>
                    <option value="antalya">Antalya</option>
                    <option value="mugla">Muğla</option>
                </select>
                <select name="type" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">{{ __('events.all_types') }}</option>
                    <option value="swim">Yüzme & Snorkel</option>
                    <option value="fishing">Balık Tutma</option>
                    <option value="sunset">Gün Batımı Turu</option>
                    <option value="party">Tekne Partisi</option>
                    <option value="romantic">Romantik Tur</option>
                    <option value="diving">Dalış Turu</option>
                    <option value="islands">Ada Turu</option>
                    <option value="dinner">Yemekli Tur</option>
                </select>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-6 py-2 rounded-md transition duration-150">{{ __('events.filter') }}</button>
            </form>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example Event Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sunset Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Gün Batımı Turu</h3>
                        <p class="text-gray-600 text-sm mb-2">İstanbul, Boğaz</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                20 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                2 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.9 (67)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺350/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
            <!-- Example Event Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1464983953574-0892a716854b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Fishing Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Balık Tutma Turu</h3>
                        <p class="text-gray-600 text-sm mb-2">Muğla, Bodrum</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                10 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                4 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.7 (41)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺250/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
            <!-- Example Event Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Party Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Tekne Partisi</h3>
                        <p class="text-gray-600 text-sm mb-2">Antalya, Kaş</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                30 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                3 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.8 (22)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺200/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Özel Etkinlikler Tab İçeriği -->
        <div id="special-tab-content" class="hidden">
            <h2 class="text-2xl font-bold text-primary mb-6">Özel Etkinlikler</h2>
            <p class="mb-8 text-gray-700">Evlilik teklifi, kına gecesi, doğum günü ve daha fazlası için teknede unutulmaz anlar yaşamak ister misiniz? Aşağıda daha önce düzenlediğimiz bazı özel etkinlikleri görebilir, siz de kendi etkinliğiniz için talep oluşturup fiyat teklifi alabilirsiniz.</p>
            <div class="mb-12 grid grid-cols-1 md:grid-cols-2 gap-6">
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
            <!-- Talep Formu -->
            <div class="bg-white rounded-lg shadow p-8 mt-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Kendi Etkinliğinizi Planlayın</h3>
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
        <script>
            function showTab(tab) {
                document.getElementById('events-tab-content').classList.toggle('hidden', tab !== 'events');
                document.getElementById('special-tab-content').classList.toggle('hidden', tab !== 'special');
                document.getElementById('tab-events').classList.toggle('border-primary', tab === 'events');
                document.getElementById('tab-events').classList.toggle('text-primary', tab === 'events');
                document.getElementById('tab-events').classList.toggle('border-transparent', tab !== 'events');
                document.getElementById('tab-events').classList.toggle('text-gray-500', tab !== 'events');
                document.getElementById('tab-special').classList.toggle('border-primary', tab === 'special');
                document.getElementById('tab-special').classList.toggle('text-primary', tab === 'special');
                document.getElementById('tab-special').classList.toggle('border-transparent', tab !== 'special');
                document.getElementById('tab-special').classList.toggle('text-gray-500', tab !== 'special');
            }
        </script>
    </div>
</div>
@endsection 