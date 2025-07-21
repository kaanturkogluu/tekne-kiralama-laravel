@extends('admin.layouts.app')

@section('page-title', 'Bildirim Şablonları')

@section('content')
<div class="space-y-6">
    <!-- Başlık -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Bildirim Şablonları</h1>
            <p class="text-gray-600">E-posta, SMS ve push bildirim şablonlarını yönetin</p>
        </div>
        <div class="flex items-center space-x-3">
            <button type="button" id="add-template" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Yeni Şablon
            </button>
            <button type="button" id="import-templates" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                </svg>
                Şablon İçe Aktar
            </button>
        </div>
    </div>

    <!-- Şablon Türü Seçimi -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center space-x-6">
                <button type="button" id="email-tab" class="template-tab active px-4 py-2 text-sm font-medium text-primary border-b-2 border-primary">
                    E-posta Şablonları
                </button>
                <button type="button" id="sms-tab" class="template-tab px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent">
                    SMS Şablonları
                </button>
                <button type="button" id="push-tab" class="template-tab px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent">
                    Push Şablonları
                </button>
            </div>
        </div>

        <!-- E-posta Şablonları -->
        <div id="email-templates" class="template-content">
            <div class="p-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Sol Kolon - Şablon Listesi -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">Mevcut Şablonlar</h3>
                        
                        <!-- Şablon 1 -->
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="welcome">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Hoş Geldin E-postası</h4>
                                    <p class="text-sm text-gray-600">Yeni kullanıcı kaydı sonrası gönderilir</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Şablon 2 -->
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="reservation-confirmation">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Rezervasyon Onayı</h4>
                                    <p class="text-sm text-gray-600">Rezervasyon onaylandığında gönderilir</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Şablon 3 -->
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="reservation-reminder">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Rezervasyon Hatırlatması</h4>
                                    <p class="text-sm text-gray-600">Rezervasyon öncesi hatırlatma</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Taslak
                                    </span>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Şablon 4 -->
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="password-reset">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Şifre Sıfırlama</h4>
                                    <p class="text-sm text-gray-600">Şifre sıfırlama talebi</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sağ Kolon - Şablon Düzenleme -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">Şablon Düzenle</h3>
                            <div class="flex items-center space-x-2">
                                <button type="button" id="preview-template" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm font-medium">
                                    Önizle
                                </button>
                                <button type="button" id="test-template" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm font-medium">
                                    Test Gönder
                                </button>
                            </div>
                        </div>

                        <form id="template-form" class="space-y-4">
                            <div>
                                <label for="template-name" class="block text-sm font-medium text-gray-700 mb-1">Şablon Adı</label>
                                <input type="text" id="template-name" name="template_name" value="Hoş Geldin E-postası" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div>
                                <label for="template-subject" class="block text-sm font-medium text-gray-700 mb-1">E-posta Konusu</label>
                                <input type="text" id="template-subject" name="template_subject" value="Tekne Kiralama'ya Hoş Geldiniz!" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div>
                                <label for="template-content" class="block text-sm font-medium text-gray-700 mb-1">E-posta İçeriği</label>
                                <textarea id="template-content" name="template_content" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Merhaba {user_name},

Tekne Kiralama platformuna hoş geldiniz!

Hesabınız başarıyla oluşturuldu. Artık tekne rezervasyonu yapabilir ve deniz tutkunuzu yaşayabilirsiniz.

Hızlı Başlangıç:
• Tekneleri keşfedin: {boats_url}
• Rezervasyon yapın: {reservations_url}
• Profilinizi güncelleyin: {profile_url}

Herhangi bir sorunuz olursa bizimle iletişime geçebilirsiniz.

Saygılarımızla,
Tekne Kiralama Ekibi

