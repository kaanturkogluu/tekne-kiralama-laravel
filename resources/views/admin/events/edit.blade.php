@extends('admin.layouts.app')

@section('page-title', 'Etkinlik Düzenle')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Etkinlik Düzenle</h1>
            <p class="text-gray-600">Etkinlik bilgilerini güncelleyin</p>
        </div>
        <a href="{{ url('/admin/events') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Geri Dön
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Etkinlik Bilgileri</h3>
        </div>
        <form class="p-6 space-y-6">
            <!-- Temel Bilgiler -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Etkinlik Adı *</label>
                    <input type="text" id="title" name="title" value="Gün Batımı Turu" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
                    <select id="category" name="category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                        <option value="">Kategori Seçin</option>
                        <option value="normal" selected>Normal Etkinlik</option>
                        <option value="special">Özel Etkinlik</option>
                    </select>
                </div>
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Lokasyon *</label>
                    <input type="text" id="location" name="location" value="İstanbul, Boğaz" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Fiyat (₺) *</label>
                    <input type="number" id="price" name="price" value="350" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Süre (Saat) *</label>
                    <input type="number" id="duration" name="duration" value="2" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
                <div>
                    <label for="max_participants" class="block text-sm font-medium text-gray-700 mb-1">Maksimum Katılımcı *</label>
                    <input type="number" id="max_participants" name="max_participants" value="20" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                </div>
            </div>

            <!-- Açıklama -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Açıklama *</label>
                <textarea id="description" name="description" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>İstanbul Boğazı'nın eşsiz manzarasında gün batımını izleyerek unutulmaz bir deneyim yaşayın. Bu özel turda, şehrin en güzel açılarından Boğaz'ın büyüleyici atmosferini keşfedeceksiniz.</textarea>
            </div>

            <!-- Detaylı Bilgiler -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">Başlangıç Saati</label>
                    <input type="time" id="start_time" name="start_time" value="18:00" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-700 mb-1">Bitiş Saati</label>
                    <input type="time" id="end_time" name="end_time" value="20:00" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>

            <!-- Dahil Olan Hizmetler -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Dahil Olan Hizmetler</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="food" class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Yemek</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="drinks" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">İçecekler</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="guide" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Rehber</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="equipment" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Ekipman</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="photography" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Fotoğraf Çekimi</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="services[]" value="music" class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-700">Müzik</span>
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

            <!-- Özel Ayarlar -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Durum</label>
                    <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="active" selected>Aktif</option>
                        <option value="inactive">Pasif</option>
                        <option value="draft">Taslak</option>
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

            <!-- SEO Bilgileri -->
            <div class="border-t pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">SEO Bilgileri</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-1">Meta Başlık</label>
                        <input type="text" id="meta_title" name="meta_title" value="Gün Batımı Turu - İstanbul Boğazı" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-1">Meta Açıklama</label>
                        <input type="text" id="meta_description" name="meta_description" value="İstanbul Boğazı'nda unutulmaz gün batımı deneyimi yaşayın" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
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