@extends('admin.layouts.app')

@section('page-title', 'Rezervasyon Detayı')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve İşlem Butonları -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Rezervasyon Detayı</h1>
            <p class="text-gray-600">Rezervasyon bilgilerini görüntüleyin</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ url('/admin/reservations/1/edit') }}" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Düzenle
            </a>
            <a href="{{ url('/admin/reservations/1/invoice') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Fatura
            </a>
            <a href="{{ url('/admin/reservations/1/report') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Rapor
            </a>
            <a href="{{ url('/admin/reservations') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Geri Dön
            </a>
        </div>
    </div>

    <!-- Rezervasyon Bilgileri -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Sol Kolon - Ana Bilgiler -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Temel Bilgiler -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Rezervasyon Bilgileri</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Rezervasyon Kodu</label>
                            <p class="text-lg font-semibold text-gray-900">#RES-2024-001</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Durum</label>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Beklemede
                            </span>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Rezervasyon Tarihi</label>
                            <p class="text-gray-900">15 Mart 2024</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Saat Aralığı</label>
                            <p class="text-gray-900">14:00 - 18:00 (4 saat)</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Oluşturulma Tarihi</label>
                            <p class="text-gray-900">13 Mart 2024, 16:30</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Son Güncelleme</label>
                            <p class="text-gray-900">13 Mart 2024, 16:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Müşteri Bilgileri -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Müşteri Bilgileri</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                            <p class="text-lg font-semibold text-gray-900">Mehmet Demir</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                            <p class="text-gray-900">mehmet@email.com</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                            <p class="text-gray-900">+90 532 123 45 67</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">TC Kimlik No</label>
                            <p class="text-gray-900">12345678901</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tekne Bilgileri -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Tekne Bilgileri</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-24 w-24 rounded-lg object-cover" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Tekne">
                        </div>
                        <div class="flex-1">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Tekne Adı</label>
                                    <p class="text-lg font-semibold text-gray-900">Mavi Deniz</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        Yat
                                    </span>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kapasite</label>
                                    <p class="text-gray-900">12 Kişi</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Günlük Fiyat</label>
                                    <p class="text-lg font-semibold text-green-600">₺2,500</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Tekne Sahibi</label>
                                    <p class="text-gray-900">Ahmet Yılmaz</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Lokasyon</label>
                                    <p class="text-gray-900">İstanbul, Boğaz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Katılımcı ve İstekler -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Katılımcı ve Özel İstekler</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Katılımcı Sayısı</label>
                            <p class="text-lg font-semibold text-gray-900">8 Kişi</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Özel İstekler</label>
                            <p class="text-gray-900">Gün batımı turu için özel düzenleme istiyoruz. Müzik sistemi ve içecek servisi olsun.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notlar -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Notlar</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 leading-relaxed">
                        Müşteri özel bir gün batımı turu istiyor. Tekne sahibi ile görüşüldü, müzik sistemi ve içecek servisi hazırlanacak. 
                        Müşteri 16:00'da marina'da olacak, önceden hazırlık yapılması gerekiyor.
                    </p>
                </div>
            </div>
        </div>

        <!-- Sağ Kolon - Yan Bilgiler -->
        <div class="space-y-6">
            <!-- Fiyat Detayları -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Fiyat Detayları</h3>
                </div>
                <div class="p-6 space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-700">Günlük Fiyat:</span>
                        <span class="font-medium">₺2,500</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Saat Sayısı:</span>
                        <span class="font-medium">4 saat</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Hesaplanan Tutar:</span>
                        <span class="font-medium">₺1,250</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">İndirim:</span>
                        <span class="font-medium text-green-600">-₺0</span>
                    </div>
                    <hr class="border-gray-300">
                    <div class="flex justify-between text-lg font-semibold">
                        <span class="text-gray-900">Toplam Tutar:</span>
                        <span class="text-green-600">₺10,000</span>
                    </div>
                </div>
            </div>

            <!-- Ödeme Bilgileri -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Ödeme Bilgileri</h3>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ödeme Yöntemi</label>
                        <p class="text-gray-900">Kredi Kartı</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ödeme Durumu</label>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Beklemede
                        </span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ödeme Tarihi</label>
                        <p class="text-gray-900">-</p>
                    </div>
                </div>
            </div>

            <!-- Hızlı İşlemler -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Hızlı İşlemler</h3>
                </div>
                <div class="p-6 space-y-3">
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Rezervasyonu Onayla
                    </button>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Tamamlandı Olarak İşaretle
                    </button>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        İptal Et
                    </button>
                </div>
            </div>

            <!-- İletişim -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">İletişim</h3>
                </div>
                <div class="p-6 space-y-3">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Müşteriyi Ara
                    </button>
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        E-posta Gönder
                    </button>
                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        SMS Gönder
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 