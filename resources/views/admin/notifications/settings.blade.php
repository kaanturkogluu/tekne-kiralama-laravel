@extends('admin.layouts.app')

@section('page-title', 'Bildirim Ayarları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Bildirim Ayarları</h1>
            <p class="text-gray-600">Bildirim yapılandırmasını yönetin</p>
        </div>
        <button type="submit" form="notification-settings-form" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
            Ayarları Kaydet
        </button>
    </div>

    <!-- Bildirim Ayarları Formu -->
    <form id="notification-settings-form" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Sol Kolon - Ana Ayarlar -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Genel Bildirim Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Genel Bildirim Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="enable_notifications" name="enable_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="enable_notifications" class="ml-2 block text-sm text-gray-900">
                                Bildirimleri etkinleştir
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="admin_notifications" name="admin_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="admin_notifications" class="ml-2 block text-sm text-gray-900">
                                Admin bildirimleri
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="user_notifications" name="user_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="user_notifications" class="ml-2 block text-sm text-gray-900">
                                Kullanıcı bildirimleri
                            </label>
                        </div>
                        <div>
                            <label for="notification_timezone" class="block text-sm font-medium text-gray-700 mb-1">Bildirim Zaman Dilimi</label>
                            <select id="notification_timezone" name="notification_timezone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="Europe/Istanbul" selected>Europe/Istanbul (UTC+3)</option>
                                <option value="Europe/London">Europe/London (UTC+0)</option>
                                <option value="America/New_York">America/New_York (UTC-5)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- E-posta Bildirimleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">E-posta Bildirimleri</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="email_enabled" name="email_enabled" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="email_enabled" class="ml-2 block text-sm text-gray-900">
                                E-posta bildirimlerini etkinleştir
                            </label>
                        </div>
                        
                        <div class="space-y-3">
                            <h4 class="text-sm font-medium text-gray-900">Kullanıcı E-posta Bildirimleri</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_welcome" name="email_welcome" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_welcome" class="ml-2 block text-sm text-gray-900">
                                        Hoş geldin e-postası
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_reservation_confirmation" name="email_reservation_confirmation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_reservation_confirmation" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon onayı
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_reservation_reminder" name="email_reservation_reminder" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_reservation_reminder" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon hatırlatması
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_payment_confirmation" name="email_payment_confirmation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_payment_confirmation" class="ml-2 block text-sm text-gray-900">
                                        Ödeme onayı
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_reservation_cancellation" name="email_reservation_cancellation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_reservation_cancellation" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon iptali
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_password_reset" name="email_password_reset" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_password_reset" class="ml-2 block text-sm text-gray-900">
                                        Şifre sıfırlama
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-sm font-medium text-gray-900">Admin E-posta Bildirimleri</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_new_reservation" name="email_new_reservation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_new_reservation" class="ml-2 block text-sm text-gray-900">
                                        Yeni rezervasyon
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_payment_failed" name="email_payment_failed" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_payment_failed" class="ml-2 block text-sm text-gray-900">
                                        Başarısız ödeme
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_new_user" name="email_new_user" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_new_user" class="ml-2 block text-sm text-gray-900">
                                        Yeni kullanıcı kaydı
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="email_security_alert" name="email_security_alert" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="email_security_alert" class="ml-2 block text-sm text-gray-900">
                                        Güvenlik uyarısı
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SMS Bildirimleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">SMS Bildirimleri</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="sms_enabled" name="sms_enabled" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="sms_enabled" class="ml-2 block text-sm text-gray-900">
                                SMS bildirimlerini etkinleştir
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="sms_provider" class="block text-sm font-medium text-gray-700 mb-1">SMS Sağlayıcısı</label>
                                <select id="sms_provider" name="sms_provider" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option value="">SMS sağlayıcısı seçin</option>
                                    <option value="twilio">Twilio</option>
                                    <option value="nexmo">Nexmo</option>
                                    <option value="aws_sns">AWS SNS</option>
                                </select>
                            </div>
                            <div>
                                <label for="sms_sender_id" class="block text-sm font-medium text-gray-700 mb-1">Gönderen ID</label>
                                <input type="text" id="sms_sender_id" name="sms_sender_id" value="TekneKiralama" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-sm font-medium text-gray-900">SMS Bildirim Türleri</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="sms_reservation_confirmation" name="sms_reservation_confirmation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="sms_reservation_confirmation" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon onayı
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="sms_reservation_reminder" name="sms_reservation_reminder" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="sms_reservation_reminder" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon hatırlatması
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="sms_payment_confirmation" name="sms_payment_confirmation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="sms_payment_confirmation" class="ml-2 block text-sm text-gray-900">
                                        Ödeme onayı
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="sms_emergency" name="sms_emergency" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="sms_emergency" class="ml-2 block text-sm text-gray-900">
                                        Acil durum bildirimi
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Push Bildirimleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Push Bildirimleri</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="push_enabled" name="push_enabled" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="push_enabled" class="ml-2 block text-sm text-gray-900">
                                Push bildirimlerini etkinleştir
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="push_provider" class="block text-sm font-medium text-gray-700 mb-1">Push Sağlayıcısı</label>
                                <select id="push_provider" name="push_provider" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option value="firebase">Firebase Cloud Messaging</option>
                                    <option value="onesignal">OneSignal</option>
                                    <option value="pusher">Pusher</option>
                                </select>
                            </div>
                            <div>
                                <label for="push_api_key" class="block text-sm font-medium text-gray-700 mb-1">API Anahtarı</label>
                                <input type="password" id="push_api_key" name="push_api_key" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-sm font-medium text-gray-900">Push Bildirim Türleri</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <input type="checkbox" id="push_reservation_update" name="push_reservation_update" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="push_reservation_update" class="ml-2 block text-sm text-gray-900">
                                        Rezervasyon güncellemesi
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="push_payment_status" name="push_payment_status" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <label for="push_payment_status" class="ml-2 block text-sm text-gray-900">
                                        Ödeme durumu
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="push_promotion" name="push_promotion" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="push_promotion" class="ml-2 block text-sm text-gray-900">
                                        Promosyon bildirimleri
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="push_weather_alert" name="push_weather_alert" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="push_weather_alert" class="ml-2 block text-sm text-gray-900">
                                        Hava durumu uyarısı
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sağ Kolon - Ek Ayarlar -->
            <div class="space-y-6">
                <!-- Bildirim Zamanlaması -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Bildirim Zamanlaması</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="reservation_reminder_hours" class="block text-sm font-medium text-gray-700 mb-1">Rezervasyon Hatırlatması (saat öncesi)</label>
                            <input type="number" id="reservation_reminder_hours" name="reservation_reminder_hours" value="24" min="1" max="168" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="payment_reminder_hours" class="block text-sm font-medium text-gray-700 mb-1">Ödeme Hatırlatması (saat sonrası)</label>
                            <input type="number" id="payment_reminder_hours" name="payment_reminder_hours" value="2" min="1" max="72" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="notification_start_hour" class="block text-sm font-medium text-gray-700 mb-1">Bildirim Başlangıç Saati</label>
                            <input type="time" id="notification_start_hour" name="notification_start_hour" value="08:00" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="notification_end_hour" class="block text-sm font-medium text-gray-700 mb-1">Bildirim Bitiş Saati</label>
                            <input type="time" id="notification_end_hour" name="notification_end_hour" value="22:00" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                </div>

                <!-- Bildirim İstatistikleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Bildirim İstatistikleri</h3>
                    </div>
                    <div class="p-6">
                        <dl class="space-y-3">
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bugün Gönderilen:</dt>
                                <dd class="text-sm font-medium text-gray-900">156</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bu Hafta:</dt>
                                <dd class="text-sm font-medium text-gray-900">1,247</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">E-posta Başarı Oranı:</dt>
                                <dd class="text-sm font-medium text-green-600">98.5%</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">SMS Başarı Oranı:</dt>
                                <dd class="text-sm font-medium text-green-600">99.2%</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Push Açılma Oranı:</dt>
                                <dd class="text-sm font-medium text-blue-600">45.8%</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Bildirim Şablonları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Bildirim Şablonları</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            E-posta Şablonları
                        </button>
                        <button type="button" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            SMS Şablonları
                        </button>
                        <button type="button" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Push Şablonları
                        </button>
                    </div>
                </div>

                <!-- Hızlı İşlemler -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Hızlı İşlemler</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <button type="button" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Test Bildirimi Gönder
                        </button>
                        <button type="button" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Bildirim Kuyruğunu Temizle
                        </button>
                        <button type="button" class="w-full bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Bildirim Loglarını Görüntüle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Form gönderimi
    document.getElementById('notification-settings-form').addEventListener('submit', function(e) {
        e.preventDefault();
        console.log('Bildirim ayarları kaydediliyor...');
    });

    // SMS sağlayıcısı değişikliği
    document.getElementById('sms_provider').addEventListener('change', function() {
        const smsEnabled = document.getElementById('sms_enabled');
        if (this.value) {
            smsEnabled.checked = true;
        }
    });

    // Push sağlayıcısı değişikliği
    document.getElementById('push_provider').addEventListener('change', function() {
        const pushEnabled = document.getElementById('push_enabled');
        if (this.value) {
            pushEnabled.checked = true;
        }
    });

    // Zaman kontrolü
    document.getElementById('notification_start_hour').addEventListener('change', function() {
        const endHour = document.getElementById('notification_end_hour');
        if (this.value >= endHour.value) {
            alert('Başlangıç saati bitiş saatinden önce olmalıdır.');
            this.value = '08:00';
        }
    });

    document.getElementById('notification_end_hour').addEventListener('change', function() {
        const startHour = document.getElementById('notification_start_hour');
        if (this.value <= startHour.value) {
            alert('Bitiş saati başlangıç saatinden sonra olmalıdır.');
            this.value = '22:00';
        }
    });
</script>
@endsection 