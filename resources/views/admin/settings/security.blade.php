@extends('admin.layouts.app')

@section('page-title', 'Güvenlik Ayarları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Güvenlik Ayarları</h1>
            <p class="text-gray-600">Sistem güvenlik yapılandırmasını yönetin</p>
        </div>
        <button type="submit" form="security-settings-form" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
            Ayarları Kaydet
        </button>
    </div>

    <!-- Güvenlik Ayarları Formu -->
    <form id="security-settings-form" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Sol Kolon - Ana Güvenlik Ayarları -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Şifre Politikaları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Şifre Politikaları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="min_password_length" class="block text-sm font-medium text-gray-700 mb-1">Minimum Şifre Uzunluğu</label>
                                <input type="number" id="min_password_length" name="min_password_length" value="8" min="6" max="50" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="password_expiry_days" class="block text-sm font-medium text-gray-700 mb-1">Şifre Geçerlilik Süresi (gün)</label>
                                <input type="number" id="password_expiry_days" name="password_expiry_days" value="90" min="0" max="365" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="checkbox" id="require_uppercase" name="require_uppercase" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="require_uppercase" class="ml-2 block text-sm text-gray-900">
                                    Büyük harf zorunlu
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="require_lowercase" name="require_lowercase" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="require_lowercase" class="ml-2 block text-sm text-gray-900">
                                    Küçük harf zorunlu
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="require_numbers" name="require_numbers" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="require_numbers" class="ml-2 block text-sm text-gray-900">
                                    Rakam zorunlu
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="require_special_chars" name="require_special_chars" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="require_special_chars" class="ml-2 block text-sm text-gray-900">
                                    Özel karakter zorunlu
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="prevent_common_passwords" name="prevent_common_passwords" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                <label for="prevent_common_passwords" class="ml-2 block text-sm text-gray-900">
                                    Yaygın şifreleri engelle
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oturum Yönetimi -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Oturum Yönetimi</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="session_timeout" class="block text-sm font-medium text-gray-700 mb-1">Oturum Zaman Aşımı (dakika)</label>
                                <input type="number" id="session_timeout" name="session_timeout" value="120" min="15" max="1440" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="max_concurrent_sessions" class="block text-sm font-medium text-gray-700 mb-1">Maksimum Eşzamanlı Oturum</label>
                                <input type="number" id="max_concurrent_sessions" name="max_concurrent_sessions" value="3" min="1" max="10" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="max_login_attempts" class="block text-sm font-medium text-gray-700 mb-1">Maksimum Giriş Denemesi</label>
                                <input type="number" id="max_login_attempts" name="max_login_attempts" value="5" min="3" max="10" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="lockout_duration" class="block text-sm font-medium text-gray-700 mb-1">Hesap Kilitleme Süresi (dakika)</label>
                                <input type="number" id="lockout_duration" name="lockout_duration" value="30" min="5" max="1440" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="force_logout_on_password_change" name="force_logout_on_password_change" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="force_logout_on_password_change" class="ml-2 block text-sm text-gray-900">
                                Şifre değişikliğinde tüm oturumları sonlandır
                            </label>
                        </div>
                    </div>
                </div>

                <!-- İki Faktörlü Doğrulama -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">İki Faktörlü Doğrulama (2FA)</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="two_factor_required_admin" name="two_factor_required_admin" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="two_factor_required_admin" class="ml-2 block text-sm text-gray-900">
                                Admin kullanıcıları için 2FA zorunlu
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="two_factor_optional_users" name="two_factor_optional_users" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="two_factor_optional_users" class="ml-2 block text-sm text-gray-900">
                                Normal kullanıcılar için 2FA opsiyonel
                            </label>
                        </div>
                        <div>
                            <label for="backup_codes_count" class="block text-sm font-medium text-gray-700 mb-1">Yedek Kod Sayısı</label>
                            <input type="number" id="backup_codes_count" name="backup_codes_count" value="10" min="5" max="20" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="remember_device" name="remember_device" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="remember_device" class="ml-2 block text-sm text-gray-900">
                                Cihaz hatırlama özelliği
                            </label>
                        </div>
                    </div>
                </div>

                <!-- IP Kısıtlamaları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">IP Kısıtlamaları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="allowed_ips" class="block text-sm font-medium text-gray-700 mb-1">İzin Verilen IP Adresleri</label>
                            <textarea id="allowed_ips" name="allowed_ips" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Her satıra bir IP adresi yazın...">192.168.1.0/24
10.0.0.0/8</textarea>
                            <p class="text-xs text-gray-500 mt-1">Boş bırakılırsa tüm IP adreslerine izin verilir</p>
                        </div>
                        <div>
                            <label for="blocked_ips" class="block text-sm font-medium text-gray-700 mb-1">Engellenen IP Adresleri</label>
                            <textarea id="blocked_ips" name="blocked_ips" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Her satıra bir IP adresi yazın..."></textarea>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="geo_blocking" name="geo_blocking" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="geo_blocking" class="ml-2 block text-sm text-gray-900">
                                Coğrafi konum bazlı erişim kısıtlaması
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sağ Kolon - Ek Güvenlik Ayarları -->
            <div class="space-y-6">
                <!-- Güvenlik İstatistikleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Güvenlik İstatistikleri</h3>
                    </div>
                    <div class="p-6">
                        <dl class="space-y-3">
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bugün Başarısız Giriş:</dt>
                                <dd class="text-sm font-medium text-red-600">12</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bu Hafta Engellenen IP:</dt>
                                <dd class="text-sm font-medium text-gray-900">3</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Aktif 2FA Kullanıcı:</dt>
                                <dd class="text-sm font-medium text-green-600">45</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Son Güvenlik Taraması:</dt>
                                <dd class="text-sm font-medium text-gray-900">2 saat önce</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Güvenlik Uyarıları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Güvenlik Uyarıları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="email_security_alerts" name="email_security_alerts" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="email_security_alerts" class="ml-2 block text-sm text-gray-900">
                                Güvenlik uyarılarını e-posta ile gönder
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="suspicious_activity_alerts" name="suspicious_activity_alerts" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="suspicious_activity_alerts" class="ml-2 block text-sm text-gray-900">
                                Şüpheli aktivite uyarıları
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="failed_login_alerts" name="failed_login_alerts" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="failed_login_alerts" class="ml-2 block text-sm text-gray-900">
                                Başarısız giriş uyarıları
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="new_device_alerts" name="new_device_alerts" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="new_device_alerts" class="ml-2 block text-sm text-gray-900">
                                Yeni cihaz giriş uyarıları
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Güvenlik Logları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Güvenlik Logları</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="text-sm">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900">Başarısız giriş denemesi</span>
                                <span class="text-red-600 text-xs">2 dk önce</span>
                            </div>
                            <p class="text-gray-500 text-xs">IP: 192.168.1.100 - Kullanıcı: admin</p>
                        </div>
                        <div class="text-sm">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900">Yeni cihaz girişi</span>
                                <span class="text-blue-600 text-xs">15 dk önce</span>
                            </div>
                            <p class="text-gray-500 text-xs">IP: 203.45.67.89 - Kullanıcı: ahmet</p>
                        </div>
                        <div class="text-sm">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-900">2FA etkinleştirildi</span>
                                <span class="text-green-600 text-xs">1 saat önce</span>
                            </div>
                            <p class="text-gray-500 text-xs">Kullanıcı: ayse</p>
                        </div>
                        <button type="button" class="w-full bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 text-sm">
                            Tüm Logları Görüntüle
                        </button>
                    </div>
                </div>

                <!-- Hızlı İşlemler -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Hızlı İşlemler</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <button type="button" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Tüm Oturumları Sonlandır
                        </button>
                        <button type="button" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Güvenlik Taraması Başlat
                        </button>
                        <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Güvenlik Raporu Oluştur
                        </button>
                        <button type="button" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Yedekleme Oluştur
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Form gönderimi
    document.getElementById('security-settings-form').addEventListener('submit', function(e) {
        e.preventDefault();
        console.log('Güvenlik ayarları kaydediliyor...');
    });

    // Şifre politikası değişikliklerini dinle
    document.getElementById('min_password_length').addEventListener('change', function() {
        const value = parseInt(this.value);
        if (value < 6) {
            alert('Minimum şifre uzunluğu en az 6 karakter olmalıdır.');
            this.value = 6;
        }
    });

    // IP adresi formatını kontrol et
    document.getElementById('allowed_ips').addEventListener('blur', function() {
        const ips = this.value.split('\n').filter(ip => ip.trim());
        const validIPs = ips.filter(ip => {
            const ipRegex = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)(?:\/(?:3[0-2]|[12]?[0-9]))?$/;
            return ipRegex.test(ip.trim());
        });
        
        if (validIPs.length !== ips.length) {
            alert('Geçersiz IP adresi formatı tespit edildi. Lütfen kontrol edin.');
        }
    });
</script>
@endsection 