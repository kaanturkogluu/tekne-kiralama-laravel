@extends('layouts.app')

@section('content')
<div class="bg-gray-50 max-h-screen py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ url('/blog') }}" class="inline-flex items-center text-primary hover:underline mb-6">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            {{ __('blog.back_to_list') }}
        </a>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ __('blog.sample_title_1') }}</h1>
                <div class="flex items-center space-x-4 mb-4">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <div class="text-sm text-gray-700">{{ __('blog.by') }} Ali Yılmaz</div>
                        <div class="text-xs text-gray-400">12 Haziran 2024</div>
                    </div>
                </div>
                <div class="prose max-w-none text-gray-800">
                    <p>{{ __('blog.sample_excerpt_1') }}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dictum, urna at dictum cursus, enim erat dictum erat, nec dictum enim enim nec enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam euismod, urna eu tincidunt consectetur, nisi nisl aliquam enim, nec aliquam nisi nisl euismod enim.</p>
                    <h2>Başlık 2</h2>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.</p>
                    <ul>
                        <li>Yat kiralama sürecinde dikkat edilmesi gerekenler</li>
                        <li>Rezervasyon ipuçları</li>
                        <li>Güvenlik önlemleri</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 