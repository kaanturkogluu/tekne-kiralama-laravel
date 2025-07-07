@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-gradient-to-r from-blue-600 to-blue-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Hayalinizdeki</span>
                            <span class="block text-yellow-400">Tekne Deneyimi</span>
                        </h1>
                        <p class="mt-3 text-base text-blue-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Türkiye'nin en büyük tekne kiralama platformunda binlerce tekne arasından seçim yapın. Güvenli, kolay ve unutulmaz deniz deneyimleri için CharterXplore'u tercih edin.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out">
                                    Tekne Ara
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out">
                                    Etkinlikler
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Luxury yacht">
        </div>
    </div>

    <!-- Search Section -->
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <!-- Tab Navigation -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button class="border-primary text-primary whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm active-tab" onclick="switchTab('tekne')">
                            Tekne Kiralama
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm" onclick="switchTab('etkinlik')">
                            Etkinlikler
                        </button>
                </nav>
                </div>

                <!-- Tekne Kiralama Tab -->
                <div id="tekne-tab" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Lokasyon</label>
                            <div class="relative">
                                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary appearance-none bg-white">
                                    <option value="">Tüm Lokasyonlar</option>
                                    <optgroup label="Marmara Bölgesi">
                                        <option value="istanbul-besiktas">İstanbul - Beşiktaş</option>
                                        <option value="istanbul-kadikoy">İstanbul - Kadıköy</option>
                                        <option value="istanbul-sariyer">İstanbul - Sarıyer</option>
                                        <option value="bursa-mudanya">Bursa - Mudanya</option>
                                    </optgroup>
                                    <optgroup label="Ege Bölgesi">
                                        <option value="izmir-cesme">İzmir - Çeşme</option>
                                        <option value="izmir-foca">İzmir - Foça</option>
                                        <option value="mugla-bodrum">Muğla - Bodrum</option>
                                        <option value="mugla-marmaris">Muğla - Marmaris</option>
                                        <option value="mugla-fethiye">Muğla - Fethiye</option>
                                    </optgroup>
                                    <optgroup label="Akdeniz Bölgesi">
                                        <option value="antalya-kas">Antalya - Kaş</option>
                                        <option value="antalya-kemer">Antalya - Kemer</option>
                                        <option value="antalya-alanya">Antalya - Alanya</option>
                                    </optgroup>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tarih</label>
                            <input type="date" value="{{ date('Y-m-d') }}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kişi Sayısı</label>
                            <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>1-4 kişi</option>
                                <option>5-8 kişi</option>
                                <option>9-12 kişi</option>
                                <option>12+ kişi</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button class="w-full bg-primary hover:bg-secondary text-white font-medium py-2 px-4 rounded-md transition duration-150 ease-in-out">
                                Tekne Ara
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Etkinlikler Tab -->
                <div id="etkinlik-tab" class="tab-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Lokasyon</label>
                            <div class="relative">
                                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary appearance-none bg-white">
                                    <option value="">Tüm Lokasyonlar</option>
                                    <optgroup label="Marmara Bölgesi">
                                        <option value="istanbul-besiktas">İstanbul - Beşiktaş</option>
                                        <option value="istanbul-kadikoy">İstanbul - Kadıköy</option>
                                        <option value="istanbul-sariyer">İstanbul - Sarıyer</option>
                                        <option value="bursa-mudanya">Bursa - Mudanya</option>
                                    </optgroup>
                                    <optgroup label="Ege Bölgesi">
                                        <option value="izmir-cesme">İzmir - Çeşme</option>
                                        <option value="izmir-foca">İzmir - Foça</option>
                                        <option value="mugla-bodrum">Muğla - Bodrum</option>
                                        <option value="mugla-marmaris">Muğla - Marmaris</option>
                                        <option value="mugla-fethiye">Muğla - Fethiye</option>
                                    </optgroup>
                                    <optgroup label="Akdeniz Bölgesi">
                                        <option value="antalya-kas">Antalya - Kaş</option>
                                        <option value="antalya-kemer">Antalya - Kemer</option>
                                        <option value="antalya-alanya">Antalya - Alanya</option>
                                    </optgroup>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Etkinlik Türü</label>
                            <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="">Tüm Etkinlikler</option>
                                <option value="yuzme">Yüzme & Snorkel</option>
                                <option value="balik">Balık Tutma</option>
                                <option value="günbatimi">Gün Batımı Turu</option>
                                <option value="parti">Tekne Partisi</option>
                                <option value="romantik">Romantik Tur</option>
                                <option value="dalgic">Dalış Turu</option>
                                <option value="adalar">Ada Turu</option>
                                <option value="yemek">Yemekli Tur</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tarih</label>
                            <input type="date" value="{{ date('Y-m-d') }}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="flex items-end">
                            <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-md transition duration-150 ease-in-out">
                                Etkinlik Ara
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
            
            // Remove active class from all tabs
            const tabs = document.querySelectorAll('nav button');
            tabs.forEach(tab => {
                tab.classList.remove('border-primary', 'text-primary');
                tab.classList.add('border-transparent', 'text-gray-500');
            });
            
            // Show selected tab content
            document.getElementById(tabName + '-tab').classList.remove('hidden');
            
            // Add active class to selected tab
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('border-primary', 'text-primary');
        }
    </script>

    <!-- Featured Boats Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Öne Çıkan Tekneler</h2>
                <p class="text-lg text-gray-600">En popüler ve güvenilir teknelerimizi keşfedin</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Boat Card 1 -->
                <div class="flex bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out" style="height:220px;">
                    <div class="w-1/2 h-full flex-shrink-0">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Luxury yacht">
                    </div>
                    <div class="w-1/2 p-6 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Lüks Yat - Blue Dream</h3>
                            <p class="text-gray-600 text-sm mb-2">İstanbul, Beşiktaş</p>
                            <div class="flex items-center space-x-4 mb-3 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    12 kişi
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    45 ft
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-yellow-400">★</span>
                                <span class="text-sm text-gray-600">4.8 (124)</span>
                            </div>
                            <span class="text-lg font-bold text-primary">₺250/saat</span>
                        </div>
                    </div>
                </div>

                <!-- Boat Card 2 -->
                <div class="flex bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out" style="height:220px;">
                    <div class="w-1/2 h-full flex-shrink-0">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1505118380757-91f5f5632de0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sailing boat">
                    </div>
                    <div class="w-1/2 p-6 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Yelkenli - Sea Spirit</h3>
                            <p class="text-gray-600 text-sm mb-2">İzmir, Çeşme</p>
                            <div class="flex items-center space-x-4 mb-3 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    8 kişi
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    32 ft
                            </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-yellow-400">★</span>
                                <span class="text-sm text-gray-600">4.9 (89)</span>
                            </div>
                            <span class="text-lg font-bold text-primary">₺180/saat</span>
                        </div>
                    </div>
                </div>

                <!-- Boat Card 3 -->
                <div class="flex bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out" style="height:220px;">
                    <div class="w-1/2 h-full flex-shrink-0">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1569263979104-865ab566b6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Motor yacht">
                    </div>
                    <div class="w-1/2 p-6 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Motor Yat - Ocean Explorer</h3>
                            <p class="text-gray-600 text-sm mb-2">Antalya, Kaş</p>
                            <div class="flex items-center space-x-4 mb-3 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    16 kişi
                            </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    65 ft
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-yellow-400">★</span>
                                <span class="text-sm text-gray-600">4.7 (156)</span>
                            </div>
                            <span class="text-lg font-bold text-primary">₺320/saat</span>
                        </div>
                    </div>
                </div>

                <!-- Boat Card 4 -->
                <div class="flex bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out" style="height:220px;">
                    <div class="w-1/2 h-full flex-shrink-0">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Catamaran">
                    </div>
                    <div class="w-1/2 p-6 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Katamaran - Twin Hull</h3>
                            <p class="text-gray-600 text-sm mb-2">Muğla, Bodrum</p>
                            <div class="flex items-center space-x-4 mb-3 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    14 kişi
                            </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    48 ft
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-yellow-400">★</span>
                                <span class="text-sm text-gray-600">4.6 (203)</span>
                            </div>
                            <span class="text-lg font-bold text-primary">₺280/saat</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="{{ url('/boats') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-secondary transition duration-150 ease-in-out">
                    {{ __('nav.boats') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Neden CharterXplore?</h2>
                <p class="text-lg text-gray-600">Güvenli ve kolay tekne kiralama deneyimi</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Güvenli Ödeme</h3>
                    <p class="text-gray-600">Tüm ödemeler güvenli platform üzerinden yapılır, paranız korunur.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">7/24 Destek</h3>
                    <p class="text-gray-600">Müşteri hizmetlerimiz her zaman yanınızda, sorularınızı yanıtlamaya hazır.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Doğrulanmış Tekneler</h3>
                    <p class="text-gray-600">Tüm teknelerimiz kontrol edilmiş ve güvenlik standartlarına uygun.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Teknenizi Kiralamaya Hazır mısınız?</span>
                <span class="block text-yellow-400">Hemen başlayın!</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 transition duration-150 ease-in-out">
                        Etkinlikler
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 transition duration-150 ease-in-out">
                        Tekne Kirala
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Sıkça Sorulan Sorular</h2>
                <p class="text-lg text-gray-600">Tekne kiralama hakkında merak edilenler</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Tekne kiralamak için ehliyet gerekli mi?</h3>
                    <p class="text-gray-600">Hayır, tekne kiralarken ehliyet zorunlu değildir. Ancak bazı tekneler için denizcilik belgesi gerekebilir. Detayları tekne sahibi ile görüşebilirsiniz.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Minimum kiralama süresi nedir?</h3>
                    <p class="text-gray-600">Minimum kiralama süresi genellikle 2 saattir. Bazı tekneler için bu süre değişebilir. Tekne detaylarında belirtilen süreleri kontrol edebilirsiniz.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Depozito ödemesi gerekli mi?</h3>
                    <p class="text-gray-600">Evet, güvenlik amacıyla depozito ödemesi alınmaktadır. Depozito miktarı tekne tipine ve değerine göre değişiklik gösterir.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Hava durumu kötü olursa iptal edebilir miyim?</h3>
                    <p class="text-gray-600">Evet, hava durumu nedeniyle güvenli olmayan koşullarda kiralama iptal edilebilir. Bu durumda depozito iadesi yapılır.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Tekne kiralarken sigorta dahil mi?</h3>
                    <p class="text-gray-600">Tüm teknelerimiz temel sigorta kapsamındadır. Ek sigorta seçenekleri de mevcuttur. Detayları kiralama sırasında öğrenebilirsiniz.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Tekne kiralarken yakıt dahil mi?</h3>
                    <p class="text-gray-600">Yakıt genellikle kiralama ücretine dahil değildir. Tekneyi teslim alırken dolu yakıt ile alıp, dolu yakıt ile teslim etmeniz gerekir.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
