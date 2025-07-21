@extends('admin.layouts.app')

@section('page-title', 'Rezervasyon Faturası')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve İşlem Butonları -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Rezervasyon Faturası</h1>
            <p class="text-gray-600">Fatura detaylarını görüntüleyin ve yazdırın</p>
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
                PDF İndir
            </button>
            <a href="{{ url('/admin/reservations/1') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Geri Dön
            </a>
        </div>
    </div>

    <!-- Fatura -->
    <div class="bg-white rounded-lg shadow-lg max-w-4xl mx-auto" id="invoice">
        <!-- Fatura Başlığı -->
        <div class="p-8 border-b-2 border-gray-200">
            <div class="flex justify-between items-start">
                <div>
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">DENİZ TURİZM</h1>
                            <p class="text-gray-600">Tekne Kiralama Hizmetleri</p>
                        </div>
                    </div>
                    <div class="mt-6 space-y-1 text-sm text-gray-600">
                        <p>Adres: Marina Caddesi No:123, İstanbul</p>
                        <p>Telefon: +90 212 555 0123</p>
                        <p>E-posta: info@denizturizm.com</p>
                        <p>Vergi No: 1234567890</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">FATURA</h2>
                        <p class="text-gray-600">Fatura No: <span class="font-semibold">#INV-2024-001</span></p>
                        <p class="text-gray-600">Tarih: <span class="font-semibold">13 Mart 2024</span></p>
                        <p class="text-gray-600">Vade: <span class="font-semibold">13 Mart 2024</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Müşteri ve Rezervasyon Bilgileri -->
        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Fatura Adresi</h3>
                <div class="space-y-2 text-gray-700">
                    <p class="font-semibold">Mehmet Demir</p>
                    <p>TC: 12345678901</p>
                    <p>E-posta: mehmet@email.com</p>
                    <p>Telefon: +90 532 123 45 67</p>
                    <p>Adres: Örnek Mahallesi, Örnek Sokak No:1</p>
                    <p>İstanbul, Türkiye</p>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Rezervasyon Bilgileri</h3>
                <div class="space-y-2 text-gray-700">
                    <p><span class="font-semibold">Rezervasyon No:</span> #RES-2024-001</p>
                    <p><span class="font-semibold">Rezervasyon Tarihi:</span> 15 Mart 2024</p>
                    <p><span class="font-semibold">Saat:</span> 14:00 - 18:00</p>
                    <p><span class="font-semibold">Süre:</span> 4 saat</p>
                    <p><span class="font-semibold">Katılımcı:</span> 8 Kişi</p>
                </div>
            </div>
        </div>

        <!-- Hizmet Detayları -->
        <div class="px-8">
            <div class="bg-gray-50 rounded-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Açıklama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Birim</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Miktar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Birim Fiyat</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tutar</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Mavi Deniz Yat Kiralama</div>
                                    <div class="text-sm text-gray-500">Gün batımı turu - Özel hizmet</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Saat</td>
                            <td class="px-6 py-4 text-sm text-gray-900">4</td>
                            <td class="px-6 py-4 text-sm text-gray-900">₺2,500.00</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">₺10,000.00</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Müzik Sistemi</div>
                                    <div class="text-sm text-gray-500">Özel istek</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Adet</td>
                            <td class="px-6 py-4 text-sm text-gray-900">1</td>
                            <td class="px-6 py-4 text-sm text-gray-900">₺200.00</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">₺200.00</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">İçecek Servisi</div>
                                    <div class="text-sm text-gray-500">Özel istek</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Kişi</td>
                            <td class="px-6 py-4 text-sm text-gray-900">8</td>
                            <td class="px-6 py-4 text-sm text-gray-900">₺50.00</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">₺400.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Toplam Hesaplama -->
        <div class="p-8">
            <div class="flex justify-end">
                <div class="w-80 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Ara Toplam:</span>
                        <span class="font-medium">₺10,600.00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">KDV (%18):</span>
                        <span class="font-medium">₺1,908.00</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">İndirim:</span>
                        <span class="font-medium text-green-600">-₺0.00</span>
                    </div>
                    <hr class="border-gray-300">
                    <div class="flex justify-between text-lg font-bold">
                        <span class="text-gray-900">Genel Toplam:</span>
                        <span class="text-green-600">₺12,508.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ödeme Bilgileri -->
        <div class="px-8 pb-8">
            <div class="bg-blue-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Ödeme Bilgileri</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Ödeme Yöntemi:</p>
                        <p class="font-semibold text-gray-900">Kredi Kartı</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Ödeme Durumu:</p>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Beklemede
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alt Bilgiler -->
        <div class="px-8 pb-8 border-t border-gray-200 pt-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm text-gray-600">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Ödeme Koşulları</h4>
                    <p>Fatura tarihinden itibaren 30 gün içinde ödenmesi gerekmektedir.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">İptal Politikası</h4>
                    <p>Rezervasyon tarihinden 24 saat öncesine kadar ücretsiz iptal edilebilir.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">İletişim</h4>
                    <p>Herhangi bir sorunuz için bizimle iletişime geçebilirsiniz.</p>
                </div>
            </div>
        </div>

        <!-- Alt Bilgi -->
        <div class="px-8 py-6 bg-gray-50 text-center text-sm text-gray-600">
            <p>Bu fatura elektronik olarak oluşturulmuştur. Teşekkür ederiz!</p>
        </div>
    </div>
</div>

<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #invoice, #invoice * {
            visibility: visible;
        }
        #invoice {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            box-shadow: none;
        }
        .no-print {
            display: none !important;
        }
    }
</style>
@endsection 