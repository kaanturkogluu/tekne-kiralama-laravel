@extends('admin.layouts.app')

@section('page-title', 'Blog Yazısı Düzenle')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Blog Yazısı Düzenle</h1>
            <p class="text-gray-600">Blog yazısı bilgilerini güncelleyin (5 dil desteği)</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ url('/admin/blog/1') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                Görüntüle
            </a>
            <a href="{{ url('/admin/blog') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Geri Dön
            </a>
        </div>
    </div>

    <!-- Dil Seçimi -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Dil Seçimi</h3>
        <div class="flex flex-wrap gap-2">
            <button type="button" onclick="showLanguage('tr')" class="language-tab active bg-primary text-white px-4 py-2 rounded-md font-medium transition duration-150" data-lang="tr">
                🇹🇷 Türkçe
            </button>
            <button type="button" onclick="showLanguage('en')" class="language-tab bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-medium transition duration-150" data-lang="en">
                🇺🇸 English
            </button>
            <button type="button" onclick="showLanguage('fr')" class="language-tab bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-medium transition duration-150" data-lang="fr">
                🇫🇷 Français
            </button>
            <button type="button" onclick="showLanguage('ar')" class="language-tab bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-medium transition duration-150" data-lang="ar">
                🇸🇦 العربية
            </button>
            <button type="button" onclick="showLanguage('ru')" class="language-tab bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-medium transition duration-150" data-lang="ru">
                🇷🇺 Русский
            </button>
        </div>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Blog Yazısı Bilgileri</h3>
        </div>
        <form class="p-6 space-y-6">
            <!-- Türkçe İçerik -->
            <div id="content-tr" class="language-content">
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        🇹🇷 Türkçe İçerik
                    </h4>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Sol Kolon - Ana İçerik -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Başlık -->
                        <div>
                            <label for="title_tr" class="block text-sm font-medium text-gray-700 mb-1">Başlık *</label>
                            <input type="text" id="title_tr" name="title_tr" value="İstanbul Boğazı'nda Muhteşem Yat Turu" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog yazısı başlığı..." required>
                        </div>

                        <!-- Alt Başlık -->
                        <div>
                            <label for="subtitle_tr" class="block text-sm font-medium text-gray-700 mb-1">Alt Başlık</label>
                            <input type="text" id="subtitle_tr" name="subtitle_tr" value="Boğazın eşsiz manzarasını keşfedin ve unutulmaz anılar biriktirin" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Kısa açıklama...">
                        </div>

                        <!-- İçerik -->
                        <div>
                            <label for="content_tr" class="block text-sm font-medium text-gray-700 mb-1">İçerik *</label>
                            <div class="border border-gray-300 rounded-md">
                                <!-- Toolbar -->
                                <div class="border-b border-gray-200 p-2 bg-gray-50 flex items-center space-x-2">
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Kalın">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h8a4 4 0 100-8H6v8zm0 0h8a4 4 0 110 8H6v-8z"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="İtalik">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Altı Çizili">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                        </svg>
                                    </button>
                                    <div class="w-px h-6 bg-gray-300"></div>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Başlık">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Liste">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Link">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                        </svg>
                                    </button>
                                    <button type="button" class="p-1 hover:bg-gray-200 rounded" title="Resim">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Editor -->
                                <textarea id="content_tr" name="content_tr" rows="12" class="w-full border-0 focus:ring-0 resize-none p-4" placeholder="Blog yazısı içeriğini buraya yazın..." required>İstanbul Boğazı, dünyanın en güzel doğal su yollarından biridir. Avrupa ve Asya kıtalarını ayıran bu muhteşem su yolu, tarihi yarımadanın kalbinden geçerek Karadeniz'den Marmara Denizi'ne uzanır.

Boğaz Turunun Özellikleri

Yat turumuz sırasında göreceğiniz en önemli yerler arasında Dolmabahçe Sarayı, Ortaköy Camii, Rumeli Hisarı ve Anadolu Hisarı bulunmaktadır. Her bir nokta, İstanbul'un zengin tarihini ve kültürünü yansıtır.

• Profesyonel kaptan ve mürettebat
• Konforlu yat içi mekanlar
• Güvenlik ekipmanları
• İçecek ve atıştırmalık servisi
• Fotoğraf çekim imkanları

