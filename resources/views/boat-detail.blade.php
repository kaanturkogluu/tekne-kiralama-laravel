@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ url('/boats') }}" class="inline-flex items-center text-primary hover:underline mb-6">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            {{ __('boats.back_to_list') }}
        </a>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left: Gallery & Specs -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col" x-data="{ mainImg: 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', gallery: [
                'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1465101178521-c1a9136a3b43?auto=format&fit=crop&w=400&q=80',
            ] }">
                <img :src="mainImg" class="w-full h-80 object-cover rounded-t transition-all duration-200" alt="Lagoon 46 - Albatros Escape">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 mt-2 px-4 pb-4">
                    <template x-for="(img, idx) in gallery" :key="idx">
                        <img :src="img" @click="mainImg = img" :class="mainImg === img ? 'ring-4 ring-primary' : ''" class="h-28 w-full object-cover rounded cursor-pointer transition-all duration-150" alt="gallery">
                    </template>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">Lagoon 46 - Albatros Escape</h1>
                    <p class="text-gray-600 text-sm mb-2">Ece Marina, Türkiye</p>
                    <div class="flex items-center space-x-6 mb-4 text-sm text-gray-600">
                        <span class="flex items-center"><span class="text-yellow-400">★</span><span class="ml-1">4.9 (234)</span></span>
                        <span class="text-primary font-semibold">Escape Yachting</span>
                    </div>
                    <!-- Modern Specs Table -->
                    <div class="mb-4">
                        <h2 class="font-semibold text-gray-800 mb-2">{{ __('boats.amenities') }}</h2>
                        <table class="w-full text-sm border rounded-lg overflow-hidden bg-gray-50">
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>{{ __('boats.year') }}</td>
                                    <td class="py-2 px-3">2024</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20v-6m0 0V4m0 10l-3-3m3 3l3-3"/></svg>{{ __('boats.length') }}</td>
                                    <td class="py-2 px-3">13.99 m</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4m0 0V8m0 4l-3-3m3 3l3-3"/></svg>{{ __('boats.draft') }}</td>
                                    <td class="py-2 px-3">1.3 m</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="8" width="16" height="8" rx="4"/></svg>{{ __('boats.beam') }}</td>
                                    <td class="py-2 px-3">7.96 m</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5"/></svg>{{ __('boats.persons') }}</td>
                                    <td class="py-2 px-3">8</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>{{ __('boats.berths') }}</td>
                                    <td class="py-2 px-3">8</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4-4 4 4"/></svg>{{ __('boats.cabins') }}</td>
                                    <td class="py-2 px-3">4</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6"/></svg>{{ __('boats.engine') }}</td>
                                    <td class="py-2 px-3">2x57 hp (85 kW)</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12h6"/></svg>{{ __('boats.toilets') }}</td>
                                    <td class="py-2 px-3">5</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12h6"/></svg>{{ __('boats.electric_toilets') }}</td>
                                    <td class="py-2 px-3">5</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12h18"/></svg>{{ __('boats.mainsail_type') }}</td>
                                    <td class="py-2 px-3">Klasik ana yelken</td>
                                    <td class="py-2 px-3 flex items-center"><svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12h18"/></svg>{{ __('boats.dinghy') }}</td>
                                    <td class="py-2 px-3">Dingi motoru dahil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Right: Description, Owner, Reviews, Calendar, Booking -->
            <div class="flex flex-col space-y-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="font-semibold text-gray-800 mb-1">{{ __('boats.description') }}</h2>
                    <p class="text-gray-700">4 kamaralı Lagoon 46 - Albatros Escape katamaran 2024 yılında yapılmış, ve Ece Marina, Türkiye kıyılarına bağlanmıştır.<br>
                    Albatros Escape, 8 kişiye kadar, ranza bulunan 4 adet çift kişilik kamarada. Yastık ve battaniye fiyata dahildir.<br>
                    Katamaran Albatros Escape katamaranı 5 adet tuvalet ve duşa sahiptir.<br>
                    Tekne ekipmanı arasında klasik ana yelken, radar, jeneratör, bimini tente ve iç mekan GPS pilotlayıcı yer almaktadır. Ayrıca, isıtıcı, klima, ses sistemi, güverte hoparlörleri ve flybridge de bulunmaktadır. Tam teçhizatlı tekne buz makinesi, dondurucu, kahve makinesi, buzdolabı ve fırın bulundurur.<br>
                    Bu katamaran, Escape Yachting kiralama şirketi tarafından işletilmektedir.</p>
                    <div class="mt-4">
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-2">Dingi motoru dahil</span>
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-2">ÜCRETSİZ Stand up paddleboard</span>
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded">ÜCRETSİZ WiFi</span>
                    </div>
                    <div class="mt-4 text-xs text-gray-500">Bu yat, 19 Şubat 2024 tarihinden beri Boataround'da kiralanıyor</div>
                </div>
                <!-- Owner Section -->
                <div class="bg-white rounded-lg shadow-md p-6 flex items-center space-x-6">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Owner Photo" class="w-20 h-20 rounded-full object-cover border-2 border-primary">
                    <div class="flex-1">
                        <div class="text-lg font-semibold text-gray-900">Ali Yılmaz</div>
                        <div class="text-gray-500 text-sm mb-2">{{ __('boats.owner') }}</div>
                        <a href="#" class="inline-block bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md text-sm font-medium transition">{{ __('boats.contact_owner') }}</a>
                    </div>
                </div>
                <!-- Reviews Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20h9"/><circle cx="6" cy="10" r="3"/><path d="M6 13v2a2 2 0 002 2h2"/></svg>
                        {{ __('boats.reviews') }}
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full object-cover border-2 border-primary" alt="reviewer1">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold text-gray-900">Elif Kaya</span>
                                    <span class="text-yellow-400">★★★★★</span>
                                </div>
                                <div class="text-gray-600 text-sm">Harika bir deneyimdi, tekne çok temiz ve sahibimiz çok ilgiliydi. Tekrar kiralamak isterim!</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="w-12 h-12 rounded-full object-cover border-2 border-primary" alt="reviewer2">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold text-gray-900">Mehmet Demir</span>
                                    <span class="text-yellow-400">★★★★☆</span>
                                </div>
                                <div class="text-gray-600 text-sm">Tekne çok konforluydu, manzara muhteşemdi. Rezervasyon süreci de çok kolaydı.</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <img src="https://randomuser.me/api/portraits/women/46.jpg" class="w-12 h-12 rounded-full object-cover border-2 border-primary" alt="reviewer3">
                            <div class="flex-1">
                                <div class="flex items-center space-x-2">
                                    <span class="font-semibold text-gray-900">Ayşe Yıldız</span>
                                    <span class="text-yellow-400">★★★★★</span>
                                </div>
                                <div class="text-gray-600 text-sm">Ailemizle çok güzel bir gün geçirdik. Her şey eksiksizdi, tavsiye ederim.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Calendar Section -->
                <div class="bg-white rounded-lg shadow-md p-6" x-data="{
                    today: (new Date()).toISOString().slice(0,10),
                    selectedDate: (new Date()).toISOString().slice(0,10),
                    selectedSlot: null,
                    slots: {
                        '2024-06-10': [
                            { time: '10:00-12:00', available: true },
                            { time: '12:00-14:00', available: false },
                            { time: '14:00-16:00', available: true }
                        ],
                        '2024-06-11': [
                            { time: '10:00-12:00', available: true },
                            { time: '12:00-14:00', available: true },
                            { time: '14:00-16:00', available: false }
                        ]
                    },
                    get daySlots() { return this.slots[this.selectedDate] || [
                        { time: '10:00-12:00', available: true },
                        { time: '12:00-14:00', available: false },
                        { time: '14:00-16:00', available: true }
                    ]; }
                }">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                        {{ __('boats.availability_calendar') }}
                    </h2>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tarih Seç</label>
                        <input type="date" x-model="selectedDate" class="border border-gray-300 rounded px-2 py-1">
                    </div>
                    <div class="mb-2">
                        <div class="font-semibold text-gray-800 mb-1">Saatlik Müsaitlik</div>
                        <div class="flex flex-col space-y-2">
                            <template x-for="slot in daySlots" :key="slot.time">
                                <span
                                    :class="[
                                        slot.available ? 'bg-green-100 text-green-800 cursor-pointer hover:bg-green-200' : 'bg-red-200 text-red-800 line-through',
                                        selectedSlot === slot.time && slot.available ? 'border-2 border-primary' : '',
                                        'rounded px-2 py-1 text-xs transition-all duration-150'
                                    ]"
                                    @click="if(slot.available) selectedSlot = slot.time"
                                    x-text="slot.time"
                                ></span>
                            </template>
                        </div>
                        <template x-if="selectedSlot">
                            <button class="mt-4 bg-primary hover:bg-secondary text-white px-4 py-2 rounded font-semibold transition" @click="alert('Saat revize edilecek: ' + selectedSlot)">Revize Et</button>
                        </template>
                    </div>
                    <div class="mt-2 text-xs text-gray-500 flex items-center">
                        <span class="inline-block w-3 h-3 bg-green-100 border border-gray-300 rounded mr-1"></span> Revize Edilebilir
                        <span class="inline-block w-3 h-3 bg-red-200 border border-gray-300 rounded ml-4 mr-1"></span> Dolu
                    </div>
                </div>
                <!-- Booking Button -->
                <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between">
                    <span class="text-2xl font-bold text-primary">₺250/{{ __('boats.per_hour') }}</span>
                    <a href="#" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md font-semibold transition duration-150">{{ __('boats.book_now') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Alpine.js for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection 