@extends('admin.layouts.app')

@section('page-title', 'Tekne Düzenle')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Tekne Düzenle</h1>
            <p class="text-gray-600">Tekne bilgilerini güncelleyin</p>
        </div>
        <a href="{{ url('/admin/boats') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Geri Dön
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Tekne Bilgileri</h3>
        </div>
        <form class="p-6 space-y-6">
            <!-- Temel Bilgiler -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Tekne Adı *</label>
                    <input type="text" id="name" name="name" value="Mavi Deniz" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
                    <select id="category" name="category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                        <option value="">Kategori Seçin</option>
                        <option value="yacht" selected>Yat</option>
                        <option value="sailboat">Yelkenli</option>
                        <option value="motorboat">Motor Tekne</option>
                        <option value="catamaran">Katamaran</option>
                        <option value="speedboat">Hız Teknesi</option>
                        <option value="fishing">Balıkçı Teknesi</option>
                    </select>
                </div>
                <div>
                    <label for="model_year" class="block text-sm font-medium text-gray-700 mb-1">Model Yılı *</label>
                    <input type="number" id="model_year" name="model_year" value="2020" min="1950" max="2024" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="length" class="block text-sm font-medium text-gray-700 mb-1">Uzunluk (Metre) *</label>
                    <input type="number" id="length" name="length" value="15.5" step="0.1" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="capacity" class="block text-sm font-medium text-gray-700 mb-1">Kapasite (Kişi) *</label>
                    <input type="number" id="capacity" name="capacity" value="12" min="1" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="daily_price" class="block text-sm font-medium text-gray-700 mb-1">Günlük Fiyat (₺) *</label>
                    <input type="number" id="daily_price" name="daily_price" value="2500" min="0" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
            </div>

            <!-- Açıklama -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Açıklama *</label>
                <textarea id="description" name="description" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>Lüks ve konforu bir araya getiren Mavi Deniz yatı, İstanbul Boğazı'nın eşsiz manzarasında unutulmaz deneyimler yaşamanızı sağlar. Modern tasarımı ve üstün donanımı ile seyahatlerinizi keyifli hale getirir.</textarea>
            </div>

            <!-- Teknik Özellikler -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="engine_power" class="block text-sm font-medium text-gray-700 mb-1">Motor Gücü (HP)</label>
                    <input type="number" id="engine_power" name="engine_power" value="450" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label for="fuel_type" class="block text-sm font-medium text-gray-700 mb-1">Yakıt Türü</label>
                    <select id="fuel_type" name="fuel_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Seçin</option>
                        <option value="diesel" selected>Dizel</option>
                        <option value="gasoline">Benzin</option>
                        <option value="electric">Elektrik</option>
                        <option value="hybrid">Hibrit</option>
                    </select>
                </div>
                <div>
                    <label for="max_speed" class="block text-sm font-medium text-gray-700 mb-1">Maksimum Hız (Knot)</label>
                    <input type="number" id="max_speed" name="max_speed" value="25.5" step="0.1" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>

            <!-- Konum Bilgileri -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Lokasyon *</label>
                    <input type="text" id="location" name="location" value="İstanbul, Boğaz" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="marina" class="block text-sm font-medium text-gray-700 mb-1">Marina</label>
                    <input type="text" id="marina" name="marina" value="Kuruçeşme Marina" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>

            <!-- Sahip Bilgileri -->
            <div class="border-t pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Tekne Sahibi Bilgileri</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="owner_name" class="block text-sm font-medium text-gray-700 mb-1">Sahip Adı *</label>
                        <input type="text" id="owner_name" name="owner_name" value="Ahmet Yılmaz" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="owner_email" class="block text-sm font-medium text-gray-700 mb-1">Sahip E-posta *</label>
                        <input type="email" id="owner_email" name="owner_email" value="ahmet@email.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="owner_phone" class="block text-sm font-medium text-gray-700 mb-1">Sahip Telefon *</label>
                        <input type="tel" id="owner_phone" name="owner_phone" value="+90 532 123 45 67" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="owner_commission" class="block text-sm font-medium text-gray-700 mb-1">Komisyon Oranı (%)</label>
                        <input type="number" id="owner_commission" name="owner_commission" value="12.5" min="0" max="100" step="0.1" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>
            </div>

            <!-- Özellikler -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tekne Özellikleri</label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="wifi" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">WiFi</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="air_conditioning" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Klima</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="kitchen" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Mutfak</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="bathroom" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Banyo</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="bedroom" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Yatak Odası</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="fishing_equipment" class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Balıkçılık Ekipmanı</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="swimming_platform" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Yüzme Platformu</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="sound_system" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Ses Sistemi</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="features[]" value="safety_equipment" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Güvenlik Ekipmanı</span>
                    </label>
                </div>
            </div>

            <!-- Mevcut Görseller -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Mevcut Görseller</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Mevcut görsel 1" class="w-full h-32 object-cover rounded-lg border border-gray-300">
                        <button type="button" class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                            ×
                        </button>
                        <div class="mt-2 text-xs text-gray-600">Ana görsel</div>
                    </div>
                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Mevcut görsel 2" class="w-full h-32 object-cover rounded-lg border border-gray-300">
                        <button type="button" class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                            ×
                        </button>
                        <div class="mt-2 text-xs text-gray-600">Görsel 2</div>
                    </div>
                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Mevcut görsel 3" class="w-full h-32 object-cover rounded-lg border border-gray-300">
                        <button type="button" class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                            ×
                        </button>
                        <div class="mt-2 text-xs text-gray-600">Görsel 3</div>
                    </div>
                </div>
            </div>

            <!-- Yeni Görsel Ekleme -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Yeni Görsel Ekle</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center" id="upload-area">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="mt-4">
                        <label for="new-images" class="cursor-pointer bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Görsel Ekle
                        </label>
                        <input id="new-images" name="new_images[]" type="file" multiple accept="image/*" class="hidden" onchange="previewNewImages(this)">
                    </div>
                    <p class="mt-2 text-sm text-gray-600">PNG, JPG, GIF dosyaları yükleyebilirsiniz (Maks. 5MB)</p>
                </div>
                
                <!-- Yeni Görsel Önizleme -->
                <div id="new-image-preview" class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4 hidden">
                    <!-- Yeni önizleme görselleri buraya eklenecek -->
                </div>
            </div>

            <!-- Durum ve Ayarlar -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Durum</label>
                    <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="active" selected>Aktif</option>
                        <option value="inactive">Pasif</option>
                        <option value="maintenance">Bakımda</option>
                    </select>
                </div>
                <div>
                    <label for="featured" class="block text-sm font-medium text-gray-700 mb-1">Öne Çıkan</label>
                    <select id="featured" name="featured" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="0">Hayır</option>
                        <option value="1" selected>Evet</option>
                    </select>
                </div>
            </div>

            <!-- Butonlar -->
            <div class="flex justify-end space-x-4 pt-6 border-t">
                <button type="button" class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    İptal
                </button>
                <button type="submit" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    Değişiklikleri Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewNewImages(input) {
        const previewContainer = document.getElementById('new-image-preview');
        const uploadArea = document.getElementById('upload-area');
        
        if (input.files && input.files.length > 0) {
            previewContainer.innerHTML = '';
            previewContainer.classList.remove('hidden');
            
            Array.from(input.files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    const previewDiv = document.createElement('div');
                    previewDiv.className = 'relative group';
                    
                    reader.onload = function(e) {
                        previewDiv.innerHTML = `
                            <img src="${e.target.result}" alt="Yeni önizleme ${index + 1}" class="w-full h-32 object-cover rounded-lg border border-gray-300">
                            <button type="button" onclick="removeNewImage(${index})" class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                                ×
                            </button>
                            <div class="mt-2 text-xs text-gray-600 truncate">${file.name}</div>
                        `;
                    };
                    
                    reader.readAsDataURL(file);
                    previewContainer.appendChild(previewDiv);
                }
            });
            
            uploadArea.classList.add('border-green-300', 'bg-green-50');
        } else {
            previewContainer.classList.add('hidden');
            uploadArea.classList.remove('border-green-300', 'bg-green-50');
        }
    }
    
    function removeNewImage(index) {
        const input = document.getElementById('new-images');
        const dt = new DataTransfer();
        const { files } = input;
        
        for (let i = 0; i < files.length; i++) {
            if (i !== index) {
                dt.items.add(files[i]);
            }
        }
        
        input.files = dt.files;
        previewNewImages(input);
    }
</script>
@endsection 