@extends('admin.layouts.app')

@section('page-title', 'E-posta Ayarları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">E-posta Ayarları</h1>
            <p class="text-gray-600">E-posta yapılandırmasını yönetin</p>
        </div>
        <button type="submit" form="email-settings-form" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
            Ayarları Kaydet
        </button>
    </div>

    <!-- E-posta Ayarları Formu -->
    <form id="email-settings-form" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Sol Kolon - SMTP Ayarları -->
            <div class="lg:col-span-2 space-y-6">
                <!-- SMTP Ayarları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">SMTP Ayarları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="smtp_host" class="block text-sm font-medium text-gray-700 mb-1">SMTP Sunucu *</label>
                                <input type="text" id="smtp_host" name="smtp_host" value="smtp.gmail.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            </div>
                            <div>
                                <label for="smtp_port" class="block text-sm font-medium text-gray-700 mb-1">SMTP Port *</label>
                                <input type="number" id="smtp_port" name="smtp_port" value="587" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="smtp_username" class="block text-sm font-medium text-gray-700 mb-1">SMTP Kullanıcı Adı *</label>
                                <input type="text" id="smtp_username" name="smtp_username" value="noreply@teknekiralama.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            </div>
                            <div>
                                <label for="smtp_password" class="block text-sm font-medium text-gray-700 mb-1">SMTP Şifre *</label>
                                <input type="password" id="smtp_password" name="smtp_password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="smtp_encryption" name="smtp_encryption" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="smtp_encryption" class="ml-2 block text-sm text-gray-900">
                                TLS/SSL Şifreleme kullan
                            </label>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="button" id="test-email" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                                E-posta Test Et
                            </button>
                            <span id="test-result" class="text-sm"></span>
                        </div>
                    </div>
                </div>

                <!-- E-posta Şablonları -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">E-posta Şablonları</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="welcome_email_subject" class="block text-sm font-medium text-gray-700 mb-1">Hoş Geldin E-postası Konusu</label>
                            <input type="text" id="welcome_email_subject" name="welcome_email_subject" value="Tekne Kiralama'ya Hoş Geldiniz!" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="welcome_email_template" class="block text-sm font-medium text-gray-700 mb-1">Hoş Geldin E-postası Şablonu</label>
                            <textarea id="welcome_email_template" name="welcome_email_template" rows="6" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Merhaba {user_name},

Tekne Kiralama platformuna hoş geldiniz!

Hesabınız başarıyla oluşturuldu. Artık tekne rezervasyonu yapabilir ve deniz tutkunuzu yaşayabilirsiniz.

Herhangi bir sorunuz olursa bizimle iletişime geçebilirsiniz.

Saygılarımızla,
Tekne Kiralama Ekibi</textarea>
                        </div>
                        <div>
                            <label for="reset_password_subject" class="block text-sm font-medium text-gray-700 mb-1">Şifre Sıfırlama Konusu</label>
                            <input type="text" id="reset_password_subject" name="reset_password_subject" value="Şifre Sıfırlama Talebi" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="reset_password_template" class="block text-sm font-medium text-gray-700 mb-1">Şifre Sıfırlama Şablonu</label>
                            <textarea id="reset_password_template" name="reset_password_template" rows="6" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Merhaba {user_name},

Şifre sıfırlama talebiniz alınmıştır.

Şifrenizi sıfırlamak için aşağıdaki linke tıklayın:
{reset_link}

Bu link 1 saat süreyle geçerlidir.

Eğer bu talebi siz yapmadıysanız, bu e-postayı görmezden gelebilirsiniz.

Saygılarımızla,
Tekne Kiralama Ekibi</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sağ Kolon - Ek Ayarlar -->
            <div class="space-y-6">
                <!-- Gönderen Bilgileri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Gönderen Bilgileri</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="from_name" class="block text-sm font-medium text-gray-700 mb-1">Gönderen Adı</label>
                            <input type="text" id="from_name" name="from_name" value="Tekne Kiralama" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="from_email" class="block text-sm font-medium text-gray-700 mb-1">Gönderen E-postası</label>
                            <input type="email" id="from_email" name="from_email" value="noreply@teknekiralama.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="reply_to" class="block text-sm font-medium text-gray-700 mb-1">Yanıt Adresi</label>
                            <input type="email" id="reply_to" name="reply_to" value="support@teknekiralama.com" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
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
                            <input type="checkbox" id="welcome_email" name="welcome_email" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="welcome_email" class="ml-2 block text-sm text-gray-900">
                                Hoş geldin e-postası gönder
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="reservation_confirmation" name="reservation_confirmation" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="reservation_confirmation" class="ml-2 block text-sm text-gray-900">
                                Rezervasyon onay e-postası
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="reservation_reminder" name="reservation_reminder" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="reservation_reminder" class="ml-2 block text-sm text-gray-900">
                                Rezervasyon hatırlatması
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="admin_notifications" name="admin_notifications" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="admin_notifications" class="ml-2 block text-sm text-gray-900">
                                Admin bildirimleri
                            </label>
                        </div>
                    </div>
                </div>

                <!-- E-posta İstatistikleri -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">E-posta İstatistikleri</h3>
                    </div>
                    <div class="p-6">
                        <dl class="space-y-3">
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bugün Gönderilen:</dt>
                                <dd class="text-sm font-medium text-gray-900">24</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bu Hafta:</dt>
                                <dd class="text-sm font-medium text-gray-900">156</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Bu Ay:</dt>
                                <dd class="text-sm font-medium text-gray-900">1,247</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-sm text-gray-600">Başarı Oranı:</dt>
                                <dd class="text-sm font-medium text-green-600">98.5%</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Hızlı İşlemler -->
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Hızlı İşlemler</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <button type="button" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            Toplu E-posta Gönder
                        </button>
                        <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            E-posta Kuyruğunu Temizle
                        </button>
                        <button type="button" class="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-md font-medium transition duration-150">
                            E-posta Loglarını Görüntüle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // E-posta test fonksiyonu
    document.getElementById('test-email').addEventListener('click', function() {
        const result = document.getElementById('test-result');
        result.textContent = 'Test e-postası gönderiliyor...';
        result.className = 'text-sm text-blue-600';
        
        // Simüle edilmiş test
        setTimeout(() => {
            result.textContent = 'Test e-postası başarıyla gönderildi!';
            result.className = 'text-sm text-green-600';
        }, 2000);
    });

    // Form gönderimi
    document.getElementById('email-settings-form').addEventListener('submit', function(e) {
        e.preventDefault();
        console.log('E-posta ayarları kaydediliyor...');
    });
</script>
@endsection 