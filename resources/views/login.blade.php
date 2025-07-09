@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-[70vh] bg-gray-50">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-primary mb-6">Giriş Yap</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-2">E-posta Adresi</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="ornek@mail.com" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 mb-2">Şifre</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="••••••••" required>
            </div>
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <input type="checkbox" id="remember" name="remember" class="mr-1">
                    <label for="remember" class="text-sm text-gray-600">Beni Hatırla</label>
                </div>
                <a href="#" class="text-sm text-primary hover:underline">Şifremi Unuttum?</a>
            </div>
            <button type="submit" class="w-full bg-primary hover:bg-secondary text-white font-semibold py-2 rounded-md transition duration-150">Giriş Yap</button>
        </form>
        <div class="mt-6 text-center">
            <span class="text-gray-600">Hesabınız yok mu?</span>
            
        </div>
        <div class="mt-6">
            <div class="flex items-center justify-center space-x-2 mb-2">
                <span class="text-gray-400 text-sm">veya</span>
            </div>
            <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 transition mb-2">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.35 11.1h-9.18v2.92h5.27c-.23 1.23-1.39 3.6-5.27 3.6-3.18 0-5.78-2.63-5.78-5.86s2.6-5.86 5.78-5.86c1.81 0 3.03.77 3.73 1.43l2.54-2.47C16.13 3.9 14.29 3 12.17 3 6.88 3 2.5 7.42 2.5 12.7c0 5.28 4.38 9.7 9.67 9.7 5.29 0 9.67-4.42 9.67-9.7 0-.65-.07-1.28-.19-1.87z"/></svg>
                Google ile Giriş Yap
            </button>
            <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 transition">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.525 6.275c-1.15-1.15-2.675-1.85-4.3-1.85-1.625 0-3.15.7-4.3 1.85-1.15 1.15-1.85 2.675-1.85 4.3 0 1.625.7 3.15 1.85 4.3 1.15 1.15 2.675 1.85 4.3 1.85 1.625 0 3.15-.7 4.3-1.85 1.15-1.15 1.85-2.675 1.85-4.3 0-1.625-.7-3.15-1.85-4.3zm-4.3 9.025c-2.6 0-4.725-2.125-4.725-4.725s2.125-4.725 4.725-4.725 4.725 2.125 4.725 4.725-2.125 4.725-4.725 4.725z"/></svg>
                Apple ile Giriş Yap
            </button>
        </div>
    </div>
</div>
@endsection 