@extends('admin.layouts.app')

@section('page-title', 'Yeni Kullanıcı')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Yeni Kullanıcı</h1>
            <p class="text-gray-600">Sisteme yeni kullanıcı ekleyin</p>
        </div>
        <a href="{{ url('/admin/users') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Geri Dön
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Kullanıcı Bilgileri</h3>
        </div>
        <form class="p-6 space-y-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Sol Kolon - Temel Bilgiler -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Kişisel Bilgiler -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Kişisel Bilgiler</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Ad *</label>
                                <input type="text" id="first_name" name="first_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Kullanıcının adı..." required>
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Soyad *</label>
                                <input type="text" id="last_name" name="last_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Kullanıcının soyadı..." required>
                            </div>
                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Kullanıcı Adı *</label>
                                <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="benzersiz kullanıcı adı..." required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-posta *</label>
                                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="kullanici@example.com" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                                <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+90 555 123 45 67">
                            </div>
                            <div>
                                <label for="birth_date" class="block text-sm font-medium text-gray-700 mb-1">Doğum Tarihi</label>
                                <input type="date" id="birth_date" name="birth_date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                    </div>

                    <!-- Hesap Bilgileri -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Hesap Bilgileri</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Şifre *</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md px-3 py-2 pr-10 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Güçlü şifre oluşturun..." required>
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password')">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-1 text-xs text-gray-500">
                                    En az 8 karakter, büyük/küçük harf, rakam ve özel karakter içermeli
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Şifre Tekrar *</label>
                                <div class="relative">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 rounded-md px-3 py-2 pr-10 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Şifreyi tekrar girin..." required>
                                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password_confirmation')">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Adres Bilgileri -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Adres Bilgileri</h4>
                        <div class="space-y-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adres</label>
                                <textarea id="address" name="address" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Tam adres bilgisi..."></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Şehir</label>
                                    <input type="text" id="city" name="city" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="İstanbul">
                                </div>
                                <div>
                                    <label for="state" class="block text-sm font-medium text-gray-700 mb-1">İl</label>
                                    <input type="text" id="state" name="state" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="İstanbul">
                                </div>
                                <div>
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-1">Posta Kodu</label>
                                    <input type="text" id="postal_code" name="postal_code" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="34000">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ek Bilgiler -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Ek Bilgiler</h4>
                        <div class="space-y-4">
                            <div>
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Hakkında</label>
                                <textarea id="bio" name="bio" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Kullanıcı hakkında kısa bilgi..."></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Web Sitesi</label>
                                    <input type="url" id="website" name="website" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="https://example.com">
                                </div>
                                <div>
                                    <label for="social_media" class="block text-sm font-medium text-gray-700 mb-1">Sosyal Medya</label>
                                    <input type="text" id="social_media" name="social_media" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="@kullaniciadi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sağ Kolon - Ayarlar -->
                <div class="space-y-6">
                    <!-- Profil Fotoğrafı -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Profil Fotoğrafı</h4>
                        <div class="space-y-3">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="mt-2">
                                    <label for="profile_photo" class="cursor-pointer bg-white rounded-md font-medium text-primary hover:text-secondary focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                        <span>Fotoğraf Yükle</span>
                                        <input id="profile_photo" name="profile_photo" type="file" class="sr-only" accept="image/*">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 2MB</p>
                            </div>
                            <div id="photo_preview" class="hidden">
                                <img id="preview_img" class="w-full h-32 object-cover rounded-lg" alt="Preview">
                                <button type="button" id="remove_photo" class="mt-2 w-full bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Fotoğrafı Kaldır</button>
                            </div>
                        </div>
                    </div>

                    <!-- Rol ve Yetkiler -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Rol ve Yetkiler</h4>
                        <div class="space-y-3">
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Rol *</label>
                                <select id="role" name="role" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                    <option value="">Rol seçin</option>
                                    <option value="admin">Admin</option>
                                    <option value="manager">Yönetici</option>
                                    <option value="user" selected>Kullanıcı</option>
                                    <option value="guest">Misafir</option>
                                </select>
                            </div>
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Durum *</label>
                                <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                    <option value="active" selected>Aktif</option>
                                    <option value="pending">Beklemede</option>
                                    <option value="inactive">Pasif</option>
                                    <option value="blocked">Engellenen</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Hesap Ayarları -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Hesap Ayarları</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="checkbox" id="email_verified" name="email_verified" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="email_verified" class="ml-2 block text-sm text-gray-900">
                                    E-posta doğrulandı
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="two_factor" name="two_factor" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="two_factor" class="ml-2 block text-sm text-gray-900">
                                    İki faktörlü doğrulama
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="newsletter" name="newsletter" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="newsletter" class="ml-2 block text-sm text-gray-900">
                                    Bülten aboneliği
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="marketing" name="marketing" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="marketing" class="ml-2 block text-sm text-gray-900">
                                    Pazarlama e-postaları
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bildirim Ayarları -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Bildirim Ayarları</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="checkbox" id="email_notifications" name="email_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="email_notifications" class="ml-2 block text-sm text-gray-900">
                                    E-posta bildirimleri
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="sms_notifications" name="sms_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="sms_notifications" class="ml-2 block text-sm text-gray-900">
                                    SMS bildirimleri
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="push_notifications" name="push_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="push_notifications" class="ml-2 block text-sm text-gray-900">
                                    Push bildirimleri
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Hızlı İşlemler -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Hızlı İşlemler</h4>
                        <div class="space-y-3">
                            <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Şifre Oluştur
                            </button>
                            <button type="button" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Hoş Geldin E-postası Gönder
                            </button>
                            <button type="button" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Hesabı Doğrula
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Butonlar -->
            <div class="flex justify-end space-x-4 pt-6 border-t">
                <button type="button" class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    İptal
                </button>
                <button type="submit" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    Kullanıcıyı Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Şifre göster/gizle
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const type = field.type === 'password' ? 'text' : 'password';
        field.type = type;
    }

    // Profil fotoğrafı yükleme ve önizleme
    document.getElementById('profile_photo').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview_img').src = e.target.result;
                document.getElementById('photo_preview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    // Profil fotoğrafı kaldırma
    document.getElementById('remove_photo').addEventListener('click', function() {
        document.getElementById('profile_photo').value = '';
        document.getElementById('photo_preview').classList.add('hidden');
    });

    // Şifre gücü kontrolü
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strength = checkPasswordStrength(password);
        updatePasswordStrengthIndicator(strength);
    });

    function checkPasswordStrength(password) {
        let score = 0;
        
        if (password.length >= 8) score++;
        if (/[a-z]/.test(password)) score++;
        if (/[A-Z]/.test(password)) score++;
        if (/[0-9]/.test(password)) score++;
        if (/[^A-Za-z0-9]/.test(password)) score++;
        
        if (score < 3) return 'weak';
        if (score < 5) return 'medium';
        return 'strong';
    }

    function updatePasswordStrengthIndicator(strength) {
        const indicator = document.querySelector('.text-xs.text-gray-500');
        const colors = {
            weak: 'text-red-500',
            medium: 'text-yellow-500',
            strong: 'text-green-500'
        };
        
        // Renk sınıflarını temizle
        indicator.classList.remove('text-red-500', 'text-yellow-500', 'text-green-500');
        // Yeni renk sınıfını ekle
        indicator.classList.add(colors[strength]);
    }
</script>
@endsection 