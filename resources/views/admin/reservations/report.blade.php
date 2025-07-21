@extends('admin.layouts.app')

@section('page-title', 'Rezervasyon Raporu')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve İşlem Butonları -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Rezervasyon Raporu</h1>
            <p class="text-gray-600">Detaylı rezervasyon analizi ve istatistikler</p>
        </div>
        <div class="flex items-center space-x-3">
            <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Yazdır
            </button>
            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Excel İndir
            </button>
            <a href="{{ url('/admin/reservations/1') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Geri Dön
            </a>
        </div>
    </div>

    <!-- Filtreler -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Rapor Filtreleri</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label for="date_from" class="block text-sm font-medium text-gray-700 mb-1">Başlangıç Tarihi</label>
                <input type="date" id="date_from" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label for="date_to" class="block text-sm font-medium text-gray-700 mb-1">Bitiş Tarihi</label>
                <input type="date" id="date_to" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label for="boat_filter" class="block text-sm font-medium text-gray-700 mb-1">Tekne</label>
                <select id="boat_filter" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">Tüm Tekneler</option>
                    <option value="1">Mavi Deniz</option>
                    <option value="2">Rüzgar Avcısı</option>
                    <option value="3">Hız Tutkusu</option>
                    <option value="4">Çifte Güç</option>
                </select>
            </div>
            <div class="flex items-end">
                <button class="w-full bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                    Rapor Oluştur
                </button>
            </div>
        </div>
    </div>

    <!-- Özet İstatistikler -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Rezervasyon</p>
                    <p class="text-2xl font-semibold text-gray-900">156</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Gelir</p>
                    <p class="text-2xl font-semibold text-gray-900">₺1,245,600</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Ortalama Katılımcı</p>
                    <p class="text-2xl font-semibold text-gray-900">8.5</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Doluluk Oranı</p>
                    <p class="text-2xl font-semibold text-gray-900">%78</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detaylı Rapor -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Durum Dağılımı -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Rezervasyon Durumu Dağılımı</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Tamamlandı</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">89 rezervasyon</span>
                            <span class="text-sm font-semibold text-gray-900">%57</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Onaylandı</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">34 rezervasyon</span>
                            <span class="text-sm font-semibold text-gray-900">%22</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Beklemede</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">25 rezervasyon</span>
                            <span class="text-sm font-semibold text-gray-900">%16</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">İptal Edildi</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">8 rezervasyon</span>
                            <span class="text-sm font-semibold text-gray-900">%5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tekne Performansı -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Tekne Performansı</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-900">Mavi Deniz</span>
                            <span class="text-sm text-gray-600">₺312,400</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-900">Rüzgar Avcısı</span>
                            <span class="text-sm text-gray-600">₺259,200</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-900">Hız Tutkusu</span>
                            <span class="text-sm text-gray-600">₺172,800</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 55%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-900">Çifte Güç</span>
                            <span class="text-sm text-gray-600">₺501,200</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detaylı Tablo -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Rezervasyon Detayları</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rezervasyon</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Müşteri</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tekne</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tarih</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Süre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Katılımcı</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tutar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durum</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#RES-2024-001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mehmet Demir</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mavi Deniz</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 Mart 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4 saat</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₺10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Beklemede
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#RES-2024-002</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Ayşe Kaya</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rüzgar Avcısı</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 Mart 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8 saat</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₺14,400</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Onaylandı
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#RES-2024-003</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Ali Özkan</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Hız Tutkusu</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12 Mart 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6 saat</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₺7,200</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Tamamlandı
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Analiz Özeti -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Analiz Özeti</h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-3">En Popüler Zamanlar</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Hafta sonları (%65)</li>
                        <li>• 14:00-18:00 arası (%45)</li>
                        <li>• Yaz ayları (%78)</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-3">Müşteri Analizi</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Yeni müşteriler (%35)</li>
                        <li>• Tekrar eden müşteriler (%65)</li>
                        <li>• Ortalama grup büyüklüğü: 8.5 kişi</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-3">Gelir Analizi</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Aylık ortalama: ₺124,560</li>
                        <li>• En yüksek gelir: Temmuz</li>
                        <li>• Ortalama rezervasyon: ₺7,985</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media print {
        body * {
            visibility: hidden;
        }
        .space-y-6 > * {
            visibility: visible;
        }
        .space-y-6 {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
        .no-print {
            display: none !important;
        }
    }
</style>
@endsection 