@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">{{ __('events.title') }}</h1>
            <form class="flex flex-col md:flex-row gap-2 md:gap-4 w-full md:w-auto">
                <input type="text" name="q" placeholder="{{ __('events.search_placeholder') }}" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary w-full md:w-64">
                <select name="location" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">{{ __('events.all_locations') }}</option>
                    <option value="istanbul">İstanbul</option>
                    <option value="izmir">İzmir</option>
                    <option value="antalya">Antalya</option>
                    <option value="mugla">Muğla</option>
                </select>
                <select name="type" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">{{ __('events.all_types') }}</option>
                    <option value="swim">Yüzme & Snorkel</option>
                    <option value="fishing">Balık Tutma</option>
                    <option value="sunset">Gün Batımı Turu</option>
                    <option value="party">Tekne Partisi</option>
                    <option value="romantic">Romantik Tur</option>
                    <option value="diving">Dalış Turu</option>
                    <option value="islands">Ada Turu</option>
                    <option value="dinner">Yemekli Tur</option>
                </select>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-6 py-2 rounded-md transition duration-150">{{ __('events.filter') }}</button>
            </form>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example Event Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sunset Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Gün Batımı Turu</h3>
                        <p class="text-gray-600 text-sm mb-2">İstanbul, Boğaz</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                20 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                2 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.9 (67)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺350/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
            <!-- Example Event Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1464983953574-0892a716854b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Fishing Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Balık Tutma Turu</h3>
                        <p class="text-gray-600 text-sm mb-2">Muğla, Bodrum</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                10 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                4 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.7 (41)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺250/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
            <!-- Example Event Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Party Tour">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Tekne Partisi</h3>
                        <p class="text-gray-600 text-sm mb-2">Antalya, Kaş</p>
                        <div class="flex items-center space-x-4 mb-2 text-sm text-gray-600">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                30 {{ __('events.persons') }}
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                3 {{ __('events.hours') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <span class="text-yellow-400">★</span>
                            <span class="text-sm text-gray-600">4.8 (22)</span>
                        </div>
                        <span class="text-lg font-bold text-yellow-600">₺200/{{ __('events.per_person') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 