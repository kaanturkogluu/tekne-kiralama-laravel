@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/events') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Etkinlikler
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Gün Batımı Turu</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Ana İçerik -->
            <div class="lg:col-span-2">
                <!-- Etkinlik Görselleri -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gün Batımı Turu" class="w-full h-96 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Popüler</span>
                        </div>
                    </div>
                    <!-- Küçük Görseller -->
                    <div class="p-4 flex space-x-2 overflow-x-auto">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Görsel 1" class="w-20 h-16 object-cover rounded cursor-pointer border-2 border-primary">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Görsel 2" class="w-20 h-16 object-cover rounded cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Görsel 3" class="w-20 h-16 object-cover rounded cursor-pointer">
                    </div>
                </div>

                <!-- Etkinlik Detayları -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Gün Batımı Turu</h1>
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="ml-1 text-sm text-gray-600">4.9 (67 değerlendirme)</span>
                        </div>
                        <span class="text-gray-400">•</span>
                        <span class="text-sm text-gray-600">İstanbul, Boğaz</span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">2</div>
                            <div class="text-sm text-gray-600">Saat</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">20</div>
                            <div class="text-sm text-gray-600">Kişi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">₺350</div>
                            <div class="text-sm text-gray-600">Kişi Başı</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">18:00</div>
                            <div class="text-sm text-gray-600">Başlangıç</div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Etkinlik Açıklaması</h3>
                        <p class="text-gray-700 mb-4">
                            İstanbul Boğazı'nın eşsiz manzarasında gün batımını izleyerek unutulmaz bir deneyim yaşayın. 
                            Bu özel turda, şehrin en güzel açılarından Boğaz'ın büyüleyici atmosferini keşfedeceksiniz.
                        </p>
                        <p class="text-gray-700 mb-4">
                            Tur sırasında profesyonel fotoğrafçılar tarafından çekilen fotoğraflar, 
                            içecekler ve hafif atıştırmalıklar dahildir. Ayrıca, Boğaz'ın tarihi hakkında 
                            bilgilendirici anlatımlar da dinleyebilirsiniz.
                        </p>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Dahil Olan Hizmetler</h3>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Profesyonel fotoğraf çekimi
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                İçecekler ve atıştırmalıklar
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Rehberlik hizmeti
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Güvenlik ekipmanları
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Değerlendirmeler -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Müşteri Değerlendirmeleri</h3>
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Kullanıcı" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <div class="font-semibold text-gray-900">Ayşe K.</div>
                                        <div class="flex items-center">
                                            <div class="flex text-yellow-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                            <span class="ml-1 text-sm text-gray-600">2 gün önce</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-700">Harika bir deneyimdi! Gün batımı muhteşemdi ve fotoğraflar çok güzel çıktı. Kesinlikle tekrar geleceğim.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Yan Panel - Rezervasyon -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-primary mb-2">₺350</div>
                        <div class="text-gray-600">kişi başı</div>
                    </div>

                    <form class="space-y-4">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Tarih</label>
                            <input type="date" id="date" name="date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                        </div>
                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Kişi Sayısı</label>
                            <select id="guests" name="guests" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                <option value="">Seçiniz</option>
                                <option value="1">1 kişi</option>
                                <option value="2">2 kişi</option>
                                <option value="3">3 kişi</option>
                                <option value="4">4 kişi</option>
                                <option value="5">5 kişi</option>
                                <option value="6">6 kişi</option>
                                <option value="7">7 kişi</option>
                                <option value="8">8 kişi</option>
                                <option value="9">9 kişi</option>
                                <option value="10">10 kişi</option>
                            </select>
                        </div>
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Saat</label>
                            <select id="time" name="time" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                <option value="">Seçiniz</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-semibold py-3 rounded-md transition duration-150">
                            Rezervasyon Yap
                        </button>
                    </form>

                    <div class="mt-6 pt-6 border-t">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-2">
                            <span>Toplam Fiyat</span>
                            <span>₺350</span>
                        </div>
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-2">
                            <span>Rezervasyon Ücreti</span>
                            <span>₺50</span>
                        </div>
                        <div class="flex items-center justify-between font-semibold text-lg border-t pt-2">
                            <span>Ödenecek Tutar</span>
                            <span>₺400</span>
                        </div>
                    </div>

                    <div class="mt-4 text-xs text-gray-500">
                        * Rezervasyon ücreti iade edilemez. İptal durumunda 24 saat önceden haber verilmesi gerekir.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 