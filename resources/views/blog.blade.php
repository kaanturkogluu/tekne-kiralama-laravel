@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 md:mb-0">{{ __('blog.title') }}</h1>
            <form class="flex flex-col md:flex-row gap-2 md:gap-4 w-full md:w-auto">
                <input type="text" name="q" placeholder="{{ __('blog.search_placeholder') }}" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary w-full md:w-64">
                <button type="submit" class="bg-primary hover:bg-secondary text-white font-medium px-6 py-2 rounded-md transition duration-150">{{ __('blog.search') }}</button>
            </form>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example Blog Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blog Post 1">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ __('blog.sample_title_1') }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ __('blog.sample_excerpt_1') }}</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <span class="text-xs text-gray-400">{{ __('blog.by') }} CharterXplore</span>
                        <span class="text-xs text-gray-400">12.06.2024</span>
                    </div>
                </div>
            </div>
            <!-- Example Blog Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blog Post 2">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ __('blog.sample_title_2') }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ __('blog.sample_excerpt_2') }}</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <span class="text-xs text-gray-400">{{ __('blog.by') }} CharterXplore</span>
                        <span class="text-xs text-gray-400">05.05.2024</span>
                    </div>
                </div>
            </div>
            <!-- Example Blog Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out flex flex-col">
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blog Post 3">
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ __('blog.sample_title_3') }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ __('blog.sample_excerpt_3') }}</p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <span class="text-xs text-gray-400">{{ __('blog.by') }} CharterXplore</span>
                        <span class="text-xs text-gray-400">20.04.2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 