En İyi Zamanlar

Boğaz turu için en ideal zamanlar gün batımı ve gün doğumu saatleridir. Bu saatlerde İstanbul'un eşsiz manzarası altın renklerle bürünür ve fotoğraf tutkunları için muhteşem fırsatlar sunar.

"İstanbul Boğazı'nda yapılan bir yat turu, hayatınızın en unutulmaz deneyimlerinden biri olacaktır."

Turumuz sırasında size eşlik edecek uzman rehberlerimiz, her bir nokta hakkında detaylı bilgi verecek ve İstanbul'un gizli hikayelerini paylaşacaktır.</textarea>
                            </div>
                        </div>

                        <!-- Özet -->
                        <div>
                            <label for="excerpt_tr" class="block text-sm font-medium text-gray-700 mb-1">Özet</label>
                            <textarea id="excerpt_tr" name="excerpt_tr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog yazısının kısa özeti...">İstanbul Boğazı'nda unutulmaz yat turu deneyimi. Profesyonel kaptanlar eşliğinde boğazın eşsiz manzarasını keşfedin ve tarihi yarımadanın güzelliklerini yaşayın.</textarea>
                        </div>
                    </div>

                    <!-- Sağ Kolon - SEO -->
                    <div class="space-y-6">
                        <!-- SEO Ayarları -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">SEO Ayarları (Türkçe)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_tr" class="block text-sm font-medium text-gray-700 mb-1">Meta Başlık</label>
                                    <input type="text" id="meta_title_tr" name="meta_title_tr" value="İstanbul Boğazı'nda Muhteşem Yat Turu - Deniz Turizm" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO için başlık...">
                                </div>
                                <div>
                                    <label for="meta_description_tr" class="block text-sm font-medium text-gray-700 mb-1">Meta Açıklama</label>
                                    <textarea id="meta_description_tr" name="meta_description_tr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO için açıklama...">İstanbul Boğazı'nda unutulmaz yat turu deneyimi. Profesyonel kaptanlar eşliğinde boğazın eşsiz manzarasını keşfedin.</textarea>
                                </div>
                                <div>
                                    <label for="slug_tr" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_tr" name="slug_tr" value="istanbul-bogazinda-muhtesem-yat-turu" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="blog-yazisi-basligi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- İngilizce İçerik -->
            <div id="content-en" class="language-content hidden">
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        🇺🇸 English Content
                    </h4>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
                            <input type="text" id="title_en" name="title_en" value="Amazing Yacht Tour in Istanbul Bosphorus" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog post title..." required>
                        </div>
                        <div>
                            <label for="subtitle_en" class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                            <input type="text" id="subtitle_en" name="subtitle_en" value="Discover the unique beauty of the Bosphorus and create unforgettable memories" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Short description...">
                        </div>
                        <div>
                            <label for="content_en" class="block text-sm font-medium text-gray-700 mb-1">Content *</label>
                            <textarea id="content_en" name="content_en" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Write your blog content here..." required>The Bosphorus is one of the most beautiful natural waterways in the world. This magnificent waterway, separating the European and Asian continents, extends from the Black Sea to the Sea of Marmara through the heart of the historic peninsula.

Bosphorus Tour Features

Among the most important places you will see during our yacht tour are Dolmabahçe Palace, Ortaköy Mosque, Rumeli Fortress and Anadolu Fortress. Each point reflects Istanbul's rich history and culture.

• Professional captain and crew
• Comfortable yacht interiors
• Safety equipment
• Beverage and snack service
• Photo opportunities

Best Times

The most ideal times for a Bosphorus tour are sunset and sunrise hours. During these hours, Istanbul's unique landscape is bathed in golden colors and offers magnificent opportunities for photography enthusiasts.

"A yacht tour in the Istanbul Bosphorus will be one of the most unforgettable experiences of your life."

