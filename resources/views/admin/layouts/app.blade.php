<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - CharterXplore</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#2563eb',
                            secondary: '#1e40af',
                            accent: '#f59e0b',
                            dark: '#1f2937',
                            light: '#f8fafc'
                        }
                    }
                }
            }
        </script>
    @endif
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-900 text-white w-64 flex-shrink-0">
            <div class="p-4">
                <h1 class="text-xl font-bold">CharterXplore</h1>
                <p class="text-gray-400 text-sm">Admin Panel</p>
            </div>
            
            <nav class="mt-8">
                <div class="px-4 mb-4">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Ana Menü</h3>
                </div>
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/dashboard') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ url('/admin/boats') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/boats*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Tekneler
                </a>
                <a href="{{ url('/admin/events') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/events*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Etkinlikler
                </a>
                <a href="{{ url('/admin/users') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/users*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                    Kullanıcılar
                </a>
                <a href="{{ url('/admin/reservations') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/reservations*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Rezervasyonlar
                </a>
                <div class="px-4 mt-8 mb-4">
                    <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider">İçerik Yönetimi</h3>
                </div>
                <a href="{{ url('/admin/blog') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/blog*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    Blog
                </a>
                <a href="{{ url('/admin/notifications') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/notifications*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Bildirimler
                    <span class="ml-auto bg-red-500 text-white text-xs rounded-full px-2 py-1">23</span>
                </a>
                <a href="{{ url('/admin/reports') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/reports*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Raporlar
                </a>
                <a href="{{ url('/admin/settings') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white {{ request()->is('admin/settings*') ? 'bg-gray-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Ayarlar
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <h2 class="text-xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Bildirimler Dropdown -->
                        <div class="relative">
                            <button id="notification-btn" type="button" class="flex items-center text-gray-700 hover:text-gray-900 focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <span class="ml-2">Bildirimler</span>
                                <span class="ml-1 bg-red-500 text-white text-xs rounded-full px-2 py-0.5">3</span>
                            </button>
                            <div id="notification-dropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded shadow-lg z-50 border border-gray-200">
                                <div class="p-4 border-b font-semibold text-gray-700">Bildirimler</div>
                                <ul class="max-h-64 overflow-y-auto divide-y divide-gray-100">
                                    <li class="p-4 hover:bg-gray-50 cursor-pointer">
                                        <div class="flex items-center">
                                            <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                            <span class="font-medium">Yeni rezervasyon oluşturuldu</span>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1">2 dakika önce</div>
                                    </li>
                                    <li class="p-4 hover:bg-gray-50 cursor-pointer">
                                        <div class="flex items-center">
                                            <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                            <span class="font-medium">Ödeme başarıyla alındı</span>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1">10 dakika önce</div>
                                    </li>
                                    <li class="p-4 hover:bg-gray-50 cursor-pointer">
                                        <div class="flex items-center">
                                            <span class="inline-block w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                                            <span class="font-medium">Tekne bakım zamanı geldi</span>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1">1 saat önce</div>
                                    </li>
                                </ul>
                                <div class="p-2 border-t text-center">
                                    <a href="{{ url('/admin/notifications') }}" class="text-primary hover:underline text-sm">Tüm Bildirimleri Gör</a>
                                </div>
                            </div>
                        </div>
                        <!-- Profil Dropdown -->
                        <div class="relative">
                            <button id="profile-btn" type="button" class="flex items-center text-gray-700 hover:text-gray-900 focus:outline-none">
                                <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
                                <span class="ml-2">Admin</span>
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded shadow-lg z-50 border border-gray-200">
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">Profilim</a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">Ayarlar</a>
                                <div class="border-t"></div>
                                <a href="#" class="block px-4 py-3 text-red-600 hover:bg-gray-50">Çıkış Yap</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bildirimler dropdown
            const notifBtn = document.getElementById('notification-btn');
            const notifDropdown = document.getElementById('notification-dropdown');
            // Profil dropdown
            const profileBtn = document.getElementById('profile-btn');
            const profileDropdown = document.getElementById('profile-dropdown');

            notifBtn && notifBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                notifDropdown.classList.toggle('hidden');
                profileDropdown.classList.add('hidden');
            });
            profileBtn && profileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                profileDropdown.classList.toggle('hidden');
                notifDropdown.classList.add('hidden');
            });
            // Dışarı tıklanınca kapat
            document.addEventListener('click', function() {
                notifDropdown.classList.add('hidden');
                profileDropdown.classList.add('hidden');
            });
        });
    </script>
</body>
</html> 