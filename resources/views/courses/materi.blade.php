@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-6 lg:px-20">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $material['title'] }}</h1>
        <p class="text-lg text-gray-600">Pelajari lebih dalam materi ini untuk meningkatkan pemahaman Anda.</p>
    </div>

    <!-- Material Content -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 mb-12">
        <div class="p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Materi Detail : </h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                {{ $material['content'] }}
            </p>
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-center">
        <a href="{{ route('courses.index') }}" class="inline-block px-8 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-full font-medium transition duration-300 transform hover:scale-105">
            Kembali ke Daftar Kursus
        </a>
    </div>
</div>
@endsection