During our tour, expert guides accompanying you will provide detailed information about each point and share Istanbul's hidden stories.</textarea>
                        </div>
                        <div>
                            <label for="excerpt_en" class="block text-sm font-medium text-gray-700 mb-1">Excerpt</label>
                            <textarea id="excerpt_en" name="excerpt_en" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Short summary of the blog post...">Unforgettable yacht tour experience in Istanbul Bosphorus. Discover the unique beauty of the Bosphorus with professional captains and experience the beauties of the historic peninsula.</textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">SEO Settings (English)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_en" class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label>
                                    <input type="text" id="meta_title_en" name="meta_title_en" value="Amazing Yacht Tour in Istanbul Bosphorus - Sea Tourism" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO title...">
                                </div>
                                <div>
                                    <label for="meta_description_en" class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                                    <textarea id="meta_description_en" name="meta_description_en" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO description...">Unforgettable yacht tour experience in Istanbul Bosphorus. Discover the unique beauty of the Bosphorus with professional captains.</textarea>
                                </div>
                                <div>
                                    <label for="slug_en" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_en" name="slug_en" value="amazing-yacht-tour-istanbul-bosphorus" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="blog-post-title">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fransızca İçerik -->
            <div id="content-fr" class="language-content hidden">
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        🇫🇷 Contenu Français
                    </h4>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="title_fr" class="block text-sm font-medium text-gray-700 mb-1">Titre *</label>
                            <input type="text" id="title_fr" name="title_fr" value="Incroyable Tour en Yacht sur le Bosphore d'Istanbul" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Titre de l'article..." required>
                        </div>
                        <div>
                            <label for="subtitle_fr" class="block text-sm font-medium text-gray-700 mb-1">Sous-titre</label>
                            <input type="text" id="subtitle_fr" name="subtitle_fr" value="Découvrez la beauté unique du Bosphore et créez des souvenirs inoubliables" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Description courte...">
                        </div>
                        <div>
                            <label for="content_fr" class="block text-sm font-medium text-gray-700 mb-1">Contenu *</label>
                            <textarea id="content_fr" name="content_fr" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Écrivez le contenu de votre article ici..." required>Le Bosphore est l'une des plus belles voies navigables naturelles du monde. Cette magnifique voie d'eau, séparant les continents européen et asiatique, s'étend de la mer Noire à la mer de Marmara à travers le cœur de la péninsule historique.

Caractéristiques du Tour du Bosphore

Parmi les endroits les plus importants que vous verrez pendant notre tour en yacht figurent le palais de Dolmabahçe, la mosquée d'Ortaköy, la forteresse de Rumeli et la forteresse d'Anadolu. Chaque point reflète l'histoire et la culture riches d'Istanbul.

• Capitaine et équipage professionnels
• Intérieurs de yacht confortables
• Équipements de sécurité
• Service de boissons et collations
• Possibilités de photos

Meilleurs Moments

Les moments les plus idéaux pour un tour du Bosphore sont les heures de coucher et de lever du soleil. Pendant ces heures, le paysage unique d'Istanbul est baigné de couleurs dorées et offre des opportunités magnifiques pour les passionnés de photographie.

"Un tour en yacht sur le Bosphore d'Istanbul sera l'une des expériences les plus inoubliables de votre vie."

