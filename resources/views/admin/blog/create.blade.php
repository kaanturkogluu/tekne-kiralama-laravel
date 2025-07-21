@extends('admin.layouts.app')

@section('page-title', 'Yeni Blog Yazısı')

@section('content')
<div class="space-y-6">
    <!-- Başlık ve Geri Butonu -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Yeni Blog Yazısı</h1>
            <p class="text-gray-600">Sisteme yeni blog yazısı ekleyin (5 dil desteği)</p>
        </div>
        <a href="{{ url('/admin/blog') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Geri Dön
        </a>
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
                            <input type="text" id="title_tr" name="title_tr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog yazısı başlığı..." required>
                        </div>

                        <!-- Alt Başlık -->
                        <div>
                            <label for="subtitle_tr" class="block text-sm font-medium text-gray-700 mb-1">Alt Başlık</label>
                            <input type="text" id="subtitle_tr" name="subtitle_tr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Kısa açıklama...">
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
                                <textarea id="content_tr" name="content_tr" rows="12" class="w-full border-0 focus:ring-0 resize-none p-4" placeholder="Blog yazısı içeriğini buraya yazın..." required></textarea>
                            </div>
                        </div>

                        <!-- Özet -->
                        <div>
                            <label for="excerpt_tr" class="block text-sm font-medium text-gray-700 mb-1">Özet</label>
                            <textarea id="excerpt_tr" name="excerpt_tr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog yazısının kısa özeti..."></textarea>
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
                                    <input type="text" id="meta_title_tr" name="meta_title_tr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO için başlık...">
                                </div>
                                <div>
                                    <label for="meta_description_tr" class="block text-sm font-medium text-gray-700 mb-1">Meta Açıklama</label>
                                    <textarea id="meta_description_tr" name="meta_description_tr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO için açıklama..."></textarea>
                                </div>
                                <div>
                                    <label for="slug_tr" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_tr" name="slug_tr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="blog-yazisi-basligi">
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
                            <input type="text" id="title_en" name="title_en" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Blog post title..." required>
                        </div>
                        <div>
                            <label for="subtitle_en" class="block text-sm font-medium text-gray-700 mb-1">Subtitle</label>
                            <input type="text" id="subtitle_en" name="subtitle_en" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Short description...">
                        </div>
                        <div>
                            <label for="content_en" class="block text-sm font-medium text-gray-700 mb-1">Content *</label>
                            <textarea id="content_en" name="content_en" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Write your blog content here..." required></textarea>
                        </div>
                        <div>
                            <label for="excerpt_en" class="block text-sm font-medium text-gray-700 mb-1">Excerpt</label>
                            <textarea id="excerpt_en" name="excerpt_en" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Short summary of the blog post..."></textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">SEO Settings (English)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_en" class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label>
                                    <input type="text" id="meta_title_en" name="meta_title_en" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO title...">
                                </div>
                                <div>
                                    <label for="meta_description_en" class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                                    <textarea id="meta_description_en" name="meta_description_en" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO description..."></textarea>
                                </div>
                                <div>
                                    <label for="slug_en" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_en" name="slug_en" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="blog-post-title">
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
                            <input type="text" id="title_fr" name="title_fr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Titre de l'article..." required>
                        </div>
                        <div>
                            <label for="subtitle_fr" class="block text-sm font-medium text-gray-700 mb-1">Sous-titre</label>
                            <input type="text" id="subtitle_fr" name="subtitle_fr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Description courte...">
                        </div>
                        <div>
                            <label for="content_fr" class="block text-sm font-medium text-gray-700 mb-1">Contenu *</label>
                            <textarea id="content_fr" name="content_fr" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Écrivez le contenu de votre article ici..." required></textarea>
                        </div>
                        <div>
                            <label for="excerpt_fr" class="block text-sm font-medium text-gray-700 mb-1">Extrait</label>
                            <textarea id="excerpt_fr" name="excerpt_fr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Résumé court de l'article..."></textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Paramètres SEO (Français)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_fr" class="block text-sm font-medium text-gray-700 mb-1">Titre Meta</label>
                                    <input type="text" id="meta_title_fr" name="meta_title_fr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Titre SEO...">
                                </div>
                                <div>
                                    <label for="meta_description_fr" class="block text-sm font-medium text-gray-700 mb-1">Description Meta</label>
                                    <textarea id="meta_description_fr" name="meta_description_fr" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Description SEO..."></textarea>
                                </div>
                                <div>
                                    <label for="slug_fr" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_fr" name="slug_fr" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="titre-article">
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
                            <input type="text" id="title_ar" name="title_ar" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="عنوان المقال..." required>
                        </div>
                        <div>
                            <label for="subtitle_ar" class="block text-sm font-medium text-gray-700 mb-1">العنوان الفرعي</label>
                            <input type="text" id="subtitle_ar" name="subtitle_ar" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="وصف قصير...">
                        </div>
                        <div>
                            <label for="content_ar" class="block text-sm font-medium text-gray-700 mb-1">المحتوى *</label>
                            <textarea id="content_ar" name="content_ar" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="اكتب محتوى مقالك هنا..." required></textarea>
                        </div>
                        <div>
                            <label for="excerpt_ar" class="block text-sm font-medium text-gray-700 mb-1">الملخص</label>
                            <textarea id="excerpt_ar" name="excerpt_ar" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="ملخص قصير للمقال..."></textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">إعدادات SEO (العربية)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_ar" class="block text-sm font-medium text-gray-700 mb-1">عنوان Meta</label>
                                    <input type="text" id="meta_title_ar" name="meta_title_ar" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="عنوان SEO...">
                                </div>
                                <div>
                                    <label for="meta_description_ar" class="block text-sm font-medium text-gray-700 mb-1">وصف Meta</label>
                                    <textarea id="meta_description_ar" name="meta_description_ar" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary text-right" placeholder="وصف SEO..."></textarea>
                                </div>
                                <div>
                                    <label for="slug_ar" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_ar" name="slug_ar" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="عنوان-المقال">
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
                            <input type="text" id="title_ru" name="title_ru" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Заголовок статьи..." required>
                        </div>
                        <div>
                            <label for="subtitle_ru" class="block text-sm font-medium text-gray-700 mb-1">Подзаголовок</label>
                            <input type="text" id="subtitle_ru" name="subtitle_ru" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Краткое описание...">
                        </div>
                        <div>
                            <label for="content_ru" class="block text-sm font-medium text-gray-700 mb-1">Содержание *</label>
                            <textarea id="content_ru" name="content_ru" rows="12" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Напишите содержание вашей статьи здесь..." required></textarea>
                        </div>
                        <div>
                            <label for="excerpt_ru" class="block text-sm font-medium text-gray-700 mb-1">Отрывок</label>
                            <textarea id="excerpt_ru" name="excerpt_ru" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Краткое резюме статьи..."></textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">SEO Настройки (Русский)</h4>
                            <div class="space-y-3">
                                <div>
                                    <label for="meta_title_ru" class="block text-sm font-medium text-gray-700 mb-1">Meta Заголовок</label>
                                    <input type="text" id="meta_title_ru" name="meta_title_ru" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO заголовок...">
                                </div>
                                <div>
                                    <label for="meta_description_ru" class="block text-sm font-medium text-gray-700 mb-1">Meta Описание</label>
                                    <textarea id="meta_description_ru" name="meta_description_ru" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="SEO описание..."></textarea>
                                </div>
                                <div>
                                    <label for="slug_ru" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                                    <input type="text" id="slug_ru" name="slug_ru" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="zagolovok-stati">
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
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
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
                                <div id="image_preview" class="hidden">
                                    <img id="preview_img" class="w-full h-32 object-cover rounded-lg" alt="Preview">
                                    <button type="button" id="remove_image" class="mt-2 w-full bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Görseli Kaldır</button>
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
                                        <option value="yachting">Yatçılık</option>
                                        <option value="tourism">Turizm</option>
                                        <option value="events">Etkinlikler</option>
                                        <option value="tips">İpuçları</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="tags" class="block text-sm font-medium text-gray-700 mb-1">Etiketler</label>
                                    <input type="text" id="tags" name="tags" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Etiketleri virgülle ayırın...">
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
                                        <option value="draft" selected>Taslak</option>
                                        <option value="published">Yayınla</option>
                                        <option value="archived">Arşivle</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-1">Yayın Tarihi</label>
                                    <input type="datetime-local" id="publish_date" name="publish_date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Yazar *</label>
                                    <select id="author" name="author" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                                        <option value="">Yazar seçin</option>
                                        <option value="1">Ahmet Yılmaz</option>
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
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Beklemede</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇫🇷 Français</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Beklemede</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇸🇦 العربية</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Beklemede</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">🇷🇺 Русский</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Beklemede</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sağ Kolon - Hızlı İşlemler -->
                    <div class="space-y-6">
                        <!-- Hızlı İşlemler -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Hızlı İşlemler</h4>
                            <div class="space-y-3">
                                <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Tüm Dilleri Tamamla
                                </button>
                                <button type="button" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Önizle
                                </button>
                                <button type="button" class="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md font-medium transition duration-150 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    Favorilere Ekle
                                </button>
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
                    Blog Yazısını Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

<script>
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

    // Görsel yükleme ve önizleme
    document.getElementById('cover_image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview_img').src = e.target.result;
                document.getElementById('image_preview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    // Görsel kaldırma
    document.getElementById('remove_image').addEventListener('click', function() {
        document.getElementById('cover_image').value = '';
        document.getElementById('image_preview').classList.add('hidden');
    });

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