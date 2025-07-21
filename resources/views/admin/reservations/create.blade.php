@extends('admin.layouts.app')

@section('page-title', 'Yeni Rezervasyon')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Yeni Rezervasyon</h1>
            <p class="text-gray-600">Sisteme yeni rezervasyon kaydı oluşturun</p>
        </div>
        <a href="{{ url('/admin/reservations') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Geri Dön
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Rezervasyon Bilgileri</h3>
        </div>
        <form class="p-6 space-y-6">
            <!-- Müşteri Seçimi -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Müşteri Bilgileri</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="customer_type" class="block text-sm font-medium text-gray-700 mb-1">Müşteri Türü *</label>
                        <select id="customer_type" name="customer_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="toggleCustomerFields()">
                            <option value="">Seçin</option>
                            <option value="existing">Mevcut Müşteri</option>
                            <option value="new">Yeni Müşteri</option>
                        </select>
                    </div>
                    <div id="existing_customer_div" class="hidden">
                        <label for="existing_customer" class="block text-sm font-medium text-gray-700 mb-1">Müşteri Seçin</label>
                        <select id="existing_customer" name="existing_customer" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                            <option value="">Müşteri seçin</option>
                            <option value="1">Mehmet Demir - mehmet@email.com</option>
                            <option value="2">Ayşe Kaya - ayse@email.com</option>
                            <option value="3">Ali Özkan - ali@email.com</option>
                            <option value="4">Fatma Yıldız - fatma@email.com</option>
                        </select>
                    </div>
                </div>
                
                <!-- Yeni Müşteri Bilgileri -->
                <div id="new_customer_fields" class="hidden mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad *</label>
                            <input type="text" id="customer_name" name="customer_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-1">E-posta *</label>
                            <input type="email" id="customer_email" name="customer_email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="customer_phone" class="block text-sm font-medium text-gray-700 mb-1">Telefon *</label>
                            <input type="tel" id="customer_phone" name="customer_phone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="customer_id_number" class="block text-sm font-medium text-gray-700 mb-1">TC Kimlik No</label>
                            <input type="text" id="customer_id_number" name="customer_id_number" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tekne Seçimi -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Tekne Seçimi</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="boat_category" class="block text-sm font-medium text-gray-700 mb-1">Tekne Kategorisi</label>
                        <select id="boat_category" name="boat_category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" onchange="filterBoats()">
                            <option value="">Tüm Kategoriler</option>
                            <option value="yacht">Yat</option>
                            <option value="sailboat">Yelkenli</option>
                            <option value="motorboat">Motor Tekne</option>
                            <option value="catamaran">Katamaran</option>
                        </select>
                    </div>
                    <div>
                        <label for="boat" class="block text-sm font-medium text-gray-700 mb-1">Tekne Seçin *</label>
                        <select id="boat" name="boat" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="updateBoatInfo()">
                            <option value="">Tekne seçin</option>
                            <option value="1" data-price="2500" data-capacity="12" data-category="yacht">Mavi Deniz - Yat (₺2,500/gün)</option>
                            <option value="2" data-price="1800" data-capacity="8" data-category="sailboat">Rüzgar Avcısı - Yelkenli (₺1,800/gün)</option>
                            <option value="3" data-price="1200" data-capacity="6" data-category="motorboat">Hız Tutkusu - Motor Tekne (₺1,200/gün)</option>
                            <option value="4" data-price="3200" data-capacity="16" data-category="catamaran">Çifte Güç - Katamaran (₺3,200/gün)</option>
                        </select>
                    </div>
                </div>
                
                <!-- Seçilen Tekne Bilgileri -->
                <div id="selected_boat_info" class="hidden mt-4 p-4 bg-gray-50 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Günlük Fiyat</label>
                            <p id="boat_daily_price" class="text-lg font-semibold text-green-600">₺0</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Kapasite</label>
                            <p id="boat_capacity" class="text-gray-900">0 Kişi</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Durum</label>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Müsait
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarih ve Saat -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Tarih ve Saat</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="reservation_date" class="block text-sm font-medium text-gray-700 mb-1">Rezervasyon Tarihi *</label>
                        <input type="date" id="reservation_date" name="reservation_date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="calculatePrice()">
                    </div>
                    <div>
                        <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">Başlangıç Saati *</label>
                        <input type="time" id="start_time" name="start_time" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="calculatePrice()">
                    </div>
                    <div>
                        <label for="end_time" class="block text-sm font-medium text-gray-700 mb-1">Bitiş Saati *</label>
                        <input type="time" id="end_time" name="end_time" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="calculatePrice()">
                    </div>
                </div>
            </div>

            <!-- Katılımcı Bilgileri -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Katılımcı Bilgileri</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="participant_count" class="block text-sm font-medium text-gray-700 mb-1">Katılımcı Sayısı *</label>
                        <input type="number" id="participant_count" name="participant_count" min="1" value="1" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required onchange="calculatePrice()">
                    </div>
                    <div>
                        <label for="special_requests" class="block text-sm font-medium text-gray-700 mb-1">Özel İstekler</label>
                        <textarea id="special_requests" name="special_requests" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Özel isteklerinizi buraya yazabilirsiniz..."></textarea>
                    </div>
                </div>
            </div>

            <!-- Fiyat Hesaplama -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Fiyat Hesaplama</h4>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-700">Günlük Fiyat:</span>
                                <span id="daily_price_display" class="font-medium">₺0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700">Saat Sayısı:</span>
                                <span id="hour_count" class="font-medium">0 saat</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700">Hesaplanan Tutar:</span>
                                <span id="calculated_amount" class="font-medium">₺0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700">İndirim:</span>
                                <span id="discount_amount" class="font-medium text-green-600">-₺0</span>
                            </div>
                            <hr class="border-gray-300">
                            <div class="flex justify-between text-lg font-semibold">
                                <span class="text-gray-900">Toplam Tutar:</span>
                                <span id="total_amount" class="text-green-600">₺0</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="discount_type" class="block text-sm font-medium text-gray-700 mb-1">İndirim Türü</label>
                                <select id="discount_type" name="discount_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" onchange="calculateDiscount()">
                                    <option value="">İndirim Yok</option>
                                    <option value="percentage">Yüzde İndirim</option>
                                    <option value="fixed">Sabit İndirim</option>
                                </select>
                            </div>
                            <div id="discount_value_div" class="hidden">
                                <label for="discount_value" class="block text-sm font-medium text-gray-700 mb-1">İndirim Değeri</label>
                                <input type="number" id="discount_value" name="discount_value" min="0" step="0.01" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" onchange="calculateDiscount()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ödeme Bilgileri -->
            <div class="border-b pb-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Ödeme Bilgileri</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="payment_method" class="block text-sm font-medium text-gray-700 mb-1">Ödeme Yöntemi *</label>
                        <select id="payment_method" name="payment_method" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            <option value="">Seçin</option>
                            <option value="cash">Nakit</option>
                            <option value="credit_card">Kredi Kartı</option>
                            <option value="bank_transfer">Banka Havalesi</option>
                            <option value="online">Online Ödeme</option>
                        </select>
                    </div>
                    <div>
                        <label for="payment_status" class="block text-sm font-medium text-gray-700 mb-1">Ödeme Durumu *</label>
                        <select id="payment_status" name="payment_status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                            <option value="pending" selected>Beklemede</option>
                            <option value="partial">Kısmi Ödeme</option>
                            <option value="completed">Tamamlandı</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Notlar -->
            <div>
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notlar</label>
                <textarea id="notes" name="notes" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Rezervasyon hakkında notlar..."></textarea>
            </div>

            <!-- Butonlar -->
            <div class="flex justify-end space-x-4 pt-6 border-t">
                <button type="button" class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    İptal
                </button>
                <button type="submit" class="bg-primary hover:bg-secondary text-white px-6 py-2 rounded-md font-medium transition duration-150">
                    Rezervasyonu Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleCustomerFields() {
        const customerType = document.getElementById('customer_type').value;
        const existingCustomerDiv = document.getElementById('existing_customer_div');
        const newCustomerFields = document.getElementById('new_customer_fields');
        
        if (customerType === 'existing') {
            existingCustomerDiv.classList.remove('hidden');
            newCustomerFields.classList.add('hidden');
        } else if (customerType === 'new') {
            existingCustomerDiv.classList.add('hidden');
            newCustomerFields.classList.remove('hidden');
        } else {
            existingCustomerDiv.classList.add('hidden');
            newCustomerFields.classList.add('hidden');
        }
    }
    
    function updateBoatInfo() {
        const boatSelect = document.getElementById('boat');
        const selectedOption = boatSelect.options[boatSelect.selectedIndex];
        const boatInfo = document.getElementById('selected_boat_info');
        
        if (boatSelect.value) {
            const dailyPrice = selectedOption.getAttribute('data-price');
            const capacity = selectedOption.getAttribute('data-capacity');
            
            document.getElementById('boat_daily_price').textContent = `₺${dailyPrice}`;
            document.getElementById('boat_capacity').textContent = `${capacity} Kişi`;
            boatInfo.classList.remove('hidden');
            
            calculatePrice();
        } else {
            boatInfo.classList.add('hidden');
        }
    }
    
    function calculatePrice() {
        const boatSelect = document.getElementById('boat');
        const startTime = document.getElementById('start_time').value;
        const endTime = document.getElementById('end_time').value;
        const participantCount = document.getElementById('participant_count').value;
        
        if (boatSelect.value && startTime && endTime) {
            const selectedOption = boatSelect.options[boatSelect.selectedIndex];
            const dailyPrice = parseFloat(selectedOption.getAttribute('data-price'));
            
            // Saat hesaplama
            const start = new Date(`2000-01-01T${startTime}`);
            const end = new Date(`2000-01-01T${endTime}`);
            const hours = (end - start) / (1000 * 60 * 60);
            
            // Saatlik fiyat hesaplama (günlük fiyat / 8 saat)
            const hourlyPrice = dailyPrice / 8;
            const calculatedAmount = hourlyPrice * hours;
            
            document.getElementById('daily_price_display').textContent = `₺${dailyPrice}`;
            document.getElementById('hour_count').textContent = `${hours} saat`;
            document.getElementById('calculated_amount').textContent = `₺${calculatedAmount.toFixed(2)}`;
            
            calculateDiscount();
        }
    }
    
    function calculateDiscount() {
        const calculatedAmount = parseFloat(document.getElementById('calculated_amount').textContent.replace('₺', ''));
        const discountType = document.getElementById('discount_type').value;
        const discountValue = parseFloat(document.getElementById('discount_value').value) || 0;
        
        let discountAmount = 0;
        let totalAmount = calculatedAmount;
        
        if (discountType === 'percentage' && discountValue > 0) {
            discountAmount = calculatedAmount * (discountValue / 100);
            totalAmount = calculatedAmount - discountAmount;
        } else if (discountType === 'fixed' && discountValue > 0) {
            discountAmount = discountValue;
            totalAmount = calculatedAmount - discountAmount;
        }
        
        document.getElementById('discount_amount').textContent = `-₺${discountAmount.toFixed(2)}`;
        document.getElementById('total_amount').textContent = `₺${totalAmount.toFixed(2)}`;
    }
    
    // İndirim değeri alanını göster/gizle
    document.getElementById('discount_type').addEventListener('change', function() {
        const discountValueDiv = document.getElementById('discount_value_div');
        if (this.value) {
            discountValueDiv.classList.remove('hidden');
        } else {
            discountValueDiv.classList.add('hidden');
        }
    });
</script>
@endsection 