Pendant notre tour, les guides experts qui vous accompagnent fourniront des informations détaillées sur chaque point et partageront les histoires cachées d'Istanbul.</textarea>
                        </div>
                        <div>
                            <label for="excerpt_fr" class="block text-sm font-medium text-gray-700 mb-1">Extrait</label>
                            <textarea id="excerpt_fr" name="excerpt_fr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Résumé court de l'article...">Expérience inoubliable de tour en yacht sur le Bosphore d'Istanbul. Découvrez la beauté unique du Bosphore avec des capitaines professionnels et vivez les beautés de la péninsule historique.</textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Paramètres SEO (Français)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_fr" class="block text-sm font-medium text-gray-700 mb-1">Titre Meta</label>
                                    <input type="text" id="meta_title_fr" name="meta_title_fr" value="Incroyable Tour en Yacht sur le Bosphore d'Istanbul - Tourisme Maritime" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Titre SEO...">
                                </div>
                                <div>
                                    <label for="meta_description_fr" class="block text-sm font-medium text-gray-700 mb-1">Description Meta</label>
                                    <textarea id="meta_description_fr" name="meta_description_fr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Description SEO...">Expérience inoubliable de tour en yacht sur le Bosphore d'Istanbul. Découvrez la beauté unique du Bosphore avec des capitaines professionnels.</textarea>
                                </div>
                                <div>
                                    <label for="slug_fr" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_fr" name="slug_fr" value="incroyable-tour-yacht-bosphore-istanbul" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="titre-article">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arapça İçerik -->
            <div id="content-ar" class="language-content hidden">
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        🇸🇦 المحتوى العربي
                    </h4>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="title_ar" class="block text-sm font-medium text-gray-700 mb-1">العنوان *</label>
                            <input type="text" id="title_ar" name="title_ar" value="جولة يخت مذهلة في مضيق البوسفور بإسطنبول" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="عنوان المقال..." required>
                        </div>
                        <div>
                            <label for="subtitle_ar" class="block text-sm font-medium text-gray-700 mb-1">العنوان الفرعي</label>
                            <input type="text" id="subtitle_ar" name="subtitle_ar" value="اكتشف جمال البوسفور الفريد واصنع ذكريات لا تنسى" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="وصف قصير...">
                        </div>
                        <div>
                            <label for="content_ar" class="block text-sm font-medium text-gray-700 mb-1">المحتوى *</label>
                            <textarea id="content_ar" name="content_ar" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="اكتب محتوى مقالك هنا..." required>البوسفور هو أحد أجمل الممرات المائية الطبيعية في العالم. هذا الممر المائي الرائع، الذي يفصل بين القارتين الأوروبية والآسيوية، يمتد من البحر الأسود إلى بحر مرمرة عبر قلب شبه الجزيرة التاريخية.

مميزات جولة البوسفور

من بين أهم الأماكن التي ستراها أثناء جولة اليخت قصر دولمة بهجة ومسجد أورتاكوي وقلعة روملي وقلعة أناضول. كل نقطة تعكس التاريخ والثقافة الغنية لإسطنبول.

• قبطان وطاقم محترفون
• داخلية يخت مريحة
• معدات الأمان
• خدمة المشروبات والوجبات الخفيفة
• إمكانيات التصوير

أفضل الأوقات

أفضل الأوقات لجولة البوسفور هي ساعات غروب وشروق الشمس. خلال هذه الساعات، يغمر المنظر الطبيعي الفريد لإسطنبول بألوان ذهبية ويوفر فرصاً رائعة لعشاق التصوير.

"جولة يخت في البوسفور بإسطنبول ستكون واحدة من أكثر التجارب التي لا تنسى في حياتك."

خلال جولتنا، المرشدون الخبراء الذين يرافقونك سيقدمون معلومات مفصلة عن كل نقطة ويشاركون قصص إسطنبول المخفية.</textarea>
                        </div>
                        <div>
                            <label for="excerpt_ar" class="block text-sm font-medium text-gray-700 mb-1">الملخص</label>
                            <textarea id="excerpt_ar" name="excerpt_ar" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="ملخص قصير للمقال...">تجربة جولة يخت لا تنسى في البوسفور بإسطنبول. اكتشف جمال البوسفور الفريد مع قباطنة محترفين وعش جمال شبه الجزيرة التاريخية.</textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">إعدادات SEO (العربية)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_ar" class="block text-sm font-medium text-gray-700 mb-1">عنوان Meta</label>
                                    <input type="text" id="meta_title_ar" name="meta_title_ar" value="جولة يخت مذهلة في مضيق البوسفور بإسطنبول - السياحة البحرية" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="عنوان SEO...">
                                </div>
                                <div>
                                    <label for="meta_description_ar" class="block text-sm font-medium text-gray-700 mb-1">وصف Meta</label>
                                    <textarea id="meta_description_ar" name="meta_description_ar" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="وصف SEO...">تجربة جولة يخت لا تنسى في البوسفور بإسطنبول. اكتشف جمال البوسفور الفريد مع قباطنة محترفين.</textarea>
                                </div>
                                <div>
                                    <label for="slug_ar" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_ar" name="slug_ar" value="gawlat-yacht-bosphorus-istanbul" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="عنوان-المقال">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rusça İçerik -->
            <div id="content-ru" class="language-content hidden">
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        🇷🇺 Русский Контент
                    </h4>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="title_ru" class="block text-sm font-medium text-gray-700 mb-1">Заголовок *</label>
                            <input type="text" id="title_ru" name="title_ru" value="Потрясающий тур на яхте по Босфору в Стамбуле" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Заголовок статьи..." required>
                        </div>
                        <div>
                            <label for="subtitle_ru" class="block text-sm font-medium text-gray-700 mb-1">Подзаголовок</label>
                            <input type="text" id="subtitle_ru" name="subtitle_ru" value="Откройте для себя уникальную красоту Босфора и создайте незабываемые воспоминания" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Краткое описание...">
                        </div>
                        <div>
                            <label for="content_ru" class="block text-sm font-medium text-gray-700 mb-1">Содержание *</label>
                            <textarea id="content_ru" name="content_ru" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Напишите содержание вашей статьи здесь..." required>Босфор - один из самых красивых естественных водных путей в мире. Этот великолепный водный путь, разделяющий европейский и азиатский континенты, простирается от Черного моря до Мраморного моря через сердце исторического полуострова.

