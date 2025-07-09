@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16 flex items-center justify-center">
    <div class="max-w-xl w-full mx-auto">
        <div class="bg-white rounded-3xl shadow-2xl p-10 flex flex-col items-center text-center">
            <div class="bg-primary/10 rounded-full p-5 mb-6">
                <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 10.5a8.38 8.38 0 01-.9 3.8c-.6 1.2-1.5 2.3-2.6 3.2-1.1.9-2.4 1.5-3.8 1.5s-2.7-.6-3.8-1.5c-1.1-.9-2-2-2.6-3.2A8.38 8.38 0 013 10.5C3 6.4 6.4 3 10.5 3S18 6.4 18 10.5z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">CharterXplore</h1>
            <h2 class="text-xl font-semibold text-primary mb-6">{{ __('contact.title') }}</h2>
            <div class="space-y-4 text-gray-700 text-lg w-full">
                <div class="flex items-center justify-center gap-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243A8 8 0 1116.657 7.343z"/></svg>
                    <span>İstanbul, Türkiye</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 14a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5a2 2 0 00-2 2v2zm14-14a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5a2 2 0 012-2h2zm0 14a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2v2z"/></svg>
                    <span>+90 555 123 45 67</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 12v1a4 4 0 01-8 0v-1m8 0a4 4 0 00-8 0m8 0V8a4 4 0 00-8 0v4"/></svg>
                    <span>info@charterxplore.com</span>
                </div>
            </div>
            <div class="mt-8">
                <img src="https://assets-global.website-files.com/5e9aa66fd3886c1ecf5b5c2b/63e0e2e2e2e2e2e2e2e2e2e2_map-istanbul-p-800.png" alt="İstanbul Map" class="rounded-2xl shadow w-full max-w-xs mx-auto">
            </div>
        </div>
    </div>
</div>
@endsection 