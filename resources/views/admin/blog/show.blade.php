@extends('admin.layouts.app')

@section('page-title', 'Blog Yazısı Detayı')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve İşlem Butonları -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Blog Yazısı Detayı</h1>
            <p class="text-gray-600">Blog yazısı bilgilerini görüntüleyin</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ url('/admin/blog/1/edit') }}" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Düzenle
            </a>
            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                Önizle
            </button>
            <a href="{{ url('/admin/blog') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Geri Dön
            </a>
        </div>
    </div>

    <!-- Blog İçeriği -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Sol Kolon - Ana İçerik -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Kapak Görseli -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img class="w-full h-64 object-cover" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blog Kapak">
            </div>

            <!-- Blog Başlığı ve Meta -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="space-y-4">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">İstanbul Boğazı'nda Muhteşem Yat Turu</h2>
                        <p class="text-lg text-gray-600">Boğazın eşsiz manzarasını keşfedin ve unutulmaz anılar biriktirin</p>
                    </div>
                    
                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Ahmet Yılmaz</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>15 Mart 2024</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <span>1,247 görüntüleme</span>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Yatçılık
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Yayınlandı
                        </span>
                    </div>
                </div>
            </div>

            <!-- Blog İçeriği -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">İçerik</h3>
                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        İstanbul Boğazı, dünyanın en güzel doğal su yollarından biridir. Avrupa ve Asya kıtalarını ayıran bu muhteşem su yolu, tarihi yarımadanın kalbinden geçerek Karadeniz'den Marmara Denizi'ne uzanır.
                    </p>
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">Boğaz Turunun Özellikleri</h4>
                    <p class="mb-4">
                        Yat turumuz sırasında göreceğiniz en önemli yerler arasında Dolmabahçe Sarayı, Ortaköy Camii, Rumeli Hisarı ve Anadolu Hisarı bulunmaktadır. Her bir nokta, İstanbul'un zengin tarihini ve kültürünü yansıtır.
                    </p>
                    
                    <ul class="list-disc list-inside mb-4 space-y-2">
                        <li>Profesyonel kaptan ve mürettebat</li>
                        <li>Konforlu yat içi mekanlar</li>
                        <li>Güvenlik ekipmanları</li>
                        <li>İçecek ve atıştırmalık servisi</li>
                        <li>Fotoğraf çekim imkanları</li>
                    </ul>
                    
                    <h4 class="text-xl font-semibold text-gray-900 mb-3">En İyi Zamanlar</h4>
                    <p class="mb-4">
                        Boğaz turu için en ideal zamanlar gün batımı ve gün doğumu saatleridir. Bu saatlerde İstanbul'un eşsiz manzarası altın renklerle bürünür ve fotoğraf tutkunları için muhteşem fırsatlar sunar.
                    </p>
                    
                    <blockquote class="border-l-4 border-primary pl-4 italic text-gray-600 mb-4">
                        "İstanbul Boğazı'nda yapılan bir yat turu, hayatınızın en unutulmaz deneyimlerinden biri olacaktır."
                    </blockquote>
                    
                    <p class="mb-4">
                        Turumuz sırasında size eşlik edecek uzman rehberlerimiz, her bir nokta hakkında detaylı bilgi verecek ve İstanbul'un gizli hikayelerini paylaşacaktır.
                    </p>
                </div>
            </div>

            <!-- Etiketler -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Etiketler</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        İstanbul
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Boğaz
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Yat Turu
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Turizm
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Deniz
                    </span>
                </div>
            </div>
        </div>

        <!-- Sağ Kolon - Yan Bilgiler -->
        <div class="space-y-6">
            <!-- İstatistikler -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">İstatistikler</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Görüntülenme</span>
                        <span class="font-semibold text-gray-900">1,247</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Beğeni</span>
                        <span class="font-semibold text-gray-900">89</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Yorum</span>
                        <span class="font-semibold text-gray-900">23</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Paylaşım</span>
                        <span class="font-semibold text-gray-900">15</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Ortalama Okuma Süresi</span>
                        <span class="font-semibold text-gray-900">4 dk</span>
                    </div>
                </div>
            </div>

            <!-- Yayın Bilgileri -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Yayın Bilgileri</h3>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Durum</label>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Yayınlandı
                        </span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Yayın Tarihi</label>
                        <p class="text-gray-900">15 Mart 2024, 14:30</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Son Güncelleme</label>
                        <p class="text-gray-900">15 Mart 2024, 16:45</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                        <p class="text-gray-900">istanbul-bogazinda-muhtesem-yat-turu</p>
                    </div>
                </div>
            </div>

            <!-- SEO Bilgileri -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO Bilgileri</h3>
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Başlık</label>
                        <p class="text-sm text-gray-900">İstanbul Boğazı'nda Muhteşem Yat Turu - Deniz Turizm</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Açıklama</label>
                        <p class="text-sm text-gray-900">İstanbul Boğazı'nda unutulmaz yat turu deneyimi. Profesyonel kaptanlar eşliğinde boğazın eşsiz manzarasını keşfedin.</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Anahtar Kelimeler</label>
                        <p class="text-sm text-gray-900">istanbul, boğaz, yat turu, deniz turizmi, tekne kiralama</p>
                    </div>
                </div>
            </div>

            <!-- Hızlı İşlemler -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Hızlı İşlemler</h3>
                <div class="space-y-3">
                    <button class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Taslak Yap
                    </button>
                    <button class="w-full bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                        Arşivle
                    </button>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Sil
                    </button>
                </div>
            </div>

            <!-- Sosyal Medya -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Sosyal Medya</h3>
                <div class="space-y-3">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                        Twitter'da Paylaş
                    </button>
                    <button class="w-full bg-blue-800 hover:bg-blue-900 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook'ta Paylaş
                    </button>
                    <button class="w-full bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                        </svg>
                        Pinterest'te Paylaş
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 