Особенности тура по Босфору

Среди самых важных мест, которые вы увидите во время нашего тура на яхте, - дворец Долмабахче, мечеть Ортакёй, крепость Румели и крепость Анадолу. Каждая точка отражает богатую историю и культуру Стамбула.

• Профессиональный капитан и экипаж
• Комфортные интерьеры яхты
• Оборудование безопасности
• Сервис напитков и закусок
• Возможности для фотографирования

Лучшее время

Самое идеальное время для тура по Босфору - часы заката и рассвета. В эти часы уникальный пейзаж Стамбула купается в золотых красках и предлагает великолепные возможности для любителей фотографии.

"Тур на яхте по Босфору в Стамбуле будет одним из самых незабываемых впечатлений в вашей жизни."

Во время нашего тура эксперты-гиды, сопровождающие вас, предоставят подробную информацию о каждой точке и поделятся скрытыми историями Стамбула.</textarea>
                        </div>
                        <div>
                            <label for="excerpt_ru" class="block text-sm font-medium text-gray-700 mb-1">Отрывок</label>
                            <textarea id="excerpt_ru" name="excerpt_ru" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Краткое резюме статьи...">Незабываемый опыт тура на яхте по Босфору в Стамбуле. Откройте для себя уникальную красоту Босфора с профессиональными капитанами и испытайте красоты исторического полуострова.</textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">SEO Настройки (Русский)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_ru" class="block text-sm font-medium text-gray-700 mb-1">Meta Заголовок</label>
                                    <input type="text" id="meta_title_ru" name="meta_title_ru" value="Потрясающий тур на яхте по Босфору в Стамбуле - Морской туризм" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO заголовок...">
                                </div>
                                <div>
                                    <label for="meta_description_ru" class="block text-sm font-medium text-gray-700 mb-1">Meta Описание</label>
                                    <textarea id="meta_description_ru" name="meta_description_ru" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO описание...">Незабываемый опыт тура на яхте по Босфору в Стамбуле. Откройте для себя уникальную красоту Босфора с профессиональными капитанами.</textarea>
                                </div>
                                <div>
                                    <label for="slug_ru" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_ru" name="slug_ru" value="potryasayushchiy-tur-yakhta-bosfor-stambul" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="zagolovok-stati">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Genel Ayarlar -->
            <div class="border-t pt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Genel Ayarlar</h3>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Sol Kolon - Görsel ve Kategori -->
                    <div class="space-y-6">
                        <!-- Görsel Yükleme -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Kapak Görseli</h4>
                            <div class="space-y-3">
                                <div id="image_preview" class="block">
                                    <img id="preview_img" class="w-full h-32 object-cover rounded-lg" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Preview">
                                    <button type="button" id="remove_image" class="mt-2 w-full bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Görseli Kaldır</button>
                                </div>
                                <div id="upload_area" class="hidden border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="mt-2">
                                        <label for="cover_image" class="cursor-pointer bg-white rounded-md font-medium text-primary hover:text-secondary focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                            <span>Görsel Yükle</span>
                                            <input id="cover_image" name="cover_image" type="file" class="sr-only" accept="image/*">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori ve Etiketler -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Kategori ve Etiketler</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
                                    <select id="category" name="category" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option value="">Kategori seçin</option>
                                        <option value="yachting" selected>Yatçılık</option>
                                        <option value="tourism">Turizm</option>
                                        <option value="events">Etkinlikler</option>
                                        <option value="tips">İpuçları</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="tags" class="block text-sm font-medium text-gray-700 mb-1">Etiketler</label>
                                    <input type="text" id="tags" name="tags" value="İstanbul, Boğaz, Yat Turu, Turizm, Deniz" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Etiketleri virgülle ayırın...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Orta Kolon - Yayın Ayarları -->
                    <div class="space-y-6">
                        <!-- Yayın Ayarları -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Yayın Ayarları</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Durum *</label>
                                    <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option value="draft">Taslak</option>
                                        <option value="published" selected>Yayınla</option>
                                        <option value="archived">Arşivle</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-1">Yayın Tarihi</label>
                                    <input type="datetime-local" id="publish_date" name="publish_date" value="2024-03-15T14:30" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Yazar *</label>
                                    <select id="author" name="author" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option value="">Yazar seçin</option>
                                        <option value="1" selected>Ahmet Yılmaz</option>
                                        <option value="2">Ayşe Kaya</option>
                                        <option value="3">Mehmet Demir</option>
                                        <option value="4">Fatma Yıldız</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Dil Durumu -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Dil Durumu</h4>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇹🇷 Türkçe</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Tamamlandı</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇺🇸 English</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Tamamlandı</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇫🇷 Français</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Tamamlandı</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇸🇦 العربية</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Tamamlandı</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇷🇺 Русский</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Tamamlandı</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sağ Kolon - İstatistikler -->
                    <div class="space-y-6">
                        <!-- İstatistikler -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">İstatistikler</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Görüntülenme:</span>
                                    <span class="font-medium">1,247</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Beğeni:</span>
                                    <span class="font-medium">89</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Yorum:</span>
                                    <span class="font-medium">23</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Son Güncelleme:</span>
                                    <span class="font-medium">15 Mart 2024</span>
                                </div>
                            </div>
                        </div>
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
                    Değişiklikleri Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Görsel yükleme ve önizleme
    document.getElementById('cover_image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview_img').src = e.target.result;
                document.getElementById('image_preview').classList.remove('hidden');
                document.getElementById('upload_area').classList.add('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    // Görsel kaldırma
    document.getElementById('remove_image').addEventListener('click', function() {
        document.getElementById('cover_image').value = '';
        document.getElementById('image_preview').classList.add('hidden');
        document.getElementById('upload_area').classList.remove('hidden');
    });

    // Dil değiştirme fonksiyonu
    function showLanguage(lang) {
        // Tüm dil içeriklerini gizle
        document.querySelectorAll('.language-content').forEach(content => {
            content.classList.add('hidden');
        });
        
        // Tüm dil butonlarını pasif yap
        document.querySelectorAll('.language-tab').forEach(tab => {
            tab.classList.remove('active', 'bg-primary', 'text-white');
            tab.classList.add('bg-gray-200', 'text-gray-700');
        });
        
        // Seçilen dili göster
        document.getElementById('content-' + lang).classList.remove('hidden');
        
        // Seçilen dil butonunu aktif yap
        document.querySelector('[data-lang="' + lang + '"]').classList.add('active', 'bg-primary', 'text-white');
        document.querySelector('[data-lang="' + lang + '"]').classList.remove('bg-gray-200', 'text-gray-700');
    }

    // Başlıktan otomatik slug oluşturma (Türkçe)
    document.getElementById('title_tr').addEventListener('input', function() {
        const title = this.value;
        const slug = title.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        document.getElementById('slug_tr').value = slug;
    });

    // Meta başlık otomatik doldurma (Türkçe)
    document.getElementById('title_tr').addEventListener('input', function() {
        if (!document.getElementById('meta_title_tr').value) {
            document.getElementById('meta_title_tr').value = this.value;
        }
    });

    // Meta açıklama otomatik doldurma (Türkçe)
    document.getElementById('excerpt_tr').addEventListener('input', function() {
        if (!document.getElementById('meta_description_tr').value) {
            document.getElementById('meta_description_tr').value = this.value;
        }
    });
</script>
@endsection 