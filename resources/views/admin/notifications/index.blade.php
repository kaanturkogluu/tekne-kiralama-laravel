@extends('admin.layouts.app')

@section('page-title', 'Bildirimler')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Butonlar -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Bildirimler</h1>
            <p class="text-gray-600">Sistem bildirimlerini yönetin ve izleyin</p>
        </div>
        <div class="flex items-center space-x-3">
            <button id="mark-all-read" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tümünü Okundu İşaretle
            </button>
            <a href="{{ url('/admin/settings/notifications') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Bildirim Ayarları
            </a>
        </div>
    </div>

    <!-- İstatistikler -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Bildirim</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 text-red-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Okunmamış</p>
                    <p class="text-2xl font-bold text-gray-900">23</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Bugün Gönderilen</p>
                    <p class="text-2xl font-bold text-gray-900">156</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Bekleyen</p>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtreler -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                <!-- Arama -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Bildirim ara..." class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-primary focus:border-primary">
                    </div>
                </div>

                <!-- Filtreler -->
                <div class="flex items-center space-x-4">
                    <select class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Tüm Türler</option>
                        <option value="system">Sistem</option>
                        <option value="user">Kullanıcı</option>
                        <option value="reservation">Rezervasyon</option>
                        <option value="payment">Ödeme</option>
                        <option value="security">Güvenlik</option>
                    </select>

                    <select class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Tüm Durumlar</option>
                        <option value="unread">Okunmamış</option>
                        <option value="read">Okunmuş</option>
                        <option value="pending">Bekleyen</option>
                    </select>

                    <select class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Tüm Öncelikler</option>
                        <option value="high">Yüksek</option>
                        <option value="medium">Orta</option>
                        <option value="low">Düşük</option>
                    </select>

                    <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z"></path>
                        </svg>
                        Filtrele
                    </button>
                </div>
            </div>
        </div>

        <!-- Bildirim Listesi -->
        <div class="divide-y divide-gray-200">
            <!-- Bildirim 1 - Okunmamış -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item" data-id="1" data-read="false">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Yeni Rezervasyon Talebi</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Yüksek
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Rezervasyon
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">2 dakika önce</span>
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Ahmet Yılmaz adlı kullanıcı "Lüks Yat" için 15-17 Mart tarihlerinde rezervasyon talebinde bulundu.
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Görüntüle</button>
                            <button class="text-sm text-green-600 hover:text-green-800 font-medium">Onayla</button>
                            <button class="text-sm text-red-600 hover:text-red-800 font-medium">Reddet</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bildirim 2 - Okunmamış -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item" data-id="2" data-read="false">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Ödeme Beklemede</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Orta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Ödeme
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">15 dakika önce</span>
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Rezervasyon #12345 için ödeme işlemi tamamlanamadı. Kullanıcı ile iletişime geçilmesi gerekiyor.
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Detayları Görüntüle</button>
                            <button class="text-sm text-yellow-600 hover:text-yellow-800 font-medium">Hatırlatma Gönder</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bildirim 3 - Okunmuş -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item bg-gray-50" data-id="3" data-read="true">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Yeni Kullanıcı Kaydı</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Düşük
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    Kullanıcı
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">1 saat önce</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Ayşe Kaya adlı yeni kullanıcı sisteme kayıt oldu. E-posta doğrulaması bekleniyor.
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Profil Görüntüle</button>
                            <button class="text-sm text-green-600 hover:text-green-800 font-medium">Onayla</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bildirim 4 - Okunmamış -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item" data-id="4" data-read="false">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Güvenlik Uyarısı</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Yüksek
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                    Güvenlik
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">2 saat önce</span>
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Şüpheli giriş denemesi tespit edildi. IP adresi: 203.45.67.89 - Kullanıcı: admin
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Güvenlik Logları</button>
                            <button class="text-sm text-red-600 hover:text-red-800 font-medium">IP Engelle</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bildirim 5 - Okunmuş -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item bg-gray-50" data-id="5" data-read="true">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Sistem Güncellemesi</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Orta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Sistem
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">3 saat önce</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Sistem başarıyla güncellendi. Yeni özellikler ve güvenlik yamaları eklendi.
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Değişiklikleri Görüntüle</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bildirim 6 - Okunmamış -->
            <div class="p-6 hover:bg-gray-50 transition duration-150 cursor-pointer notification-item" data-id="6" data-read="false">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-sm font-medium text-gray-900">Rezervasyon İptali</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Orta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Rezervasyon
                                </span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-500">4 saat önce</span>
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">
                            Rezervasyon #12340 iptal edildi. İade işlemi başlatılması gerekiyor.
                        </p>
                        <div class="flex items-center space-x-4 mt-3">
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium">Detayları Görüntüle</button>
                            <button class="text-sm text-green-600 hover:text-green-800 font-medium">İade Başlat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sayfalama -->
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Önceki
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Sonraki
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            <span class="font-medium">1</span> ile <span class="font-medium">10</span> arası, toplam <span class="font-medium">97</span> bildirimden
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Önceki</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                1
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                2
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                3
                            </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-50 text-sm font-medium text-gray-700">
                                ...
                            </span>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                8
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                9
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                10
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Sonraki</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Bildirim işlemleri
    document.addEventListener('DOMContentLoaded', function() {
        const notificationItems = document.querySelectorAll('.notification-item');
        const markAllReadBtn = document.getElementById('mark-all-read');

        // Tekil bildirim tıklama
        notificationItems.forEach(item => {
            item.addEventListener('click', function() {
                const notificationId = this.dataset.id;
                const isRead = this.dataset.read === 'true';
                
                if (!isRead) {
                    // Okundu işaretle
                    this.dataset.read = 'true';
                    this.classList.add('bg-gray-50');
                    this.querySelector('.w-2.h-2.bg-red-500')?.remove();
                    
                    // Bildirim sayısını güncelle
                    updateNotificationCount();
                }
            });
        });

        // Tümünü okundu işaretle
        markAllReadBtn.addEventListener('click', function() {
            notificationItems.forEach(item => {
                if (item.dataset.read === 'false') {
                    item.dataset.read = 'true';
                    item.classList.add('bg-gray-50');
                    const unreadDot = item.querySelector('.w-2.h-2.bg-red-500');
                    if (unreadDot) {
                        unreadDot.remove();
                    }
                }
            });
            
            updateNotificationCount();
        });

        // Bildirim sayısını güncelle
        function updateNotificationCount() {
            const unreadCount = document.querySelectorAll('[data-read="false"]').length;
            const unreadElement = document.querySelector('.text-2xl.font-bold.text-gray-900');
            if (unreadElement) {
                unreadElement.textContent = unreadCount;
            }
        }

        // Bildirim filtreleme
        const searchInput = document.querySelector('input[placeholder="Bildirim ara..."]');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            notificationItems.forEach(item => {
                const title = item.querySelector('.text-sm.font-medium.text-gray-900').textContent.toLowerCase();
                const content = item.querySelector('.text-sm.text-gray-600').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection 