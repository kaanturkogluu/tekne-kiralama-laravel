@extends('admin.layouts.app')

@section('page-title', 'Ayarlar')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Ayarlar</h1>
            <p class="text-gray-600">Sistem ayarlarını yapılandırın</p>
        </div>
        <button type="submit" form="settings-form" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
            Ayarları Kaydet
        </button>
    </div>

    <!-- Ayarlar Formu -->
    <form id="settings-form" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Sol Kolon - Ana Ayarlar -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Genel Ayarlar -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Genel Ayarlar</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="site_name" class="block text-sm font-medium text-gray-700 mb-1">Site Adı *</label>
                            <input type="text" id="site_name" name="site_name" value="Tekne Kiralama" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                        </div>
                        <div>
                            <label for="site_description" class="block text-sm font-medium text-gray-700 mb-1">Site Açıklaması</label>
                            <textarea id="site_description" name="site_description" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Premium tekne kiralama hizmeti</textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1">İletişim E-postası *</label>
                                <input type="email" id="contact_email" name="contact_email" value="info@teknekiralama.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            </div>
                            <div>
                                <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1">İletişim Telefonu</label>
                                <input type="tel" id="contact_phone" name="contact_phone" value="+90 212 555 0123" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div>
                            <label for="timezone" class="block text-sm font-medium text-gray-700 mb-1">Zaman Dilimi</label>
                            <select id="timezone" name="timezone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="Europe/Istanbul" selected>Europe/Istanbul (UTC+3)</option>
                                <option value="Europe/London">Europe/London (UTC+0)</option>
                                <option value="America/New_York">America/New_York (UTC-5)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- E-posta Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">E-posta Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="smtp_host" class="block text-sm font-medium text-gray-700 mb-1">SMTP Sunucu</label>
                                <input type="text" id="smtp_host" name="smtp_host" value="smtp.gmail.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="smtp_port" class="block text-sm font-medium text-gray-700 mb-1">SMTP Port</label>
                                <input type="number" id="smtp_port" name="smtp_port" value="587" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="smtp_username" class="block text-sm font-medium text-gray-700 mb-1">SMTP Kullanıcı Adı</label>
                                <input type="text" id="smtp_username" name="smtp_username" value="noreply@teknekiralama.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="smtp_password" class="block text-sm font-medium text-gray-700 mb-1">SMTP Şifre</label>
                                <input type="password" id="smtp_password" name="smtp_password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="smtp_encryption" name="smtp_encryption" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="smtp_encryption" class="ml-2 block text-sm text-gray-900">
                                TLS/SSL Şifreleme kullan
                            </label>
                        </div>
                        <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            E-posta Test Et
                        </button>
                    </div>
                </div>

                <!-- Ödeme Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Ödeme Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="currency" class="block text-sm font-medium text-gray-700 mb-1">Para Birimi</label>
                            <select id="currency" name="currency" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="TRY" selected>Türk Lirası (₺)</option>
                                <option value="USD">Amerikan Doları ($)</option>
                                <option value="EUR">Euro (€)</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="stripe_public_key" class="block text-sm font-medium text-gray-700 mb-1">Stripe Public Key</label>
                                <input type="text" id="stripe_public_key" name="stripe_public_key" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div>
                                <label for="stripe_secret_key" class="block text-sm font-medium text-gray-700 mb-1">Stripe Secret Key</label>
                                <input type="password" id="stripe_secret_key" name="stripe_secret_key" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="stripe_enabled" name="stripe_enabled" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="stripe_enabled" class="ml-2 block text-sm text-gray-900">
                                Stripe ödemelerini etkinleştir
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sağ Kolon - Ek Ayarlar -->
            <div class="space-y-6">
                <!-- Site Durumu -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Site Durumu</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="site_maintenance" name="site_maintenance" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="site_maintenance" class="ml-2 block text-sm text-gray-900">
                                Bakım modu
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="user_registration" name="user_registration" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="user_registration" class="ml-2 block text-sm text-gray-900">
                                Kullanıcı kaydına izin ver
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="email_verification" name="email_verification" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="email_verification" class="ml-2 block text-sm text-gray-900">
                                E-posta doğrulaması zorunlu
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Güvenlik Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Güvenlik Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="session_timeout" class="block text-sm font-medium text-gray-700 mb-1">Oturum Zaman Aşımı (dakika)</label>
                            <input type="number" id="session_timeout" name="session_timeout" value="120" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="max_login_attempts" class="block text-sm font-medium text-gray-700 mb-1">Maksimum Giriş Denemesi</label>
                            <input type="number" id="max_login_attempts" name="max_login_attempts" value="5" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="two_factor_required" name="two_factor_required" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="two_factor_required" class="ml-2 block text-sm text-gray-900">
                                Admin için 2FA zorunlu
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Bildirim Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Bildirim Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
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
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Hızlı İşlemler</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Cache Temizle
                        </button>
                        <button type="button" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Yedek Al
                        </button>
                        <button type="button" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Log Dosyalarını Temizle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Form gönderimi
    document.getElementById('settings-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Form verilerini gönder
        console.log('Ayarlar kaydediliyor...');
    });

    // Bakım modu toggle
    document.getElementById('site_maintenance').addEventListener('change', function() {
        if (this.checked) {
            if (confirm('Bakım modunu etkinleştirmek istediğinizden emin misiniz? Bu işlem siteyi geçici olarak kapatacaktır.')) {
                console.log('Bakım modu etkinleştirildi');
            } else {
                this.checked = false;
            }
        }
    });
</script>
@endsection 