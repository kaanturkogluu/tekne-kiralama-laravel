@extends('admin.layouts.app')

@section('page-title', 'Satış Raporları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Satış Raporları</h1>
            <p class="text-gray-600">Satış performansını ve gelir trendlerini analiz edin</p>
        </div>
        <div class="flex items-center space-x-3">
            <button type="button" id="export-sales" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Raporu Dışa Aktar
            </button>
            <button type="button" id="print-report" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Yazdır
            </button>
        </div>
    </div>

    <!-- Filtreler -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex items-center space-x-4">
                <label class="text-sm font-medium text-gray-700">Tarih Aralığı:</label>
                <select id="sales-date-range" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="today">Bugün</option>
                    <option value="yesterday">Dün</option>
                    <option value="week">Bu Hafta</option>
                    <option value="month" selected>Bu Ay</option>
                    <option value="quarter">Bu Çeyrek</option>
                    <option value="year">Bu Yıl</option>
                </select>
            </div>
            <div class="flex items-center space-x-4">
                <select id="sales-type" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="all">Tüm Satışlar</option>
                    <option value="reservations">Rezervasyonlar</option>
                    <option value="events">Etkinlikler</option>
                    <option value="services">Ek Hizmetler</option>
                </select>
                <button type="button" id="apply-sales-filters" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                    Filtrele
                </button>
            </div>
        </div>
    </div>

    <!-- Satış Özeti -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Gelir</p>
                    <p class="text-2xl font-bold text-gray-900">₺245,680</p>
                    <p class="text-sm text-green-600">+12.5% geçen aya göre</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Toplam Satış</p>
                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                    <p class="text-sm text-green-600">+8.3% geçen aya göre</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Ortalama Satış</p>
                    <p class="text-2xl font-bold text-gray-900">₺197</p>
                    <p class="text-sm text-green-600">+3.8% geçen aya göre</p>
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
                    <p class="text-sm font-medium text-gray-600">Büyüme Oranı</p>
                    <p class="text-2xl font-bold text-gray-900">12.5%</p>
                    <p class="text-sm text-green-600">Geçen aya göre</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafikler -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Gelir Trendi -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Gelir Trendi</h3>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <p class="text-gray-500">Gelir trendi grafiği burada görüntülenecek</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Satış Dağılımı -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Satış Dağılımı</h3>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <p class="text-gray-500">Satış dağılımı grafiği burada görüntülenecek</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- En Çok Satan Tekneler -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">En Çok Satan Tekneler</h3>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tekne</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Satış Adedi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Toplam Gelir</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ortalama Fiyat</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Büyüme</th>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺78,400</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺503</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    +15.2%
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺56,800</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺400</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    +8.7%
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺49,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₺500</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    -2.1%
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Satış Detayları -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Günlük Satışlar -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Günlük Satışlar</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Pazartesi</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺12,450</p>
                            <p class="text-xs text-gray-500">23 satış</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Salı</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺15,680</p>
                            <p class="text-xs text-gray-500">31 satış</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Çarşamba</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺18,920</p>
                            <p class="text-xs text-gray-500">38 satış</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Perşembe</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺22,150</p>
                            <p class="text-xs text-gray-500">45 satış</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Cuma</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺25,890</p>
                            <p class="text-xs text-gray-500">52 satış</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Satış Kategorileri -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Satış Kategorileri</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Rezervasyonlar</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺198,450</p>
                            <p class="text-xs text-gray-500">80.7%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Etkinlikler</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺32,680</p>
                            <p class="text-xs text-gray-500">13.3%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-900">Ek Hizmetler</span>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">₺14,550</p>
                            <p class="text-xs text-gray-500">5.9%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Satış filtreleri
        document.getElementById('apply-sales-filters').addEventListener('click', function() {
            const dateRange = document.getElementById('sales-date-range').value;
            const salesType = document.getElementById('sales-type').value;
            
            console.log('Satış filtreleri uygulanıyor:', { dateRange, salesType });
            // Burada AJAX ile filtreleme yapılabilir
        });

        // Rapor dışa aktarma
        document.getElementById('export-sales').addEventListener('click', function() {
            alert('Satış raporu PDF formatında dışa aktarılıyor...');
        });

        // Rapor yazdırma
        document.getElementById('print-report').addEventListener('click', function() {
            window.print();
        });

        // Tarih aralığı değişikliği
        document.getElementById('sales-date-range').addEventListener('change', function() {
            updateSalesReport(this.value);
        });

        // Satış türü değişikliği
        document.getElementById('sales-type').addEventListener('change', function() {
            updateSalesReport();
        });

        // Satış raporunu güncelle
        function updateSalesReport(dateRange = null) {
            const selectedDateRange = dateRange || document.getElementById('sales-date-range').value;
            const selectedType = document.getElementById('sales-type').value;
            
            console.log('Satış raporu güncelleniyor:', { selectedDateRange, selectedType });
            // Burada AJAX ile rapor verilerini güncelleyebilirsiniz
        }

        // Sayfa yüklendiğinde varsayılan raporu yükle
        updateSalesReport('month');
    });
</script>
@endsection 