@extends('admin.layouts.app')

@section('page-title', 'Rezervasyon Raporları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Rezervasyon Raporları</h1>
            <p class="text-gray-600">Rezervasyon performansını ve doluluk oranlarını analiz edin</p>
        </div>
        <div class="flex items-center space-x-3">
            <button type="button" id="export-reservations" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Raporu Dışa Aktar
            </button>
            <button type="button" id="calendar-view" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Takvim Görünümü
            </button>
        </div>
    </div>

    <!-- Filtreler -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex items-center space-x-4">
                <label class="text-sm font-medium text-gray-700">Tarih Aralığı:</label>
                <select id="reservation-date-range" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="today">Bugün</option>
                    <option value="yesterday">Dün</option>
                    <option value="week">Bu Hafta</option>
                    <option value="month" selected>Bu Ay</option>
                    <option value="quarter">Bu Çeyrek</option>
                    <option value="year">Bu Yıl</option>
                </select>
            </div>
            <div class="flex items-center space-x-4">
                <select id="reservation-status" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="all">Tüm Durumlar</option>
                    <option value="confirmed">Onaylanmış</option>
                    <option value="pending">Bekleyen</option>
                    <option value="cancelled">İptal Edilmiş</option>
                    <option value="completed">Tamamlanmış</option>
                </select>
                <select id="boat-type" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="all">Tüm Tekneler</option>
                    <option value="motor">Motor Yat</option>
                    <option value="sail">Yelkenli</option>
                    <option value="catamaran">Katamaran</option>
                    <option value="gulet">Gület</option>
                </select>
                <button type="button" id="apply-reservation-filters" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                    Filtrele
                </button>
            </div>
        </div>
    </div>

    <!-- Rezervasyon Özeti -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Rezervasyon</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-sm text-green-600">+8.3% geçen aya göre</p>
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
                    <p class="text-sm font-medium text-gray-600">Onaylanmış</p>
                    <p class="text-2xl font-bold text-gray-900">1,089</p>
                    <p class="text-sm text-green-600">87.3% oran</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Bekleyen</p>
                    <p class="text-2xl font-bold text-gray-900">89</p>
                    <p class="text-sm text-yellow-600">7.1% oran</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Doluluk Oranı</p>
                    <p class="text-2xl font-bold text-gray-900">78.5%</p>
                    <p class="text-sm text-green-600">+5.2% geçen aya göre</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafikler -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Rezervasyon Trendi -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Rezervasyon Trendi</h3>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <p class="text-gray-500">Rezervasyon trendi grafiği burada görüntülenecek</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Doluluk Oranları -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Doluluk Oranları</h3>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <p class="text-gray-500">Doluluk oranları grafiği burada görüntülenecek</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- En Popüler Tekneler -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">En Popüler Tekneler</h3>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tekne</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rezervasyon</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doluluk Oranı</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ortalama Süre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Performans</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                        <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Lüks Yat">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Lüks Yat</div>
                                        <div class="text-sm text-gray-500">Motor Yat</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">156</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">85%</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3.2 gün</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Mükemmel
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                        <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Yelkenli">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Yelkenli Tekne</div>
                                        <div class="text-sm text-gray-500">Yelkenli</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">142</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 72%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">72%</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2.8 gün</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    İyi
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                        <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Katamaran">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Katamaran</div>
                                        <div class="text-sm text-gray-500">Çok Gövdeli</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">98</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-yellow-600 h-2 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <span class="text-sm text-gray-900">65%</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2.1 gün</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Orta
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Rezervasyon Detayları -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Günlük Rezervasyonlar -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Günlük Rezervasyonlar</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Pazartesi</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">23 rezervasyon</p>
                            <p class="text-xs text-gray-500">₺12,450 gelir</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Salı</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">31 rezervasyon</p>
                            <p class="text-xs text-gray-500">₺15,680 gelir</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Çarşamba</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">38 rezervasyon</p>
                            <p class="text-xs text-gray-500">₺18,920 gelir</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Perşembe</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">45 rezervasyon</p>
                            <p class="text-xs text-gray-500">₺22,150 gelir</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Cuma</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">52 rezervasyon</p>
                            <p class="text-xs text-gray-500">₺25,890 gelir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rezervasyon Durumları -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Rezervasyon Durumları</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Onaylanmış</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">1,089</p>
                            <p class="text-xs text-gray-500">87.3%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Bekleyen</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">89</p>
                            <p class="text-xs text-gray-500">7.1%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">İptal Edilmiş</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">45</p>
                            <p class="text-xs text-gray-500">3.6%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Tamamlanmış</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">24</p>
                            <p class="text-xs text-gray-500">1.9%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Performans Metrikleri -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Performans Metrikleri</h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">4.8</div>
                    <div class="text-sm text-gray-600 mt-1">Ortalama Müşteri Puanı</div>
                    <div class="flex justify-center mt-2">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600">92%</div>
                    <div class="text-sm text-gray-600 mt-1">Müşteri Memnuniyeti</div>
                    <div class="text-xs text-green-600 mt-1">+3% geçen aya göre</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600">2.4</div>
                    <div class="text-sm text-gray-600 mt-1">Ortalama Yanıt Süresi (saat)</div>
                    <div class="text-xs text-green-600 mt-1">-0.3 saat geçen aya göre</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Rezervasyon filtreleri
        document.getElementById('apply-reservation-filters').addEventListener('click', function() {
            const dateRange = document.getElementById('reservation-date-range').value;
            const status = document.getElementById('reservation-status').value;
            const boatType = document.getElementById('boat-type').value;
            
            console.log('Rezervasyon filtreleri uygulanıyor:', { dateRange, status, boatType });
            // Burada AJAX ile filtreleme yapılabilir
        });

        // Rapor dışa aktarma
        document.getElementById('export-reservations').addEventListener('click', function() {
            alert('Rezervasyon raporu PDF formatında dışa aktarılıyor...');
        });

        // Takvim görünümü
        document.getElementById('calendar-view').addEventListener('click', function() {
            window.location.href = '/admin/reports/reservations/calendar';
        });

        // Tarih aralığı değişikliği
        document.getElementById('reservation-date-range').addEventListener('change', function() {
            updateReservationReport(this.value);
        });

        // Durum değişikliği
        document.getElementById('reservation-status').addEventListener('change', function() {
            updateReservationReport();
        });

        // Tekne türü değişikliği
        document.getElementById('boat-type').addEventListener('change', function() {
            updateReservationReport();
        });

        // Rezervasyon raporunu güncelle
        function updateReservationReport(dateRange = null) {
            const selectedDateRange = dateRange || document.getElementById('reservation-date-range').value;
            const selectedStatus = document.getElementById('reservation-status').value;
            const selectedBoatType = document.getElementById('boat-type').value;
            
            console.log('Rezervasyon raporu güncelleniyor:', { selectedDateRange, selectedStatus, selectedBoatType });
            // Burada AJAX ile rapor verilerini güncelleyebilirsiniz
        }

        // Sayfa yüklendiğinde varsayılan raporu yükle
        updateReservationReport('month');
    });
</script>
@endsection 