{contact_email} | {contact_phone}</textarea>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <label class="flex items-center">
                                        <input type="checkbox" id="template-active" name="template_active" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                        <span class="ml-2 text-sm text-gray-900">Şablonu etkinleştir</span>
                                    </label>
                                </div>
                                <button type="submit" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                                    Şablonu Kaydet
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMS Şablonları -->
        <div id="sms-templates" class="template-content hidden">
            <div class="p-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Sol Kolon - SMS Şablon Listesi -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">SMS Şablonları</h3>
                        
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="sms-reservation-confirmation">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">SMS Rezervasyon Onayı</h4>
                                    <p class="text-sm text-gray-600">Rezervasyon onayı SMS'i</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="sms-reminder">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">SMS Hatırlatma</h4>
                                    <p class="text-sm text-gray-600">Rezervasyon hatırlatması</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Taslak
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sağ Kolon - SMS Şablon Düzenleme -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">SMS Şablon Düzenle</h3>
                            <button type="button" id="test-sms" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm font-medium">
                                Test SMS Gönder
                            </button>
                        </div>

                        <form id="sms-template-form" class="space-y-4">
                            <div>
                                <label for="sms-template-name" class="block text-sm font-medium text-gray-700 mb-1">Şablon Adı</label>
                                <input type="text" id="sms-template-name" name="sms_template_name" value="SMS Rezervasyon Onayı" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div>
                                <label for="sms-template-content" class="block text-sm font-medium text-gray-700 mb-1">SMS İçeriği</label>
                                <textarea id="sms-template-content" name="sms_template_content" rows="6" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Rezervasyonunuz onaylandı! Tekne: {boat_name}, Tarih: {reservation_date}, Saat: {reservation_time}. Detaylar: {reservation_url}</textarea>
                                <p class="text-xs text-gray-500 mt-1">Karakter sayısı: <span id="sms-char-count">0</span>/160</p>
                            </div>

                            <div class="flex items-center justify-between">
                                <label class="flex items-center">
                                    <input type="checkbox" id="sms-template-active" name="sms_template_active" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <span class="ml-2 text-sm text-gray-900">Şablonu etkinleştir</span>
                                </label>
                                <button type="submit" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                                    SMS Şablonunu Kaydet
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Push Şablonları -->
        <div id="push-templates" class="template-content hidden">
            <div class="p-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Sol Kolon - Push Şablon Listesi -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">Push Şablonları</h3>
                        
                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="push-update">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Push Güncelleme</h4>
                                    <p class="text-sm text-gray-600">Rezervasyon güncellemesi</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="template-item bg-gray-50 rounded-lg p-4 cursor-pointer hover:bg-gray-100 transition duration-150" data-template="push-promotion">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-900">Push Promosyon</h4>
                                    <p class="text-sm text-gray-600">Promosyon bildirimi</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Taslak
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sağ Kolon - Push Şablon Düzenleme -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">Push Şablon Düzenle</h3>
                            <button type="button" id="test-push" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm font-medium">
                                Test Push Gönder
                            </button>
                        </div>

                        <form id="push-template-form" class="space-y-4">
                            <div>
                                <label for="push-template-name" class="block text-sm font-medium text-gray-700 mb-1">Şablon Adı</label>
                                <input type="text" id="push-template-name" name="push_template_name" value="Push Güncelleme" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div>
                                <label for="push-template-title" class="block text-sm font-medium text-gray-700 mb-1">Push Başlığı</label>
                                <input type="text" id="push-template-title" name="push_template_title" value="Rezervasyon Güncellemesi" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div>
                                <label for="push-template-body" class="block text-sm font-medium text-gray-700 mb-1">Push İçeriği</label>
                                <textarea id="push-template-body" name="push_template_body" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">Rezervasyonunuzda güncelleme var. {reservation_details} için tıklayın.</textarea>
                            </div>

                            <div>
                                <label for="push-template-url" class="block text-sm font-medium text-gray-700 mb-1">Yönlendirme URL'i</label>
                                <input type="text" id="push-template-url" name="push_template_url" value="{reservation_url}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>

                            <div class="flex items-center justify-between">
                                <label class="flex items-center">
                                    <input type="checkbox" id="push-template-active" name="push_template_active" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                                    <span class="ml-2 text-sm text-gray-900">Şablonu etkinleştir</span>
                                </label>
                                <button type="submit" class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md font-medium transition duration-150">
                                    Push Şablonunu Kaydet
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Değişken Listesi -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Kullanılabilir Değişkenler</h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Kullanıcı Değişkenleri</h4>
                    <div class="space-y-1 text-sm">
                        <div class="flex justify-between">
                            <code class="text-blue-600">{user_name}</code>
                            <span class="text-gray-600">Kullanıcı adı</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{user_email}</code>
                            <span class="text-gray-600">E-posta adresi</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{user_phone}</code>
                            <span class="text-gray-600">Telefon numarası</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Rezervasyon Değişkenleri</h4>
                    <div class="space-y-1 text-sm">
                        <div class="flex justify-between">
                            <code class="text-blue-600">{reservation_id}</code>
                            <span class="text-gray-600">Rezervasyon ID</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{boat_name}</code>
                            <span class="text-gray-600">Tekne adı</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{reservation_date}</code>
                            <span class="text-gray-600">Rezervasyon tarihi</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{reservation_time}</code>
                            <span class="text-gray-600">Rezervasyon saati</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Sistem Değişkenleri</h4>
                    <div class="space-y-1 text-sm">
                        <div class="flex justify-between">
                            <code class="text-blue-600">{site_name}</code>
                            <span class="text-gray-600">Site adı</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{contact_email}</code>
                            <span class="text-gray-600">İletişim e-postası</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{contact_phone}</code>
                            <span class="text-gray-600">İletişim telefonu</span>
                        </div>
                        <div class="flex justify-between">
                            <code class="text-blue-600">{reset_link}</code>
                            <span class="text-gray-600">Şifre sıfırlama linki</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab değiştirme
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.template-tab');
        const contents = document.querySelectorAll('.template-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const target = this.id.replace('-tab', '-templates');
                
                // Tab aktifliğini güncelle
                tabs.forEach(t => {
                    t.classList.remove('active', 'text-primary', 'border-primary');
                    t.classList.add('text-gray-500', 'border-transparent');
                });
                this.classList.add('active', 'text-primary', 'border-primary');
                this.classList.remove('text-gray-500', 'border-transparent');

                // İçeriği göster/gizle
                contents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(target).classList.remove('hidden');
            });
        });

        // Şablon seçimi
        const templateItems = document.querySelectorAll('.template-item');
        templateItems.forEach(item => {
            item.addEventListener('click', function() {
                // Aktif şablonu güncelle
                templateItems.forEach(t => t.classList.remove('bg-blue-50', 'border-blue-200'));
                this.classList.add('bg-blue-50', 'border-blue-200');

                // Şablon verilerini yükle
                loadTemplateData(this.dataset.template);
            });
        });

        // SMS karakter sayacı
        const smsContent = document.getElementById('sms-template-content');
        const charCount = document.getElementById('sms-char-count');
        
        smsContent.addEventListener('input', function() {
            charCount.textContent = this.value.length;
            if (this.value.length > 160) {
                charCount.classList.add('text-red-600');
            } else {
                charCount.classList.remove('text-red-600');
            }
        });

        // Form gönderimi
        document.getElementById('template-form').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('E-posta şablonu kaydediliyor...');
        });

        document.getElementById('sms-template-form').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('SMS şablonu kaydediliyor...');
        });

        document.getElementById('push-template-form').addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('Push şablonu kaydediliyor...');
        });

        // Test gönderimi
        document.getElementById('test-template').addEventListener('click', function() {
            alert('Test e-postası gönderiliyor...');
        });

        document.getElementById('test-sms').addEventListener('click', function() {
            alert('Test SMS gönderiliyor...');
        });

        document.getElementById('test-push').addEventListener('click', function() {
            alert('Test push bildirimi gönderiliyor...');
        });

        // Şablon verilerini yükle
        function loadTemplateData(templateType) {
            const templates = {
                'welcome': {
                    name: 'Hoş Geldin E-postası',
                    subject: 'Tekne Kiralama\'ya Hoş Geldiniz!',
                    content: 'Merhaba {user_name},\n\nTekne Kiralama platformuna hoş geldiniz!\n\nHesabınız başarıyla oluşturuldu. Artık tekne rezervasyonu yapabilir ve deniz tutkunuzu yaşayabilirsiniz.\n\nHızlı Başlangıç:\n• Tekneleri keşfedin: {boats_url}\n• Rezervasyon yapın: {reservations_url}\n• Profilinizi güncelleyin: {profile_url}\n\nHerhangi bir sorunuz olursa bizimle iletişime geçebilirsiniz.\n\nSaygılarımızla,\nTekne Kiralama Ekibi\n\n{contact_email} | {contact_phone}'
                },
                'reservation-confirmation': {
                    name: 'Rezervasyon Onayı',
                    subject: 'Rezervasyonunuz Onaylandı',
                    content: 'Merhaba {user_name},\n\nRezervasyonunuz başarıyla onaylandı!\n\nRezervasyon Detayları:\n• Tekne: {boat_name}\n• Tarih: {reservation_date}\n• Saat: {reservation_time}\n• Rezervasyon No: {reservation_id}\n\nRezervasyon detaylarını görüntülemek için: {reservation_url}\n\nİyi tatiller!\nTekne Kiralama Ekibi'
                }
            };

            if (templates[templateType]) {
                const template = templates[templateType];
                document.getElementById('template-name').value = template.name;
                document.getElementById('template-subject').value = template.subject;
                document.getElementById('template-content').value = template.content;
            }
        }
    });
</script>
@endsection 